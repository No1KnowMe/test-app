<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RequestFormController extends Controller
{
    public function index() {
        return response('Здесь будет форма заявки')->header('Content-Type', 'text/plain');
    }
}
