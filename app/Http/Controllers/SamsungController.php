<?php

namespace App\Http\Controllers;

use App\Plugins\GsmArena;

class SamsungController extends Controller
{
    public function sasc()
    {
        $samsung = new GsmArena\Samsung();
        $data = $samsung->getSamsungData();
        $model= $data["model"];
        $table = $data["table"];

        $tablet = $samsung->getSamsungTabletData();
        $tabmodel= $tablet["model"];
        $tabtable = $tablet["table"];

        $watch = $samsung->getSamsungWatchData();
        $watchmodel= 'Samsung Watch';
        $watchtable = $watch["table"];
//dd($watchmodel);
        return view('templates.prc.mainpage.sasc', ['model' =>$model,'table' =>$table,'tabmodel' =>$tabmodel,'tabtable' =>$tabtable,'watchmodel' =>$watchmodel,'watchtable' =>$watchtable]);
    }


}
