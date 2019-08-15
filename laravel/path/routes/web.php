<?php

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

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/hello/{nome?}', function ($nome = "World") {
//     return "Hello,". $nome . "página laravel";
// });


// Route::match(['get', 'post'], '/hello/{name?}', function ($name = "World"){
//     return "Hello $name";
// });

// Route::get('allUsers', function(){
//     return DB::select("SELECT * FROM users");
//     //DB É A CLASSE ESTÁTICA QUE UTILIZAMOS PRA MANIPULAR O BANCO
// });

// Route::get('diego', function(){
//     return DB::select("SELECT * FROM users WHERE id = 1");
// });

Route::get('/addUser', function(){
    $result = DB::table('users')->insert([
        'id' => '0',
        'name' => 'Teste',
        'email' => 'teste@gmail.com',
        'password' => bcrypt('123456')

    ]);

    if($result){
        echo 'Sucelso';
    }else{
        echo 'Sem Sucelso';
    }
});

Route::get('/updateUser', function(){
    return DB::table('users')->where('id', 1)->update(
        ['email' => 'diego@gmail.com']
    );
});

// uses = por que você está dizendo que está usando a controller
// sempre que for usar um método da controller se usa o uses
//Quando uma requisição via get para esta rota for feita, ela vai retornar o metodo do controller

Route::get('/allUsers',['uses'=>'UsersController@allUsers']);


Route::resource('products','ProductsController');