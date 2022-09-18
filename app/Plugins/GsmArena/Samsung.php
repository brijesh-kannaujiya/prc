<?php


namespace App\Plugins\GsmArena;




class Samsung
{

    public function __construct()
    {
        // Include library simple html dom
        require("simple_html_dom.php");
        ini_set('display_errors', 1);
        ini_set('display_startup_errors', 1);
        error_reporting(E_ALL);

        // Fix bug slug symbol
        $this->simbol = array("&", "+");
        $this->kata = array("_and_", "_plus_");
    }

    ####################### NGE cURL ##########################
    private function mycurl($url)
    {
        $ch = curl_init();
       // curl_setopt($ch, CURLOPT_USERAGENT, "Googlebot/2.1 (http://www.googlebot.com/bot.html)");
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 0);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_URL, $url);

        // Gagal ngecURL
        if (!$site = curl_exec($ch)) {
            return 'offline';
        }

        // Sukses ngecURL
        else {
            return $site;
        }
    }


    public function getSamsungData()
    {
        $result = array();
        $url = 'https://www.samsung.com/au/support/mobile-devices/screen-replacement-pricing/';
        $ngecurl = $this->mycurl($url);

        if ($ngecurl == 'offline') {
            $result["status"] = "error";
            $result["data"] = array();
        } else {
            $html  = str_get_html($ngecurl);
            $div = $html->find('a[class=support-accordion__list-title]');
            $i = 0;
        foreach ($div as $d){
            $model = $html->find('a[class=support-accordion__list-title]',$i)->innertext;
            $model = substr($model, 0,strpos($model, "<"));

            //dd($model);
            $div = $html->find('div[class=help-table__inner]', $i);
            $result["model"][$i] = $model;
            $result["table"][$i] = $div;
            $i++;
        }
            return $result;
        }

    }public function getSamsungTabletData()
    {
        $result = array();
        $url = 'https://www.samsung.com/au/support/mobile-devices/tablet-screen-replacement-pricing/';
        $ngecurl = $this->mycurl($url);

        if ($ngecurl == 'offline') {
            $result["status"] = "error";
            $result["data"] = array();
        } else {
            $html  = str_get_html($ngecurl);
            $div = $html->find('a[class=support-accordion__list-title]');
            $i = 0;
        foreach ($div as $d){
            $model = $html->find('a[class=support-accordion__list-title]',$i)->innertext;
            $model = substr($model, 0,strpos($model, "<"));

            //dd($model);
            $div = $html->find('div[class=help-table__inner]', $i);
            $result["model"][$i] = $model;
            $result["table"][$i] = $div;
            $i++;
        }
            return $result;
        }

    }public function getSamsungWatchData()
    {
        $result = array();
        $url = 'https://www.samsung.com/au/support/mobile-devices/watch-screen-replacement-pricing/';
        $ngecurl = $this->mycurl($url);

        if ($ngecurl == 'offline') {
            $result["status"] = "error";
            $result["data"] = array();
        } else {
            $html  = str_get_html($ngecurl);
            $i = 0;
            $div = $html->find('div[class=help-table]', $i);
            $result["model"][$i] = 'Samsung Watch';
            $result["table"][$i] = $div;
            return $result;
        }

    }
}