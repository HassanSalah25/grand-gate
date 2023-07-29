<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\BlogCategory;
use App\Models\BlogTranslation;
use App\Models\Media;
use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $blogs = Blog::all();
        return view('dashboard.blog.list',compact('blogs'));
    }

    public function search(Request $request)
    {
        //
        $blogs = BlogTranslation::with('blogs')->where('title','LIKE','%'.$request->search_query.'%')->get()->pluck('blogs');

        return view('dashboard.blog.list',compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('dashboard.blog.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        if($request->name && $request->content_en)
            $blog = Blog::create([
                'title' => $request->name,
                'content_en' => $request->content_en,
                'canonical' => $request->canonical,

            ]);
        else
            $blog = Blog::create([
                'title' => $request->name_ar,
                'content_en' => $request->content_ar,
                'canonical' => $request->canonical,

            ]);

        BlogTranslation::create([
            'blog_id' => $blog->id,
            'lang' => 'en',
            'title' => $request->name,
            'content' => $request->content_en,
            'slug' => $request->slug,
            'new_slug' => $request->new_slug,
            'meta_title' => $request->meta_title,
            'meta_description' => $request->meta_description,
            'meta_keyword' => $request->meta_keyword,
            'alt_image' => $request->alt_image,
        ]);

        BlogTranslation::create([
            'blog_id' => $blog->id,
            'lang' => 'ar',
            'title' => $request->name_ar,
            'content' => $request->content_ar,
            'slug' => $request->slug_ar,
            'new_slug' => $request->new_slug_ar,
            'meta_title' => $request->meta_title_ar,
            'meta_description' => $request->meta_description_ar,
            'meta_keyword' => $request->meta_keyword_ar,
            'alt_image' => $request->alt_image_ar,
        ]);

//        'blog_category_id' => $request->blog_category_id,

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

            $blog->update([
                'img' => $upload->id,
            ]);
        }

        return redirect()->route('blog.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $blog = Blog::find($id);
        return view('dashboard.blog.edit',compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //

        $blog = Blog::find($id);
        $blog->update([
            'title' => $request->name,
            'content_en' => $request->content_en,
            'canonical' => $request->canonical,
        ]);

        $blog_ar =  $blog->blog_translations->where('lang', 'ar')->first();
        $blog_en =  $blog->blog_translations->where('lang', 'en')->first();
        if($blog_ar)
        {
            $blog_ar->update([
                'title' => $request->name_ar,
                'content' => $request->content_ar,
                'slug' => $request->slug_ar,
                'new_slug' => $request->new_slug_ar,
                'meta_title' => $request->meta_title_ar,
                'meta_description' => $request->meta_description_ar,
                'meta_keyword' => $request->meta_keyword_ar,
                'alt_image' => $request->alt_image_ar,
            ]);
        }

        if($blog_en)
        {
            $blog_en->update([
                'title' => $request->name,
                'content' => $request->content_en,
                'slug' => $request->slug,
                'new_slug' => $request->new_slug,
                'meta_title' => $request->meta_title,
                'meta_description' => $request->meta_description,
                'meta_keyword' => $request->meta_keyword,
                'alt_image' => $request->alt_image,
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

            $blog->update([
                'img' => $upload->id,
            ]);
        }

        return redirect()->route('blog.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $blog = Blog::find($id);
        $blog->delete();

        return redirect()->route('blog.index');
    }
}
