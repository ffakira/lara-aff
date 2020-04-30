<?php


namespace App\Http\Controllers;


use App\Form;
use Illuminate\Http\Request;

class FormController extends Controller {
    public function index() {
        return view('contact.index');
    }

    public function store(Request $request) {
        $form = new Form($request->all());
        $form->save();
    }
}
