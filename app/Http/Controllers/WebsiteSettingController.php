<?php

namespace App\Http\Controllers;

use App\Models\WebsiteSetting;
use Illuminate\Http\Request;

class WebsiteSettingController extends Controller
{
    public function index()
    {
        $settings = WebsiteSetting::first();

        return view('admin.settings.index', compact('settings'));
    }


    public function update(Request $request)
    {
        $request->validate([
            'description' => 'nullable|string',
            'email' => 'nullable|email|max:255',
            'phone' => 'nullable|string|max:50',
            'address' => 'nullable|string',
        ]);


        $settings = WebsiteSetting::first();


        if (!$settings) {
            $settings = new WebsiteSetting();

            // SOUND Group name is fixed
            $settings->site_name = 'SOUND Group';
        }


        $settings->description = $request->description;
        $settings->email = $request->email;
        $settings->phone = $request->phone;
        $settings->address = $request->address;

        $settings->save();


        return redirect()
            ->route('admin.settings')
            ->with('success', 'Website settings updated successfully.');
    }
}