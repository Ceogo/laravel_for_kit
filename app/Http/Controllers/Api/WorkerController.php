<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Workers;
use Illuminate\Http\Request;

class WorkerController extends Controller
{
    public function index()
    {
        return Workers::all();
    }
}
