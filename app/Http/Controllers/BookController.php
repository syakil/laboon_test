<?php

namespace App\Http\Controllers;

use App\Booking;
use App\Repositories\KapalRepositories;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class BookController extends Controller
{
    /**
    * All of the current user's projects.
    */
   protected $projects;

   /**
    * Create a new controller instance.
    *
    * @return void
    */

    public function __construct(){
       $this->middleware(function ($request, $next) {

           if (is_null(Auth::user())) {
               return redirect()->route('login')->withErrors(['Sesi Anda Telah Berakhir']);;
           }else{
               $this->projects = Auth::user()->projects;
               return $next($request);
           }

       });
    }

    public function index(){

        $kapal = new KapalRepositories;
        $kapalAll = $kapal->getAll();

        return view('book',compact('kapalAll'));
    }

    public function data(){

        $data_booking = Booking::select('bookings.*','kapals.nama_kapal')
        ->where('user_id',Auth::user()->id)
        ->leftJoin('kapals','kapals.id','bookings.kapal_id')
        ->get();

        $no = 0;
        $data = array();

        foreach($data_booking as $list){

            $no ++;
            $row = array();
            $row[] = $no;
            $row[] = $list->nama;
            $row[] = $list->no_tlpn;
            $row[] = $list->alamat;
            $row[] = $list->nama_kapal;
            $row[] = '<a onclick="deleteItem('.$list->id.')" class="btn btn-danger btn-sm text-white"><i class="fa-solid fa-trash"></i></a>';
            $data[] = $row;

        }

        $output = array("data" => $data);
        return response()->json($output);


    }

    public function edit($id){


    }

    public function destroy(Request $request){

        $id = $request->id;

        $data = Booking::findOrFail($id);
        $data->delete();

        return response()->json([
            'status' => 200,
        ]);


    }

    public function store(Request $request){

        try {

            DB::beginTransaction();

            Booking::create([
                'user_id' => Auth::user()->id,
                'nama' => $request->nama,
                'no_tlpn' => $request->no_tlp,
                'alamat' => $request->alamat,
                'kapal_id' => $request->kapal
            ]);

            DB::commit();

            return response()->json([
                'message' => 'Success',
                'status' => 200
            ],200);

        } catch (\Exception $er) {

            DB::rollBack();
            return response()->json([
                'message' => $er->getMessage(),
                'status' => 500
            ],400);

        }

    }

    public function update(Request $request,$id){


    }
}
