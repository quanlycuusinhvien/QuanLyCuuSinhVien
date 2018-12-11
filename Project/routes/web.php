<?php
Route::get('/login', function () {
    return view('/auth/login');
})->name('login');
Route::Post('/dangnhap', 'LoginController@authenticate')->name('dangnhap');


Route::group(['prefix' => '/', 'middleware' => 'auth'], function () {

    //home
    Route::get('/home', 'HomeController@getindex')->name('home');
    //Đăng xuất
    Route::get('/dangxuat', 'LoginController@destroy')->name('dangxuat');

    //quản lý cựu sinh viên
    Route::group(['prefix' => 'cuusinhhvien'], function () {
        // phuong thức GET
        Route::get('/', 'StudentsController@index_csv')->name('cuusinhvien/index_csv');
        Route::get('/themcuusinhvien', 'StudentsController@index_them')->name('cuusinhvien/them');
        Route::get('/suacuusinhvien/{student_code}', 'StudentsController@sua_csv')->name('cuusinhvien/sua');
        Route::get('/xemcuusinhvien/{student_code}', 'StudentsController@xem_csv')->name('cuusinhvien/xem');
        //phuong thức post
        Route::post('/xoacuusinhvien', 'StudentsController@xoa');

    });

    //quản lý sinh viên
    Route::group(['prefix' => 'sinhvien'], function () {
        // phuong thức GET
        Route::get('/', 'StudentsController@index_sv')->name('sinhvien/index_sv');
        Route::get('/themsinhvien', 'StudentsController@index_them')->name('sinhvien/them');
        Route::get('/suasinhvien/{student_code}', 'StudentsController@sua_sv')->name('sinhvien/sua');
        Route::get('/xemsinhvien/{student_code}', 'StudentsController@xem_sv')->name('sinhvien/xem');

        //phuong thức post
        Route::post('/xoacuusinhvien', 'StudentsController@xoa');
        Route::post('/postimport', 'ExcelController@postimport')->name('sinhvien/import');
    });

    Route::group(['prefix' => 'sukien'], function () {
        //Route::get('/', 'SukienController@index')->name('sukien/index');
        Route::post('/themsukien', 'SukienController@them');
        Route::post('/xoasukien', 'SukienController@xoa');
    });

    //quản lý thống kê
    Route::group(['prefix' => 'thongke'], function () {
        // phuong thức GET
        Route::get('/', 'ThongkeController@index')->name('thongke/index');
        //phuong thức post
    });

    //quản lý khao sat
    Route::get('/khaosat', function () {
        return view('Admin/khaosat/index');
    })->name('khaosat');
    Route::post('/themks','survey_sessionsController@them')->name('themks');

    // quản lý file
    Route::group(['prefix' => 'quanlybieumau'], function () {
        // phuong thức GET
        Route::get('/', 'FileController@index')->name('quanlyfile/index');
        //phuong thức post
        Route::post('/importfile', 'FileController@doUpload')->name('quanlyfile/import');
        Route::get('/Delete_file/{file_name}', 'FileController@Delete_file')->name('Delete_file');
        Route::get('/Download/{file_name}', 'FileController@getDownload')->name('Download');
        Route::get('/Load/{file_name}', 'FileController@loadfile')->name('Load');

    });

    //Route quận huyện
    Route::get('/district/{id}', 'DistrictController@index')->name('district');

    //Route chuyên ngành
    Route::get('/chuyennganh/{id}', 'ChuyennganhController@index')->name('chuyennganh');

});


