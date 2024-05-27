<?php

namespace App\Http\Controllers;

use App\Models\DecorOrder;
use Illuminate\Http\Request;

class DecorOrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function admin()
    {
        return view('admin.orders.decor', ['decor_orders'=>DecorOrder::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $user = \Auth::user();
        return view('orders.decor', ['user'=>$user]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        DecorOrder::create([
            'user_id'   => \Auth::user()->id,
            'number'    => $request->number,
            'name'      => $request->name,
            'service'   => $request->service,
            'comment'   => $request->comment,
            'status'   => "В обработке",
        ]);
        return redirect('/profile')->with('success', 'Скоро с вами свяжуться для уточнения деталей заказа.');
    }

    /**
     * Display the specified resource.
     */
    public function show(DecorOrder $decorOrder)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(DecorOrder $decorOrder)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, DecorOrder $decorOrder)
    {
        $decorOrder->status = $request->status;
        $decorOrder->save();

        return redirect('/admin/decororders/')->with('success', 'Статус изменен');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DecorOrder $decorOrder)
    {
        //
    }
}
