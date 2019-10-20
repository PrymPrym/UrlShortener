<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Url;

class UrlController extends Controller
{
	//create url base
    public function make() 
    {
		$CharArr=['A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z'];
		$HashStr="";
		for ($i=0;$i<26;$i++)
			for ($j=0;$j<26;$j++)
				{	
					$HashStr=$CharArr[$i].$CharArr[$j];		
					$UrlObj=new Url();
					$UrlObj->hashname=$HashStr;
					$UrlObj->save();
				}	
		return redirect('/home');			
		
	}
}
