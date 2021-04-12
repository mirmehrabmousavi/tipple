<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Purchase;
use Illuminate\Http\Request;

class PurchaseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        $purchases=Purchase::latest()->paginate(10);
        return view('admin.purchase.index',compact('purchases'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function create()
    {
        return view('index.purchase');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        Purchase::create([
            'name'=>$request['name'],
            'number'=>$request['number'],
            'email'=>$request['email'],
            'title'=>$request['title'],
            'description'=>$request['description'],
        ]);

        mail('info@tippler.ir','Purchase',"<h1>$request[name]</h1> <br> <h2>$request[number]</h2> <br> <h2>$request[email]</h2> <br><br> <h2>$request[title]</h2> <br> <p>$request[description]</p>");
        return back();
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Slider  $purchase
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Routing\Redirector
     */
    public function destroy(Purchase $purchase)
    {
        $purchase->delete();
        return redirect(route('purchases.index'));
    }
}
