<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Workspace;
use Illuminate\Validation\Rules;

class WorkspaceController extends Controller
{
    public function index()
    {
        if(!Auth::check()){
            return redirect()->route('login');
        }
        $workspaces = Auth::user()->workspaces;
        return view('workspaces.index', compact('workspaces'));
    }
    public function create()
    {
        return view('workspaces.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'title'=>'required|string|max:100',
            'description'=>'string|nullable',
        ]);
        Workspace::create([
            'user_id'=>Auth::user()->id,
            'title'=>$request->title,
            'description'=>$request->description,
        ]);

        return redirect()->route('workspaces.index')->with('success', 'Workspace создан');
    }
    public function edit(Workspace $workspace)
    {
        $this->authorize('update', $workspace);
        return view('workspaces.edit', compact('workspace'));
    }
    public function update(Request $request, Workspace $workspace)
    {
        $this->authorize('update', $workspace);

        $request->validate([
            'title'=>'required|max:100|string|unique:workspaces,title,' .$workspace->id,
            'description'=>'nullable|string',
        ]);
        $workspace->update($request->only('title', 'description'));
        return redirect()->route('workspaces.index')->withh('success', 'Workspace обновлен');
    }
}
