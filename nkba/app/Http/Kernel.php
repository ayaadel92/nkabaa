<?php

namespace App\Http;

use Illuminate\Foundation\Http\Kernel as HttpKernel;

class Kernel extends HttpKernel
{
    /**
     * The application's global HTTP middleware stack.
     *
     * These middleware are run during every request to your application.
     *
     * @var array
     */
    protected $middleware = [
        \Illuminate\Foundation\Http\Middleware\CheckForMaintenanceMode::class,
    ];

    /**
     * The application's route middleware groups.
     *
     * @var array
     */
    protected $middlewareGroups = [
        'web' => [
            \App\Http\Middleware\EncryptCookies::class,
            \Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse::class,
            \Illuminate\Session\Middleware\StartSession::class,
            \Illuminate\View\Middleware\ShareErrorsFromSession::class,
            \App\Http\Middleware\VerifyCsrfToken::class,
        ],

        'api' => [
            'throttle:60,1',
        ],
    ];

    /**
     * The application's route middleware.
     *
     * These middleware may be assigned to groups or used individually.
     *
     * @var array
     */
    protected $routeMiddleware = [
        'auth' => \App\Http\Middleware\Authenticate::class,
        'auth.basic' => \Illuminate\Auth\Middleware\AuthenticateWithBasicAuth::class,
        'can' => \Illuminate\Foundation\Http\Middleware\Authorize::class,
        'guest' => \App\Http\Middleware\RedirectIfAuthenticated::class,
        'throttle' => \Illuminate\Routing\Middleware\ThrottleRequests::class,
    ];
    
    
//    protected function schedule(Schedule $schedule)
//    {
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
