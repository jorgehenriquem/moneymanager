<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class HealthCheck extends Controller
{
    public function index()
    {
        return (['The server running, Lavarel version: '.app()->version()]);
    }
}
