<?php

use App\Models\Setting;
use App\Models\Upload;
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

if (!function_exists('getBaseURL')) {
    function getBaseURL()
    {
        $root = '//' . $_SERVER['HTTP_HOST'];
        $root .= str_replace(basename($_SERVER['SCRIPT_NAME']), '', $_SERVER['SCRIPT_NAME']);

        return $root;
    }
}

if (!function_exists('getFileBaseURL')) {
    function getFileBaseURL()
    {
        if (env('FILESYSTEM_DRIVER') == 's3') {
            return env('AWS_URL') . '/';
        } else {
            return getBaseURL();
        }
    }
}


if (!function_exists('uploaded_asset')) {
    function uploaded_asset($id)
    {
        if (($asset = Upload::where('_id',$id)->first()) != null) {
            return app('url')->asset($asset->file_name);
        }
        return null;
    }
}

if (!function_exists('areActiveRoutes')) {
    function areActiveRoutes(array $routes, $output = "active")
    {
        foreach ($routes as $route) {
            if (Route::currentRouteName() == $route) return $output;
        }
    }
}

if (!function_exists('subareActiveRoutes')) {
    function subareActiveRoutes(array $routes, $output = "hover show")
    {
        foreach ($routes as $route) {
            if (Route::currentRouteName() == $route) return $output;
        }
    }
}

if (!function_exists('formatBytes')) {
    function formatBytes($bytes, $precision = 2)
    {
        $units = array('B', 'KB', 'MB', 'GB', 'TB');

        $bytes = max($bytes, 0);
        $pow = floor(($bytes ? log($bytes) : 0) / log(1024));
        $pow = min($pow, count($units) - 1);

        // Uncomment one of the following alternatives
        $bytes /= pow(1024, $pow);
        // $bytes /= (1 << (10 * $pow));

        return round($bytes, $precision) . ' ' . $units[$pow];
    }
}

