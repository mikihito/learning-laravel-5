<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class JQueryController extends Controller
{
    public function index(){
    	return view('JQuery.index');
    }
    public function auth(){
    	return view('JQuery.auth');
    }
}
