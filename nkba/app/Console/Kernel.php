<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;


class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
         //Commands\Inspire::class,
       
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
//    protected function schedule(Schedule $schedule)
//    {
//       
//        $schedule->call(function () {
//              // 23d 3dd el users elly 3ndy 
//        $count = DB::table('users')
//                ->count();
//        $tasks = DB::table('tasks')
//                ->get();
//
//        for ($i = 0; $i <= $count; $i++) {
//        $dt=Carbon::now()->diff(new DateTime($tasks[$i]->date));
//        $data=$tasks[$i]->name;
//        if ($dt=='0') {
//           
//             $user_email=Auth::user()->email;
//          
//        $dataa = array('k1' => " $user_email",'k2'=>"$data");
//       Mail::send('emails.renews',$dataa,function($message) use ($dataa)
//        {
//            $MailBody =  "مواعيدك تهمنا يرجي مرجعت مواعيدك".$dataa['k2'];
//            $message->setBody($MailBody, 'text/html');
//            $message->from( 'nkabaalex@gmail.com');
//            $message->to($dataa['k1'])->subject("مواعيدك");
//        });
//                }
//            
//           }
//        })->everyMinutes();
//    }
}
