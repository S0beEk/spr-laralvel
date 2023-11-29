<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class productsController extends Controller
{
    public function Show(Request $req){
        $req->validate([
            'name' => 'required | min:3 | max:10',
            'price' => 'required | numeric | min:1 | max:30000',
            'textarea' => 'max: 200'
        ],
        [
            'name.required' => 'pole :attribute jest wymagane',
            'name.min' => 'pole :attribute musi wynosić minimum :min znaków',
            'name.max' => 'pole :attribute musi wynosić maksymalnie :max znaków',
            'price.required' => 'pole :attribute jest wymagane',
            'price.min' => 'pole :attribute musi wynosić minimum :min zł',
            'price.max' => 'pole :attribute musi wynosić maksymalnie :max zł',
            'textarea.max' => 'pole :attribute musi wynosić maksymalnie :max znaków',


        ]);
        $product = [
            "name"=>$req->input("name"),
            "price"=>$req->input("price"),
            "textarea"=>$req->input("textarea")];
            return view('product',$product);
    }
}
