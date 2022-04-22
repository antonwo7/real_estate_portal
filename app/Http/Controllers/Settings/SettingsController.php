<?php

namespace App\Http\Controllers\Settings;


use App\Http\Controllers\Controller;
use App\Models\Setting;
use App\Services\Settings\Convert;

class SettingsController extends Controller
{
//    public $convert;
//
//    public function __construct(Convert $convert)
//    {
//        $this->convert = $convert;
//    }
//
//    public function GetAllSettings()
//    {
//        $settings = [];
//        foreach (Settings::all() as $setting){
//            $settings[$setting->field] = $this->convert->prepare($setting->value, $setting->rule);
//        }
//
//        return $settings;
//    }
}
