<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function index() {
        return response('Здесь будет форма регистрации')->header('Content-Type', 'text/plain');
    }
}
