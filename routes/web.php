<?php

use App\Http\Controllers\AdminController;
use App\Models\Cart;
use App\Models\Section;

use Illuminate\View\View;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SectionController;
// use Illuminate\Contracts\View\View;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CheckoutController;
use Illuminate\Routing\Route as RoutingRoute;
use App\Http\Controllers\PrescriptionItemController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/register', function () {
//     return view('register');
// });
Route::get('/login', function () {
    return view('login');
});





// invoice
Route::get('/invoice', function () {
    return view('admin.invoice');
});
Route::get('/', function () {
    return view('user.index');
});


// Route::get('/product', function () {
//     return view('product.product');
// });



// search bar
Route::get('/product-list', [HomeController::class, 'searchAjax'])->name('search');
Route::post('/search-product', [HomeController::class, 'searchProduct'])->name('searchProduct');

// home pages
// User Pages
Route::get('/', [HomeController::class, 'homepage'])->name('homepage');
// Route::get('/', [HomeController::class, 'homepage'])->name('homepage')->middleware(['auth']);
Route::get('/about-page', [HomeController::class, 'about'])->name('about');
Route::get('/users', [HomeController::class, 'users'])->name('users');

//Contact Page
Route::get('/contact-us', [HomeController::class, 'contact'])->name('contact');
Route::post('/send-contact', [ContactController::class, 'sendEmail'])->name('send');

// contact admin 
// Route::get('/contact-us', [ContactController::class, 'contactUs'])->name('contactUs');



// Prescription page
Route::get('/upload-prescription', [ImageController::class, 'create'])->name('image');
Route::post('/prescription', [ImageController::class, 'store'])->name('prescriptionStore');
//Route::get('/upload', [ImageController::class, 'upload'])->name('upload');


//home controller main views
Route::get('/login', [HomeController::class, 'login'])->name('login');
Route::get('/register', [HomeController::class, 'register'])->name('register');
Route::get('/section/{section}/{sec_id}', [HomeController::class, 'section'])->name('sections');
Route::get('section/{section}/{product}/{id}', [HomeController::class, 'productDetails'])->name('productDetails');


//user login
Route::post('/register', [UserController::class, 'registerUser'])->name('registerUser');
Route::post('/login', [UserController::class, 'loginUser'])->name('loginUser');
Route::get('/logout', [UserController::class, 'logout'])->name('logout');

//category
Route::get('/category', [CategoryController::class, 'category'])->name('category');
Route::post('/add-category', [CategoryController::class, 'addCategory'])->name('addCategory');
Route::get('/edit-category/{id}', [CategoryController::class, 'edit'])->name('edit');
Route::get('/delete-category/{id}', [CategoryController::class, 'deleteCategory'])->name('deleteCategory');
Route::post('/edit-category', [CategoryController::class, 'editCategory'])->name('editCategory');

//product
Route::get('/product', [ProductController::class, 'product'])->name('product');
Route::get('/add-product', [ProductController::class, 'addProduct'])->name('addProduct');
Route::post('/save-product', [ProductController::class, 'saveProduct'])->name('saveProduct');
Route::get('/delete-product/{id}', [ProductController::class, 'deleteProduct'])->name('deleteProduct');
Route::get('/edit-product/{id}', [ProductController::class, 'editProduct'])->name('editProduct');
Route::put('/update-product', [ProductController::class, 'updateProduct'])->name('updateProduct');


//admin section


// Dashboard
Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');


Route::get('/section', [SectionController::class,'section'])->name('section');
Route::post('/add-section', [SectionController::class,'addSection'])->name('addSection');
Route::get('/edit-section/{id}', [SectionController::class,'edit'])->name('editsec');
Route::get('/delete-section/{id}', [SectionController::class,'deleteSection'])->name('deleteSection');
Route::post('/edit-section', [SectionController::class,'editSection'])->name('editSection');

//cart
Route::post('add-to-cart', [CartController::class, 'addProduct'])->name('addCartProduct');
Route::post('delete-cart-item', [CartController::class, 'deleteProduct'])->name('deleteCartProduct');
Route::post('update-to-cart', [CartController::class, 'updateProduct'])->name('updateCartProduct');

Route::middleware(['auth'])->group(function () {
    Route::get('cart', [CartController::class, 'viewCart'])->name('viewCart');
    Route::get('clear-cart', [CartController::class, 'clearCart'])->name('clearCart');

    //checkout
    Route::get('checkout', [CheckoutController::class, 'index'])->name('checkout');
    Route::post('place-order', [CheckoutController::class, 'placeOrder'])->name('placeOrder');
    //my-order
    Route::get('my-order', [HomeController::class, 'myOrder'])->name('myOrder');
    Route::get('view-my-order/{id}', [HomeController::class, 'viewmyOrder'])->name('viewmyOrder');
    Route::get('cancel-my-order/{id}', [HomeController::class, 'cancelmyOrder'])->name('cancelmyOrder');

    //prescription order
    Route::get('my-prescription', [HomeController::class, 'myPresOrder'])->name('myPresOrder');
    Route::get('view-prescription-order/{id}', [HomeController::class, 'viewmyPresOrder'])->name('viewmyPresOrder');
    Route::get('cancel-prescription-order/{id}', [HomeController::class, 'cancelPresOrder'])->name('cancelPresOrder');
});

//order handling by admin
Route::get('/order', [OrderController::class, 'index'])->name('order');
Route::get('/order-history', [OrderController::class, 'orderHistory'])->name('orderHistory');
Route::get('view-order/{id}', [OrderController::class, 'viewOrder'])->name('viewOrder');
Route::put('update-order/{id}', [OrderController::class, 'updateOrder'])->name('updateOrder');
//invioce
Route::get('order-invoice/{oid}', [OrderController::class, 'invoice'])->name('oinvoice');
Route::get('print-order-invoice/{oid}', [OrderController::class, 'print_invoice'])->name('print_order_invoice');


//prescription handling by admin
Route::get('/prescription', [ImageController::class, 'prescription'])->name('prescription');
Route::get('/view-prescription/{presId}', [ImageController::class, 'viewPrescription'])->name('viewPrescription');
Route::post('add-prescription-item', [PrescriptionItemController::class, 'addPresItem'])->name('addPresItem');
Route::get('edit-prescription-item/{piid}', [PrescriptionItemController::class, 'editPresItem'])->name('editPresItem');
Route::put('save-prescription-item/{piid}/{pid}', [PrescriptionItemController::class, 'savePresItem'])->name('savePresItem');
Route::put('update-prescription-order/{id}', [PrescriptionItemController::class, 'updatePresOrder'])->name('updatePresOrder');
Route::get('cancel-prescription/{id}', [PrescriptionItemController::class, 'cancelPres'])->name('cancelPres');
Route::get('delete-prescription-item/{id}/{pid}', [PrescriptionItemController::class, 'deletePresItem'])->name('deletePresItem');
//invoice
Route::post('invoice/{pid}', [PrescriptionItemController::class, 'invoice'])->name('invoice');
Route::get('print-invoice/{pid}', [PrescriptionItemController::class, 'print_invoice'])->name('print_invoice');

//email verification
Route::get('user/verify/{token}', [UserController::class, 'verifyEmail'])->name('user.verify');

//change password
Route::get('/change-password', [HomeController::class, 'changePassword'])->name('changepass')->middleware('auth');
Route::post('/change-password', [HomeController::class, 'updatePassword'])->name('updatepass');
