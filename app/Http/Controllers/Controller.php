<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function ImageUploaderPath($file,$paths)
    {
        if(!empty($file)){
            $filename=$file->getClientOriginalName();
            $path=public_path($paths);
            $file->move($path,$filename);
            return $paths.$filename;
        }
    }
    public function ImageUploaderPathTime($file,$paths)
    {
        if(!empty($file)){
            $filename=time().'_'.$file->getClientOriginalName();
            $path=public_path($paths);
            $file->move($path,$filename);
            return $paths.$filename;
        }
    }

    public function ImageUploaderPathRand($file,$paths)
    {
        if(!empty($file)){
            $filename=rand(1000,9999).'_'.$file->getClientOriginalName();
            $path=public_path($paths);
            $file->move($path,$filename);
            return $paths.$filename;
        }
    }

}
