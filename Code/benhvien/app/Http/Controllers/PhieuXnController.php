<?php

namespace App\Http\Controllers;

use App\Models\PhieuXn;
use App\Models\BenhNhan;
use Illuminate\Http\Request;

class PhieuXnController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $phieuxns = PhieuXn::all();
        return view('phieuxn.list', compact('phieuxns'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $benhnhans = BenhNhan::all();
        return view('phieuxn.add', compact('benhnhans'));
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
            'txtMaBN'=>'required',
            'txtTenXN'=>'required',
            'txtNgayXN'=>'required',
            'txtKetQuaXN'=>'required',
            'txtChiPhi'=>'required',
        ]);

        $newPhieuXn = PhieuXn::create([
            'MaBN' => $request->txtMaBN,
            'TenXN' => $request->txtTenXN,
            'NgayXN' => $request->txtNgayXN,
            'KetQuaXN' => $request->txtKetQuaXN,
            'ChiPhi' => $request->txtChiPhi
        ]);
        
        return redirect('phieuxn')->with('status', 'Thêm phiếu xn thành công');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PhieuXn  $phieuXn
     * @return \Illuminate\Http\Response
     */
    public function show($MaPhieu)
    {
        $phieuxn = PhieuXn::where('MaPhieu', '=', $MaPhieu)->firstOrFail();
        return view('phieuxn.detail', compact('phieuxn'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PhieuXn  $phieuXn
     * @return \Illuminate\Http\Response
     */
    public function edit($MaPhieu)
    {
        $benhnhans = BenhNhan::all();
        $phieuxn = PhieuXn::where('MaPhieu', '=', $MaPhieu)->firstOrFail();
        return view('phieuxn.edit', compact('phieuxn', 'benhnhans'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PhieuXn  $phieuXn
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $MaPhieu)
    {
        $request->validate([
            'txtMaBN'=>'required',
            'txtTenXN'=>'required',
            'txtNgayXN'=>'required',
            'txtKetQuaXN'=>'required',
            'txtChiPhi'=>'required',
        ]);

        $phieuxn = PhieuXn::where('MaPhieu', '=', $MaPhieu)->firstOrFail();
        $phieuxn->MaPhieu = $MaPhieu;
        $phieuxn->MaBN = $request->txtMaBN;
        $phieuxn->TenXN = $request->txtTenXN;
        $phieuxn->NgayXN = $request->txtNgayXN;
        $phieuxn->KetQuaXN = $request->txtKetQuaXN;
        $phieuxn->ChiPhi = $request->txtChiPhi;
        $phieuxn->save();
        return redirect('phieuxn')->with('status', 'Cập nhật phiếu xn thành công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PhieuXn  $phieuXn
     * @return \Illuminate\Http\Response
     */
    public function destroy($MaPhieu)
    {
        $benhnhan = PhieuXn::where('MaPhieu', '=', $MaPhieu)->firstOrFail();
        $benhnhan->delete();
        return redirect('phieuxn')->with('status', 'Xóa phiếu thành công');
    }

    public function viewPhieu($MaBN) {
        $phieuxn = PhieuXn::where('MaBN', '=', $MaBN)->get();
        echo $phieuxn;
    }
}
