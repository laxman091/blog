<?php

namespace App\Http\Controllers;

class AdminController extends Controller
{
    public function index($get)
	{
		echo $get;
		echo '<br>';
		echo $post;
		return view('welcome');
	}
	public function test($get='')
	{
		echo $get;
		return view('welcome');
	}
	
	public function display()
	{
		//return view('welcome');
		echo 'display method called';
	}
}
