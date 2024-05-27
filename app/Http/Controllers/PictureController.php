<?php

namespace App\Http\Controllers;

use App\Models\Picture;
use App\Models\Picture_Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PictureController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.pictures.index');
    }

    public function admin_index()
    {
        return view('admin.pictures.index',['pictures'=>Picture::all()]);
    }

    public function admin_order()
    {
        return view('admin.orders.picture',['picture_orders'=>Picture_Order::all()]);
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pictures.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if($request->hasFile('img_path')){
            $img_path = '/' . $request->file('img_path')->store('img');
        }

        Picture::create([
            'title'       =>$request->title,
            'price'       =>$request->price,
            'status'      =>"В наличии",
            'img_path'    =>$img_path  ?? NULL,
        ]);
        return redirect('admin/pictures')->with('success', 'Картина добавлена');
    }

    /**
     * Display the specified resource.
     */
    public function show(Picture $picture)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Picture $picture)
    {
        return view('admin.pictures.edit', ['picture'=>$picture]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Picture $picture)
    {
        $picture->title=$request->title;
        $picture->price=$request->price;
        $picture->status=$request->status;
        if($request->hasFile('img_path')){
            $img_path = '/' . $request->file('img_path')->store('img');
        }
        $picture->save();
        return redirect('admin/pictures')->with('success', 'Картина изменена');
    }

    public function update_order(Request $request, Picture_Order $picture_order)
    {
        $picture_order->status = $request->status;
        $picture_order->save();

        return redirect('/admin/pictureorders/')->with('success', 'Статус изменен');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Picture $picture)
    {
        $picture->delete();
        return redirect('admin/pictures')->with('success', 'Картина удалена');
    }

    public function order()
    {
        return view('orders.picture', ['user'=>Auth::user()]);
    }

    public function order_store(Request $request)
    {
        if($request->hasFile('img_path')){
            $img_path = '/' . $request->file('img_path')->store('img');
        }

        Picture_Order::create([
            'service'     =>$request->service,
            'name'        =>$request->name,
            'number'      =>$request->number,
            'comment'     =>$request->comment,
            'status'      =>"В обработке",
            'user_id'     =>Auth::user()->id,
        ]);
        return redirect('/profile')->with('success', 'Скоро с вами свяжуться для уточнения деталей заказа.');
    }
}
