<?php

namespace App\Http\Controllers;

use App\Transaksi;
use Illuminate\Http\Request;
use DB;

class TransaksiController extends Controller
{
    public function index(){

    $data = Transaksi::orderBy('trid')->get();
    return view('admin.index', compact('data'));
    }

    public function show($custid){

    $data = DB::table('transaksi')->join('customer', 'customer.custid', '=', 'transaksi.custid')
    ->join('paket', 'paket.pktid', '=', 'transaksi.pktid')
    ->where('transaksi.custid', '=', $custid)
    ->get();
    $nopaket = 1;
    $no = 1;
    $id = $custid;
    return view('admin.detail', compact('data', 'no', 'id', 'nopaket'));
    }
}
