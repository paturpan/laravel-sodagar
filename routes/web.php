<?php

route::get('/', function () { return view('customer.index');});

route::get('/students', 'studentscontroller@index');
route::get('/students/{student}', 'studentscontroller@show');

//route ke halaman login dan dinamain routenya login agar di kenali oleh middleware
// Auth::routes();
    route::get('/login', 'authscontroller@login')->name('login');

//route jika sudah melakukan login
    route::post('/postlogin', 'authscontroller@postlogin');

//route ke logout
    route::get('/logout', 'authscontroller@logout');

    route::group(['middleware' => 'auth'], function(){
        //dashboard nya di tambahkan middleware agar tidak bisa diakses sebelum login
        route::get('/dashboard', 'dashboardcontroller@index');
        //menjalankan 1 controller dengan method about sebagai halaman about
        Route::get('/About', 'PagesController@About');
        //menjalankan 1 controller dengan method index sebagai halaman index.blade
        route::get('/plays', 'playsController@index');
        //menjalankan 1 controller dengan method create untuk menambah value di halaman create.blade
	    route::get('/plays/create', 'playsController@create');
        //menjalankan 1controller dengan method store untuk menyimpan value ke db
        route::post('/plays', 'playsController@store');
        //lempar ke halaman edit dengan menarik value id
        route::get('/plays/{RESI}/edit', 'playsController@edit');
        //method update data yang di edit
        route::post('/plays/{RESI}/update', 'playsController@update');
        //untuk hapus data
         route::get('/plays/{RESI}/delete', 'playsController@delete');  
    });

    //
    Route::get('/home', 'HomeController@index');

    //untuk hasil pencarian
    // Route::get('/customer', 'customercontroller@index');

    Route::get('/customer', 'customercontroller@search');
    
    Route::get('/customer/show', 'customercontroller@search');


    

//menjalankan 1 controller dengan method home sebagai halaman root
    // Route::get('/', 'PagesController@home'); 

//menjalankan 1 controller dengan method index sebagai halaman students
    // route::get('/students', 'studentscontroller@index');

//menjalankan 1controller dengan method show sebagai halaman students dengan menarik 1 id yg mana key dari datanya
    // route::get('/plays/{play}', 'playsController@show');

/*magic dari artisan semua route penggantinya ini
route::resource('students', 'studentscontroller');*/
// 


