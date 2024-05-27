<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('projects.index', ['projects'=>Project::all()]);
    }

    public function admin_index()
    {
        return view('admin.projects.index', ['projects'=>Project::all()]);
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.projects.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if($request->hasFile('img_path')){
            $img_path = '/' . $request->file('img_path')->store('img');
        }
        if($request->hasFile('img1_path')){
            $img1_path = '/' . $request->file('img1_path')->store('img');
        }
        if($request->hasFile('img2_path')){
            $img2_path = '/' . $request->file('img2_path')->store('img');
        }

        Project::create([
            'title'       =>$request->title,
            'square'      =>$request->square,
            'type'        =>$request->type,
            'wishes'      =>$request->wishes,
            'description' =>$request->description,
            'img_path'    =>$img_path  ?? NULL,
            'img1_path'   =>$img1_path  ?? NULL,
            'img2_path'   =>$img2_path  ?? NULL,
        ]);
        return redirect('admin/projects')->with('success', 'Проект добавлен');
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        return view('projects.show',['project'=>$project]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {
        return view('admin.projects.edit', ['project'=>$project]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Project $project)
    {
        $project->title=$request->title;
        $project->square=$request->square;
        $project->type=$request->type;
        $project->wishes=$request->wishes;
        $project->description=$request->description;
        if($request->hasFile('img_path')){
            $img_path = '/' . $request->file('img_path')->store('img');
        }
        if($request->hasFile('img1_path')){
            $img1_path = '/' . $request->file('img1_path')->store('img');
        }
        if($request->hasFile('img2_path')){
            $img2_path = '/' . $request->file('img2_path')->store('img');
        }
        $project->save();
        return redirect('admin/projects')->with('success', 'Товар изменен');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        $project->delete();
        return redirect('admin/projects')->with('success', 'Проект удален');
    }
}
