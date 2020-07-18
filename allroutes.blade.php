Route::get('/github/login', 'Auth\LoginController@github');
Route::get('/github/redirect1', 'Auth\LoginController@redirect1');
Route::get('/google/login', 'Auth\LoginController@googleindex');
Route::get('/google/redirect', 'Auth\LoginController@googleredirect');
Route::get('/facebook/login', 'Auth\LoginController@facebookindex');
Route::get('/login/facebook/callback', 'Auth\LoginController@facebookredirect');