<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RequestsListController extends Controller
{
    public function index() {
        $context = ['requests' => \App\Models\Request::get()];
        return view('requests_list', $context);
    }

    public function detail(\App\Models\Request $request) {
        return view('detail', ['request' => $request]);



    }
}
