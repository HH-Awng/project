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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/report', 'FirstController@report')->name('report');

Route::get('/attendance', 'FirstController@attendance')->name('attendance');

Route::get('/teacher', 'FirstController@teacher')->name('teacher');

Route:: get('/student', 'FirstController@student')->name('student');

Route:: get('/subject', 'FirstController@subject')->name('subject');

Route::get('/message', 'FirstController@message')->name('message');

/*departments create*/
/*departments create*/
Route::get('/department-page', 'FirstController@department')->name('department-page');

Route::get('/department', 'DepartmentController@create')->name('department_create');

Route::post('/department', 'DepartmentController@store')->name('department_store');

Route::get('/department-edit/{id}', 'DepartmentController@edit')->name('department_edit');

Route::post('/department-edit/{id}', 'DepartmentController@update')->name('department_update');

Route::get('/department-delete/{id}', 'DepartmentController@destroy')->name('department-delete');
/*departments create*/
/*end departments create*/


/*class create*/
/*class create*/
Route::get('/class-page', 'FirstController@section')->name('section-page');

Route::get('/class', 'SectionController@create')->name('section_create');

Route::post('/class', 'SectionController@store')->name('section_store');

Route::get('/class-edit/{id}', 'SectionController@edit')->name('section_edit');

Route::post('/class-edit/{id}', 'SectionController@update')->name('section_update');

Route::get('/class-delete/{id}', 'SectionController@destroy')->name('section-delete');
/*end class create*/
/*end class create*/


/*teacher create*/
/*teacher create*/
Route::get('/teacher-page', 'FirstController@teachteacher')->name('teacher-page');

Route::get('/teacher-create', 'TeacherController@create')->name('teacher_create');

Route::post('/teacher-store', 'TeacherController@store')->name('teacher_store');

Route::get('/teacher-edit/{id}', 'TeacherController@edit')->name('teacher_edit');

Route::post('/teacher-edit/{id}', 'TeacherController@update')->name('teacher_update');

Route::get('/teacher-delete/{id}', 'TeacherController@destroy')->name('teacher-delete');
/*end teacher create*/
/*end teacher create*/



/*subject create*/
/*subject create*/


Route:: get('/subject', 'FirstController@subject')->name('subject');

Route::post('/subject-store', 'SubjectController@store')->name('subject_store');

Route::get('/subject-edit/{id}', 'SubjectController@edit')->name('subject__edit');

Route::post('/subject-edit/{id}', 'SubjectController@update')->name('subject_update');

Route::get('/subject-delete/{id}', 'SubjectController@destroy')->name('subject-delete');
/*end subject create*/
/*end subject create*/




/*subject create*/
/*subject create*/


Route:: get('/student', 'StudentController@create')->name('student-create');

Route::post('/student-store', 'StudentController@store')->name('student_store');

Route::get('/student-edit/{id}', 'StudentController@edit')->name('student__edit');

Route::post('/student-edit/{id}', 'StudentController@update')->name('student_update');

Route::get('/student-delete/{id}', 'StudentController@destroy')->name('student-delete');
/*end subject create*/
/*end subject create*/
















/*Start UI design*/





/*End UI design*/



