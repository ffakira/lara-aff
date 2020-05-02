<?php


namespace App\Http\Controllers;


use App\Form;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;

class FormController extends Controller {
    public function index() {
        return view('contact.index');
    }

    public function store(Request $request) {
        $form = new Form($request->all());
        $form->save();

        $data = [
          'name' => $request->name,
          'phone' => $request->phone,
          'message' => $request->message
        ];

        Mail::to('akiraff50@gmail.com')->send(new SendMail($data));

        return redirect('/');
    }
}
