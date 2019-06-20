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

// Route::get('/', function () {
   
//     return view('home');
// });
 Route::get('/',['as'=>'home','uses'=>'IndexController@home']);

Route::get('/History',['as'=>'History','uses'=>'IndexController@history']);
Route::get('/St-Thomas-The-Apostle',['as'=>'St-Thomas-The-Apostle','uses'=>'IndexController@stThomasTheApostle']);
Route::get('/Syro-Malabar-Church',['as'=>'Syro-Malabar-Church','uses'=>'IndexController@syromalabarChurch']);
Route::get('/Activities-Year1/{year}',['as'=>'Activities-Year1','uses'=>'IndexController@activitiesYear1']);
Route::get('/Reports-Year1',['as'=>'Reports-Year1','uses'=>'IndexController@reportsYear1']);
Route::get('/Reports-Year2',['as'=>'Reports-Year2','uses'=>'IndexController@reportsYear2']);
Route::get('/Singapore-Diocese',['as'=>'Singapore-Diocese','uses'=>'IndexController@singaporeDiocese']);
Route::get('/Spiritual-support-and-Guidance',['as'=>'Counselling','uses'=>'IndexController@counselling']);
Route::get('/Marriage-Preparation',['as'=>'Marriage-Preparation','uses'=>'IndexController@marriagePreparation']);
Route::get('/Family-Unit1',['as'=>'Family-Unit1','uses'=>'IndexController@familyUnit1']);
Route::get('/Family-Unit2',['as'=>'Family-Unit2','uses'=>'IndexController@familyUnit2']);
Route::get('/Catechism',['as'=>'Catechism','uses'=>'IndexController@catechism']);
Route::get('/First-Holy-Communion',['as'=>'First-Holy-Communion','uses'=>'IndexController@firstHolyCommunion']);
Route::get('/Women',['as'=>'Women','uses'=>'IndexController@women']);
Route::get('/Youth-Children',['as'=>'Youth-Children','uses'=>'IndexController@youthChildren']);
Route::get('/Liturgical-Calendar',['as'=>'Liturgical-Calendar','uses'=>'IndexController@liturgicalCalendar']);
Route::get('/Catechism-Books/{id}',['as'=>'Catechism-Books','uses'=>'IndexController@catechismBooks']);
Route::get('/Forms',['as'=>'Forms','uses'=>'IndexController@forms']);
Route::get('/E-Mail-to-Spiritual-Director',['as'=>'E-Mail-to-Spiritual-Director','uses'=>'IndexController@emailToSpiritualDirector']);
Route::get('/Feedback',['as'=>'Feedback','uses'=>'IndexController@feedback']);
Route::get('/registration',['as'=>'registration','uses'=>'IndexController@registration']);
Route::post('/registration/save',['as'=>'save-registration','uses'=>'IndexController@saveRegistration']);
Route::post('/spiritualdirector/sendemail',['as'=>'send-email-spiritual-director','uses'=>'IndexController@sendEmailToSpiritualDirector']);
Route::post('/feedback/save',['as'=>'save-feedback','uses'=>'IndexController@saveFeedback']);
Route::get('/bharavahikal',['as'=>'bharavahikal','uses'=>'IndexController@bharavahikal']);
Route::get('/saints-of-smc',['as'=>'saints-of-smc','uses'=>'IndexController@saintsOfSmc']);
Route::get('/events',['as'=>'events','uses'=>'IndexController@events']);
Route::get('/terms-and-conditions',['as'=>'terms-and-conditions','uses'=>'IndexController@termsAndConditions']);
Route::get('/house-blessing-request',['as'=>'house-blessing-request','uses'=>'IndexController@houseBlessingRequest']);
Route::post('/house-blessing-request/save',['as'=>'house-blessing-request.save','uses'=>'IndexController@houseBlessingRequestSave']);
Route::get('/apply-noc',['as'=>'apply-noc','uses'=>'IndexController@applyNoc']);
Route::post('/apply-noc/save',['as'=>'noc-save','uses'=>'IndexController@nocSave']);
Route::post('/send-otp',['as'=>'send-otp','uses'=>'IndexController@sendOtp']);
Route::get('/novena/{name}/{lang}',['as'=>'novena','uses'=>'IndexController@novena']);
Route::get('/prayers',['as'=>'prayers','uses'=>'IndexController@prayers']);
Route::get('/kurishinte-vazhi',['as'=>'kurishinte-vazhi','uses'=>'IndexController@kurishinteVazhi']);
Route::get('/Cheriya-oppees',['as'=>'Cheriya-oppees','uses'=>'IndexController@cheriyaoppees']);
Route::get('/St-Joseph-Prayer',['as'=>'St-Joseph-Prayer','uses'=>'IndexController@stjosephprayer']);
Route::get('/MPC',['as'=>'mpc','uses'=>'IndexController@mpc']);
Route::get('/navanaal/{name}/{lang}',['as'=>'navanaal','uses'=>'IndexController@navanaal']);
Route::get('/saint-prayer/{name}/{lang}',['as'=>'saint-prayer','uses'=>'IndexController@saintPrayer']);
Route::get('/seasons',['as'=>'seasons','uses'=>'IndexController@seasons']);



Route::group(['as'=>'admin.','namespace'=>'Admin'],function(){
  Route::get('admin/',['as'=>'login','uses'=>'LoginController@login']);
  Route::post('admin/check-login',['as'=>'check.login','uses'=>'LoginController@checkLogin']);
  Route::get('logout',['as'=>'logout','uses'=>'LoginController@logout']);  
  Route::group(['middleware'=>'admin'],function(){
    Route::get('admin/dashboard',['as'=>'dashboard','uses'=>'DashBoardController@dashboard']);
    Route::get('admin/menu',['as'=>'menu','uses'=>'DashBoardController@menu']);
    Route::get('admin/content',['as'=>'content','uses'=>'DashBoardController@content']);
    Route::post('admin/content/save',['as'=>'content.save','uses'=>'DashBoardController@contentSave']);
    Route::post('admin/contentByType',['as'=>'getContentByType','uses'=>'DashBoardController@getContentByType']);
    Route::get('admin/event',['as'=>'event','uses'=>'EventController@list']);
    Route::post('admin/event/data',['as'=>'event.data','uses'=>'EventController@data']);
    Route::get('admin/event/create',['as'=>'event.create','uses'=>'EventController@create']);
    Route::post('admin/event/save',['as'=>'event.save','uses'=>'EventController@save']);
    Route::post('admin/event/delete/{id}',['as'=>'event.delete','uses'=>'EventController@delete']);
    Route::get('admin/event/show/{id}',['as'=>'event.show','uses'=>'EventController@show']);
    Route::post('admin/event/edit',['as'=>'event.edit','uses'=>'EventController@edit']);
    Route::get('admin/users',['as'=>'user','uses'=>'UserController@list']);
    Route::post('admin/users/data',['as'=>'users.data','uses'=>'UserController@data']);
    Route::get('admin/user/view/{id}',['as'=>'user.view','uses'=>'UserController@view']);
    Route::get('admin/user/pdf/{id}',['as'=>'user.generate-pdf','uses'=>'UserController@generatePDF']);
    Route::get('admin/feedback',['as'=>'feedback','uses'=>'FeedbackController@list']);
    Route::post('admin/feedback/data',['as'=>'feedback.data','uses'=>'FeedbackController@data']);
    Route::post('admin/feedback/delete/{id}',['as'=>'feedback.delete','uses'=>'FeedbackController@delete']);
    Route::post('admin/feedback/approve/{id}',['as'=>'feedback.approve','uses'=>'FeedbackController@approve']);
    Route::get('admin/catechism',['as'=>'catechism','uses'=>'CatechismController@list']);
    Route::post('admin/catechism/data',['as'=>'catechism.data','uses'=>'CatechismController@data']);
    Route::post('admin/catechism/delete/{id}',['as'=>'catechism.delete','uses'=>'CatechismController@delete']);
    Route::get('admin/catechism/create',['as'=>'catechism.create','uses'=>'CatechismController@create']);
    Route::post('admin/catechism/save',['as'=>'catechism.save','uses'=>'CatechismController@save']);
    Route::get('admin/liturgical-calender',['as'=>'liturgical-calender','uses'=>'LiturgicalCalenderController@list']);
    Route::post('admin/liturgical-calender/data',['as'=>'liturgical-calender.data','uses'=>'LiturgicalCalenderController@data']);
    Route::get('admin/liturgical-calender/create',['as'=>'liturgical-calender.create','uses'=>'LiturgicalCalenderController@create']);
    Route::post('admin/liturgical-calender/save',['as'=>'liturgical-calender.save','uses'=>'LiturgicalCalenderController@save']);
    Route::post('admin/liturgical-calender/delete/{id}',['as'=>'liturgical-calender.delete','uses'=>'LiturgicalCalenderController@delete']);
    Route::get('admin/house-blessing-request',['as'=>'house-blessing-request','uses'=>'HouseBlessingRequestController@list']);
    Route::post('admin/house-blessing-request/data',['as'=>'house-blessing-req.data','uses'=>'HouseBlessingRequestController@data']);
    Route::post('admin/house-blessing-request/delete/{id}',['as'=>'house-blessing-req.delete','uses'=>'HouseBlessingRequestController@delete']); 
    Route::post('admin/house-blessing-request/approve/{id}',['as'=>'house-blessing-req.approve','uses'=>'HouseBlessingRequestController@approve']);
     Route::get('admin/activities',['as'=>'activities','uses'=>'DashBoardController@activities']);
     Route::post('admin/activities/save',['as'=>'activity.save','uses'=>'DashBoardController@saveActivity']);
     Route::post('admin/getActivityByYear',['as'=>'getActivityByYear','uses'=>'DashBoardController@getActivityByYear']);
     Route::get('admin/noc',['as'=>'noc','uses'=>'NocController@list']);
     Route::post('admin/noc/data',['as'=>'noc.data','uses'=>'NocController@data']);
     Route::post('admin/noc/delete/{id}',['as'=>'noc.delete','uses'=>'NocController@delete']);
     Route::post('admin/noc/approve/{id}',['as'=>'noc.approve','uses'=>'NocController@approve']);
     Route::get('admin/novena',['as'=>'novena','uses'=>'DashBoardController@novena']);
     Route::post('admin/novena/save',['as'=>'novena.save','uses'=>'DashBoardController@novenaSave']);
     Route::post('admin/getNovena',['as'=>'getNovena','uses'=>'DashBoardController@getNovena']);
     Route::get('admin/prayer',['as'=>'prayer','uses'=>'PrayerController@list']);
     Route::post('admin/prayer/data',['as'=>'prayer.data','uses'=>'PrayerController@data']);


  });
});