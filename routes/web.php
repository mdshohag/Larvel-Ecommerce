<?php

header('Content-Type: text/html; charset=utf-8');
if(file_exists(storage_path('installed'))){
	$check = DB::table('settings')->where('id', 94)->first();
	if($check->value == 'Maintenance'){
		$middleware = ['installer','env'];
	}
	else{
		$middleware = ['installer'];
	}
}
else{
	$middleware = ['installer'];
}
Route::get('/maintance','Web\IndexController@maintance');

Route::group(['namespace' => 'Web','middleware' => ['installer']], function () {
Route::get('/login', 'CustomersController@login');
Route::post('/process-login', 'CustomersController@processLogin');
Route::get('/logout', 'CustomersController@logout')->middleware('Customer');
});
Route::group(['namespace' => 'Web','middleware' => $middleware], function () {
	Route::get('general_error/{msg}', function($msg) {
		 return view('errors.general_error',['msg' => $msg]);
	});
	// route for to show payment form using get method
		Route::get('pay', 'RazorpayController@pay')->name('pay');
    	Route::post('/paytm-callback', 'PaytmController@paytmCallback');
		Route::get('/store_paytm', 'PaytmController@store');
		// route for make payment request using post method
		Route::post('dopayment', 'RazorpayController@dopayment')->name('dopayment');

		Route::get('/','IndexController@index');
		Route::post('/change_language', 'WebSettingController@changeLanguage');
		Route::post('/change_currency', 'WebSettingController@changeCurrency');
		Route::post('/addToCart', 'CartController@addToCart');
		Route::post('/addToCartFixed', 'CartController@addToCartFixed');
		Route::post('/addToCartResponsive', 'CartController@addToCartResponsive');
		
		Route::post('/modal_show', 'ProductsController@ModalShow');
		Route::post('/reviews', 'ProductsController@reviews');
		Route::get('/deleteCart', 'CartController@deleteCart');
		Route::get('/viewcart', 'CartController@viewcart');
		Route::get('/editcart/{id}/{slug}', 'CartController@editcart');
		Route::post('/updateCart', 'CartController@updateCart');
		Route::post('/updatesinglecart', 'CartController@updatesinglecart');
		Route::get('/cartButton', 'CartController@cartButton');

		Route::get('/profile', 'CustomersController@profile')->middleware('Customer');
		Route::get('/change-password', 'CustomersController@changePassword')->middleware('Customer');
		
		Route::get('/wishlist', 'CustomersController@wishlist')->middleware('Customer');
		Route::post('/updateMyProfile', 'CustomersController@updateMyProfile')->middleware('Customer');
		Route::post('/updateMyPassword', 'CustomersController@updateMyPassword')->middleware('Customer');
		Route::get('UnlikeMyProduct/{id}', 'CustomersController@unlikeMyProduct')->middleware('Customer');
		Route::post('likeMyProduct', 'CustomersController@likeMyProduct');
		Route::post('addToCompare', 'CustomersController@addToCompare');
		Route::get('compare', 'CustomersController@Compare')->middleware('Customer');
		Route::get('deletecompare/{id}', 'CustomersController@DeleteCompare')->middleware('Customer');
		Route::get('/orders', 'OrdersController@orders')->middleware('Customer');
		Route::get('/view-order/{id}', 'OrdersController@viewOrder')->middleware('Customer');
		Route::post('/updatestatus/', 'OrdersController@updatestatus')->middleware('Customer');
		Route::get('/shipping-address', 'ShippingAddressController@shippingAddress')->middleware('Customer');
		Route::post('/addMyAddress', 'ShippingAddressController@addMyAddress')->middleware('Customer');
		Route::post('/myDefaultAddress', 'ShippingAddressController@myDefaultAddress')->middleware('Customer');
		Route::post('/update-address', 'ShippingAddressController@updateAddress')->middleware('Customer');
		Route::get('/delete-address/{id}', 'ShippingAddressController@deleteAddress')->middleware('Customer');
		Route::post('/ajaxZones', 'ShippingAddressController@ajaxZones');
		//news section
		Route::get('/news', 'NewsController@news');
		Route::get('/news-detail/{slug}', 'NewsController@newsDetail');
		Route::post('/loadMoreNews', 'NewsController@loadMoreNews');
		Route::get('/page', 'IndexController@page');
		Route::get('/shop', 'ProductsController@shop');
		Route::post('/shop', 'ProductsController@shop');
		Route::get('/product-detail/{slug}', 'ProductsController@productDetail');
		Route::post('/filterProducts', 'ProductsController@filterProducts');
		Route::post('/getquantity', 'ProductsController@getquantity');

		Route::get('/guest_checkout', 'OrdersController@guest_checkout');
		Route::get('/checkout', 'OrdersController@checkout')->middleware('Customer');
		Route::post('/checkout_shipping_address', 'OrdersController@checkout_shipping_address')->middleware('Customer');
		Route::post('/checkout_billing_address', 'OrdersController@checkout_billing_address')->middleware('Customer');
		Route::post('/checkout_payment_method', 'OrdersController@checkout_payment_method')->middleware('Customer');
		Route::post('/paymentComponent', 'OrdersController@paymentComponent')->middleware('Customer');
		Route::post('/place_order', 'OrdersController@place_order')->middleware('Customer');
		Route::get('/orders', 'OrdersController@orders')->middleware('Customer');
		Route::post('/updatestatus/', 'OrdersController@updatestatus')->middleware('Customer');
		Route::post('/myorders', 'OrdersController@myorders')->middleware('Customer');
		Route::get('/stripeForm', 'OrdersController@stripeForm')->middleware('Customer');
		Route::get('/view-order/{id}', 'OrdersController@viewOrder')->middleware('Customer');
		Route::post('/pay-instamojo', 'OrdersController@payIinstamojo')->middleware('Customer');
		Route::get('/thankyou', 'OrdersController@thankyou')->middleware('Customer');

		//paystack
		Route::get('/paystack/transaction', 'OrdersController@paystackTransaction')->middleware('Customer');
		Route::get('/paystack/verify/transaction', 'OrdersController@authorizepaystackTransaction')->middleware('Customer');
		
		//paystack
		Route::get('/midtrans/transaction', 'MidtransController@midtransTransaction')->middleware('Customer');
		// Route::get('/midtrans/verify/transaction', 'OrdersController@authorize<idtransTransaction')->middleware('Customer');
		
		Route::get('/checkout/hyperpay', 'OrdersController@hyperpay')->middleware('Customer');
		Route::get('/checkout/hyperpay/checkpayment', 'OrdersController@checkpayment')->middleware('Customer');
		Route::post('/checkout/payment/changeresponsestatus', 'OrdersController@changeresponsestatus')->middleware('Customer');
		Route::post('/apply_coupon', 'CartController@apply_coupon');
		Route::get('/removeCoupon/{id}', 'CartController@removeCoupon')->middleware('Customer');

		Route::get('/signup', 'CustomersController@signup');
		Route::get('/logoutt', 'CustomersController@logout')->middleware('Customer');
		Route::post('/signupProcess', 'CustomersController@signupProcess');
		Route::get('/forgotPassword', 'CustomersController@forgotPassword');
		Route::get('/recoverPassword', 'CustomersController@recoverPassword');
		Route::post('/processPassword', 'CustomersController@processPassword');


		Route::get('login/{social}', 'CustomersController@socialLogin');
		Route::get('login/{social}/callback', 'CustomersController@handleSocialLoginCallback');
		Route::post('/commentsOrder', 'OrdersController@commentsOrder');
		Route::post('/subscribeNotification/', 'CustomersController@subscribeNotification');
		Route::get('/contact', 'IndexController@contactus');
		Route::post('/processContactUs', 'IndexController@processContactUs');
		
		Route::get('/setcookie', 'IndexController@setcookie');
		Route::get('/newsletter', 'IndexController@newsletter');

		Route::get('/subscribeMail', 'IndexController@subscribeMail');

		

	});

	Route::get('/test', 'Web\IndexController@test1');

/**
 * Merchant Account Route
 */

Route::get('/merchant/account', 'MerchantController@index') ->name('vendor.account');
Route::get('/merchant/register', 'MerchantController@register') ->name('merchant.register');
Route::post('/merchant/register', 'MerchantController@create')->name('mar.register');
Route::post('/merchant/login', 'MerchantController@store')->name('mar.login');

/**
 * Merchant Account Admin
 */
Route::get('/merchant/dasboard', 'MerchantController@dasboard');


/**
 * Product add test
 */

// Route::get('/merchant/product/add', 'MarProductsController@index')->name('product.add');
//  Brand add 
Route::group(['prefix' => 'admin/vendor/brands'], function () {
	Route::get('/display', 'BrandController@display');
	Route::get('/add', 'BrandController@add');
	Route::post('/add', 'BrandController@insert');
	Route::get('/edit/{id}', 'BrandController@edit');
	Route::post('/update', 'BrandController@update');
	Route::post('/delete', 'BrandController@delete');
	Route::get('/filter', 'BrandController@filter');
});

// Vendor Category
    Route::group(['prefix' => 'admin/vendor/categories'], function () {
        Route::get('/display', 'CategoriesController@display');
        Route::get('/add', 'CategoriesController@add');
        Route::post('/add', 'CategoriesController@insert');
        Route::get('/edit/{id}', 'CategoriesController@edit');
        Route::post('/update', 'CategoriesController@update');
        Route::post('/delete', 'CategoriesController@delete');
        Route::get('/filter', 'CategoriesController@filter');
    });

//Product Controller
    Route::group(['prefix' => 'admin/vendor/products'], function () {
        Route::get('/display', 'ProductController@display');
        Route::get('/add', 'ProductController@add');
        Route::post('/add', 'ProductController@insert');
        Route::get('/edit/{id}', 'ProductController@edit');
        Route::post('/update', 'ProductController@update');
        Route::post('/delete', 'ProductController@delete');
        Route::get('/filter', 'ProductController@filter');
        Route::group(['prefix' => 'inventory'], function () {
            Route::get('/display', 'ProductController@addinventoryfromsidebar');
            // Route::post('/addnewstock', 'ProductController@addinventory')->middleware('view_product');
            Route::get('/ajax_min_max/{id}/', 'ProductController@ajax_min_max');
            Route::get('/ajax_attr/{id}/', 'ProductController@ajax_attr');
            Route::post('/addnewstock', 'ProductController@addnewstock');
            Route::post('/addminmax', 'ProductController@addminmax');
            Route::get('/addproductimages/{id}/', 'ProductController@addproductimages');
        });
        Route::group(['prefix' => 'images'], function () {
            Route::get('/display/{id}/', 'ProductController@displayProductImages');
            Route::get('/add/{id}/', 'ProductController@addProductImages');
            Route::post('/insertproductimage', 'ProductController@insertProductImages');
            Route::get('/editproductimage/{id}', 'ProductController@editProductImages');
            Route::post('/updateproductimage', 'ProductController@updateproductimage');
            Route::post('/deleteproductimagemodal', 'ProductController@deleteproductimagemodal');
            Route::post('/deleteproductimage', 'ProductController@deleteproductimage');
        });
        Route::group(['prefix' => 'attach/attribute'], function () {
            Route::get('/display/{id}', 'ProductController@addproductattribute');
            Route::group(['prefix' => '/default'], function () {
                Route::post('/', 'ProductController@addnewdefaultattribute');
                Route::post('/edit', 'ProductController@editdefaultattribute');
                Route::post('/update', 'ProductController@updatedefaultattribute');
                Route::post('/deletedefaultattributemodal', 'ProductController@deletedefaultattributemodal');
                Route::post('/delete', 'ProductController@deletedefaultattribute');
                Route::group(['prefix' => '/options'], function () {
                    Route::post('/add', 'ProductController@showoptions');
                    Route::post('/edit', 'ProductController@editoptionform');
                    Route::post('/update', 'ProductController@updateoption');
                    Route::post('/showdeletemodal', 'ProductController@showdeletemodal');
                    Route::post('/delete', 'ProductController@deleteoption');
                    Route::post('/getOptionsValue', 'ProductController@getOptionsValue');
                    Route::post('/currentstock', 'ProductController@currentstock');

                });
            });
        });
    });