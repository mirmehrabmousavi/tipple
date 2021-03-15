<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Motivation;
use Illuminate\Http\Request;

class MotivationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        $motivations=Motivation::latest()->paginate(10);
        return view('admin.motivation.index',compact('motivations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.motivation.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        Motivation::create([
            'title'=>$request['title'],
            'description'=>$request['description'],
        ]);
        return redirect(route('motivations.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Slider  $motivation
     * @return \Illuminate\Http\Response
     */
    public function show(Motivation $motivation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function edit(Motivation $motivation)
    {
        return view('admin.motivation.edit',compact('motivation'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Slider  $motivation
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, Motivation $motivation)
    {
        $data=$request->all();
        $motivation->update($data);
        return redirect(route('motivations.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Slider  $motivation
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Routing\Redirector
     */
    public function destroy(Motivation $motivation)
    {
        $motivation->delete();
        return redirect(route('motivations.index'));
    }
}
