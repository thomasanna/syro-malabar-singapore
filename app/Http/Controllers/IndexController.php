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
use App\Models\Catechism;
use App\Models\Event;

class IndexController extends Controller
{
    public function __construct(){
    //  App::setLocale('ma');
    }

    public function home(){  //echo date('H:i:s'); exit;

      $events = Event::where('eventDate', '>=', date('Y-m-d'))
         //->where('eventTime','>=',date('H:i:s'))
         ->orderBy('eventDate','ASC')
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

      return view('activities-year1',compact('year'));
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
      return view('liturgicalCalendar');
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
      return view('feedback');
   }
   public function registration(){
      return view('registration');
   }
   public function saveRegistration(Request $request){
     
     $input     = $request->all();
    // echo "<pre>"; print_r($input['data']); exit;
     $input = $input['data'];
     try{

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
}
