<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BillsController extends Controller
{
    public function index(Workspace $workspace)
    {
        $this->authorize('view', $workspace);
        $bills = $workspace->bills;
        return view('bills.index', compact('bills', 'workspace'));
    }
}
