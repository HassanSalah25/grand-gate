<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Media;
use App\Models\Product;
use App\Models\ProductTranslation;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $products = Product::all();
        return view('dashboard.product.list',compact('products'));
    }

    public function search(Request $request)
    {
        //
        $products = ProductTranslation::with('product')
            ->where('name','LIKE','%'.$request->search_query.'%')
            ->get()->pluck('product');

        return view('dashboard.product.list',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('dashboard.product.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $images = [];
        $product = Product::create([
            'name' => $request->name,
            'description' => $request->description,
        ]);
        ProductTranslation::create([
            'product_id' => $product->id,
            'lang' => $request->lang,
            'name' => $request->name,
            'description' => $request->description
        ]);

        if($request->hasFile('image')){

            $upload = new Media;
            $upload->file_original_name = null;
            $arr = explode('.', $request->file('image')->getClientOriginalName());

            for($i=0; $i < count($arr)-1; $i++){
                if($i == 0){
                    $upload->file_original_name .= $arr[$i];
                }
                else{
                    $upload->file_original_name .= ".".$arr[$i];
                }
            }
            $upload->file_name = $request->file('image')->store('uploads/all','public');

            $upload->extension = $request->file('image')->getClientOriginalExtension();
            $upload->type = 'image';
            $upload->file_size = $request->file('image')->getSize();
            $upload->save();

            $product->update([
                'img' => $upload->id,
            ]);
        }
        if($request->hasFile('images'))
        {
            foreach ($request->images as $image) {

                $upload = new Media;
                $upload->file_original_name = null;
                $arr = explode('.', $image->getClientOriginalName());

                for($i=0; $i < count($arr)-1; $i++){
                    if($i == 0){
                        $upload->file_original_name .= $arr[$i];
                    }
                    else{
                        $upload->file_original_name .= ".".$arr[$i];
                    }
                }
                $upload->file_name = $image->store('uploads/all','public');

                $upload->extension = $image->getClientOriginalExtension();
                $upload->type = 'image';
                $upload->file_size = $image->getSize();
                $upload->save();
                array_push($images,$upload->id);
            }
            $product->update([
                'imgs'=>$images
            ]);
        }
        return redirect()->route('product.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $product = Product::find($id);
        return view('dashboard.product.edit',compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
        $images = [];
        $product = Product::find($id);
        if($request->lang == 'en')
        {
            $product->update([
                'name' => $request->name,
                'description' => $request->description,
            ]);
        }
        $product_tarnslate =  $product->product_translations->where('lang', $request->lang)->first();
        if($product_tarnslate)
        {
            $product_tarnslate->update([
                'name' => $request->name,
                'description' => $request->description
            ]);
        }
        else
        {
            ProductTranslation::create([
                'product_id' => $product->id,
                'lang' => $request->lang,
                'name' => $request->name,
                'description' => $request->description
            ]);
        }

        if($request->hasFile('image')){

            $upload = new Media;
            $upload->file_original_name = null;
            $arr = explode('.', $request->file('image')->getClientOriginalName());

            for($i=0; $i < count($arr)-1; $i++){
                if($i == 0){
                    $upload->file_original_name .= $arr[$i];
                }
                else{
                    $upload->file_original_name .= ".".$arr[$i];
                }
            }
            $upload->file_name = $request->file('image')->store('uploads/all','public');

            $upload->extension = $request->file('image')->getClientOriginalExtension();
            $upload->type = 'image';
            $upload->file_size = $request->file('image')->getSize();
            $upload->save();

            $product->update([
                'img' => $upload->id,
            ]);
        }
        if($request->hasFile('images'))
        {
            foreach ($request->images as $image) {

                $upload = new Media;
                $upload->file_original_name = null;
                $arr = explode('.', $image->getClientOriginalName());

                for($i=0; $i < count($arr)-1; $i++){
                    if($i == 0){
                        $upload->file_original_name .= $arr[$i];
                    }
                    else{
                        $upload->file_original_name .= ".".$arr[$i];
                    }
                }
                $upload->file_name = $image->store('uploads/all','public');

                $upload->extension = $image->getClientOriginalExtension();
                $upload->type = 'image';
                $upload->file_size = $image->getSize();
                $upload->save();
                array_push($images,$upload->id);
            }
            $product->update([
                'imgs'=>$images
            ]);
        }
        return redirect()->route('product.index');
    }

    /**
     * Remove the specified resource from storage.
     */
        public function destroy($id)
    {
        //
        $product = Product::find($id);
        ProductTranslation::where('product_id', $id)->delete();
        $product->delete();

        return redirect()->route('product.index');
    }
}
