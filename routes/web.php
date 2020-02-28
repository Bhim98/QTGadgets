<?php


//Route::get('/','FrontEndController@welcome' );
use Gloudemans\Shoppingcart\Facades\Cart;

Route::get('/','LandingPageController@index')->name('landing-page');
Route::get('/Aboutus','FrontEndController@Aboutus');
//Route::get('/Shop','FrontEndController@Shop' );

Route::get('/Shop','ShopController@index')->name('shop.index');
Route::get('/Shop/{product}','ShopController@show')->name('shop.show');

Route::get('/Cart','CartController@index')->name('cart.index');
Route::post('/Cart','CartController@store')->name('cart.store');
Route::delete('/cart/{product}', 'CartController@destroy')->name('cart.destroy');
Route::patch('/cart/{product}', 'CartController@update')->name('cart.update');
Route::post('/cart/switchToSaveForLater/{product}', 'CartController@switchToSaveForLater')->name('cart.switchToSaveForLater');

Route::delete('/saveForLater/{product}', 'SaveForLaterController@destroy')->name('saveForLater.destroy');
Route::post('/saveForLater/switchToCart/{product}', 'SaveForLaterController@switchToCart')->name('saveForLater.switchToCart');

Route::get('/checkout', 'CheckoutController@index')->name('checkout.index');
//Route::post('/checkout', 'CheckoutController@store')->name('checkout.store');

Route::get('/thankyou', 'ConfirmationController@index')->name('confirmation.index');

Route::get('empty',function () {
      Cart::instance('saveForLater')-> destroy();
});


Route::get('/Services','FrontEndController@Services' );
Route::get('/Contact','FrontEndController@Contact' );
