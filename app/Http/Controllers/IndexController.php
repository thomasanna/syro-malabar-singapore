<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Content;
use App;
use App\Models\RegisteredUsers;
use App\Models\FamilyDetails;
use App\Models\Feedback;
use Illuminate\Support\Facades\Mail;
use App\Mail\FeedbackMail;
use App\Mail\RegisterMail;
use App\Mail\HouseBlessingRequestMail;
use App\Mail\NocRequestMail;
use App\Models\Catechism;
use App\Models\Event;
use App\Models\LiturgicalCalender;
use App\Models\houseBlessingRequest;
use App\Models\Noc;
use Twilio;
use Hash;
use App\Models\Otp;
use App\Models\Activity;
use App\Models\Novena;

class IndexController extends Controller
{
    public function __construct(){
    //  App::setLocale('ma');
    }

    public function home(){  //echo date('H:i:s'); exit;

      $events = Event::where('eventDate', '>=', date('Y-m-d'))
         //->where('eventTime','>=',date('H:i:s'))
         ->orderBy('eventDate','ASC')
         ->limit(3)
         ->get();

      return view('home',compact('events'));
    }

    public function events(){
       $events = Event::where('eventDate', '>=', date('Y-m-d'))
         ->orderBy('eventDate','ASC')
         ->get();
      return view('events',compact('events'));
    }
    public function history(){
     $contentObj = new Content();
     $data = $contentObj->getContent('History');
     return view('history',compact('data')); 
     
   }

   public function bharavahikal(){
    
     return view('smcsBharavahikal'); 
     
   }
   public function stThomasTheApostle(){
     $contentObj = new Content();
     $data = $contentObj->getContent('St. Thomas The Apostle');
     return view('stthomastheapostle',compact('data'));
   }
   public function syromalabarChurch(){
     $contentObj = new Content();
     $data = $contentObj->getContent('Syro-Malabar Church');
      return view('syro-malabar-church',compact('data'));
   }
   public function activitiesYear1($year){
      $content = Activity::where('year',$year)->first();
      return view('activities-year1',compact('year','content'));
   }
   public function reportsYear1(){
      $contentObj = new Content();
      $data = $contentObj->getContent('Activities-Year1');
      return view('reports-year1');
   }
   public function reportsYear2(){
      return view('reports-year2');
   }
   public function singaporeDiocese(){
      return view('singaporeDiocese');
   }
   public function counselling(){
      return view('counselling');
   }
   public function marriagePreparation(){
      return view('marriagePreparation');
   }
   public function familyUnit1(){
      return view('familyUnit1');
   }
   public function familyUnit2(){
      return view('familyUnit2');
   }
   public function catechism(){
      return view('catechism');
   }
   public function firstHolyCommunion(){
      return view('firstHolyCommunion');
   }
   public function women(){
      return view('women');
   }
   public function youthChildren(){
      return view('youthChildren');
   }
   public function liturgicalCalendar(){

      $data = LiturgicalCalender::get();

      return view('liturgicalCalendar',compact('data'));
   }
   public function catechismBooks($class){

      $catechismBooksData = Catechism::where('class', $class)->get();
      return view('catechismBooks', compact('class','catechismBooksData'));
   }
   public function forms(){
      return view('forms');
   }
   public function emailToSpiritualDirector(){
      return view('emailToSpiritualDirector');
   }
   public function feedback(){
      $feedback = Feedback::where('approve',1)->get();

      return view('feedback',compact('feedback'));
   }
   public function registration(){
      return view('registration');
   }
   public function saveRegistration(Request $request){
     
     $input     = $request->all();
    // echo "<pre>"; print_r($input['data']); exit;
     $input = $input['data'];
     try{
      if($input['email'] != ""){
          $email_exist =    RegisteredUsers::where('email',$input['email'])->exists();
          if($email_exist){
             return ['status'=>300,'message'=>'This email already exists'];
          }
      }
      $ext = '+65';

      $contact_number  = $ext.$input['contact_number'];

      $otpDataExists =     Otp::where('contact_number',$contact_number)
                                ->where('otp',$input['otp'])
                                ->exists();
      if(!$otpDataExists){
        return ['status'=>300,'message'=>'Please enter valid otp number'];
      }

      $user = RegisteredUsers::create([
             'name'      => $input['name'],
             'contact_number'   => $input['contact_number'],
             'nric_fin'   => $input['nric_fin'],
             'email'   => $input['email'],
             'age'   => $input['age'],
             'sex'   => $input['sex'],
             'marital_status'   => $input['marital_status'],
             'address_in_singapore'   => $input['address_in_singapore'],
             'address_in_india'   => $input['address_in_india'],
             'parish_in_india'   => $input['parish_in_india'],
             'diocese_in_india'   => $input['diocese_in_india'],
             'family_living_in_india'   => $input['singapore_living'],
             'terms'   => $input['terms']
            ]);

        if($input['singapore_living']  == 1){
          $familyMembers = $input['family_member'];
          for($i=0;$i<count($familyMembers);$i++){
            $memberData = explode("_",$familyMembers[$i]);
            $member_name = $memberData['0'];
            $member_relation = $memberData['1'];
            $member_sex      = $memberData['2'];
            $member_age      = $memberData['3'];
            FamilyDetails::create([
                'parent_user_id'=> $user->reg_user_id,
                'member_name'=> $member_name,
                'relation'=> $member_relation,
                'sex'=> $member_sex,
                'age'=> $member_age,
            ]);
          }
        }

        $toEmail   = env('MAIL_ADMIN_ADDRESS');
        Mail::to($toEmail)->send(new RegisterMail($input));

        return ['status'=>200,'message'=>'success'];

     }catch(Exception $e) {
         return ['status'=>300,'message'=>'failed'];
      }

   }

  public function sendEmailToSpiritualDirector(Request $request){
    $input     = $request->all();
    $toEmail   = env('MAIL_ADMIN_ADDRESS');
    Mail::to($toEmail)->send(new FeedbackMail($input));
 
    // return 'Email has been sent to '. $toEmail;
    return redirect()->route('E-Mail-to-Spiritual-Director')->with('success', 'Your mail has been successfully sent');
    // exit("11");
   }

   public function saveFeedback(Request $request){

       $input     = $request->all();
       try{
           $user = Feedback::create([
             'name'      => $input['name'],
             'contact_number'   => $input['contact_number'],
             'subject'   => $input['subject'],
             'message'   => $input['message'],
            ]);

           return redirect()->route('Feedback')->with('success', 'Your message has been successfully submitted');
       }
       catch(Exception $e) {
         return ['status'=>300,'message'=>'failed'];
      }

   }

   public function saintsOfSmc(){
     return view('saintsOfSmc'); 
   }

   public function termsAndConditions(){
     return view('termsAndConditions'); 
   }

   public function houseBlessingRequest(){
     return view('houseBlessingRequest'); 
   }

   public function houseBlessingRequestSave(Request $request){
      $input     = $request->all();
      //echo "<pre>"; print_r($input); exit;
       try{
           $ext = '+65';

           $contact_number  = $ext.$input['contact_number'];

           $otpDataExists =     Otp::where('contact_number',$contact_number)
                                ->where('otp',$input['otp'])
                                ->exists();
           if(!$otpDataExists){
            return redirect()->route('house-blessing-request')->with('error', 'Please enter valid otp number');
           }
           $newDate      = date("Y-m-d", strtotime($input['house_blessing_date']));
           $user = houseBlessingRequest::create([
             'name'      => $input['name'],
             'contact_number'   => $input['contact_number'],
             'house_blessing_date'   => $newDate,
             'house_blessing_time'   => $input['house_blessing_time'],
             'address'   => $input['address'],
            ]);

           $toEmail   = env('MAIL_ADMIN_ADDRESS');
           Mail::to($toEmail)->send(new HouseBlessingRequestMail($input));

           return redirect()->route('house-blessing-request')->with('success', 'Your request has been successfully submitted');
       }
       catch(Exception $e) {
         return redirect()->route('house-blessing-request')->with('error', 'Failed');

      }
   }

   public function applyNoc(){
    return view('applyNoc'); 
   } 

   public function nocSave(Request $request){
    $input     = $request->all();
   // echo "<pre>"; print_r($input); exit;
    try{

        $ext = '+65';

        $contact_number  = $ext.$input['contact_number'];
 
        $otpDataExists =     Otp::where('contact_number',$contact_number)
                                ->where('otp',$input['otp'])
                                ->exists();
        if(!$otpDataExists){
            return redirect()->route('apply-noc')->with('error', 'Please enter valid otp number');
           }
                                   
        $newDate      = date("Y-m-d", strtotime($input['date_arrival_singapore']));
           $user = Noc::create([
             'name'      => $input['name'],
             'baptism_name'   => $input['baptism_name'],
             'contact_number'   => $input['contact_number'],
             'nric_fin'   => $input['nric_fin'],
             'sex'   => $input['sex'],
             'marital_status'   => $input['marital_status'],
             'father_name'   => $input['father_name'],
             'mother_name'   => $input['mother_name'],
             'address_in_singapore'   => $input['address_in_singapore'],
             'work_place_address'   => $input['work_place_address'],
             'designation'   => $input['designation'],
             'date_arrival_singapore'   => $newDate,
             'church_in_singapore'   => $input['church_in_singapore'],
             'address_in_india'   => $input['address_in_india'],
             'parish_vicar_name'   => $input['parish_vicar_name'],
             'parish_address'   => $input['parish_address'],
             'would_be_details'   => $input['would_be_details'],
             'reference_person_1'   => $input['reference_person_1'],
             'reference_person_2'   => $input['reference_person_2'],
             'reference_person_3'   => $input['reference_person_3']
            ]);
           
           $toEmail   = env('MAIL_ADMIN_ADDRESS');
           Mail::to($toEmail)->send(new NocRequestMail($input));

           return redirect()->route('apply-noc')->with('success', 'Your application has been successfully submitted');
       }
       catch(Exception $e) {
         return ['status'=>300,'message'=>'failed'];
      }
   }

   public function sendOtp(Request $request){
      $input     = $request->all();
      $input     = $input['data'];
      $sms_to    = $input['contact_number'];
      $type    = $input['type'];
      $otp = rand(pow(10, 4), pow(10, 5)-1);
      $ext = '+65';
      $sms_to = $ext.$sms_to;
      //$otp = 12345;
      $loginOtp  = Hash::make($otp);
      if($type == 'noc'){
              $msg = $otp.' is the OTP to apply for NOC Syro-Malabar Catholic Singapore';
      }
      elseif($type == 'register'){
        $msg = $otp.' is the OTP to register Syro-Malabar Catholic Singapore';
      }
      else{
        $msg = $otp.' is the OTP to request for house blessing Syro-Malabar Catholic Singapore';
      }
      
      try{
        $sms = Twilio::message($sms_to, $msg);
        $otpData =     Otp::where('contact_number',$sms_to)->delete();
        Otp::create([               
               'contact_number'      => $sms_to,
               'otp'      => $otp,    
        ]);
           
            return ['status'=>200,'message'=>'OTP Sent'];
        }
        catch(Twilio\Exceptions\RestException $e){
            return ['status'=>300,'message'=>'Unverified Twilio Phone Number'];
        }
   }

   public function novena($name,$lang){
      $novena = Novena::where('saint_name',$name)->where('lang',$lang)->first();
      return view('novena',compact('novena'));
   }
   public function navanaal($name,$lang){
      $navanaal = Novena::where('saint_name',$name)->where('lang',$lang)
      ->where('prayer_type','Navanaal')
      ->first();
      return view('navanaal',compact('navanaal'));
   }
   public function saintPrayer($name,$lang){
      $prayer = Novena::where('saint_name',$name)->where('lang',$lang)
      ->where('prayer_type','Prayer')
      ->first();
      return view('saint-prayer',compact('prayer'));
   }
   public function prayers(){
      return view('prayers');
   }
   public function kurishinteVazhi(){
      return view('kurishinte-vazhi');
   }
   public function cheriyaoppees(){
      return view('cheriyaoppees');
   }
   public function stjosephprayer(){
      return view('stjosephprayer');
   }
   public function mpc(){
      return view('mpc');
   }
   

}
