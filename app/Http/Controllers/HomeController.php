<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

use App\Competition;
use App\Data;
use App\Models\User;
use Carbon\Carbon;

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
    public function member()
    {
        return view('member');
    }
    public function index()
    {
        $countUsers     = DB::table('users')->whereNotNull('email_verified_at')->count();
        $countAll       = DB::table('mahasiswas')->where('status_registrasi','2')
                            ->join('users', 'mahasiswas.npm', '=', 'users.npm')->whereNotNull('email_verified_at')->count();
        $countToga       = DB::table('mahasiswas')->where('status_registrasi','2')->whereIn('status_ambil_toga', [2,3])
                            ->join('users', 'mahasiswas.npm', '=', 'users.npm')->whereNotNull('email_verified_at')->count();

            //USERS
        $countAk3       = DB::table('mahasiswas')->where('prodi_id','11')->join('users', 'mahasiswas.npm', '=', 'users.npm')->whereNotNull('email_verified_at')->count();
        $countAk3AP     = DB::table('mahasiswas')->where('prodi_id','12')->join('users', 'mahasiswas.npm', '=', 'users.npm')->whereNotNull('email_verified_at')->count();
        $countAk4       = DB::table('mahasiswas')->where('prodi_id','13')->join('users', 'mahasiswas.npm', '=', 'users.npm')->whereNotNull('email_verified_at')->count();
        $countAk4APNon  = DB::table('mahasiswas')->where('prodi_id','14')->join('users', 'mahasiswas.npm', '=', 'users.npm')->whereNotNull('email_verified_at')->count();
        $countAk4AP     = DB::table('mahasiswas')->where('prodi_id','15')->join('users', 'mahasiswas.npm', '=', 'users.npm')->whereNotNull('email_verified_at')->count();
        $countPj3       = DB::table('mahasiswas')->where('prodi_id','21')->join('users', 'mahasiswas.npm', '=', 'users.npm')->whereNotNull('email_verified_at')->count();
        $countPj3AP     = DB::table('mahasiswas')->where('prodi_id','22')->join('users', 'mahasiswas.npm', '=', 'users.npm')->whereNotNull('email_verified_at')->count();
        $countPbb3      = DB::table('mahasiswas')->where('prodi_id','23')->join('users', 'mahasiswas.npm', '=', 'users.npm')->whereNotNull('email_verified_at')->count();
        $countPbb3AP    = DB::table('mahasiswas')->where('prodi_id','24')->join('users', 'mahasiswas.npm', '=', 'users.npm')->whereNotNull('email_verified_at')->count();
      $countPbb3AP19    = DB::table('mahasiswas')->where('prodi_id','25')->join('users', 'mahasiswas.npm', '=', 'users.npm')->whereNotNull('email_verified_at')->count();
        $countBc3       = DB::table('mahasiswas')->where('prodi_id','31')->join('users', 'mahasiswas.npm', '=', 'users.npm')->whereNotNull('email_verified_at')->count();
        $countBc3AP     = DB::table('mahasiswas')->where('prodi_id','32')->join('users', 'mahasiswas.npm', '=', 'users.npm')->whereNotNull('email_verified_at')->count();
        $countKbn3      = DB::table('mahasiswas')->where('prodi_id','41')->join('users', 'mahasiswas.npm', '=', 'users.npm')->whereNotNull('email_verified_at')->count();
        $countKbn3AP    = DB::table('mahasiswas')->where('prodi_id','42')->join('users', 'mahasiswas.npm', '=', 'users.npm')->whereNotNull('email_verified_at')->count();
        $countMa3       = DB::table('mahasiswas')->where('prodi_id','43')->join('users', 'mahasiswas.npm', '=', 'users.npm')->whereNotNull('email_verified_at')->count();
            //Pendaftar
        $countdaftarAk3       = DB::table('mahasiswas')->where('prodi_id','11')->where('status_registrasi','2')->join('users', 'mahasiswas.npm', '=', 'users.npm')->whereNotNull('email_verified_at')->count();
        $countdaftarAk3AP     = DB::table('mahasiswas')->where('prodi_id','12')->where('status_registrasi','2')->join('users', 'mahasiswas.npm', '=', 'users.npm')->whereNotNull('email_verified_at')->count();
        $countdaftarAk4       = DB::table('mahasiswas')->where('prodi_id','13')->where('status_registrasi','2')->join('users', 'mahasiswas.npm', '=', 'users.npm')->whereNotNull('email_verified_at')->count();
        $countdaftarAk4APNon  = DB::table('mahasiswas')->where('prodi_id','14')->where('status_registrasi','2')->join('users', 'mahasiswas.npm', '=', 'users.npm')->whereNotNull('email_verified_at')->count();
        $countdaftarAk4AP     = DB::table('mahasiswas')->where('prodi_id','15')->where('status_registrasi','2')->join('users', 'mahasiswas.npm', '=', 'users.npm')->whereNotNull('email_verified_at')->count();
        $countdaftarPj3       = DB::table('mahasiswas')->where('prodi_id','21')->where('status_registrasi','2')->join('users', 'mahasiswas.npm', '=', 'users.npm')->whereNotNull('email_verified_at')->count();
        $countdaftarPj3AP     = DB::table('mahasiswas')->where('prodi_id','22')->where('status_registrasi','2')->join('users', 'mahasiswas.npm', '=', 'users.npm')->whereNotNull('email_verified_at')->count();
        $countdaftarPbb3      = DB::table('mahasiswas')->where('prodi_id','23')->where('status_registrasi','2')->join('users', 'mahasiswas.npm', '=', 'users.npm')->whereNotNull('email_verified_at')->count();
        $countdaftarPbb3AP    = DB::table('mahasiswas')->where('prodi_id','24')->where('status_registrasi','2')->join('users', 'mahasiswas.npm', '=', 'users.npm')->whereNotNull('email_verified_at')->count();
      $countdaftarPbb3AP19    = DB::table('mahasiswas')->where('prodi_id','25')->where('status_registrasi','2')->join('users', 'mahasiswas.npm', '=', 'users.npm')->whereNotNull('email_verified_at')->count();
        $countdaftarBc3       = DB::table('mahasiswas')->where('prodi_id','31')->where('status_registrasi','2')->join('users', 'mahasiswas.npm', '=', 'users.npm')->whereNotNull('email_verified_at')->count();
        $countdaftarBc3AP     = DB::table('mahasiswas')->where('prodi_id','32')->where('status_registrasi','2')->join('users', 'mahasiswas.npm', '=', 'users.npm')->whereNotNull('email_verified_at')->count();
        $countdaftarKbn3      = DB::table('mahasiswas')->where('prodi_id','41')->where('status_registrasi','2')->join('users', 'mahasiswas.npm', '=', 'users.npm')->whereNotNull('email_verified_at')->count();
        $countdaftarKbn3AP    = DB::table('mahasiswas')->where('prodi_id','42')->where('status_registrasi','2')->join('users', 'mahasiswas.npm', '=', 'users.npm')->whereNotNull('email_verified_at')->count();
        $countdaftarMa3       = DB::table('mahasiswas')->where('prodi_id','43')->where('status_registrasi','2')->join('users', 'mahasiswas.npm', '=', 'users.npm')->whereNotNull('email_verified_at')->count();
        //Togas
        $counttogaAk3       = DB::table('mahasiswas')->where('prodi_id','11')->where('status_registrasi','2')->whereIn('status_ambil_toga', [2,3])->join('users', 'mahasiswas.npm', '=', 'users.npm')->whereNotNull('email_verified_at')->count();
        $counttogaAk3AP     = DB::table('mahasiswas')->where('prodi_id','12')->where('status_registrasi','2')->whereIn('status_ambil_toga', [2,3])->join('users', 'mahasiswas.npm', '=', 'users.npm')->whereNotNull('email_verified_at')->count();
        $counttogaAk4       = DB::table('mahasiswas')->where('prodi_id','13')->where('status_registrasi','2')->whereIn('status_ambil_toga', [2,3])->join('users', 'mahasiswas.npm', '=', 'users.npm')->whereNotNull('email_verified_at')->count();
        $counttogaAk4APNon  = DB::table('mahasiswas')->where('prodi_id','14')->where('status_registrasi','2')->whereIn('status_ambil_toga', [2,3])->join('users', 'mahasiswas.npm', '=', 'users.npm')->whereNotNull('email_verified_at')->count();
        $counttogaAk4AP     = DB::table('mahasiswas')->where('prodi_id','15')->where('status_registrasi','2')->whereIn('status_ambil_toga', [2,3])->join('users', 'mahasiswas.npm', '=', 'users.npm')->whereNotNull('email_verified_at')->count();
        $counttogaPj3       = DB::table('mahasiswas')->where('prodi_id','21')->where('status_registrasi','2')->whereIn('status_ambil_toga', [2,3])->join('users', 'mahasiswas.npm', '=', 'users.npm')->whereNotNull('email_verified_at')->count();
        $counttogaPj3AP     = DB::table('mahasiswas')->where('prodi_id','22')->where('status_registrasi','2')->whereIn('status_ambil_toga', [2,3])->join('users', 'mahasiswas.npm', '=', 'users.npm')->whereNotNull('email_verified_at')->count();
        $counttogaPbb3      = DB::table('mahasiswas')->where('prodi_id','23')->where('status_registrasi','2')->whereIn('status_ambil_toga', [2,3])->join('users', 'mahasiswas.npm', '=', 'users.npm')->whereNotNull('email_verified_at')->count();
        $counttogaPbb3AP    = DB::table('mahasiswas')->where('prodi_id','24')->where('status_registrasi','2')->whereIn('status_ambil_toga', [2,3])->join('users', 'mahasiswas.npm', '=', 'users.npm')->whereNotNull('email_verified_at')->count();
      $counttogaPbb3AP19    = DB::table('mahasiswas')->where('prodi_id','25')->where('status_registrasi','2')->whereIn('status_ambil_toga', [2,3])->join('users', 'mahasiswas.npm', '=', 'users.npm')->whereNotNull('email_verified_at')->count();
        $counttogaBc3       = DB::table('mahasiswas')->where('prodi_id','31')->where('status_registrasi','2')->whereIn('status_ambil_toga', [2,3])->join('users', 'mahasiswas.npm', '=', 'users.npm')->whereNotNull('email_verified_at')->count();
        $counttogaBc3AP     = DB::table('mahasiswas')->where('prodi_id','32')->where('status_registrasi','2')->whereIn('status_ambil_toga', [2,3])->join('users', 'mahasiswas.npm', '=', 'users.npm')->whereNotNull('email_verified_at')->count();
        $counttogaKbn3      = DB::table('mahasiswas')->where('prodi_id','41')->where('status_registrasi','2')->whereIn('status_ambil_toga', [2,3])->join('users', 'mahasiswas.npm', '=', 'users.npm')->whereNotNull('email_verified_at')->count();
        $counttogaKbn3AP    = DB::table('mahasiswas')->where('prodi_id','42')->where('status_registrasi','2')->whereIn('status_ambil_toga', [2,3])->join('users', 'mahasiswas.npm', '=', 'users.npm')->whereNotNull('email_verified_at')->count();
        $counttogaMa3       = DB::table('mahasiswas')->where('prodi_id','43')->where('status_registrasi','2')->whereIn('status_ambil_toga', [2,3])->join('users', 'mahasiswas.npm', '=', 'users.npm')->whereNotNull('email_verified_at')->count();
        $year = ['2021'];

        $user = [];
        foreach ($year as $key => $value) {
            $user[] = User::where(\DB::raw("DATE_FORMAT(created_at, '%Y')"),$value)->count();
        }

        return view('home', ['countUsers' => $countUsers,
                            'countAll' => $countAll,
                            'countToga' => $countToga,
                            'countAk3' => $countAk3,
                            'countAk3AP' => $countAk3AP,
                            'countAk4' => $countAk4,
                            'countAk4APNon' => $countAk4APNon,
                            'countAk4AP' => $countAk4AP,
                            'countPj3' => $countPj3,
                            'countPj3AP' => $countPj3AP,
                            'countPbb3' => $countPbb3,
                            'countPbb3AP' => $countPbb3AP,
                            'countPbb3AP19' => $countPbb3AP19,
                            'countBc3' => $countBc3,
                            'countBc3AP' => $countBc3AP,
                            'countKbn3' => $countKbn3,
                            'countKbn3AP' => $countKbn3AP,
                            'countMa3' => $countMa3,

                            'countdaftarAk3'        => $countdaftarAk3,
                            'countdaftarAk3AP'      => $countdaftarAk3AP,
                            'countdaftarAk4'        => $countdaftarAk4,
                            'countdaftarAk4APNon'   => $countdaftarAk4APNon,
                            'countdaftarAk4AP'      => $countdaftarAk4AP,
                            'countdaftarPj3'        => $countdaftarPj3,
                            'countdaftarPj3AP'      => $countdaftarPj3AP,
                            'countdaftarPbb3'       => $countdaftarPbb3,
                            'countdaftarPbb3AP'     => $countdaftarPbb3AP,
                            'countdaftarPbb3AP19'   => $countdaftarPbb3AP19,
                            'countdaftarBc3'        => $countdaftarBc3,
                            'countdaftarBc3AP'      => $countdaftarBc3AP,
                            'countdaftarKbn3'       => $countdaftarKbn3,
                            'countdaftarKbn3AP'     => $countdaftarKbn3AP,
                            'countdaftarMa3'        => $countdaftarMa3,

                            'counttogaAk3'        => $counttogaAk3,
                            'counttogaAk3AP'      => $counttogaAk3AP,
                            'counttogaAk4'        => $counttogaAk4,
                            'counttogaAk4APNon'   => $counttogaAk4APNon,
                            'counttogaAk4AP'      => $counttogaAk4AP,
                            'counttogaPj3'        => $counttogaPj3,
                            'counttogaPj3AP'      => $counttogaPj3AP,
                            'counttogaPbb3'       => $counttogaPbb3,
                            'counttogaPbb3AP'     => $counttogaPbb3AP,
                            'counttogaPbb3AP19'   => $counttogaPbb3AP19,
                            'counttogaBc3'        => $counttogaBc3,
                            'counttogaBc3AP'      => $counttogaBc3AP,
                            'counttogaKbn3'       => $counttogaKbn3,
                            'counttogaKbn3AP'     => $counttogaKbn3AP,
                            'counttogaMa3'        => $counttogaMa3,
                           ]
                    )->with('year',json_encode($year,JSON_NUMERIC_CHECK))->with('user',json_encode($user,JSON_NUMERIC_CHECK));;
    }

    //Jurusan Akuntansi
    public function Akuntansitiga()
    {
        $mahasiswas = DB::table('mahasiswas')
        ->join('prodis', 'mahasiswas.prodi_id', '=', 'prodis.id')->whereIn('prodi_id',['11'])->WhereIn('status_registrasi',['2'])
        ->join('users', 'mahasiswas.npm', '=', 'users.npm')->whereNotNull('email_verified_at')
        ->join('togas', 'mahasiswas.id', '=', 'togas.mahasiswa_id')->whereNotNull('nama_ayah')
        ->select('mahasiswas.*','prodis.*','mahasiswas.id as idmahasiswa', 'togas.*')
                    ->get();
        return view('datas', ['mahasiswas' => $mahasiswas, 'prodi_id' => 'D III Akuntansi']);
    }
    public function AkuntansitigaAP()
    {
        $mahasiswas = DB::table('mahasiswas')
        ->join('prodis', 'mahasiswas.prodi_id', '=', 'prodis.id')->whereIn('prodi_id',['12'])->WhereIn('status_registrasi',['2'])
        ->join('users', 'mahasiswas.npm', '=', 'users.npm')->whereNotNull('email_verified_at')
        ->join('togas', 'mahasiswas.id', '=', 'togas.mahasiswa_id')->whereNotNull('nama_ayah')
        ->select('mahasiswas.*','prodis.*','mahasiswas.id as idmahasiswa', 'togas.*')
                    ->get();
        return view('datas', ['mahasiswas' => $mahasiswas, 'prodi_id' => 'D III Akuntansi AP']);
    }
    public function Akuntansiempat()
    {
        $mahasiswas = DB::table('mahasiswas')
        ->join('prodis', 'mahasiswas.prodi_id', '=', 'prodis.id')->whereIn('prodi_id',['13'])->WhereIn('status_registrasi',['2'])
        ->join('users', 'mahasiswas.npm', '=', 'users.npm')->whereNotNull('email_verified_at')
        ->join('togas', 'mahasiswas.id', '=', 'togas.mahasiswa_id')->whereNotNull('nama_ayah')
        ->select('mahasiswas.*','prodis.*','mahasiswas.id as idmahasiswa', 'togas.*')
                    ->get();
        return view('datas', ['mahasiswas' => $mahasiswas, 'prodi_id' => 'D IV Akuntansi']);
    }
    public function AkuntansiempatAPNon()
    {
        $mahasiswas = DB::table('mahasiswas')
        ->join('prodis', 'mahasiswas.prodi_id', '=', 'prodis.id')->whereIn('prodi_id',['14'])->WhereIn('status_registrasi',['2'])
        ->join('users', 'mahasiswas.npm', '=', 'users.npm')->whereNotNull('email_verified_at')
        ->join('togas', 'mahasiswas.id', '=', 'togas.mahasiswa_id')->whereNotNull('nama_ayah')
        ->select('mahasiswas.*','prodis.*','mahasiswas.id as idmahasiswa', 'togas.*')
                    ->get();
        return view('datas', ['mahasiswas' => $mahasiswas, 'prodi_id' => 'D IV Akuntansi AP Non Akuntansi']);
    }
    public function AkuntansiempatAP()
    {
        $mahasiswas = DB::table('mahasiswas')
        ->join('prodis', 'mahasiswas.prodi_id', '=', 'prodis.id')->whereIn('prodi_id',['15'])->WhereIn('status_registrasi',['2'])
        ->join('users', 'mahasiswas.npm', '=', 'users.npm')->whereNotNull('email_verified_at')
        ->join('togas', 'mahasiswas.id', '=', 'togas.mahasiswa_id')->whereNotNull('nama_ayah')
        ->select('mahasiswas.*','prodis.*','mahasiswas.id as idmahasiswa', 'togas.*')
                    ->get();
        return view('datas', ['mahasiswas' => $mahasiswas, 'prodi_id' => 'D IV Akuntansi AP']);
    }

    //Jurusan Pajak
    public function Pajaktiga()
    {
        $mahasiswas = DB::table('mahasiswas')
        ->join('prodis', 'mahasiswas.prodi_id', '=', 'prodis.id')->whereIn('prodi_id',['21'])->WhereIn('status_registrasi',['2'])
        ->join('users', 'mahasiswas.npm', '=', 'users.npm')->whereNotNull('email_verified_at')
        ->join('togas', 'mahasiswas.id', '=', 'togas.mahasiswa_id')->whereNotNull('nama_ayah')
        ->select('mahasiswas.*','prodis.*','mahasiswas.id as idmahasiswa', 'togas.*')
                    ->get();
        return view('datas', ['mahasiswas' => $mahasiswas, 'prodi_id' => 'D III Pajak']);
    }
    public function PajaktigaAP()
    {
        $mahasiswas = DB::table('mahasiswas')
        ->join('prodis', 'mahasiswas.prodi_id', '=', 'prodis.id')->whereIn('prodi_id',['22'])->WhereIn('status_registrasi',['2'])
        ->join('users', 'mahasiswas.npm', '=', 'users.npm')->whereNotNull('email_verified_at')
        ->join('togas', 'mahasiswas.id', '=', 'togas.mahasiswa_id')->whereNotNull('nama_ayah')
        ->select('mahasiswas.*','prodis.*','mahasiswas.id as idmahasiswa', 'togas.*')
                    ->get();
        return view('datas', ['mahasiswas' => $mahasiswas, 'prodi_id' => 'D III Pajak AP']);
    }
    public function Pbbtiga()
    {
        $mahasiswas = DB::table('mahasiswas')
        ->join('prodis', 'mahasiswas.prodi_id', '=', 'prodis.id')->whereIn('prodi_id',['23'])->WhereIn('status_registrasi',['2'])
        ->join('users', 'mahasiswas.npm', '=', 'users.npm')->whereNotNull('email_verified_at')
        ->join('togas', 'mahasiswas.id', '=', 'togas.mahasiswa_id')->whereNotNull('nama_ayah')
        ->select('mahasiswas.*','prodis.*','mahasiswas.id as idmahasiswa', 'togas.*')
                    ->get();
        return view('datas', ['mahasiswas' => $mahasiswas, 'prodi_id' => 'D III PBB/Penilai']);
    }
    public function PbbtigaAP19()
    {
        $mahasiswas = DB::table('mahasiswas')
        ->join('prodis', 'mahasiswas.prodi_id', '=', 'prodis.id')->whereIn('prodi_id',['25'])->WhereIn('status_registrasi',['2'])
        ->join('users', 'mahasiswas.npm', '=', 'users.npm')->whereNotNull('email_verified_at')
        ->join('togas', 'mahasiswas.id', '=', 'togas.mahasiswa_id')->whereNotNull('nama_ayah')
        ->select('mahasiswas.*','prodis.*','mahasiswas.id as idmahasiswa', 'togas.*')
                    ->get();
        return view('datas', ['mahasiswas' => $mahasiswas, 'prodi_id' => 'D III PBB/PENILAI AP 2019']);
    }
    public function PbbtigaAP18()
    {
        $mahasiswas = DB::table('mahasiswas')
        ->join('prodis', 'mahasiswas.prodi_id', '=', 'prodis.id')->whereIn('prodi_id',['24'])->WhereIn('status_registrasi',['2'])
        ->join('users', 'mahasiswas.npm', '=', 'users.npm')->whereNotNull('email_verified_at')
        ->join('togas', 'mahasiswas.id', '=', 'togas.mahasiswa_id')->whereNotNull('nama_ayah')
        ->select('mahasiswas.*','prodis.*','mahasiswas.id as idmahasiswa', 'togas.*')
                    ->get();
        return view('datas', ['mahasiswas' => $mahasiswas, 'prodi_id' => 'D III PBB/PENILAI AP 2018']);
    }

    //Juruan Bea Cukai
    public function Beacukaitiga()
    {
        $mahasiswas = DB::table('mahasiswas')
        ->join('prodis', 'mahasiswas.prodi_id', '=', 'prodis.id')->whereIn('prodi_id',['31'])->WhereIn('status_registrasi',['2'])
        ->join('users', 'mahasiswas.npm', '=', 'users.npm')->whereNotNull('email_verified_at')
        ->join('togas', 'mahasiswas.id', '=', 'togas.mahasiswa_id')->whereNotNull('nama_ayah')
        ->select('mahasiswas.*','prodis.*','mahasiswas.id as idmahasiswa', 'togas.*')
                    ->get();
        return view('datas', ['mahasiswas' => $mahasiswas, 'prodi_id' => 'D III KEPABEANAN DAN CUKAI']);
    }
    public function BeacukaitigaAP()
    {
        $mahasiswas = DB::table('mahasiswas')
        ->join('prodis', 'mahasiswas.prodi_id', '=', 'prodis.id')->whereIn('prodi_id',['32'])->WhereIn('status_registrasi',['2'])
        ->join('users', 'mahasiswas.npm', '=', 'users.npm')->whereNotNull('email_verified_at')
        ->join('togas', 'mahasiswas.id', '=', 'togas.mahasiswa_id')->whereNotNull('nama_ayah')
        ->select('mahasiswas.*','prodis.*','mahasiswas.id as idmahasiswa', 'togas.*')
                    ->get();
        return view('datas', ['mahasiswas' => $mahasiswas, 'prodi_id' => 'D III KEPABEANAN DAN CUKAI AP']);
    }

    //Jurusan Manajemen Keuangan
    public function Kbntiga()
    {
        $mahasiswas = DB::table('mahasiswas')
        ->join('prodis', 'mahasiswas.prodi_id', '=', 'prodis.id')->whereIn('prodi_id',['41'])->WhereIn('status_registrasi',['2'])
        ->join('users', 'mahasiswas.npm', '=', 'users.npm')->whereNotNull('email_verified_at')
        ->join('togas', 'mahasiswas.id', '=', 'togas.mahasiswa_id')->whereNotNull('nama_ayah')
        ->select('mahasiswas.*','prodis.*','mahasiswas.id as idmahasiswa', 'togas.*')
                    ->get();
        return view('datas', ['mahasiswas' => $mahasiswas, 'prodi_id' => 'D III KEBENDAHARAAN NEGARA']);
    }
    public function KbntigaAP()
    {
        $mahasiswas = DB::table('mahasiswas')
        ->join('prodis', 'mahasiswas.prodi_id', '=', 'prodis.id')->whereIn('prodi_id',['42'])->WhereIn('status_registrasi',['2'])
        ->join('users', 'mahasiswas.npm', '=', 'users.npm')->whereNotNull('email_verified_at')
        ->join('togas', 'mahasiswas.id', '=', 'togas.mahasiswa_id')->whereNotNull('nama_ayah')
        ->select('mahasiswas.*','prodis.*','mahasiswas.id as idmahasiswa', 'togas.*')
                    ->get();
        return view('datas', ['mahasiswas' => $mahasiswas, 'prodi_id' => 'D III KEBENDAHARAAN NEGARA AP']);
    }
    public function Mansettiga()
    {
        $mahasiswas = DB::table('mahasiswas')
        ->join('prodis', 'mahasiswas.prodi_id', '=', 'prodis.id')->whereIn('prodi_id',['43'])->WhereIn('status_registrasi',['2'])
        ->join('users', 'mahasiswas.npm', '=', 'users.npm')->whereNotNull('email_verified_at')
        ->join('togas', 'mahasiswas.id', '=', 'togas.mahasiswa_id')->whereNotNull('nama_ayah')
        ->select('mahasiswas.*','prodis.*','mahasiswas.id as idmahasiswa', 'togas.*')
                    ->get();
        return view('datas', ['mahasiswas' => $mahasiswas, 'prodi_id' => 'D III MANAJEMEN ASET']);

    }
    //Rekap
    public function Rekap()
    {
        // $mahasiswas = DB::table('mahasiswas')->WhereIn('status_registrasi',['2'])
        // ->join('users', 'mahasiswas.npm', '=', 'users.npm')->whereNotNull('email_verified_at')
        // ->join('prodis', 'mahasiswas.prodi_id', '=', 'prodis.id')
        // ->join('togas', 'mahasiswas.id', '=', 'togas.mahasiswa_id')
        // ->select('mahasiswas.*','prodis.nama_prodi', 'togas.nama_ayah','togas.nama_ibu', 'togas.no_wa')
        //             ->get();
        // return view('datas', ['mahasiswas' => $mahasiswas, 'prodi_id' => 'Semua']);

        $mahasiswas = DB::table('users')->whereNotNull('email_verified_at')
        ->join('mahasiswas', 'users.npm', '=', 'mahasiswas.npm')
        ->join('prodis', 'mahasiswas.prodi_id', '=', 'prodis.id')
        ->join('togas', 'mahasiswas.id', '=', 'togas.mahasiswa_id')->whereNotNull('nama_ayah')
        ->select('mahasiswas.*','prodis.nama_prodi', 'togas.nama_ayah','togas.nama_ibu', 'togas.no_wa')
                    ->get();
        return view('datas', ['mahasiswas' => $mahasiswas, 'prodi_id' => 'Semua']);
    }
    

    //Hari Ini
    public function Akuntansitiganow()
    {
        $mahasiswas = DB::table('mahasiswas')
        ->join('prodis', 'mahasiswas.prodi_id', '=', 'prodis.id')->whereIn('prodi_id',['11'])->WhereIn('status_registrasi',['2'])
        ->join('users', 'mahasiswas.npm', '=', 'users.npm')->whereNotNull('email_verified_at')->whereDate('mahasiswas.updated_at', Carbon::today())
        ->join('togas', 'mahasiswas.id', '=', 'togas.mahasiswa_id')->whereNotNull('nama_ayah')
        ->select('mahasiswas.*','prodis.*','mahasiswas.id as idmahasiswa', 'togas.*')
                    ->get();
        return view('datas', ['mahasiswas' => $mahasiswas, 'prodi_id' => 'D III Akuntansi']);
    }
    public function AkuntansitigaAPnow()
    {
        $mahasiswas = DB::table('mahasiswas')
        ->join('prodis', 'mahasiswas.prodi_id', '=', 'prodis.id')->whereIn('prodi_id',['12'])->WhereIn('status_registrasi',['2'])
        ->join('users', 'mahasiswas.npm', '=', 'users.npm')->whereNotNull('email_verified_at')->whereDate('mahasiswas.updated_at', Carbon::today())
        ->join('togas', 'mahasiswas.id', '=', 'togas.mahasiswa_id')->whereNotNull('nama_ayah')
        ->select('mahasiswas.*','prodis.*','mahasiswas.id as idmahasiswa', 'togas.*')
                    ->get();
        return view('datas', ['mahasiswas' => $mahasiswas, 'prodi_id' => 'D III Akuntansi AP']);
    }
    public function Akuntansiempatnow()
    {
        $mahasiswas = DB::table('mahasiswas')
        ->join('prodis', 'mahasiswas.prodi_id', '=', 'prodis.id')->whereIn('prodi_id',['13'])->WhereIn('status_registrasi',['2'])
        ->join('users', 'mahasiswas.npm', '=', 'users.npm')->whereNotNull('email_verified_at')->whereDate('mahasiswas.updated_at', Carbon::today())
        ->join('togas', 'mahasiswas.id', '=', 'togas.mahasiswa_id')->whereNotNull('nama_ayah')
        ->select('mahasiswas.*','prodis.*','mahasiswas.id as idmahasiswa', 'togas.*')
                    ->get();
        return view('datas', ['mahasiswas' => $mahasiswas, 'prodi_id' => 'D IV Akuntansi']);
    }
    public function AkuntansiempatAPNonnow()
    {
        $mahasiswas = DB::table('mahasiswas')
        ->join('prodis', 'mahasiswas.prodi_id', '=', 'prodis.id')->whereIn('prodi_id',['14'])->WhereIn('status_registrasi',['2'])
        ->join('users', 'mahasiswas.npm', '=', 'users.npm')->whereNotNull('email_verified_at')->whereDate('mahasiswas.updated_at', Carbon::today())
        ->join('togas', 'mahasiswas.id', '=', 'togas.mahasiswa_id')->whereNotNull('nama_ayah')
        ->select('mahasiswas.*','prodis.*','mahasiswas.id as idmahasiswa', 'togas.*')
                    ->get();
        return view('datas', ['mahasiswas' => $mahasiswas, 'prodi_id' => 'D IV Akuntansi AP Non Akuntansi']);
    }
    public function AkuntansiempatAPnow()
    {
        $mahasiswas = DB::table('mahasiswas')
        ->join('prodis', 'mahasiswas.prodi_id', '=', 'prodis.id')->whereIn('prodi_id',['15'])->WhereIn('status_registrasi',['2'])
        ->join('users', 'mahasiswas.npm', '=', 'users.npm')->whereNotNull('email_verified_at')->whereDate('mahasiswas.updated_at', Carbon::today())
        ->join('togas', 'mahasiswas.id', '=', 'togas.mahasiswa_id')->whereNotNull('nama_ayah')
        ->select('mahasiswas.*','prodis.*','mahasiswas.id as idmahasiswa', 'togas.*')
                    ->get();
        return view('datas', ['mahasiswas' => $mahasiswas, 'prodi_id' => 'D IV Akuntansi AP']);
    }

    //Jurusan Pajak
    public function Pajaktiganow()
    {
        $mahasiswas = DB::table('mahasiswas')
        ->join('prodis', 'mahasiswas.prodi_id', '=', 'prodis.id')->whereIn('prodi_id',['21'])->WhereIn('status_registrasi',['2'])
        ->join('users', 'mahasiswas.npm', '=', 'users.npm')->whereNotNull('email_verified_at')->whereDate('mahasiswas.updated_at', Carbon::today())
        ->join('togas', 'mahasiswas.id', '=', 'togas.mahasiswa_id')->whereNotNull('nama_ayah')
        ->select('mahasiswas.*','prodis.*','mahasiswas.id as idmahasiswa', 'togas.*')
                    ->get();
        return view('datas', ['mahasiswas' => $mahasiswas, 'prodi_id' => 'D III Pajak']);
    }
    public function PajaktigaAPnow()
    {
        $mahasiswas = DB::table('mahasiswas')
        ->join('prodis', 'mahasiswas.prodi_id', '=', 'prodis.id')->whereIn('prodi_id',['22'])->WhereIn('status_registrasi',['2'])
        ->join('users', 'mahasiswas.npm', '=', 'users.npm')->whereNotNull('email_verified_at')->whereDate('mahasiswas.updated_at', Carbon::today())
        ->join('togas', 'mahasiswas.id', '=', 'togas.mahasiswa_id')->whereNotNull('nama_ayah')
        ->select('mahasiswas.*','prodis.*','mahasiswas.id as idmahasiswa', 'togas.*')
                    ->get();
        return view('datas', ['mahasiswas' => $mahasiswas, 'prodi_id' => 'D III Pajak AP']);
    }
    public function Pbbtiganow()
    {
        $mahasiswas = DB::table('mahasiswas')
        ->join('prodis', 'mahasiswas.prodi_id', '=', 'prodis.id')->whereIn('prodi_id',['23'])->WhereIn('status_registrasi',['2'])
        ->join('users', 'mahasiswas.npm', '=', 'users.npm')->whereNotNull('email_verified_at')->whereDate('mahasiswas.updated_at', Carbon::today())
        ->join('togas', 'mahasiswas.id', '=', 'togas.mahasiswa_id')->whereNotNull('nama_ayah')
        ->select('mahasiswas.*','prodis.*','mahasiswas.id as idmahasiswa', 'togas.*')
                    ->get();
        return view('datas', ['mahasiswas' => $mahasiswas, 'prodi_id' => 'D III PBB/Penilai']);
    }
    public function PbbtigaAP19now()
    {
        $mahasiswas = DB::table('mahasiswas')
        ->join('prodis', 'mahasiswas.prodi_id', '=', 'prodis.id')->whereIn('prodi_id',['25'])->WhereIn('status_registrasi',['2'])
        ->join('users', 'mahasiswas.npm', '=', 'users.npm')->whereNotNull('email_verified_at')->whereDate('mahasiswas.updated_at', Carbon::today())
        ->join('togas', 'mahasiswas.id', '=', 'togas.mahasiswa_id')->whereNotNull('nama_ayah')
        ->select('mahasiswas.*','prodis.*','mahasiswas.id as idmahasiswa', 'togas.*')
                    ->get();
        return view('datas', ['mahasiswas' => $mahasiswas, 'prodi_id' => 'D III PBB/PENILAI AP 2019']);
    }
    public function PbbtigaAP18now()
    {
        $mahasiswas = DB::table('mahasiswas')
        ->join('prodis', 'mahasiswas.prodi_id', '=', 'prodis.id')->whereIn('prodi_id',['24'])->WhereIn('status_registrasi',['2'])
        ->join('users', 'mahasiswas.npm', '=', 'users.npm')->whereNotNull('email_verified_at')->whereDate('mahasiswas.updated_at', Carbon::today())
        ->join('togas', 'mahasiswas.id', '=', 'togas.mahasiswa_id')->whereNotNull('nama_ayah')
        ->select('mahasiswas.*','prodis.*','mahasiswas.id as idmahasiswa', 'togas.*')
                    ->get();
        return view('datas', ['mahasiswas' => $mahasiswas, 'prodi_id' => 'D III PBB/PENILAI AP 2018']);
    }

    //Juruan Bea Cukai
    public function Beacukaitiganow()
    {
        $mahasiswas = DB::table('mahasiswas')
        ->join('prodis', 'mahasiswas.prodi_id', '=', 'prodis.id')->whereIn('prodi_id',['31'])->WhereIn('status_registrasi',['2'])
        ->join('users', 'mahasiswas.npm', '=', 'users.npm')->whereNotNull('email_verified_at')->whereDate('mahasiswas.updated_at', Carbon::today())
        ->join('togas', 'mahasiswas.id', '=', 'togas.mahasiswa_id')->whereNotNull('nama_ayah')
        ->select('mahasiswas.*','prodis.*','mahasiswas.id as idmahasiswa', 'togas.*')
                    ->get();
        return view('datas', ['mahasiswas' => $mahasiswas, 'prodi_id' => 'D III KEPABEANAN DAN CUKAI']);
    }
    public function BeacukaitigaAPnow()
    {
        $mahasiswas = DB::table('mahasiswas')
        ->join('prodis', 'mahasiswas.prodi_id', '=', 'prodis.id')->whereIn('prodi_id',['32'])->WhereIn('status_registrasi',['2'])
        ->join('users', 'mahasiswas.npm', '=', 'users.npm')->whereNotNull('email_verified_at')->whereDate('mahasiswas.updated_at', Carbon::today())
        ->join('togas', 'mahasiswas.id', '=', 'togas.mahasiswa_id')->whereNotNull('nama_ayah')
        ->select('mahasiswas.*','prodis.*','mahasiswas.id as idmahasiswa', 'togas.*')
                    ->get();
        return view('datas', ['mahasiswas' => $mahasiswas, 'prodi_id' => 'D III KEPABEANAN DAN CUKAI AP']);
    }

    //Jurusan Manajemen Keuangan
    public function Kbntiganow()
    {
        $mahasiswas = DB::table('mahasiswas')
        ->join('prodis', 'mahasiswas.prodi_id', '=', 'prodis.id')->whereIn('prodi_id',['41'])->WhereIn('status_registrasi',['2'])
        ->join('users', 'mahasiswas.npm', '=', 'users.npm')->whereNotNull('email_verified_at')->whereDate('mahasiswas.updated_at', Carbon::today())
        ->join('togas', 'mahasiswas.id', '=', 'togas.mahasiswa_id')->whereNotNull('nama_ayah')
        ->select('mahasiswas.*','prodis.*','mahasiswas.id as idmahasiswa', 'togas.*')
                    ->get();
        return view('datas', ['mahasiswas' => $mahasiswas, 'prodi_id' => 'D III KEBENDAHARAAN NEGARA']);
    }
    public function KbntigaAPnow()
    {
        $mahasiswas = DB::table('mahasiswas')
        ->join('prodis', 'mahasiswas.prodi_id', '=', 'prodis.id')->whereIn('prodi_id',['42'])->WhereIn('status_registrasi',['2'])
        ->join('users', 'mahasiswas.npm', '=', 'users.npm')->whereNotNull('email_verified_at')->whereDate('mahasiswas.updated_at', Carbon::today())
        ->join('togas', 'mahasiswas.id', '=', 'togas.mahasiswa_id')->whereNotNull('nama_ayah')
        ->select('mahasiswas.*','prodis.*','mahasiswas.id as idmahasiswa', 'togas.*')
                    ->get();
        return view('datas', ['mahasiswas' => $mahasiswas, 'prodi_id' => 'D III KEBENDAHARAAN NEGARA AP']);
    }
    public function Mansettiganow()
    {
        $mahasiswas = DB::table('mahasiswas')
        ->join('prodis', 'mahasiswas.prodi_id', '=', 'prodis.id')->whereIn('prodi_id',['43'])->WhereIn('status_registrasi',['2'])
        ->join('users', 'mahasiswas.npm', '=', 'users.npm')->whereNotNull('email_verified_at')->whereDate('mahasiswas.updated_at', Carbon::today())
        ->join('togas', 'mahasiswas.id', '=', 'togas.mahasiswa_id')->whereNotNull('nama_ayah')
        ->select('mahasiswas.*','prodis.*','mahasiswas.id as idmahasiswa', 'togas.*')
                    ->get();
        return view('datas', ['mahasiswas' => $mahasiswas, 'prodi_id' => 'D III MANAJEMEN ASET']);

    }
    //Rekap
    public function today()
    {
        $mahasiswas = DB::table('users')
        ->join('mahasiswas', 'users.npm', '=', 'mahasiswas.npm')->whereDate('mahasiswas.updated_at', Carbon::yesterday())
        ->join('prodis', 'mahasiswas.prodi_id', '=', 'prodis.id')
        ->join('togas', 'mahasiswas.id', '=', 'togas.mahasiswa_id')->whereNotNull('nama_ayah')
        ->select('mahasiswas.*','prodis.nama_prodi', 'togas.nama_ayah','togas.nama_ibu', 'togas.no_wa')
                    ->get();
        return view('datas', ['mahasiswas' => $mahasiswas, 'prodi_id' => 'Semua']);
    }
}