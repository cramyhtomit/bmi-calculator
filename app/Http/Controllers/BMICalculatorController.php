<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BMICalculatorController extends Controller
{
    public function calculator() {
      return view('components.bmi_calculator');
    }
}