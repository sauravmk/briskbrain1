<?php

namespace App\Http\Controllers\Admin;


use App\Models\Settings;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

class SettingsController extends Controller
{
   public function index()
   {
        $setting = Settings::find(1);
        return view('admin.setting.index',compact('setting'));
   }


    public function savedata(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'website_name' => 'required|max:255',
            'email' => 'nullable',
            'address' => 'nullable',
            'mobile' => 'nullable',
            'logo' => 'nullable',
            'favicon' => 'nullable',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator);
        }

        $setting = Settings::where('id', 1)->first();

        if ($setting) {
            $setting->website_name = $request->website_name;
            $setting->email = $request->email;
            $setting->address = $request->address;
            $setting->mobile = $request->mobile;

            if ($request->hasFile('logo')) {
                $destination = 'uploads/logo/' . $setting->logo;

                if (file::exists($destination)) {
                    file::delete($destination);
                }

                $file = $request->file('logo');
                $filename = time() . '.' . $file->getClientOriginalExtension();
                $file->move('uploads/logo/', $filename);
                $setting->logo = $filename;
            }

            /* if ($request->hasFile('favicon')) {
                $destination = 'uploads/logo/' . $setting->logo;

                if (file::exists($destination)) {
                    file::delete($destination);
                }

                $file = $request->file('favicon');
                $filename = time() . '.' . $file->getClientOriginalExtension();
                $file->move('uploads/logo/', $filename);
                $setting->favicon = $filename;
            } */

            $setting->save();

            return redirect('admin/settings')->with('message', 'Setting updated');
        } else {
            $setting = new Settings;
            $setting->website_name = $request->website_name;
            $setting->email = $request->email;
            $setting->address = $request->address;
            $setting->mobile = $request->mobile;

            if ($request->hasFile('logo')) {
                $file = $request->file('logo');
                $filename = time() . '.' . $file->getClientOriginalExtension();
                $file->move('uploads/logo/', $filename);
                $setting->logo = $filename;
            }

            $setting->save();

            return redirect('admin/settings')->with('message', 'Setting added');
        }
    }


}
