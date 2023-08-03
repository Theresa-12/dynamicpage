<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class about extends Controller
{
   public function details()
   {
    
        $days = 'Tuesdays, Wednesdays, and Thursdays';
        $timings = '10:00 AM to 3:00 PM';
    
        $schedule = "Days: {$days}"."\n"." Timings: {$timings}";
        return $schedule;
    
   }
}
