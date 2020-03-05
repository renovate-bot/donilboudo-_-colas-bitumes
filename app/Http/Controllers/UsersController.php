<?php

use App\Imports\UsersImport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;

class UsersController extends Controller 
{
    public function import() 
    {
        Excel::import(new UsersImport, 'users.xlsx');
        //Excel::import(new UsersImport, request()->file('your_file'));
        
        return redirect('/')->with('success', 'All good!');
    }
}