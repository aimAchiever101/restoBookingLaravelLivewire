<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Home;
use App\Http\Livewire\Reservation;
use App\Http\Livewire\Register;
use App\Http\Livewire\AdminDashboard;
use App\Http\Livewire\CustomerDetail;
use App\Http\Livewire\PaymentRequest;
use App\Http\Livewire\RequestList;
use App\Http\Livewire\PaymentRequestDetails;
use App\Http\Livewire\Refund;
use App\Http\Livewire\RefundList;
use App\Http\Livewire\RefundDetails;
use App\Http\Livewire\login;
use App\Http\Livewire\ReservationSeats;
use App\Http\Livewire\Dashboard;
use App\Http\Livewire\MenuAdd;
use App\Http\Livewire\Menu;
use App\Http\Livewire\Team;
use App\Http\Livewire\DailyDetails;
use App\Http\Livewire\NewStaff;
use App\Http\Livewire\StaffDetails;
use App\Http\Livewire\Nothing;






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
Route::get('/',Home::class );
Route::get('/reservation',Reservation::class );
Route::get('/register',Register::class );
Route::get('/admin-dashboard',AdminDashboard::class );
Route::get('/customer_detail',CustomerDetail::class );
Route::get('/payment_request',PaymentRequest::class )->name("payment_request");
Route::get('/request_list',RequestList::class );
Route::get('/payment_request_details/{payment_request_id}',PaymentRequestDetails::class );
Route::get('/refund/{payment_id}',Refund::class );
Route::get('/refund_list',RefundList::class );
Route::get('/refund_details/{payment_id}',RefundDetails::class );
Route::get('/login',Login::class );
Route::get('/reservation-seats',ReservationSeats::class );
Route::get('/dashboard',Dashboard::class );
Route::get('/menu_add',MenuAdd::class );
Route::get('/menu',Menu::class );
Route::get('/team',Team::class );
Route::get('/daily-details',DailyDetails::class );
Route::get('/new-staff',NewStaff::class );
Route::get('/staff-details',StaffDetails::class );
Route::get('/nothing',Nothing::class );



















use App\Http\Controllers\PaymentController;
Route::get("/request", [PaymentController::class, 'request']);





