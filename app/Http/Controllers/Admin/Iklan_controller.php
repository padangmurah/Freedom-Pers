<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Iklan_controller extends Controller
{
	public function index(){
		$title = 'Manage iklan';

		return view('admin.iklan.iklan_index',compact('title'));
	}

	public function store(Request $request){
		$file = $request->file('image');
		\DB::table('iklan')->truncate();

		if($file){
			//Move Uploaded File
			$destinationPath = 'uploads';
			$file->move($destinationPath,$file->getClientOriginalName());

			\DB::table('iklan')->insert([
				'url'=>$request->url,
				'gambar'=>$file->getClientOriginalName()
			]);
		}

		return redirect('admin/iklan');
	}
}
