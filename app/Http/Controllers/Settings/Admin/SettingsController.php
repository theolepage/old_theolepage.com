<?php

namespace App\Http\Controllers\Settings\Admin;

use App\Http\Controllers\Controller;
use App\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SettingsController extends Controller
{
    public function edit()
    {
        return view('settings.admin.edit', [
            'item' => Setting::first()
        ]);
    }

    public function update(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'alert_enabled' => 'required|boolean',
            'alert_text' => 'nullable|string|max:255'
        ]);

        if ($validator->fails())
        {
            return redirect()
                ->route('admin.settings')
                ->withErrors($validator->errors())
                ->with('failure', 'Settings have not been updated.');
        }

        Setting::first()->update($request->all());
        return redirect()->route('admin.settings')->with('success', 'Settings updated successfully.');
    }
}
