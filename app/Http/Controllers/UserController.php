<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserModel;


class UserController extends Controller
{
    public function index()
    {

    	return view('form');
    }

    public function getData(Request $request)
    {
    	
    	$User  = UserModel::whereBetween('created_at', [$request->dateFrom . ' 00:00:00', $request->dateTo . ' 23:59:59'])->get();

    	return $User;
    }

}
