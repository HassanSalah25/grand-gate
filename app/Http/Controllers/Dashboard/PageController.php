<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Media;
use Illuminate\Http\Request;
use App\Models\PageTranslation;
use App\Models\Page;
use function App\Http\Controllers\flash;


class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.pages.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $page = new Page;
        $page->title = $request->title;
            $page->slug             = preg_replace('/[^A-Za-z0-9\-]/', '', str_replace(' ', '-', $request->slug));
            $page->type             = "about_us_page";
            $page->content          = $request->contents;
            $page->meta_title       = $request->meta_title;
            $page->meta_description = $request->meta_description;
            $page->keywords         = $request->keywords;
            $page->meta_image       = $request->meta_image;
            $page->save();



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

                $page->update([
                    'img' => $upload->id,
                ]);
            }
            $page_translation           = PageTranslation::firstOrNew(['lang' => 'ar', 'page_id' => $page->id]);
            $page_translation->title    = $request->title;
            $page_translation->content  = $request->contents;
            $page_translation->save();
            $page_translation           = PageTranslation::firstOrNew(['lang' => 'en', 'page_id' => $page->id]);
            $page_translation->title    = $request->title;
            $page_translation->content  = $request->contents;
            $page_translation->save();

        return redirect()->route('pages.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   public function edit(Request $request, $id)
   {
		$lang = $request->lang;
		$page_name = $request->page;
		$page = Page::where('id', $id)->first();
		if($page != null){
			if ($page_name == 'home') {
				return view('dashboard.pages.home_page_edit', compact('page','lang'));
			}
			else{
				return view('dashboard.pages.edit', compact('page','lang'));
			}
		}
		abort(404);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $page = Page::findOrFail($id);

        if($request->lang == 'en'){
          $page->title          = $request->title;
          $page->content        = $request->contents;
        }

        $page->meta_title       = $request->meta_title;
        $page->meta_description = $request->meta_description;
        $page->keywords         = $request->keywords;
        $page->meta_image       = $request->meta_image;
        $page->save();

        $page_ar =  $page->page_translations->where('lang', 'ar')->first();
        $page_en =  $page->page_translations->where('lang', 'en')->first();
        if($page_ar)
        {
            $page_ar->update([
                'title' => $request->title_ar,
                'content' => $request->contents_ar,
            ]);
        }
        if($page_en)
        {
            $page_ar->update([
                'title' => $request->title,
                'content' => $request->contents,
            ]);
        }

        return redirect()->route('pages.index');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $page = Page::findOrFail($id);
        foreach ($page->page_translations as $key => $page_translation) {
            $page_translation->delete();
        }

        if(Page::destroy($id)){
            return redirect()->back();
        }
        return back();
    }

    public function show_custom_page($slug){
        $page = Page::where('slug', $slug)->first();
        if($page != null){
            return view('frontend.custom_page', compact('page'));
        }
        abort(404);
    }
}
