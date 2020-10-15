<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Mail;
use Illuminate\Support\Facades\Redirect;
use DB;
use Session;
use App\Http\Requests;


class HomeController extends Controller
{
    //
    public function index()
    {
        $cate_product = DB::table('tbl_category_product')->where('category_status', '1')->orderby('category_id', 'desc')->get();
        $brand_product = DB::table('tbl_brand')->where('brand_status','1')->orderby('brand_id','desc')->get();
        $all_product = DB::table('tbl_product')->where('product_status','1')->orderby('product_id','desc')->limit(15)->get();
        return view('pages.home')->with('category',$cate_product)->with('brand',$brand_product)->with('all_product',$all_product);
    }
    public function product()
    {
        return view('pages.contact');
    }
    public function news()
    {
        return view('pages.contact');
    }
    public function contact()
    {
        return view('pages.contact');
    }
}
