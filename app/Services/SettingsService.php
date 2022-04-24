<?php

namespace App\Services;


use App\Models\Setting;

class SettingsService
{
    public function getAllSettings()
    {
        $settings = [];
        foreach (Setting::all() as $setting){
            $settings[$setting->field] = $this->prepare($setting->value, $setting->rule);
        }

        return $settings;
    }

    private function prepare($value, $rule)
    {
        if(!empty($rule)){
            switch ($rule){
                case 'serialized':
                    $value = unserialize($value);
                    break;
            }
        }

        return $value;
    }
}
