<?php

namespace App\Listeners;

use App\Events\SendMail;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\User;
use Mail;
use App\Point;
use Auth;

class SendMailFired
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  SendMail  $event
     * @return void
     */
    public function handle(SendMail $event)
    {
     
     $id = Auth::user()->id;
        $check_user = Point::where('user_id',$id)->count();
       
         if($check_user==0){
             Point::create(['user_id'=>$id,'points'=>10]);
          }else{
            $point =  Point::where('user_id',$id)->get();
             $data = Point::find($point[0]->id);
             $dataupdate = array(
               'points'=> $data->points + 10,
             );
             
             $data->update($dataupdate);

          }


    }
}
