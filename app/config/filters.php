<?php

Route::filter('mode',function(){

    if(Config::get('maintenance.mode') == 0)
     {
     //return View::make('pages.extra.maintenance_mode');
         return 'We are under maintenance mode';
   }




Route::group(array('before'=>'mode'),function(){
    
    /* ALL YOUR ROUTES GOES HERE */
   Route::get('/',function(){
    


    Route::get('/', array('uses'=>'StoreController@getIndex'));
    

    });
      
      Route::get('/another-route',function(){
    	//return 'Another Page';


  Route::controller('admin/categories', 'CategoriesController');
Route::controller('admin/products', 'ProductsController');

Route::controller('store', 'StoreController');
Route::controller('users', 'UsersController');



    });
      
      /////////////////
});





   

});