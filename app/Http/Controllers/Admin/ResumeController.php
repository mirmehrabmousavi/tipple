<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Resume;
use Illuminate\Http\Request;

class ResumeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        $resumes=Resume::latest()->paginate(10);
        return view('admin.resume.index',compact('resumes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.resume.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        $file=$request['image'];
        $pic=$this->ImageUploaderPath($file,'uploads/resumes/');

        Resume::create([
            'title'=>$request['title'],
            'description'=>$request['description'],
            'image'=>$pic,
        ]);
        return redirect(route('resumes.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Slider  $resume
     * @return \Illuminate\Http\Response
     */
    public function show(Resume $resume)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Slider  $resume
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function edit(Resume $resume)
    {
        return view('admin.resume.edit',compact('resume'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Slider  $resume
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, Resume $resume)
    {
        if($request['image']) {
            $file=$request['image'];
            unlink($resume->image) or die('Error');
            $img=$this->ImageUploaderPath($file,'uploads/resumes/');
        }else{
            $img=$resume->image;
        }
        $data=$request->all();
        $data['image']=$img;
        $resume->update($data);
        return redirect(route('resumes.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Slider  $resume
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Routing\Redirector
     */
    public function destroy(Resume $resume)
    {
        $resume->delete();
        unlink($resume->image) or die('Error');
        return redirect(route('resumes.index'));
    }
}
