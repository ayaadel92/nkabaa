<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Validator;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Mail;
use DB;
use Auth;


class AuthController extends Controller
{

    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $redirectTo = '/';
    
    protected $username = 'login';

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware($this->guestMiddleware(), ['except' => 'logout']);
        
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
//            'name' => 'required|max:255',//

         'login'=>'required|max:50|unique:users',

         'email' => 'required|email|max:255|unique:users',
         'password' => 'required|min:6|confirmed',
         ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data )
    {
        $loginPath = '/login';
        
        $hashed_random_password = mt_rand(100000, 999999);
        // $hashed_random_password = Hash::make(str_random(8));
        
        $LoginData=$data['login'];
        $EmailData=$data['email'];
        




        $userEngineer = DB::table('engineers')
        ->select(DB::raw('*'))
        ->where('eng_id', '=', $LoginData)
        ->where('email' ,'=', $EmailData)
        ->get();

        $userHospital = DB::table('hospitals')
        ->select(DB::raw('*'))
        ->where('email' ,'=', $EmailData)
        ->get();

        $userLab = DB::table('labs')
        ->select(DB::raw('*'))
        ->where('email' ,'=', $EmailData)
        ->get();

        $userDoctor = DB::table('doctors')
        ->select(DB::raw('*'))
        ->where('email' ,'=', $EmailData)
        ->get();

        $CountLabs=count($userLab);
        $CountDoctor=count($userDoctor);
        $CountHospitals=count($userHospital);
        $CountEngi=count($userEngineer);
        if($CountEngi == 1 || $CountEngi == 1 || $CountLabs == 1 || $userDoctor == 1)
        {


         $user= User::create([
            'email' => $data['email'],

            'login' => $data['login'],

            'password' => bcrypt($hashed_random_password),
            ]);

       
      
       Mail::send('emails.welcome',$data,function($message) use ($data,$hashed_random_password)
            {   
                $MailBody = "Wellcom in Nkaba Project <br>"."You Should login by this password <br>"."<h4>Your Passwrod is :</h4>".$hashed_random_password;
                $message->setBody($MailBody, 'text/html');
                $message->from('nkabaalex@gmail.com','Admin');
                $message->to($data['email'])->subject('تفعيل الاشتراك بخدمات النقابة ');
            });  
                   
      // Auth::login($user);
      // return redirect('/login');

    

       }
       else
       {
        
       }


  
              


  

}
}
