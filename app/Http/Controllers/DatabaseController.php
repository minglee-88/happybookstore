<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Books;
use App\Models\Categories;
use App\Models\Details;

class DatabaseController extends Controller
{
    public function Contact(){
        $categories = Categories::all();
        return view('contact',compact('categories'));
    }

    public function Detail($id){

        $detail = Details::where('books_id',$id)->get();
        $categories = Categories::all();

        return view('detail',['detail'=>$detail[0]],compact('categories'));
    }

    public function Category($id){

        $books = Books::where('categories_id',$id)->orderBy('title')->get();
        $categories = Categories::all();

        return view('category',compact('books','categories'));
    }

    public function Home(){

        $books= Books::all();
        $categories = Categories::all();

        return view('home',compact('books','categories'));
    }
}
