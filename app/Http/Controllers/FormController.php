<?php

namespace App\Http\Controllers;

use App\Http\Requests\FormExampleRequest;
use Illuminate\Http\Request;

class FormController extends Controller
{
    public function show(){
        return view('list');
    }

    public function checkValidation(FormExampleRequest $request)
    {
        $success = 'Dữ liệu được xác thực thành công';
        echo 'Name: ' . $request->name . '<br>' . 'Age: ' . $request->age;
        return view('list', compact('success'));
    }
}
