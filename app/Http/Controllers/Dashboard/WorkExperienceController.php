<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use App\Models\Media;
use App\Models\WorkExperience;
use App\Models\WorkExperienceTranslation;
use Illuminate\Http\Request;

class WorkExperienceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $workexps = WorkExperience::all();
        return view('dashboard.work_experience.list',compact('workexps'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('dashboard.work_experience.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        //
        $we = WorkExperience::create([
            'name' => $request->name,
            'description' => $request->description,
        ]);
        WorkExperienceTranslation::create([
            'work_experience_id' => $we->id,
            'lang' => $request->lang,
            'name' => $request->name,
            'description' => $request->description
        ]);
        $images = [];
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
            $we->update([
                'img'=>$images
            ]);
        }

        return redirect()->route('work_experience.index');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $we = WorkExperience::find($id);
        return view('dashboard.work_experience.edit',compact('we'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //

        $we = WorkExperience::find($id);
        $we->update([
            'name' => $request->name,
            'description' => $request->description,
        ]);
        $we_tarnslate =  $we->workexperience_translation->where('lang', $request->lang)->first();
        if($we_tarnslate)
        {
            $we_tarnslate->update([
                'name' => $request->name,
                'description' => $request->description
            ]);
        }
        else
        {
            WorkExperienceTranslation::create([
                'work_experience_id' => $we->id,
                'lang' => $request->lang,
                'name' => $request->name,
                'description' => $request->description
            ]);
        }
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
        $we = WorkExperience::find($id);
        $we->delete();

        return redirect()->route('work_experience.index');
    }
}
