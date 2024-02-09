<?php

namespace App\Http\Controllers;

use App\Models\Add;
use Illuminate\Http\Request;

class AddController extends Controller
{
    function Add() {
        return view('Add');
    }

    function createlist(Request $request) {
        Add::create([
            'Name' => $request->Name,
            'Email' => $request->Email,
            'Age' => $request->Age,
            'Number' => $request->Number,
            'Address' => $request->Address
        ]);

        return redirect('/create-add');
    }

    function readList() {
        $add = Add::all();
        return view('List', compact('add'));
    }
}
