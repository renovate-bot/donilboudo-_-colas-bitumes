<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Supplier;
use App\Imports\BlayeBLImport;
use Maatwebsite\Excel\Facades\Excel;


class UploadFileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $suppliers = Supplier::all();
        return view('fileutil.uploadfile', compact('suppliers'));
    }

    //TODO
    public function uploadfile(Request $request) {
        if ($request->hasFile('blfile')) {
            $extension = $request->blfile->extension();
            $filename = "BL".date("Ymd").date("his").".".$extension;
            $path = $request->blfile->storeAs('uploads', $filename);
            $collection = Excel::toCollection(new BlayeBLImport, $path);
            $array = Excel::toArray(new BlayeBLImport, $path);
            //echo $collection;
        }

        return $this->index();
    }
}
