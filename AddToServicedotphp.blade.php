 'github' => [
    'client_id' => env( 'client_id'),
    'client_secret' =>  env('client_secret'),
    'redirect' =>'http://127.0.0.1:8000/github/redirect',
  ],
    'google' => [
    'client_id' => env( 'client_idg'),
    'client_secret' =>  env('client_secretg'),
    'redirect' =>'http://127.0.0.1:8000/google/redirect',
  ], 
   'facebook' => [
    'client_id' => env( 'client_idf'),
    'client_secret' =>  env('client_secretf'),
    'redirect' =>'http://localhost:8000/login/facebook/callback',
  ], 