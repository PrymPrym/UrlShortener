<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UrlUsed;
use App\Url;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
		$data=UrlUsed::all();
        return view('home',['data'=>$data]);
    }
    
    public function delete($id)
    {
		$urlItem=UrlUsed::findOrFail($id);
		$UrlObj=new Url();
		$UrlObj->hashname=$urlItem->hashname;
		$UrlObj->save();
		$urlItem->delete();
        return redirect('/home');
    }
}
