<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use File;
use DB;
use Charts;
use App\Mail\Hello;
use Event;
use App\Events\SendMail;
use Illuminate\Support\Facades\Mail;
use App\Mail\OrderShipped;
use App\Mail\UserWelcome;
use App;
use Fileupload;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {   
      $userId = Auth::User()->id;
           $profile = User::all()->find($userId);
           event(new SendMail($userId));
       $users = User::orderBy('id','DESC')->get();
       $user = User::find($userId);
               Mail::to('demo@gmail.xom')->send(new OrderShipped());
         Mail::to($user->email)->send(new UserWelcome($user));

         return view('home',compact('profile','users'));
    }
    public function lang($locale)
    {
        App::setLocale($locale);
        session()->put('locale', $locale);
        return redirect()->back();
    }
   public function sendmail(){
    $id  = Auth::User()->id;
        $user = User::find($id);
      
     Mail::to($user->email)->send(new Hello($user));
   }
    public function addimage(Request $request){

         $name = $request->input('name');
       //  $profile = $request->file('profile');
         $email = $request->input('email');
         $password=$request->input('password');
               
          //           $profileImageSaveAsName = time() . "-product." .
          //                  $profile->getClientOriginalExtension();

          //             $upload_path = 'product/';
          //             $profile_image_url = $profileImageSaveAsName;
          //         $success = $profile->move($upload_path, $profileImageSaveAsName);
          // // $filename = $image->store('profileimage');
          //   User::create([
          //       'name' => $name,
          //       'email' => $email,
          //       'password'=>$password,
          //       'profile'=>$profile_image_url,
          //   ]);
          
            $path = public_path('profile');


         if(!File::isDirectory($path)){

          File::makeDirectory($path, 0777, true, true);

           }

       //     $profileImage = $request->file('profile');
       //  $profileImageSaveAsName = time() . "-profile." .
       //      $profileImage->getClientOriginalExtension();

       // // $upload_path = 'product/';
       //  $profile_image_url = $profileImageSaveAsName;
       //  $success = $profileImage->move($path, $profileImageSaveAsName);

          $profile_image_url =  Fileupload::upload($request, 'profile', 'userprofile');
  
        $img = new User;
          $img->name=$name;
          $img->email=$email;
          $img->password=$password;
           $img->profile =$profile_image_url;
         
         $img->save();
        return redirect()->back();
          
    }

    public function user(){
      $counts = User::count();

      return view('index',compact('counts'));



    }

   public function chart()
      {
        
      $users = User::where(DB::raw("(DATE_FORMAT(created_at,'%Y'))"),date('Y'))
            ->get();
         
        $chart = Charts::database($users, 'bar', 'highcharts')
            ->title("Monthly new Register Users")
            ->elementLabel("Total Users")
            ->dimensions(1000, 500)
            ->responsive(true)
            ->groupByMonth(date('Y'),true);
        return view('index',compact('chart'));
      }

     public function projectsChartData()
     {
       $devlist = DB::table('users')
            ->select(DB::raw('MONTHNAME(updated_at) as month'), DB::raw("DATE_FORMAT(updated_at,'%Y-%m') as monthNum"), DB::raw('count(*) as datas'))
            ->groupBy('monthNum')
            ->get();
        
        return $devlist;

    }



}
