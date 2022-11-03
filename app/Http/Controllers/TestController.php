<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class TestController extends Controller
{
    public function test()
    {
        $encrypt = Crypt::encrypt('test123');
        $decrypt = Crypt::decrypt($encrypt);
        return array('encrypt' => $encrypt, 'decrypt' => $decrypt);
    }
}
