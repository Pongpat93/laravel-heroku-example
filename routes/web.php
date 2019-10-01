*/
Route::get('/', function () {
    return view('welcome');
});
Route::get('showname/{name}','HelloController@showHello');
