<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\DesignOrderController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\PictureController;
use App\Http\Controllers\DecorOrderController;
use App\Http\Controllers\DecorExampleController;
use Illuminate\Facades\Auth;

Route::get('/painting', function () {
    $pictures = DB::table('pictures')->where('status', 'В наличии')->get();
    return view('painting', ['pictures'=>$pictures,]);
})->name('painting');

Route::get('/', function () {
    return view('design');
});
Route::post('/', [ApplicationController::class, 'store'])->name('app.store');

Route::get('/decor', function () {
    return view('decor', ['decor_examples'=>\App\Models\DecorExample::all()]);
});

Route::get( '/projects',               [ProjectController::class,'index'])    ->name('projects.index');
Route::get( '/projects/{project}',     [ProjectController::class,'show'])     ->name('project.show');

Route::middleware(['guest'])->group(function () {
    Route::get( '/register', [RegisterController::class,    'create'])      ->name('auth.create');
    Route::post('/register', [RegisterController::class,    'store'])       ->name('auth.store');
    Route::get( '/login',    [RegisterController::class,    'loginform'])   ->name('auth.loginform');
    Route::post('/login',    [RegisterController::class,    'login'])       ->name('auth.login');

});

Route::middleware(['auth'])->group(function (){
    Route::get( '/logout',          [RegisterController::class,'logout'])      ->name('auth.logout');
    Route::get( '/order',           [DesignOrderController::class, 'index'])   ->name('design.order.create');
    Route::post('/order',           [DesignOrderController::class, 'store'])   ->name('design.order.store');
    Route::get( '/picture/order',   [PictureController::class, 'order'])       ->name('picture.order.create');
    Route::post('/picture/order',   [PictureController::class, 'order_store']) ->name('picture.order.store');
    Route::get( '/decor/order',     [DecorOrderController::class, 'create'])   ->name('decor.order.create');
    Route::post('/decor/order',     [DecorOrderController::class, 'store'])    ->name('decor.order.store');
    Route::get( '/profile', function (){
        $user = \Auth::user();
        $picture_orders = DB::table('picture__orders')  ->where('user_id', $user->id)->get();
        $design_orders  = DB::table('design_orders')    ->where('user_id', $user->id)->get();
        $decor_orders   = DB::table('decor_orders')     ->where('user_id', $user->id)->get();
        return view('profile', ['user'=>$user,
            'design_orders' => $design_orders,
            'picture_orders'=> $picture_orders,
            'decor_orders'  => $decor_orders,
        ]);
    })->name('profile');
});


Route::middleware(['admin'])->group(function () {
    Route::get( 'admin/projects',                       [ProjectController::class,'admin_index'])  ->name('projects.index');
    Route::get( 'admin/projects/create',                [ProjectController::class,'create'])       ->name('project.create');
    Route::post( 'admin/projects/create',               [ProjectController::class,'store'])        ->name('project.store');
    Route::get( 'admin/projects/edit/{project}',        [ProjectController::class,'edit'])         ->name('project.edit');
    Route::post( 'admin/projects/edit/{project}',       [ProjectController::class,'update'])       ->name('project.update');
    Route::delete( 'admin/projects/delete/{project}',   [ProjectController::class,'destroy'])      ->name('project.destroy');


    Route::get( 'admin/pictures',                       [PictureController::class,'admin_index'])  ->name('pictures.index');
    Route::get( 'admin/picture/create',                 [PictureController::class,'create'])       ->name('picture.create');
    Route::post( 'admin/picture/create',                [PictureController::class,'store'])        ->name('picture.store');
    Route::get( 'admin/picture/edit/{picture}',         [PictureController::class,'edit'])         ->name('picture.edit');
    Route::post( 'admin/picture/edit/{picture}',        [PictureController::class,'update'])       ->name('picture.update');
    Route::delete( 'admin/picture/delete/{picture}',    [PictureController::class,'destroy'])      ->name('picture.destroy');

    Route::get( 'admin/decor',                          [DecorExampleController::class,'index'])   ->name('decor.index');
    Route::get( 'admin/decor/create',                   [DecorExampleController::class,'create'])  ->name('decor.create');
    Route::post( 'admin/decor/create',                  [DecorExampleController::class,'store'])   ->name('decor.store');
    Route::get( 'admin/decor/edit/{decorExample}',      [DecorExampleController::class,'edit'])    ->name('decor.edit');
    Route::post( 'admin/decor/edit/{decorExample}',     [DecorExampleController::class,'update'])  ->name('decor.update');
    Route::delete( 'admin/decor/delete/{decorExample}', [DecorExampleController::class,'destroy']) ->name('decor.destroy');

    Route::get('/admin/designorders/',                  [DesignOrderController::class, 'admin'])   ->name('design.admin');
    Route::post('/admin/designorders/{design_order}',   [DesignOrderController::class, 'update'])  ->name('design.order.edit');
    Route::get('/admin/decororders/',                   [DecorOrderController::class, 'admin'])    ->name('decor.admin');
    Route::post('/admin/decororders/{decor_order}',     [DecorOrderController::class, 'update'])   ->name('decor.order.edit');
    Route::get('/admin/pictureorders/',                 [PictureController::class, 'admin_order'])    ->name('picture.admin');
    Route::post('/admin/pictureorders/{picture_order}', [PictureController::class, 'update_order'])   ->name('picture.order.edit');
});
