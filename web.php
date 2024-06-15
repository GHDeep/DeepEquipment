<?php
Route::group(['middleware' => ['guest']], function () {
    Route::get("/", "PageController@login")->name('login');
    Route::post("/login", "AuthController@ceklogin");
});

Route::group(['middleware' => ['auth']], function () {
    Route::get("/user", "PageController@formedituser");
    Route::post("/updateuser", "PageController@updateuser");
    Route::get("/logout", "AuthController@ceklogout");
    Route::get("/home", "PageController@home");
    Route::get("/equipment", "PageController@equipment");
    Route::get("/equipment/add-form", "PageController@formadd");
    Route::post("/save", "PageController@saveequipment");
    Route::get("/about", "PageController@about");

    // Profile routes
    Route::get("/profile", "PageController@profile")->name('profile.show');
    Route::put("/profile", "ProfileController@update")->name('profile.update');
    Route::post("/profile/update-password", "ProfileController@updatePassword")->name('profile.update.password');

    Route::get("/equipment/edit-form/{id}", "PageController@formeditequipment");
    Route::put("/update/{id}", "PageController@updateequipment");
    Route::get("/delete/{id}", "PageController@deleteequipment");
});
