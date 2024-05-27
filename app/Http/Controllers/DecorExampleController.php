<?php

namespace App\Http\Controllers;

use App\Models\DecorExample;
use Illuminate\Http\Request;

class DecorExampleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.decor.index', ['decorExamples'=> DecorExample::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.decor.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if($request->hasFile('img_path')){
            $img_path = '/' . $request->file('img_path')->store('img');
        }

        DecorExample::create([
            'title'       =>$request->title,
            'img_path'    =>$img_path  ?? NULL,
        ]);
        return redirect('admin/decor')->with('success', 'Работа успешно добавлена');
    }

    /**
     * Display the specified resource.
     */
    public function show(DecorExample $decorExample)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(DecorExample $decorExample)
    {
        return view('admin.decor.edit', ['decorExample'=>$decorExample]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, DecorExample $decorExample)
    {
        $decorExample->title=$request->title;
        if($request->hasFile('img_path')){
            $img_path = '/' . $request->file('img_path')->store('img');
        }
        $decorExample->save();
        return redirect('admin/decor')->with('success', 'Работа изменена');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DecorExample $decorExample)
    {
        $decorExample->delete();
        return redirect('admin/decor')->with('success', 'Работа удалена');
    }
}
