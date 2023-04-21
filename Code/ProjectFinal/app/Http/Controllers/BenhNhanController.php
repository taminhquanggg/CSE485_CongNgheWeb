<?php

namespace App\Http\Controllers;

use App\Models\BenhNhan;
use Illuminate\Http\Request;

class BenhNhanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $benhnhans = BenhNhan::all();
        return view('benhnhan.list', compact('benhnhans'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('benhnhan.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'txtTenBN' => 'required',
            'txtCCCD' => 'required',
            'txtNgaySinh' => 'required',
            'txtGioiTinh' => 'required',
            'txtQueQuan' => 'required',
        ]);

        $newBenhNhan = BenhNhan::create([
            'TenBN' => $request->txtTenBN,
            'CCCD' => $request->txtCCCD,
            'NgaySinh' => $request->txtNgaySinh,
            'GioiTinh' => $request->txtGioiTinh,
            'QueQuan' => $request->txtQueQuan,
        ]);
        return redirect('/')->with('status', 'Tạo bệnh nhân thành công');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BenhNhan  $benhNhan
     * @return \Illuminate\Http\Response
     */
    public function show($MaBN)
    {
        $benhnhan = BenhNhan::where('MaBN', '=', $MaBN)->firstOrFail();
        return view('benhnhan.edit', compact('benhnhan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BenhNhan  $benhNhan
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $MaBN)
    {
        $request->validate([
            'txtTenBN' => 'required',
            'txtCCCD' => 'required',
            'txtNgaySinh' => 'required',
            'txtGioiTinh' => 'required',
            'txtQueQuan' => 'required',
        ]);

        $benhnhan = BenhNhan::where('MaBN', '=', $MaBN)->firstOrFail();
        $benhnhan->MaBN = $MaBN;
        $benhnhan->TenBN = $request->txtTenBN;
        $benhnhan->CCCD = $request->txtCCCD;
        $benhnhan->NgaySinh = $request->txtNgaySinh;
        $benhnhan->GioiTinh = $request->txtGioiTinh;
        $benhnhan->QueQuan = $request->txtQueQuan;
        $benhnhan->save();
        return redirect('/')->with('status', 'Cập nhật bệnh nhân thành công');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\BenhNhan  $benhNhan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BenhNhan $benhNhan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BenhNhan  $benhNhan
     * @return \Illuminate\Http\Response
     */
    public function destroy($MaBN)
    {
        $benhnhan = BenhNhan::where('MaBN', '=', $MaBN)->firstOrFail();
        $benhnhan->delete();
        return redirect('/')->with('status', 'Xóa bệnh nhân thành công');
    }
}
