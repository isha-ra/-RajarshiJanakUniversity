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

//Route::get('/', function () {
//    return view('frontend.index');
//});

Route::get('/', 'Home\HomeController@frontend');
Route::get('/departments', 'Home\HomeController@cources');
Route::get('/events', 'Home\HomeController@events');
Route::get('/allevent/{id}','NewsEventNotice\EventController@allevent');
Route::get('/eventdetail/{id}','NewsEventNotice\NewsEventNoticeController@event_detail');
Route::get('/event_detail/{id}','NewsEventNotice\EventController@event_detail');

//Route::get('/departments', function () {
//    return view('frontend.department');
//});








Route::get('/programs', function () {
    return view('frontend.program');
});

Route::get('/subject', function () {
    return view('frontend.subject');
});


Route::get('/eve', function () {
    return view('frontend.event');
});
Route::get('/about', function () {
    return view('frontend.aboutus');
});
Route::get('/gallery', function () {
    return view('frontend.gallery');
});
Route::get('/single-gallery', function () {
    return view('frontend.single-gallery');
});

Route::get('/dash', function () {
    return view('backend.index');
});

//Route::get('/slider', function () {
//    return view('backend.cms.slider.index');
//});


Route::get('/register', function () {
    return view('backend.authentication.register');
});

Route::get('/login', function () {
    return view('backend.authentication.login');
});

//Route::get('dash/feature', function () {
//    return view('backend.features.index');
//});
//
//Route::get('dash/feature/create', function () {
//    return view('backend.features.create');
//});
//Route::get('dash/feature/view', function () {
//    return view('backend.features.index');
//});
//
//Route::get('dash/feature/edit', function () {
//    return view('backend.features.edit');
//});



//Route::get('/single-staff',function(){
//    return view('backend.staff.staff-index');
//});


//Route::get('/single-program',function(){
//    return view('backend.department.single-program');
//});


//Route::group(['middleware'=>['auth']],function(){
//    Route::get('/department/create','Department\DepartmentsController@create');
Route::group(['middleware'=>['authenticated']],function(){
    Route::get('/department/create','Department\DepartmentsController@create');
    //staff types
    Route::get('/stafftype/','Staff\StafftypeController@index');
    Route::get('/stafftype/create','Staff\StafftypeController@create');
    Route::post('/stafftype/insert/','Staff\StafftypeController@store');
    Route::get('/stafftype/{id}/edit','Staff\StafftypeController@edit');
    Route::post('/stafftype/{id}','Staff\StafftypeController@update');
    Route::post('/delete-stafftype/{id}','Staff\StafftypeController@destroy');
    Route::post('/import','Staff\StafftypeController@import')->name('import');


//staff
    Route::get('/staff/','Staff\StaffController@index');
    Route::get('/staff/create','Staff\StaffController@create');
    Route::post('/staff/insert/','Staff\StaffController@store');

    Route::get('/staff/{id}/edit','Staff\StaffController@edit');
    Route::post('/staff/{id}','Staff\StaffController@update');
    Route::get('/staff/{id}/staff-index','Staff\StaffindexController@index');
    Route::post('/delete-staff/{id}','Staff\StaffController@destroy');
    Route::get('/export','Staff\StaffController@export')->name('export');
//experiences
    Route::get('/staff/{id}/addexperience','Staff\ExperiencesController@addexperience');
    Route::post('/experience/store/','Staff\ExperiencesController@store');
    Route::get('/staff/{id}/editexperience','Staff\ExperiencesController@edit');
    Route::post('/experiences/{id}','Staff\ExperiencesController@update');
//Route::get('/editexperience',function(){
//    return view('backend.staff.editexperience');
//});

    Route::post('/department/in/','Department\ProgramController@store');
    Route::get('/programs_detail/{id}','Department\ProgramController@programs_detail');
    Route::get('/department/{id}/single-program','Department\ProgramController@singleprogram');
    Route::get('/programs_intro/{id}','Department\ProgramController@programs_intro');
    Route::get('/programs_details/{id}','Department\ProgramController@programs_details');
//program requirement
    Route::get('/department/viewprogramrequirement','Department\ProgramRequirementController@index');
    Route::get('/department/{id}/addrequirement','Department\ProgramRequirementController@addrequirement');
    Route::post('/department/ins','Department\ProgramRequirementController@store');
    Route::get('/department/{id}/editrequirement','Department\ProgramRequirementController@edit');
    Route::post('/requirementedit/{id}','Department\ProgramRequirementController@update');

    Route::post('/delete-programrequirement/{id}','Department\ProgramRequirementController@destroy');


//program research

    Route::get('/department/{id}/viewresearch','Department\ProgramResearchController@index');
    Route::get('/department/{id}/addresearch','Department\ProgramResearchController@addresearch');
    Route::post('/department/inst','Department\ProgramResearchController@store');
    Route::get('/department/{id}/editresearch','Department\ProgramResearchController@edit');
    Route::post('/researchedit/{id}','Department\ProgramResearchController@update');
    Route::post('/delete-programresearch/{id}','Department\ProgramResearchController@destroy');



    Route::get('/department/{id}/editresearch','Department\ProgramResearchController@edit');
    Route::post('/researchedit/{id}','Department\ProgramResearchController@update');

//Department
    Route::get('/department/','Department\DepartmentsController@index')->Middleware('authenticate');

//Route::get('/department/create','Department\DepartmentsController@create');
    Route::post('/department/insert/','Department\DepartmentsController@store');
    Route::get('/department/{id}/edit','Department\DepartmentsController@edit');
    Route::post('/department/{id}','Department\DepartmentsController@update');
    Route::post('/delete-department/{id}','Department\DepartmentsController@destroy');



//education

    Route::get('/staff/{id}/addeducation','Staff\EducationController@addeducation');
    Route::post('/education/in/','Staff\EducationController@store');
    Route::get('/staff/{id}/editeducation','Staff\EducationController@edit');
    Route::post('/education/{id}','Staff\EducationController@update');
//Route::get('/editeducation',function(){
//    return view('backend.staff.editeducation');
//});

//programs
    Route::get('/department/{id}/viewprogram','Department\ProgramController@index');
    Route::get('/department/{id}/addprograms','Department\ProgramController@addprograms');
    Route::get('/department/{id}/programedit','Department\ProgramController@edit');
    Route::post('/program/{id}','Department\ProgramController@update');
    Route::post('/delete-program/{id}','Department\ProgramController@destroy');




});


//registration
Route::get('/register','Auth\RegistrationController@register');
Route::post('/register','Auth\RegistrationController@postregister');

//login and logout
Route::get('/login','Auth\LoginController@login')->name('login');
Route::post('/login','Auth\LoginController@postlogin');
Route::post('/logout','Auth\LoginController@logout');


Route::get('dash/newseventnotice/view', function () {
    return view('backend.newseventnotice.index');
});
Route::get('dash/newseventnotice/edit', function () {
    return view('backend.newseventnotice.edit');
});
Route::get('dash/newseventnotice/create', function () {
    return view('backend.newseventnotice.create');
});
//features
Route::get('/features/','Features\FeaturesController@index');
Route::get('/features/create','Features\FeaturesController@create');
Route::post('/features/insert/','Features\FeaturesController@store');
Route::get('/features/{id}/edit','Features\FeaturesController@edit');
Route::post('/features/{id}','Features\FeaturesController@update');
Route::get('/features_detail/{id}','Features\FeaturesController@features_detail');


//slider cms
Route::resource('/slider', 'Slider\SliderController' );

//News Events

Route::resource('/newseventnotice','NewsEventNotice\NewsEventNoticeController' );
Route::get('manage-news','NewsEventNotice\NewsEventNoticeController@news');
Route::get('manage-notice','NewsEventNotice\NewsEventNoticeController@notice');

//Route::get('manage-event','NewsEventNotice\NewsEventNoticeController@event');

//Route::get('/event/create','NewsEventNotice\EventController@create');
//Route::post('/event/insert','NewsEventNotice\EventController@store');

Route::resource('/event','NewsEventNotice\EventController' );

//Route::get('/download',function()
//{
//    return Excel::download(new DepartmentExport(), 'department.xlsx');
//});
//Route::get('/download','Report\ReportController' );


//About Us

Route::resource('/aboutus','AboutUs\AboutUsController');
Route::get('manage-intro','AboutUs\AboutUsController@intro');
Route::get('manage-history','AboutUs\AboutUsController@history');
Route::get('manage-voice','AboutUs\AboutUsController@voice');