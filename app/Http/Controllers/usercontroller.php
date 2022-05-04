<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\dosenaktif;
use App\Models\dosentugas;
use App\Models\staf;
use App\Models\asistendosen;
use App\Models\keasramaan;
use App\Models\pegawai;
use App\Models\mahasiswaaktif;
use App\Models\mahasiswaalumni;
use App\Models\listgedung;
use App\Models\kapasitasruangankelas;
use App\Models\kantin;
use App\Models\perumahandalam;
use App\Models\perumahanluar;
use App\Models\asrama;
use App\Models\rusun3;
use App\Models\komputer;
use App\Models\kendaraan;
use App\Models\lmebeler;
use App\Models\lalattulis;
use App\Models\laudiovisual;
use App\Models\lperalatan;
use App\Models\lpersediaan;
use App\Models\llab;
use App\Models\ljaringan;
use App\Models\lmaintanance;
use App\Models\ltaman;
use App\Models\dispmebeler;
use App\Models\dispalattulis;
use App\Models\dispaudio;
use App\Models\dispperalatan;
use App\Models\disppersediaan;
use App\Models\displab;
use App\Models\dispjaringan;
use App\Models\dispmaintanance;
use App\Models\disptaman;

class usercontroller extends Controller
{
    public function indexdosenaktif()
    {
        $dosenaktif = dosenaktif::all();
        return view('DosenAktif', compact('dosenaktif'));
    }

    public function indexdosentugas()
    {
        $dosentugas = dosentugas::all();
        return view('DosenTugasBelajar', compact('dosentugas'));
    }

    public function indexstaf()
    {
        $staf = staf::all();
        return view('Staff', compact('staf'));
    }

    public function indexasistendosen()
    {
        $asistendosen = asistendosen::all();
        return view('AsistenDosen', compact('asistendosen'));
    }

    public function indexkeasramaan()
    {
        $keasramaan = keasramaan::all();
        return view('Keasramaan', compact('keasramaan'));
    }

    public function indexpegawai()
    {
        $pegawai = pegawai::all();
        return view('Pegawai', compact('pegawai'));
    }

    public function indexmahasiswaaktif()
    {
        $mahasiswaaktif = mahasiswaaktif::all();
        return view('MahasiswaAktif', compact('mahasiswaaktif'));
    }

    public function indexmahasiswaalumni()
    {
        $mahasiswaalumni = mahasiswaalumni::all();
        return view('MahasiswaAlumni', compact('mahasiswaalumni'));
    }

    public function indexlistgedung()
    {
        $listgedung = listgedung::all();
        return view('ListGedung', compact('listgedung'));
    }

    public function indexkapasitasruangankelas()
    {
        $kapasitasruangankelas = kapasitasruangankelas::all();
        return view('KapasitasRuangKelas', compact('kapasitasruangankelas'));
    }

    public function indexkantin()
    {
        $kantin = kantin::all();
        return view('Kantin', compact('kantin'));
    }

    public function indexperumahanluar()
    {
        $perumahanluar = perumahanluar::all();
        return view('PerumahanLuar', compact('perumahanluar'));
    }

    public function indexperumahandalam()
    {
        $perumahandalam = perumahandalam::all();
        return view('PerumahanDalam', compact('perumahandalam'));
    }

    public function indexasrama()
    {
        $asrama = asrama::all();
        return view('Asrama', compact('asrama'));
    }

    public function indexrusun3()
    {
        $rusun3 = rusun3::all();
        return view('Rusun3', compact('rusun3'));
    }

    public function indexkomputer()
    {
        $komputer = komputer::all();
        return view('Komputer', compact('komputer'));
    }

    public function indexkendaraan()
    {
        $kendaraan = kendaraan::all();
        return view('Kendaraan', compact('kendaraan'));
    }

    public function indexmebeler()
    {
        $mebeler = lmebeler::all();
        return view('Mebeler', compact('mebeler'));
    }

    public function indexalattulis()
    {
        $alattulis = lalattulis::all();
        return view('AlatTulis', compact('alattulis'));
    }

    public function indexaudiovisual()
    {
        $audiovisual = laudiovisual::all();
        return view('AudioVisual', compact('audiovisual'));
    }

    public function indexperalatan()
    {
        $peralatan = lperalatan::all();
        return view('PeralatanRumahTangga', compact('peralatan'));
    }

    public function indexpersediaan()
    {
        $persediaan = lpersediaan::all();
        return view('PersediaanKampus', compact('persediaan'));
    }

    public function indexalatlab()
    {
        $alatlab = llab::all();
        return view('AlatLaboratorium', compact('alatlab'));
    }

    public function indexjaringan()
    {
        $jaringan = ljaringan::all();
        return view('Jaringan', compact('jaringan'));
    }

    public function indexmaintanance()
    {
        $maintanance = lmaintanance::all();
        return view('PerlengkapanMaintanance', compact('maintanance'));
    }

    public function indextaman()
    {
        $taman = ltaman::all();
        return view('PerlengkapanTaman', compact('taman'));
    }

    //DISPOSAL
    public function indexdispmebeler()
    {
        $dispmebeler = dispmebeler::all();
        return view('DisposalMebeler', compact('dispmebeler'));
    }
    public function indexdispalattulis()
    {
        $dispalattulis = dispalattulis::all();
        return view('DisposalAlatTulis', compact('dispalattulis'));
    }
    public function indexdispaudiovisual()
    {
        $dispaudiovisual = dispaudio::all();
        return view('DisposalAudioVisual', compact('dispaudiovisual'));
    }
    public function indexdispperalatan()
    {
        $dispperalatan = dispperalatan::all();
        return view('DisposalPeralatanRumahTangga', compact('dispperalatan'));
    }
    public function indexdisppersediaan()
    {
        $disppersediaan = disppersediaan::all();
        return view('DisposalPersediaanKampus', compact('disppersediaan'));
    }
    public function indexdispalatlab()
    {
        $dispalatlab = displab::all();
        return view('DisposalAlatLaboratorium', compact('dispalatlab'));
    }
    public function indexdispjaringan()
    {
        $dispjaringan = dispjaringan::all();
        return view('DisposalJaringan', compact('dispjaringan'));
    }
    public function indexdispmaintanance()
    {
        $dispmaintanance = dispmaintanance::all();
        return view('DisposalPerlengkapanMaintanance', compact('dispmaintanance'));
    }
    public function indexdisptaman()
    {
        $disptaman = disptaman::all();
        return view('DisposalPerlengkapanTaman', compact('disptaman'));
    }

}
