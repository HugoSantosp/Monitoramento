<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PingController extends Controller
{
    public function ServerPings ($adress)
    {
        $ip = 0;
       
    foreach($adress as $item)
    {
     $ip = $item;
    }

    $comand = shell_exec('C:\windows\system32\ping -n 1 -a '.$ip);
    $split = preg_split('/[\s,]+/',$comand);
    $time = explode('tempo=',$split[13]);
    $arr = ['[',']'];
    if(preg_match('/tempo</', $comand) || preg_match('/tempo=/', $comand))
    {

        $ms =  explode('ms', $time[1]);
        $timeresponse = intval($ms[0]);
        $result = [
            'ServerName' => $split[2],
            'ServeIp' =>str_replace($arr, '', $split[3]),
            'ServerTimeResponse' => $timeresponse,
        ];

    }
    else 
    {  
        $result = [
        'ServerName' => 'Desconhecido',
        'ServeIp' => str_replace($arr, '', $split[3]),
        'ServerTimeResponse' => 'Loss',
        ];
    }

   

        return $result;
    }



}
