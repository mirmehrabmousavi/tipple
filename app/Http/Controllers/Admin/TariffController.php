<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Tariff;
use Illuminate\Http\Request;

class TariffController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        $tariffs=Tariff::latest()->paginate(10);
        return view('admin.tariff.index',compact('tariffs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.tariff.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        Tariff::create([
            'name'=>$request['name'],
            'price'=>$request['price'],
            'host'=>$request['host'],
            'domain'=>$request['domain'],
            'support'=>$request['support'],
            'extra1'=>$request['extra1'],
            'extra2'=>$request['extra2'],
        ]);
        return redirect(route('tariffs.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Slider  $tariffs
     * @return \Illuminate\Http\Response
     */
    public function show(Tariff $tariffs)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Slider  $tariff
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function edit(Tariff $tariff)
    {
        return view('admin.tariff.edit',compact('tariff'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Slider  $tariff
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, Tariff $tariff)
    {
        $data=$request->all();
        $tariff->update($data);
        return redirect(route('tariffs.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Slider  $tariff
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Routing\Redirector
     */
    public function destroy(Tariff $tariff)
    {
        $tariff->delete();
        return redirect(route('tariffs.index'));
    }
}
