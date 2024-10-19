<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Workspace;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\WorkspaceController;

class ApiTokenController extends Controller
{
    public function index(Workspace $workspace)
    {
        $this->authorize('view', $workspace);
        $tokens = $workspace->apiTokens;
        return view('api_tokens.index', compact('tokens', 'workspace'));
    }

    public function create(Workspace $workspace)
    {
        $this->authorize('create', $workspace);
        $workspaces = Auth::user()->workspaces;
        return view('api_tokens.create', compact('workspaces', 'workspace'));
    }

    public function store(Request $request, Workspace $workspace)
    {
        $this->authorize('create', $workspace);

        $request->validate([
            'name' => 'required|string|max:100',
        ]);

        $token = bin2hex(random_bytes(20));
        $workspace->apiTokens()->create([
            'name' => $request->name,
            'token' => Hash::make($token),
            'created_at' => now(),

        ]);
        $workspaces = Auth::user()->workspaces;
        return view('api_tokens.show', compact('token','workspaces', 'workspace'));
    }
}

