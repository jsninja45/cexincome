<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

/**
* Sentinel filter
*
* Checks if the user is logged in
*/
Route::filter('Sentinel', function()
{
	if ( ! Sentinel::check()) {
 		return Redirect::to('admin/signin')->with('error', 'You must be logged in!');
 	}
});

/**
 * Model binding into route
 */
//Route::model('blogcategory', 'App\BlogCategory');
//Route::model('blog', 'App\Blog');
Route::pattern('slug', '[a-z0-9- _]+');

Route::group(array('prefix' => 'admin'), function () {

	# Error pages should be shown without requiring login
	Route::get('404', function () {
	    return View('admin/404');
	});
	Route::get('500', function () {
	    return View::make('admin/500');
	});

	# Lock screen
	Route::get('lockscreen', function () {
	    return View::make('admin/lockscreen');
	});
        
        Route::get('api', array('as' => 'api','uses' => 'ApiController@getIndex'));
        
         Route::get('curcheck', array('as' => 'curcheck','uses' => 'ApiController@curcheck'));

		# All basic routes defined here
	Route::get('signin', array('as' => 'signin','uses' => 'AuthController@getSignin'));
	Route::post('signin','AuthController@postSignin');
	Route::post('signup',array('as' => 'signup','uses' => 'AuthController@postSignup'));
	Route::post('forgot-password',array('as' => 'forgot-password','uses' => 'AuthController@postForgotPassword'));
	Route::get('login2', function () {
	    return View::make('admin/login2');
	});

	# Register2
	Route::get('register2', function () {
	    return View::make('admin/register2');
	});
	Route::post('register2',array('as' => 'register2','uses' => 'AuthController@postRegister2'));
	
	# Forgot Password Confirmation
    Route::get('forgot-password/{userId}/{passwordResetCode}', array('as' => 'forgot-password-confirm', 'uses' => 'AuthController@getForgotPasswordConfirm'));
    Route::post('forgot-password/{userId}/{passwordResetCode}', 'AuthController@postForgotPasswordConfirm');

    # Logout
	Route::get('logout', array('as' => 'logout','uses' => 'AuthController@getLogout'));

	# Account Activation
    Route::get('activate/{userId}/{activationCode}', array('as' => 'activate', 'uses' => 'AuthController@getActivate'));

    # Dashboard / Index
	Route::get('/', array('as' => 'dashboard','uses' => 'JoshController@showHome'));
	
	# Sender
	    Route::group(array('prefix' => 'senders','before' => 'Sentinel'), function () { 
    	Route::get('/', array('as' => 'senders', 'uses' => 'SendersController@getIndex'));
    	Route::get('create', array('as' => 'create/sender', 'uses' => 'SendersController@getCreate'));
        Route::post('create', 'SendersController@postCreate');
        Route::get('{userId}/edit', array('as' => 'senders.update', 'uses' => 'SendersController@getEdit'));
		
		 Route::get('{userId}/view', array('as' => 'senders.view', 'uses' => 'SendersController@view'));
		 
        Route::post('{userId}/edit', 'SendersController@postEdit');

                
	});
	
		# Beneficiary
	    Route::group(array('prefix' => 'beneficiaries','before' => 'Sentinel'), function () { 
    	Route::get('/', array('as' => 'beneficiaries', 'uses' => 'BeneficiaryController@getIndex'));
    	Route::get('create', array('as' => 'create/beneficiary', 'uses' => 'BeneficiaryController@getCreate'));
        Route::post('create', 'BeneficiaryController@postCreate');
        Route::get('{userId}/edit', array('as' => 'beneficiaries.update', 'uses' => 'BeneficiaryController@getEdit'));
		
		  Route::get('{userId}/view', array('as' => 'beneficiaries.view', 'uses' => 'BeneficiaryController@view'));
        Route::post('{userId}/edit', 'BeneficiaryController@postEdit');

                
	});



	# User Management
    Route::group(array('prefix' => 'users','before' => 'Sentinel'), function () {
    	Route::get('/', array('as' => 'users', 'uses' => 'UsersController@getIndex'));
    	Route::get('create', array('as' => 'create/user', 'uses' => 'UsersController@getCreate'));
        Route::post('create', 'UsersController@postCreate');
        Route::get('{userId}/edit', array('as' => 'users.update', 'uses' => 'UsersController@getEdit'));
        Route::post('{userId}/edit', 'UsersController@postEdit');
    	Route::get('{userId}/delete', array('as' => 'delete/user', 'uses' => 'UsersController@getDelete'));
		Route::get('{userId}/confirm-delete', array('as' => 'confirm-delete/user', 'uses' => 'UsersController@getModalDelete'));
		Route::get('{userId}/restore', array('as' => 'restore/user', 'uses' => 'UsersController@getRestore'));
		Route::get('{userId}', array('as' => 'users.show', 'uses' => 'UsersController@show'));
                
	});
	Route::get('deleted_users',array('as' => 'deleted_users','before' => 'Sentinel', 'uses' => 'UsersController@getDeletedUsers'));

	# Group Management
    Route::group(array('prefix' => 'companys','before' => 'Sentinel'), function () {
        Route::get('/', array('as' => 'companys', 'uses' => 'CompanyController@getIndex'));
        Route::get('create', array('as' => 'create/company', 'uses' => 'CompanyController@getCreate'));
        Route::post('create', 'CompanyController@postCreate');
        Route::get('{companyId}/edit', array('as' => 'update/company', 'uses' => 'CompanyController@getEdit'));
        Route::post('{companyId}/edit', 'CompanyController@postEdit');
        Route::get('{groupId}/delete', array('as' => 'delete/company', 'uses' => 'CompanyController@getDelete'));
        Route::get('{groupId}/confirm-delete', array('as' => 'confirm-delete/company', 'uses' => 'CompanyController@getModalDelete'));
        Route::get('{groupId}/restore', array('as' => 'restore/company', 'uses' => 'CompanyController@getRestore'));
		Route::get('any_user', 'UsersController@getUserAccess');
		Route::get('admin_only', 'UsersController@getAdminOnlyAccess');
    }); 
    /*routes for blog*/
	
    Route::group(array('prefix' => 'groups','before' => 'Sentinel'), function () {
        Route::get('/', array('as' => 'groups', 'uses' => 'GroupsController@getIndex'));
        Route::get('create', array('as' => 'create/group', 'uses' => 'GroupsController@getCreate'));
        Route::post('create', 'GroupsController@postCreate');
        Route::get('{groupId}/edit', array('as' => 'update/group', 'uses' => 'GroupsController@getEdit'));
        Route::post('{groupId}/edit', 'GroupsController@postEdit');
        Route::get('{groupId}/delete', array('as' => 'delete/group', 'uses' => 'GroupsController@getDelete'));
        Route::get('{groupId}/confirm-delete', array('as' => 'confirm-delete/group', 'uses' => 'GroupsController@getModalDelete'));
        Route::get('{groupId}/restore', array('as' => 'restore/group', 'uses' => 'GroupsController@getRestore'));
		Route::get('any_user', 'UsersController@getUserAccess');
		Route::get('admin_only', 'UsersController@getAdminOnlyAccess');
               
    });
    
    
        Route::group(array('prefix' => 'groups','before' => 'Sentinel'), function () {
        Route::get('/', array('as' => 'groups', 'uses' => 'GroupsController@getIndex'));
        Route::get('create', array('as' => 'create/group', 'uses' => 'GroupsController@getCreate'));
        Route::post('create', 'GroupsController@postCreate');
        Route::get('{groupId}/edit', array('as' => 'update/group', 'uses' => 'GroupsController@getEdit'));
        Route::post('{groupId}/edit', 'GroupsController@postEdit');
        Route::get('{groupId}/delete', array('as' => 'delete/group', 'uses' => 'GroupsController@getDelete'));
        Route::get('{groupId}/confirm-delete', array('as' => 'confirm-delete/group', 'uses' => 'GroupsController@getModalDelete'));
        Route::get('{groupId}/restore', array('as' => 'restore/group', 'uses' => 'GroupsController@getRestore'));
		Route::get('any_user', 'UsersController@getUserAccess');
		Route::get('admin_only', 'UsersController@getAdminOnlyAccess');
               
    });
    
    
    
            Route::group(array('prefix' => 'Submittransaction','before' => 'Sentinel'), function () {
        Route::get('/', array('as' => 'Submittransaction', 'uses' => 'TransController@getIndex'));
          Route::post('/create', array('as' => 'Submittransaction/create', 'uses' => 'TransController@create'));
		  
		     Route::post('/rateadd', array('as' => 'Submittransaction/rateadd', 'uses' => 'TransController@rateadd'));
		  
		  
		   Route::get('/addexp', array('as' => 'Submittransaction/addexp', 'uses' => 'TransController@addexp'));
		  
		  	Route::get('{transId}/edit', array('as' => 'Submittransaction.update','uses' => 'TransController@getEdit'));
			
				Route::get('{transId}/view', array('as' => 'Submittransaction.view','uses' => 'TransController@view'));
				
				Route::post('/dash', array('as' => 'Submittransaction/dash','uses' => 'TransController@dash'));
			
			 Route::post('{transId}/edit', 'TransController@postEdit');
       
               
    });
	
	            Route::group(array('prefix' => 'Payment','before' => 'Sentinel'), function () {

          Route::post('/create', array('as' => 'Payment/create', 'uses' => 'PaymentController@create'));
		   Route::post('/pview', array('as' => 'Payment/pview', 'uses' => 'PaymentController@pview'));
		   
		    Route::post('/pviewdit', array('as' => 'Payment/pviewdit', 'uses' => 'PaymentController@pviewdit'));
			
			Route::get('/delpay', array('as' => 'Payment/delpay', 'uses' => 'PaymentController@delpay'));
		
       
               
    });
	
	  Route::group(array('prefix' => 'quote_expiry','before' => 'Sentinel'), function () {

          Route::get('{qeId}/edit', array('as' => 'quote_expiry.edit', 'uses' => 'QeController@getEdit'));
		  
		   Route::post('{qeId}/edit', 'QeController@postEdit');
		  
		
       
               
    });
    
    	Route::get('companyes', array('as' => 'companyes', 'uses' => 'CompanyController@getIndex'));
    
    
    /*routes for blog category*/
	Route::group(array('prefix' => 'blogcategory','before' => 'Sentinel'), function () {
	
		Route::get('create', array('as' => 'create/blogcategory', 'uses' => 'BlogCategoryController@getCreate'));
		Route::post('create', 'BlogCategoryController@postCreate');
		Route::get('{blogcategory}/edit', array('as' => 'update/blogcategory', 'uses' => 'BlogCategoryController@getEdit'));
		Route::post('{blogcategory}/edit', 'BlogCategoryController@postEdit');
		Route::get('{blogcategory}/delete', array('as' => 'delete/blogcategory', 'uses' => 'BlogCategoryController@getDelete'));
		Route::get('{blogcategory}/confirm-delete', array('as' => 'confirm-delete/blogcategory', 'uses' => 'BlogCategoryController@getModalDelete'));
		Route::get('{blogcategory}/restore', array('as' => 'restore/blogcategory', 'uses' => 'BlogCategoryController@getRestore'));
	});

	Route::post('crop_demo','JoshController@crop_demo');
	# Remaining pages will be called from below controller method
	# in real world scenario, you may be required to define all routes manually

	Route::get('{name?}', 'JoshController@showView');

});

#frontend views
Route::get('/', array('as' => 'home', function () {
    return View::make('index');
}));

Route::get('blog', array('as' => 'blog', 'uses' => 'BlogController@getIndexFrontend'));
Route::get('blog/{slug}/tag', 'BlogController@getBlogTagFrontend');
Route::get('blogitem/{slug?}', 'BlogController@getBlogFrontend');
Route::post('blogitem/{blog}/comment', 'BlogController@storeCommentFrontend');


Route::get('{name?}', 'JoshController@showFrontEndView');
# End of frontend views