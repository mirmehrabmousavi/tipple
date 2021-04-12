<?php

namespace App\Http\Controllers;
use App\Models\Blog;
use App\Models\Motivation;
use App\Models\Slider;
use App\Models\Tariff;
use App\Models\Resume;

class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        $slider=Slider::get();
        $motivation=Motivation::get();
        $blog=Blog::get();
        $tariff=Tariff::all()->take(3);//limit to show 3 tariff
        $resume=Resume::get();
        return view('index.index',compact('motivation','blog','tariff','resume','slider'));
    }
}
