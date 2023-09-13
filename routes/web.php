<?php

use App\Http\Controllers\Dashboard;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PurchaseController;
use App\Http\Controllers\SalesController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\StockController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\SupplierController;
use App\Models\Category;
use App\Models\Customer;
use App\Models\Order;
use App\Models\Stock;
use App\Models\Supplier;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [Dashboard::class,'index'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::resource('sales',SalesController::class);
    Route::resource('customers',CustomerController::class);
    Route::resource('stocks',StockController::class);
    Route::resource('purchases',PurchaseController::class);
    Route::get('products',[ProductController::class,'index'])->name('product.index');
});

Route::middleware('auth','admin')->group(function(){
    Route::resource('purchases',PurchaseController::class);
    Route::resource('products',ProductController::class)->except('index','show');
    Route::resource('reports',ReportController::class);
    Route::resource('suppliers',SupplierController::class);
    Route::resource('categorieses',CategoryController::class);
    Route::resource('orders',OrderController::class);
    Route::resource('transactions',TransactionController::class);
    
});



require __DIR__.'/auth.php';
