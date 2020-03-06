<?php

namespace Nitseditor\Application\Http\Controllers;

use App\Http\Controllers\Controller;

class TestingController extends Controller
{
    public function test()
    {
        $n=1234;
        $binary = decbin($n);
        $digits = strlen($binary);
        for($i = 0; $i<$digits; $i++)
            substr($digits, 0, 2);
        dd($digits);
    }
}
