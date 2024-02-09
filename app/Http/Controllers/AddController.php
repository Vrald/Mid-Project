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
        $request->validate([
            'Name' => 'required|string|min:5|max:20',
            'Email' => 'required|email',
            'Age' => 'required|integer|min:20|max:100',
            'Number' => 'required|numeric|starts_with:08|digits_between:9,12',
            'Address' => 'required|string|min:10|max:40'
            // 'Name' => 'required|string|min:5|max:20,
            // 'Email' => ['required', 'email:dns'],
            // 'Age' => ['required','min:20', 'max:100'],
            // 'Address' => ['required', 'min:10', 'max:40'],
            // 'Number' => ['required', 'starts_with:08', 'min:9', 'max:12']
        ]);
        Add::create([
            'Name' => $request->Name,
            'Email' => $request->Email,
            'Age' => $request->Age,
            'Number' => $request->Number,
            'Address' => $request->Address
        ]);

        return redirect('/List');
    }

    function readList() {
        $adds = Add::all();
        return view('List', compact('adds'));
    }

    function updateData($id) {
        $add = Add::find($id);
        return view("updateData",  compact('add'));
    }

    function editData(Request $request, $id) {
        $request->validate([
            'Name' => 'required|string|min:5|max:20',
            'Email' => 'required|email',
            'Age' => 'required|integer|min:20|max:100',
            'Number' => 'required|numeric|starts_with:08|digits_between:9,12',
            'Address' => 'required|string|min:10|max:40'
        ]);

        Add::find($id)->update([
            'Name' => $request->Name,
            'Email' => $request->Email,
            'Age' => $request->Age,
            'Number' => $request->Number,
            'Address' => $request->Address
        ]);

        return redirect('/List');
    }

    function deleteData($id) {
        Add::destroy($id);
        return redirect("/List");
    }
}
