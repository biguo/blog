<?php

namespace App\Http\Controllers\Common;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class BooksController extends Controller
{
    public function index()
    {
        $data['firstName'] = "kuker";
        $data['lastName'] = 'Chou';
        return view('common.books.index', $data);
    }

}
