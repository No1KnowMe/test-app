<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthenticationController extends Controller
{
    public function index() {
        return response('Здесь будет страница авторизации')->header('Content-Type', 'text/plain');
    }
}
