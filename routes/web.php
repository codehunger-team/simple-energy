<?php

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

Route::get('login',  'Auth\AdminAuthController@getLogin')->name('adminLogin');
Route::post('login', 'Auth\AdminAuthController@postLogin')->name('adminLoginPost');
Route::any('logout', 'Auth\AdminAuthController@logout')->name('adminLogout');

// Auth::routes();

Route::group(['middleware' => ['is_admin', 'XSS']], function () {

	Route::get('/home', 'HomeController@index')->name('home');
	Route::get('/admin/home', 'HomeController@admin')->name('admin.home');

	Route::get('/profile', 'ProfileController@index')->name('profile');
	Route::get('/orders/views', 'OrderController@views')->name('order.views');
	Route::post('/orders/generate-invoice/{order}', 'OrderController@generateInvoice')->name('order.invoice.generate');
	Route::get('/orders/show-invoice/{order}', 'OrderController@showInvoice')->name('order.invoice.show');
	Route::get('/orders/print-invoice/{order}', 'OrderController@printInvoice')->name('order.invoice.print');


	Route::resource('users', 'UserController');
	Route::resource('qrcode', 'QrcodeController');
	Route::resource('approval-letter', 'ApprovalLetterController');
	Route::resource('agreement', 'AgreementController');
	Route::resource('product', 'ProductController');
	Route::resource('prebooking', 'PreBookingController');
	Route::resource('appointment', 'AppointmentController');
	Route::resource('quickapply', 'QuickApplyController');
	Route::resource('general-enquiries', 'ContactController');
	Route::resource('invoice', 'InvoiceController');


	Route::get('/admin/home', 'HomeController@admin')->name('admin.home');

	Route::get('approval-letter/download/{id}', 'ApprovalLetterController@download')->name('approval-letter.download');
	Route::get('invoice-letter/download/{id}', 'InvoiceController@download')->name('invoice-letter.download');
	Route::get('agreement/download/{agreement}', 'AgreementController@downloadAgreement')->name('agreement.download');

	Route::get('contact-by-form-list', 'HomeController@contactByForm')->name('contact.by.form.list');
	Route::get('booking-list', 'HomeController@bookingList')->name('front.booking.list');
	Route::get('dealership-list', 'HomeController@dealershipList')->name('front.dealership.list');

	Route::get('/configuration', 'ConfigurationController@index')->name('configuration');
	Route::post('/store-configuration', 'ConfigurationController@store')->name('configuration.store');
});


Route::group(['middleware' => ['XSS', 'web']], function () {
	Route::get('user-login', 'Auth\LoginController@getUserLogin')->name('userLogin');
	Route::post('user-login', 'Auth\LoginController@postUserLogin')->name('userLoginPost');
	Route::any('user-logout', 'Auth\LoginController@logout')->name('userLogout');

	Route::get('/user/home', 'HomeController@user')->name('user.home');
	Route::get('/user/qrcode', 'QrcodeController@userQrcode')->name('user.qrcode');
	Route::get('/user/profile', 'ProfileController@userView')->name('user.profile');
	Route::get('/user/profile-bank', 'ProfileController@profileBank')->name('profile.bank');
	Route::get('/user/profile-branch', 'ProfileController@profileBranch')->name('profile.branch');

	Route::get('/user/id-proof', 'ProfileController@profileIdProof')->name('profile.idproof');
	Route::get('/user/shop', 'ProfileController@profileShop')->name('profile.shop');

	Route::resource('/user/orders', 'OrderController');


	Route::get('/user/transcation/{id}', 'QrcodeController@getTransaction')->name('user.transaction');
	Route::post('/user/transcation', 'OrderController@saveTransaction')->name('user.savetransaction');

	Route::get('/user/approval-letter', 'ApprovalLetterController@userApprovalLetter')->name('user.approval-letter');
	Route::get('/user/approval-letter/download/{id}', 'ApprovalLetterController@download')->name('user.approval-letter.download');

	Route::get('/user/agreement', 'AgreementController@userAgreement')->name('user.agreement');

	Route::get('/user/qrcode-download}', 'QrcodeController@getQrcodeDownload')->name('qrcode.download')->middleware('auth');
	Route::get('/user/agreement/download/{agreement}', 'AgreementController@downloadAgreement')->name('user.agreement.download');
	Route::get('/user/invoices', 'UserInvoiceController@index')->name('user.order.invoice.index');
	Route::get('/user/invoices/show/{order}', 'UserInvoiceController@showInvoice')->name('user.order.invoice.show');
	Route::get('/user/invoices/print/{order}', 'UserInvoiceController@printInvoice')->name('user.order.invoice.print');
});


Route::get('/', 'Front\FrontController@index')->name('home');
Route::get('/about', 'Front\FrontController@about')->name('about');

Route::get('/vehicle', 'Front\FrontController@vehicle')->name('vehicle');
Route::get('/dealership', 'Front\FrontController@dealership')->name('dealership');
Route::post('/dealership', 'Front\FrontController@dealershipSubmit')->name('dealership.submit');
Route::get('/contact', 'Front\FrontController@contact')->name('contact.us');
Route::get('/check-status', 'Front\FrontController@checkStatus')->name('check.status');
Route::get('/book-now', 'Front\FrontController@bookNow')->name('book.now');
Route::post('/book-now', 'Front\FrontController@bookNowSubmit')->name('book.now.submit');
Route::get('/faqs', 'Front\FrontController@faqs')->name('faqs');
Route::post('/apply-quickly', 'Front\FrontController@applyQuickly')->name('apply-quickly');
Route::post('/submit-contact', 'Front\FrontController@submitContact')->name('submit.contact');
Route::post('/booking-submit-pay', 'Front\FrontController@bookingSubmitPay')->name('booking.submit.pay');

Route::get('/apply-now', 'Front\FrontController@applyNow');
Route::post('/submit-apply-now', 'Front\FrontController@submitApplyNow');



// Route::get('/about','Front\FrontController@about')->name('login');


//Public Routes
Route::post('/save-appointment', 'Front\FrontController@saveAppointment')->name('appointment.save');
Route::post('/save-service', 'Front\FrontController@saveService')->name('service.save');