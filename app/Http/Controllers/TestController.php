<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{


    public function formatest(Request $request)
   {
       $path = $request->file('photo')->storeAs('public/temp', $request->file('photo')->getClientOriginalName());
        // Проверяем авторизацию юзера и берем его ID
//       if (!\Auth::guest())
//           $userId = \Auth::user();
//       else
//           return('ERROR. Юзер не авторизован');
        return $path;
    }

}
