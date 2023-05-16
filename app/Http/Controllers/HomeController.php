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
        $data = DB::table('laboratorium')->select('no_mr','nama_pasien')->groupBy('no_mr','nama_pasien')->get();
        // dd($data);
        return view('laboratorium', compact('data'));
    }
    public function laboratorium($pencarian = null)
    {
        $data = DB::table('laboratorium')->where(['no_mr' => $pencarian])->orderBy('tgl_jam_insert','desc')->get();
        
        return view('laboratorium_detail', compact('data'));
    }
    public function farmasi()
    {
        $data = DB::table('farmasi')->select('no_mr','nama_pasien')->groupBy('no_mr','nama_pasien')->get();
        return view('farmasi', compact('data'));
    }
    public function farmasi_detail($pencarian = null)
    {
        // dd($data);
        // $pencarian = null;
        $data = DB::table('farmasi')->where(['no_mr' => $pencarian])->orderBy('tgl_resep','desc')->get();
        return view('farmasi_detail', compact('data'));
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
}
