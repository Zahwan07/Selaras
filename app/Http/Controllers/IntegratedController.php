<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tiket;
use App\Models\User;

class IntegratedController extends Controller
{
    public function getTotalStok()
    {
        $totalTiket = Tiket::count();
        return $totalTiket;
    }

    public function getMonthTiket(){
        $bulan_ini = date('m');
        $total_tiket_bulan_ini = Tiket::whereMonth('created_at', '=', $bulan_ini)->count();
        return $total_tiket_bulan_ini;
    }

    public function getLastMonthTiket(){
        $bulan_kemarin = date('m', strtotime('-1 month'));
        $total_tiket_bulan_kemarin = Tiket::whereMonth('created_at', '=', $bulan_kemarin)->count();
        return $total_tiket_bulan_kemarin;
    }

    public function getTiketProses()
    {
        $tiketProses = Tiket::whereIn('status', ['Tiket Terkirim', 'Tiket Diproses'])->count();
        return $tiketProses;
    }

    public function getTiketChart(){

    }

    public function index()
    {
        $tiket = Tiket::all();
        $totalTiket = $this->getTotalStok();
        $tiketBulanan = $this->getMonthTiket();
        $tiketKemarin = $this->getLastMonthTiket();
        $tiketDiproses = $this->getTiketProses();
        $chartTiket = $this->getTiketChart();

        return view('../indexAdmin', compact('tiket','totalTiket','tiketBulanan','tiketKemarin','tiketDiproses'));
    }
    public function unauthorized()
    {
        return view('../unauthorized');
    }


}
