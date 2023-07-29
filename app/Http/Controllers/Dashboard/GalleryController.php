<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use App\Models\Media;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $galleries = Gallery::all();
        return view('dashboard.gallery.list',compact('galleries'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('dashboard.gallery.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $gallery = Gallery::create([
            'name' => $request->name,
            'description' => $request->description,
        ]);
        $images = [];
        if($request->hasFile('image'))
        {
            foreach ($request->image as $image) {

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
            $gallery->update([
                'imgs'=>$images
            ]);
        }

        return redirect()->route('gallery.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Gallery $gallery)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $gallery = Gallery::find($id);
        return view('dashboard.gallery.edit',compact('gallery'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
        $we = Gallery::find($id);
        $we->update([
            'name' => $request->name,
            'description' => $request->description,
        ]);
        $images = [];
        if($request->hasFile('image'))
        {
            foreach ($request->image as $image) {

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
            $we->update([
                'imgs'=>$images
            ]);
        }

        return redirect()->route('work_experience.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        $gallery = Gallery::find($id);
        $gallery->delete();

        return redirect()->route('gallery.index');
    }
}
