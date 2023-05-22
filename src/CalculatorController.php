<?php

namespace Becodezen\Calculator;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CalculatorController extends Controller
{
    public function add($a, $b)
    {
        $result =  $a + $b;

        return view('calculator::calculator.add', compact('result'));
    }
}
