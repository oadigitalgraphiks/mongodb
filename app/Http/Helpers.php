<?php

use App\Models\Setting;
use Illuminate\Support\Facades\Cache;

if (!function_exists('get_setting')) {
    function get_setting($key, $default = null, $lang = false)
    {
        Cache::forget('business_settings');
        $settings = Cache::remember('business_settings', 86400, function () {
            return Setting::all();
        });

        if ($lang == false) {
            $setting = $settings->where('type', $key)->first();
        } else {
            $setting = $settings->where('type', $key)->where('lang', $lang)->first();
            $setting = !$setting ? $settings->where('type', $key)->first() : $setting;
        }
        return $setting == null ? $default : $setting->value;
    }
}

if(!function_exists('translate')){
    function translate($key,$lang = null)
    {
        return $key;
    }
}
