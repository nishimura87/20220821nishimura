<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index($text = "建物です")
    {
        return $text;
    }

    public function item($number = "")
    {
        return "部屋番号は" .$number . "です";
    }
}