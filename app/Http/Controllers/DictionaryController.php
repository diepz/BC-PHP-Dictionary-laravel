<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DictionaryController extends Controller
{
    public function search(Request $request)
    {
        $dictionary = [
            'hello' => 'Xin Chào',
            'Book' => 'Sách',
            'Dog' => 'Chó',
            'Cat' => 'Mèo',
        ];
        $searchWord = $request->search;
        return view('display', ['searchWord' =>  $searchWord, 'dictionary' =>  $dictionary]);
    }
}
