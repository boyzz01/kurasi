<?php

namespace App\Http\Controllers;

use App\Models\Umkm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    //
    public function index()
    {

        $anggota =  DB::table('anggota')->get();
        $umkm = DB::table('umkm')->get();
        return view('dashboard', ['data' => $anggota, 'umkm' => $umkm]);
    }

    public function add(){
        $jenis = DB::table('ms_jenis')->get();
        return view('tambah',['jenis'=>$jenis]);

     //   echo asset('storage/app/5/yoOPOR8scE8BNIjAwDCt0YxDeDxDWBMaz4SxFkOr.txt');
    }

    public function editview($id){
        $jenis = DB::table('ms_jenis')->get();
        $umkm = DB::table("umkm")->where('id',$id)->first();
        return view('edit',['jenis'=>$jenis,'umkm'=>$umkm]);

     //   echo asset('storage/app/5/yoOPOR8scE8BNIjAwDCt0YxDeDxDWBMaz4SxFkOr.txt');
    }


    public function addumkm(Request $request){

    //    echo $request->file('filenib');
      
        if ($request->file('filenib') != null) {
            $ttd = $request->file('filenib')->store("berkas");
            $url = config('app.url');
            $image = asset('storage/'.$ttd);
            $request['file_nib'] = $image;
        }

        if ($request->file('filepirt') != null) {
            $ttd = $request->file('filepirt')->store("berkas");
            $url = config('app.url');
            $image = $url . "storage/app/" . $ttd;

            $request['file_pirt'] = $image;
          
        }

        if ($request->file('filehalal') != null) {
            $ttd = $request->file('filehalal')->store("berkas");
            $url = config('app.url');
            $image = $url . "storage/app/" . $ttd;
            $request['file_halal'] = $image;
       
        }

        if ($request->file('filebpom') != null) {
            $ttd = $request->file('filebpom')->store("berkas");
            $url = config('app.url');
            $image = $url . "storage/app/" . $ttd;
            $request['file_bpom'] = $image;
        }

       
    
       Umkm::create($request->all());
        return redirect()->back()->with('success', 'Data berhasil ditambah');
    }

    public function update(Request $request){

        //    echo $request->file('filenib');
          
            if ($request->file('filenib') != null) {
                $ttd = $request->file('filenib')->store("berkas");
                $url = config('app.url');
                $image = asset('storage/'.$ttd);
                $request['file_nib'] = $image;
            }

            if ($request->file('filepirt') != null) {
                $ttd = $request->file('filepirt')->store("berkas");
                $url = config('app.url');
                $image = $url . "storage/app/" . $ttd;
    
                $request['file_pirt'] = $image;
              
            }
    
            if ($request->file('filehalal') != null) {
                $ttd = $request->file('filehalal')->store("berkas");
                $url = config('app.url');
                $image = $url . "storage/app/" . $ttd;
                $request['file_halal'] = $image;
           
            }
    
            if ($request->file('filebpom') != null) {
                $ttd = $request->file('filebpom')->store("berkas");
                $url = config('app.url');
                $image = $url . "storage/app/" . $ttd;
                $request['file_bpom'] = $image;
            }
    
             $matchThese = ['id' => $request->id];
             Umkm::updateOrCreate($matchThese, $request->all());
        
           Umkm::create($request->all());
            return redirect()->back()->with('success', 'Data berhasil diupdate');
        }
}
