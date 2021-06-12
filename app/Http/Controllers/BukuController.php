<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Exports\BukuExport;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;



class BukuController extends Controller
{
    public function index()
	{
		$buku = DB::table('buku')
		->join('rak_buku','buku.id', '=', 'rak_buku.id_buku')
		->join('jenis_buku','rak_buku.id_jenis_buku', '=', 'jenis_buku.id')
		->get();
		return view('buku0259',['buku'=>$buku]);
	}

	public function export_excel()
	{
		return Excel::download(new BukuExport, 'Data_1461900259.xlsx');
	}
}
