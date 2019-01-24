<?php

use Illuminate\Http\Request;
use App\Post;

// Get 10 Latest Posts. 
Route::group(['middleware' => 'api'], function(){
  // Fetch Contacts
  Route::get('contacts', function(){
    return Post::take(10)->orderBy('id', 'desc')->get(['id','title','content','featured','created_at']);
  });

 /* // Get Single Contact
  Route::get('contact/{id}', function($id){
    return Contact::findOrFail($id);
  });

  // Add Contact
  Route::post('contact/store', function(Request $request){
    return Contact::create(['name' => $request->input(['name']), 'email' => $request->input(['email']), 'phone' => $request->input(['phone'])]);
  });

  Route::post('patient/store', function(Request $request) {
        return Patient::create(['name' => $request->input(['name']), 'email' => $request->input(['email']),'phone' => $request->input(['phone']) ]);
    });

  // Update Contact
  Route::patch('contact/{id}', function(Request $request, $id){
    Contact::findOrFail($id)->update(['name' => $request->input(['name']), 'email' => $request->input(['email']), 'phone' => $request->input(['phone'])]);
  });

  // Delete Contact
  Route::delete('contact/{id}', function($id){
    return Contact::destroy($id);
  });*/
});

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
