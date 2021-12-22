<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Json extends CI_Controller
{
    public function index()
    {
        $url = "http://www.emsifa.com/api-wilayah-indonesia/api/provinces.json/";
        $get_url = file_get_contents($url);
        $data = json_decode($get_url);
        echo $data[2]['name'];
    }
}
