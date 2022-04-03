<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function formInput() {
        $default = "Mặc định";
        return view('FormInput', [
            'default' => $default,
        ]);
    }
    public function postData(Request $request) {
        $content = $request->get('something');
        return view('Show', [
            'content' => $content,
        ]);

    }


}
