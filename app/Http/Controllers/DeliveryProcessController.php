<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Supplier;

class DeliveryProcessController extends Controller
{
    public function index()
    {
        $suppliers = Supplier::all();
        return view('deliveryprocess.index')->with('suppliers', $suppliers);
    }
}
