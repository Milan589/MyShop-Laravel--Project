<?php

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::get('/', [\App\Http\Controllers\Frontend\HomeController::class, 'index'])->name('frontend.home');
Route::get('/shop', [\App\Http\Controllers\Frontend\HomeController::class, 'shop'])->name('frontend.shop');
Route::get('/subcategory/{slug}', [\App\Http\Controllers\Frontend\HomeController::class, 'subcategory'])->name('frontend.subcategory');
Route::get('/product/{slug}', [\App\Http\Controllers\Frontend\HomeController::class, 'product'])->name('frontend.product');
Route::get('/tag/{slug}', [\App\Http\Controllers\Frontend\HomeController::class, 'tag'])->name('frontend.tag');
Route::post('/cart/add', [\App\Http\Controllers\Frontend\HomeController::class, 'addToCart'])->name('frontend.cart.add');
Route::get('/cart/list', [\App\Http\Controllers\Frontend\HomeController::class, 'cartList'])->name('frontend.cart.list');
Route::post('/cart/update', [\App\Http\Controllers\Frontend\HomeController::class, 'updateCart'])->name('frontend.cart.update');
Route::get('/customer/register', [\App\Http\Controllers\Frontend\CustomerController::class, 'registerForm'])->name('frontend.customer.register');
Route::get('/customer/login', [\App\Http\Controllers\Frontend\CustomerController::class, 'login'])->name('frontend.customer.login');
Route::post('/customer/doregister', [App\Http\Controllers\Frontend\CustomerController::class, 'register'])->name('frontend.customer.doregister');
Route::get('/customer/home', [\App\Http\Controllers\Frontend\CustomerController::class, 'home'])->name('frontend.customer.home')->middleware(['auth']);
Route::get('/cart/checkout', [\App\Http\Controllers\Frontend\HomeController::class, 'checkout'])->name('frontend.checkout')->middleware(['auth']);
Route::post('/cart/checkout', [\App\Http\Controllers\Frontend\HomeController::class, 'doCheckout'])->name('frontend.docheckout')->middleware(['auth']);

//logout
// Route::post('/logout',[\App\Http\Controllers\Auth\LogoutController::class,'destroy'])->name('logout');
// //payment
Route::get('success', [\App\Http\Controllers\Frontend\HomeController::class, 'success'])->middleware(['auth']);
Route::get('error', [\App\Http\Controllers\Frontend\HomeController::class, 'error'])->middleware(['auth']);
Route::get('/payment',[\App\Http\Controllers\Frontend\HomeController::class,'paymentDetail'])->name('backend.payment.index');


###################### BackendPart ###########################
Route::get('/home', [\App\Http\Controllers\BackendController::class, 'index'])->name('home')->middleware(['auth']);

################# TagController ################

Route::prefix('backend/tag')->name('backend.tag.')->middleware(['auth', 'check_admin_role'])->group(function () {
    //to show deleted data
    //it should be given priority show kept on top
    Route::get('/trash', [\App\Http\Controllers\Backend\TagController::class, 'trash'])->name('trash');
    //to restore deleted data
    //it should be given priority show kept on top
    Route::post('/restore/{id}', [\App\Http\Controllers\Backend\TagController::class, 'restore'])->name('restore');
    //delete permanently
    Route::delete('/force_delete/{id}', [\App\Http\Controllers\Backend\TagController::class, 'permanentDelete'])->name('force_delete');

    //to create form data
    Route::get('/create', [\App\Http\Controllers\Backend\TagController::class, 'create'])->name('create');
    //to store form data
    Route::post('/', [\App\Http\Controllers\Backend\TagController::class, 'store'])->name('store');
    // to display form data
    Route::get('/', [\App\Http\Controllers\Backend\TagController::class, 'index'])->name('index');
    //to display single detail of data
    Route::get('/{id}', [\App\Http\Controllers\Backend\TagController::class, 'show'])->name('show');
    // to delete data from database
    Route::delete('/{id}', [\App\Http\Controllers\Backend\TagController::class, 'destroy'])->name('destroy');
    // to edit data from database
    Route::get('/{id}/edit', [\App\Http\Controllers\Backend\TagController::class, 'edit'])->name('edit');
    // to update data of database
    Route::put('/{id}', [\App\Http\Controllers\Backend\TagController::class, 'update'])->name('update');
});



################# CategoryController ################

Route::prefix('backend/category')->name('backend.category.')->middleware(['auth', 'check_admin_role'])->group(function () {
    //to show deleted data
    //it should be given priority show kept on top
    Route::get('/trash', [\App\Http\Controllers\Backend\CategoryController::class, 'trash'])->name('trash');
    //to restore deleted data
    //it should be given priority show kept on top
    Route::post('/restore/{id}', [\App\Http\Controllers\Backend\CategoryController::class, 'restore'])->name('restore');
    //delete permanently
    Route::delete('/force_delete/{id}', [\App\Http\Controllers\Backend\CategoryController::class, 'permanentDelete'])->name('force_delete');
    //ajax
    Route::post('/get_subcategory', [\App\Http\Controllers\Backend\CategoryController::class, 'getSubcategory'])->name('getsubcategory');

    //to create form data
    Route::get('/create', [\App\Http\Controllers\Backend\CategoryController::class, 'create'])->name('create');
    //to store form data
    Route::post('/', [\App\Http\Controllers\Backend\CategoryController::class, 'store'])->name('store');
    // to display form data
    Route::get('/', [\App\Http\Controllers\Backend\CategoryController::class, 'index'])->name('index');
    //to display single detail of data
    Route::get('/{id}', [\App\Http\Controllers\Backend\CategoryController::class, 'show'])->name('show');
    // to delete data from database
    Route::delete('/{id}', [\App\Http\Controllers\Backend\CategoryController::class, 'destroy'])->name('destroy');
    // to edit data from database
    Route::get('/{id}/edit', [\App\Http\Controllers\Backend\CategoryController::class, 'edit'])->name('edit');
    // to update data of database
    Route::put('/{id}', [\App\Http\Controllers\Backend\CategoryController::class, 'update'])->name('update');
});


################# SubategoryController ################

Route::prefix('backend/subcategory')->name('backend.subcategory.')->middleware(['auth', 'check_admin_role'])->group(function () {
    //to show deleted data
    //it should be given priority show kept on top
    Route::get('/trash', [\App\Http\Controllers\Backend\SubcategoryController::class, 'trash'])->name('trash');
    //to restore deleted data
    //it should be given priority show kept on top
    Route::post('/restore/{id}', [\App\Http\Controllers\Backend\SubcategoryController::class, 'restore'])->name('restore');
    //delete permanently
    Route::delete('/force_delete/{id}', [\App\Http\Controllers\Backend\SubcategoryController::class, 'permanentDelete'])->name('force_delete');

    //to create form data
    Route::get('/create', [\App\Http\Controllers\Backend\SubcategoryController::class, 'create'])->name('create');
    //to store form data
    Route::post('/', [\App\Http\Controllers\Backend\SubcategoryController::class, 'store'])->name('store');
    // to display form data
    Route::get('/', [\App\Http\Controllers\Backend\SubcategoryController::class, 'index'])->name('index');
    //to display single detail of data
    Route::get('/{id}', [\App\Http\Controllers\Backend\SubcategoryController::class, 'show'])->name('show');
    // to delete data from database
    Route::delete('/{id}', [\App\Http\Controllers\Backend\SubcategoryController::class, 'destroy'])->name('destroy');
    // to edit data from database
    Route::get('/{id}/edit', [\App\Http\Controllers\Backend\SubcategoryController::class, 'edit'])->name('edit');
    // to update data of database
    Route::put('/{id}', [\App\Http\Controllers\Backend\SubcategoryController::class, 'update'])->name('update');
});




################# BrandController ################

Route::prefix('backend/brand')->name('backend.brand.')->middleware(['auth', 'check_admin_role'])->group(function () {
    //to show deleted data
    //it should be given priority show kept on top
    Route::get('/trash', [\App\Http\Controllers\Backend\BrandController::class, 'trash'])->name('trash');
    //to restore deleted data
    //it should be given priority show kept on top
    Route::post('/restore/{id}', [\App\Http\Controllers\Backend\BrandController::class, 'restore'])->name('restore');
    //delete permanently
    Route::delete('/force_delete/{id}', [\App\Http\Controllers\Backend\BrandController::class, 'permanentDelete'])->name('force_delete');

    //to create form data
    Route::get('/create', [\App\Http\Controllers\Backend\BrandController::class, 'create'])->name('create');
    //to store form data
    Route::post('/', [\App\Http\Controllers\Backend\BrandController::class, 'store'])->name('store');
    // to display form data
    Route::get('/', [\App\Http\Controllers\Backend\BrandController::class, 'index'])->name('index');
    //to display single detail of data
    Route::get('/{id}', [\App\Http\Controllers\Backend\BrandController::class, 'show'])->name('show');
    // to delete data from database
    Route::delete('/{id}', [\App\Http\Controllers\Backend\BrandController::class, 'destroy'])->name('destroy');
    // to edit data from database
    Route::get('/{id}/edit', [\App\Http\Controllers\Backend\BrandController::class, 'edit'])->name('edit');
    // to update data of database
    Route::put('/{id}', [\App\Http\Controllers\Backend\BrandController::class, 'update'])->name('update');
});

################# ProductController ################

Route::prefix('backend/product')->name('backend.product.')->middleware(['auth', 'check_admin_role'])->group(function () {
    //to show deleted data
    //it should be given priority show kept on top
    Route::get('/trash', [\App\Http\Controllers\Backend\ProductController::class, 'trash'])->name('trash');
    //to restore deleted data
    //it should be given priority show kept on top
    Route::post('/restore/{id}', [\App\Http\Controllers\Backend\ProductController::class, 'restore'])->name('restore');
    //delete permanently
    Route::delete('/force_delete/{id}', [\App\Http\Controllers\Backend\ProductController::class, 'permanentDelete'])->name('force_delete');

    //to create form data
    Route::get('/create', [\App\Http\Controllers\Backend\ProductController::class, 'create'])->name('create');
    //to store form data
    Route::post('/', [\App\Http\Controllers\Backend\ProductController::class, 'store'])->name('store');
    // to display form data
    Route::get('/', [\App\Http\Controllers\Backend\ProductController::class, 'index'])->name('index');
    //to display single detail of data
    Route::get('/{id}', [\App\Http\Controllers\Backend\ProductController::class, 'show'])->name('show');
    // to delete data from database
    Route::delete('/{id}', [\App\Http\Controllers\Backend\ProductController::class, 'destroy'])->name('destroy');
    // to edit data from database
    Route::get('/{id}/edit', [\App\Http\Controllers\Backend\ProductController::class, 'edit'])->name('edit');
    // to update data of database
    Route::put('/{id}', [\App\Http\Controllers\Backend\ProductController::class, 'update'])->name('update');
});




################ AttributeController ############

Route::prefix('backend/attribute')->name('backend.attribute.')->middleware(['auth', 'check_admin_role'])->group(function () {
    //to show deleted data
    //it should be given priority show kept on top
    Route::get('/trash', [\App\Http\Controllers\Backend\AttributeController::class, 'trash'])->name('trash');
    //to restore deleted data
    //it should be given priority show kept on top
    Route::post('/restore/{id}', [\App\Http\Controllers\Backend\AttributeController::class, 'restore'])->name('restore');
    //delete permanently
    Route::delete('/force_delete/{id}', [\App\Http\Controllers\Backend\AttributeController::class, 'permanentDelete'])->name('force_delete');

    //to create form data
    Route::get('/create', [\App\Http\Controllers\Backend\AttributeController::class, 'create'])->name('create');
    //to store form data
    Route::post('/', [\App\Http\Controllers\Backend\AttributeController::class, 'store'])->name('store');
    // to display form data
    Route::get('/', [\App\Http\Controllers\Backend\AttributeController::class, 'index'])->name('index');
    //to display single detail of data
    Route::get('/{id}', [\App\Http\Controllers\Backend\AttributeController::class, 'show'])->name('show');
    // to delete data from database
    Route::delete('/{id}', [\App\Http\Controllers\Backend\AttributeController::class, 'destroy'])->name('destroy');
    // to edit data from database
    Route::get('/{id}/edit', [\App\Http\Controllers\Backend\AttributeController::class, 'edit'])->name('edit');
    // to update data of database
    Route::put('/{id}', [\App\Http\Controllers\Backend\AttributeController::class, 'update'])->name('update');
});

################ SettingController ############

Route::prefix('backend/setting')->name('backend.setting.')->middleware(['auth', 'check_admin_role'])->group(function () {
    //to show deleted data
    //it should be given priority show kept on top
    Route::get('/trash', [\App\Http\Controllers\Backend\SettingController::class, 'trash'])->name('trash');
    //to restore deleted data
    //it should be given priority show kept on top
    Route::post('/restore/{id}', [\App\Http\Controllers\Backend\SettingController::class, 'restore'])->name('restore');
    //delete permanently
    Route::delete('/force_delete/{id}', [\App\Http\Controllers\Backend\SettingController::class, 'permanentDelete'])->name('force_delete');

    //to create form data
    Route::get('/create', [\App\Http\Controllers\Backend\SettingController::class, 'create'])->name('create');
    //to store form data
    Route::post('/', [\App\Http\Controllers\Backend\SettingController::class, 'store'])->name('store');
    // to display form data
    Route::get('/', [\App\Http\Controllers\Backend\SettingController::class, 'index'])->name('index');
    //to display single detail of data
    Route::get('/{id}', [\App\Http\Controllers\Backend\SettingController::class, 'show'])->name('show');
    // to delete data from database
    Route::delete('/{id}', [\App\Http\Controllers\Backend\SettingController::class, 'destroy'])->name('destroy');
    // to edit data from database
    Route::get('/{id}/edit', [\App\Http\Controllers\Backend\SettingController::class, 'edit'])->name('edit');
    // to update data of database
    Route::put('/{id}', [\App\Http\Controllers\Backend\SettingController::class, 'update'])->name('update');
});


################ RoleController ############

Route::prefix('backend/role')->name('backend.role.')->middleware(['auth', 'check_admin_role'])->group(function () {
    //to show deleted data
    //it should be given priority show kept on top
    Route::get('/trash', [\App\Http\Controllers\Backend\RoleController::class, 'trash'])->name('trash');
    //to restore deleted data
    //it should be given priority show kept on top
    Route::post('/restore/{id}', [\App\Http\Controllers\Backend\RoleController::class, 'restore'])->name('restore');
    //delete permanently
    Route::delete('/force_delete/{id}', [\App\Http\Controllers\Backend\RoleController::class, 'permanentDelete'])->name('force_delete');

    //to create form data
    Route::get('/create', [\App\Http\Controllers\Backend\RoleController::class, 'create'])->name('create');
    //to store form data
    Route::post('/', [\App\Http\Controllers\Backend\RoleController::class, 'store'])->name('store');
    // to display form data
    Route::get('/', [\App\Http\Controllers\Backend\RoleController::class, 'index'])->name('index');
    //to display single detail of data
    Route::get('/{id}', [\App\Http\Controllers\Backend\RoleController::class, 'show'])->name('show');
    // to delete data from database
    Route::delete('/{id}', [\App\Http\Controllers\Backend\RoleController::class, 'destroy'])->name('destroy');
    // to edit data from database
    Route::get('/{id}/edit', [\App\Http\Controllers\Backend\RoleController::class, 'edit'])->name('edit');
    // to update data of database
    Route::put('/{id}', [\App\Http\Controllers\Backend\RoleController::class, 'update'])->name('update');
});

################ UserController ############

Route::prefix('backend/user')->name('backend.user.')->middleware(['auth', 'check_admin_role'])->group(function () {
    //to show deleted data
    //it should be given priority show kept on top
    Route::get('/trash', [\App\Http\Controllers\Backend\UserController::class, 'trash'])->name('trash');
    //to restore deleted data
    //it should be given priority show kept on top
    Route::post('/restore/{id}', [\App\Http\Controllers\Backend\UserController::class, 'restore'])->name('restore');
    //delete permanently
    Route::delete('/force_delete/{id}', [\App\Http\Controllers\Backend\UserController::class, 'permanentDelete'])->name('force_delete');

    //to create form data
    Route::get('/create', [\App\Http\Controllers\Backend\UserController::class, 'create'])->name('create');
    //to store form data
    Route::post('/', [\App\Http\Controllers\Backend\UserController::class, 'store'])->name('store');
    // to display form data
    Route::get('/', [\App\Http\Controllers\Backend\UserController::class, 'index'])->name('index');
    //to display single detail of data
    Route::get('/{id}', [\App\Http\Controllers\Backend\UserController::class, 'show'])->name('show');
    // to delete data from database
    Route::delete('/{id}', [\App\Http\Controllers\Backend\UserController::class, 'destroy'])->name('destroy');
    // to edit data from database
    Route::get('/{id}/edit', [\App\Http\Controllers\Backend\UserController::class, 'edit'])->name('edit');
    // to update data of database
    Route::put('/{id}', [\App\Http\Controllers\Backend\UserController::class, 'update'])->name('update');
});

################ SliderController ############

Route::prefix('backend/slider')->name('backend.slider.')->middleware(['auth', 'check_admin_role'])->group(function () {
    //to show deleted data
    //it should be given priority show kept on top
    Route::get('/trash', [\App\Http\Controllers\Backend\SliderController::class, 'trash'])->name('trash');
    //to restore deleted data
    //it should be given priority show kept on top
    Route::post('/restore/{id}', [\App\Http\Controllers\Backend\SliderController::class, 'restore'])->name('restore');
    //delete permanently
    Route::delete('/force_delete/{id}', [\App\Http\Controllers\Backend\SliderController::class, 'permanentDelete'])->name('force_delete');

    //to create form data
    Route::get('/create', [\App\Http\Controllers\Backend\SliderController::class, 'create'])->name('create');
    //to store form data
    Route::post('/', [\App\Http\Controllers\Backend\SliderController::class, 'store'])->name('store');
    // to display form data
    Route::get('/', [\App\Http\Controllers\Backend\SliderController::class, 'index'])->name('index');
    //to display single detail of data
    Route::get('/{id}', [\App\Http\Controllers\Backend\SliderController::class, 'show'])->name('show');
    // to delete data from database
    Route::delete('/{id}', [\App\Http\Controllers\Backend\SliderController::class, 'destroy'])->name('destroy');
    // to edit data from database
    Route::get('/{id}/edit', [\App\Http\Controllers\Backend\SliderController::class, 'edit'])->name('edit');
    // to update data of database
    Route::put('/{id}', [\App\Http\Controllers\Backend\SliderController::class, 'update'])->name('update');
});

################# OrderController ################

Route::prefix('backend/order')->name('backend.order.')->middleware(['auth', 'check_admin_role'])->group(function () {
    //to show deleted data
    //it should be given priority show kept on top
    Route::get('/trash', [\App\Http\Controllers\Backend\OrderController::class, 'trash'])->name('trash');
    //to restore deleted data
    //it should be given priority show kept on top
    Route::post('/restore/{id}', [\App\Http\Controllers\Backend\OrderController::class, 'restore'])->name('restore');
    //delete permanently
    Route::delete('/force_delete/{id}', [\App\Http\Controllers\Backend\OrderController::class, 'permanentDelete'])->name('force_delete');

    //to create form data
    Route::get('/create', [\App\Http\Controllers\Backend\OrderController::class, 'create'])->name('create');
    //to store form data
    Route::post('/', [\App\Http\Controllers\Backend\OrderController::class, 'store'])->name('store');
    // to display form data
    Route::get('/', [\App\Http\Controllers\Backend\OrderController::class, 'index'])->name('index');
    //to display single detail of data
    Route::get('/{id}', [\App\Http\Controllers\Backend\OrderController::class, 'show'])->name('show');
    // to delete data from database
    Route::delete('/{id}', [\App\Http\Controllers\Backend\OrderController::class, 'destroy'])->name('destroy');
    // to edit data from database
    Route::get('/{id}/edit', [\App\Http\Controllers\Backend\OrderController::class, 'edit'])->name('edit');
    // to update data of database
    Route::put('/{id}', [\App\Http\Controllers\Backend\OrderController::class, 'update'])->name('update');
});
