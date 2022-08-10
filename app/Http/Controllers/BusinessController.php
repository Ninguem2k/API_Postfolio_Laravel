<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Business;

class BusinessController extends Controller
{
    public function index()
    {
        $businesSeall = Business::all();
        $businesseFind = Business::find(5);
        $businesseWhereGet = Business::where('name', 'like', '%m%')->get();
        $businesseWhereFirst = Business::where('name', 'like', '%m%')->first();
        $businesseWhereFirst = Business::where('name', 'like', '%m%')->first();
        $businesse2WhereFirst = Business::where('name', 'like', '%m%')->orwhere('email', '%ylub%')->first();

        dd($businesSeall, $businesseFind, $businesseWhereGet, $businesseWhereFirst,        $businesseWhereFirst, $businesse2WhereFirst);
    }
}
