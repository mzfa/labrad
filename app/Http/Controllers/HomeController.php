<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use DataTables;
use Illuminate\Support\Str;


class HomeController extends Controller
{
    public function index()
    {
        $data = DB::table('laboratorium')->get();
        // dd($data);
        return view('home', compact('data'));
    }
    public function radiologi($pencarian = null)
    {
        // dd($data);
        // $pencarian = null;
        // if(isset($_GET['cari'])){
        //     $pencarian = $_GET['cari'];
        // }
        return view('radiologi', compact('pencarian'));
    }
    // public function caridata(Request $request)
    // {
    //     $data = DB::table('laboratorium')->limit(100)->get();
    //     // return view('radiologi', compact('data'));
    //     return $data;
    //     if ($request->ajax()) {
    //         $data = DB::table('laboratorium')->limit(100)->get();
    //         return Datatables::of($data)
    //             ->addIndexColumn()
    //             ->addColumn('action', function($row){
    //                 $actionBtn = '<a href="javascript:void(0)" class="edit btn btn-success btn-sm">Edit</a> <a href="javascript:void(0)" class="delete btn btn-danger btn-sm">Delete</a>';
    //                 return $actionBtn;
    //             })
    //             ->rawColumns(['action'])
    //             ->make(true);
    //     }
    //     // return view('users');
    // }
}
