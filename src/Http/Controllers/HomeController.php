<?php

namespace Nitseditor\Application\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function upload() {
        return response()->json(['link' => nits_binary_file_s3_upload()], 200);
    }
}
