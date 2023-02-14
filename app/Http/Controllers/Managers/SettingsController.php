<?php

namespace App\Http\Controllers\Managers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

use App\Models\Utilities;
use App\Models\Setting;


class SettingsController extends Controller
{

    public function index()
    {


        $setting = Setting::first();

        return view('managers.views.settings.index')->with([
            'setting' => $setting,

        ]);
    }

    public function update(Request $request)
    {

        $setting = Setting::id($request->id);
        $setting->label = $request->label;
        $setting->email = $request->email;
        $setting->cellphone = $request->cellphone;
        $setting->address = $request->address;
        $setting->youtube = $request->youtube;
        $setting->facebook = $request->facebook;
        $setting->linkedin = $request->linkedin;
        $setting->instagram = $request->instagram;
        $setting->whatsapp = $request->whatsapp;
        $setting->twitter = $request->twitter;
        $setting->copyright = $request->copyright;
        $setting->description = $request->description;
        $setting->maps = $request->maps;
        $setting->about = $request->about;
        $setting->politic = $request->politic;
        $setting->mission = $request->mission;
        $setting->vision = $request->vision;
        $setting->terms = $request->terms;
        $setting->seo = $request->seo;

        $setting->updated_at = new \DateTime();
        $setting->save();

        return response()->json(['status' => "success", 'setting' => $setting->slack]);
    }
}