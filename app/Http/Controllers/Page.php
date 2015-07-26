<?php namespace App\Http\Controllers;

class Page extends Controller{
	




/*		
		return view('pages.test')->with([
			'first' => 'Mikihito',
			'last'  => 'Morosawa'
		]);
*/
		
/*
		$data = [];
		$data['first'] = 'mikihito';
		$data['last'] = 'morosawa';
		return view('pages.test',$data);
*/

/*	$first = 'mikihitoo';
	$last  = 'morosawa';

	return view('pages.test',compact('first','last'));

	}
*/
	public function contact(){
		return view('pages.contact');
	}

	public function about(){
		 $people = [
		 	'Morosawa','Inoue','Tanaka'
		 ];
		//$people = [];

		return view('pages.test',compact('people'));
	}

	


}
