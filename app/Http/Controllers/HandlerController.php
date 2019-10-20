<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Url;
use App\UrlUsed;
use Illuminate\Support\Facades\Auth;


class HandlerController extends Controller
{
    public function index(Request $request)
    {		
		$UrlSample = Url::all();
		$UrlCount = Url::count();
		$i=rand(0,$UrlCount);
		$UrlObj=new UrlUsed();
		$UrlObj->hashname=$UrlSample[$i]->hashname;
		$UrlObj->longurl=$request->input('UserUrl');
		$UrlObj->save();
		$UrlSample[$i]->delete();
		$data=$UrlObj->hashname;
		return view('welcome',['data'=>$data]);
	}
	
    public function handle(Request $request)
    {	
		$t=$request->path();
		$UrlObj=UrlUsed::where('hashname', $t)->firstOrFail();
		return redirect()->away($UrlObj->longurl);
	}
}
