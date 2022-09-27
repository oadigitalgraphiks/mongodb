<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Setting;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\Controller;

class SettingController extends Controller
{
    //
    public function general_setting()
    {
        return view('admin.general_setting');
    }

    public function update(Request $request)
    {
        // dd($request->all());
        // $setting = new Setting;
        // $setting->site_name = $request->site_name;
        // $setting->system_logo_white = $request->system_logo_black;
        // $setting->admin_login_background = $request->admin_login_background;
        // return redirect()->back();
        foreach ($request->types as $key => $type) {
            if($type == 'site_name'){
                $this->overWriteEnvFile('APP_NAME', $request[$type]);
            }
            if($type == 'timezone'){
                $this->overWriteEnvFile('APP_TIMEZONE', $request[$type]);
            }
            else {
                $lang = null;
                if(gettype($type) == 'array'){
                    $lang = array_key_first($type);
                    $type = $type[$lang];
                    $settings = Setting::where('type', $type)->where('lang',$lang)->first();
                }else{
                    $settings = Setting::where('type', $type)->first();
                }

                if($settings!=null){
                    if(gettype($request[$type]) == 'array'){
                        $settings->value = json_encode($request[$type]);
                    }
                    else {
                        $settings->value = $request[$type];
                    }
                    $settings->lang = $lang;
                    $settings->save();
                }
                else{
                    $settings = new Setting;
                    $settings->type = $type;
                    if(gettype($request[$type]) == 'array'){
                        $settings->value = json_encode($request[$type]);
                    }
                    else {
                        $settings->value = $request[$type];
                    }
                    $settings->lang = $lang;
                    $settings->save();
                }
            }
        }

        Artisan::call('cache:clear');
        return back()->with('success',translate("Settings updated successfully"));
    }

    public function overWriteEnvFile($type, $val)
    {
        if(env('DEMO_MODE') != 'On'){
            $path = base_path('.env');
            if (file_exists($path)) {
                $val = '"'.trim($val).'"';
                if(is_numeric(strpos(file_get_contents($path), $type)) && strpos(file_get_contents($path), $type) >= 0){
                    file_put_contents($path, str_replace(
                        $type.'="'.env($type).'"', $type.'='.$val, file_get_contents($path)
                    ));
                }
                else{
                    file_put_contents($path, file_get_contents($path)."\r\n".$type.'='.$val);
                }
            }
        }
    }

    public function env_key_update(Request $request)
    {
        foreach ($request->types as $key => $type) {
                $this->overWriteEnvFile($type, $request[$type]);
        }
        return back()->with('success',translate("Settings updated successfully"));
    }

    function clearCache(Request $request)
    {
        Artisan::call('cache:clear');
        return back()->with('succcess',translate('Cache cleared successfully'));
    }
}
