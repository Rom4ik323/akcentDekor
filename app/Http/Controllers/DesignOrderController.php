<?php

namespace App\Http\Controllers;

use App\Models\DesignOrder;

use Illuminate\Http\Request;

class DesignOrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = \Auth::user();
        return view('orders.design', ['user'=>$user]);
    }

    public function admin()
    {
        return view('admin.orders.design', ['design_orders'=>DesignOrder::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        DesignOrder::create([
            'user_id'   => \Auth::user()->id,
            'type'      => $request->type,
            'number'    => $request->number,
            'name'      => $request->name,
            'service'   => $request->service,
            'square'    => $request->square,
            'comment'   => $request->comment,
            'status'   => "В обработке",
        ]);
        return redirect('/profile')->with('success', 'Скоро с вами свяжуться для уточнения деталей заказа.');
    }

    /**
     * Display the specified resource.
     */
    public function show(DesignOrder $designOrder)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(DesignOrder $designOrder)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, DesignOrder $designOrder)
    {
        $designOrder->status = $request->status;
        $designOrder->save();

        return redirect('/admin/designorders/')->with('success', 'Статус изменен');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DesignOrder $designOrder)
    {
        //
    }
}
