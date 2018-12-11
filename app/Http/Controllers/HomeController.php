<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Berita;
use Illuminate\Support\Facades\Input;
use PDF;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $count = Berita::all()->count();
        return view('home')->with('count',$count);
    }

    public function index_berita(){

        $data['berita'] = \App\Berita::all();

        return view('berita/index')->with($data);
    }
public function post(){

        return view('about-post');

    }
public function create(){

        return view('berita/create');

    }
public function save(Request $r){

        $berita = new Berita;
        $berita->judul = $r->input('judul');
        $file = $r->file('image');
        $berita->image = $file->getClientOriginalName();
        $file->move('image/', $file->getClientOriginalName());
        $berita->isi = $r->input('isi');
        $berita->save();

        return redirect(url('berita/index'));
    }
public function edit($id)
    {

        $data['berita'] = Berita::find($id);
        return view('berita/edit')->with($data);
    }
public function update(Request $r)
    {
            $id = $r->input('id');
            $berita = Berita::find($id);
            $berita->judul = $r->input('judul');
            $file = $r->file('image');
            $berita->image = $file->getClientOriginalName();
            $file->move('image/', $file->getClientOriginalName());
            $berita->isi = $r->input('isi');
            $berita->save();

            return redirect(url('berita/index'));
        }
public function delete($id)
    {
        $berita = Berita::find($id);
        $berita->delete();
        return redirect('berita/index');
    }
    public  function welcome(){

        if(!empty(Input::get("page"))){
        $data["pageNext"] = (Input::get("page") +1);
        $data["pagePrev"] = (Input::get("page") -1);
        }else{
            $data["pageNext"] = 2;
            $data["pagePrev"] = 1;
        }
        $data['berita'] = \App\Berita::paginate(4);

        return view('welcome')->with($data);
    }


     public  function page(){

        if(!empty(Input::get("page"))){
        $data["pageNext"] = (Input::get("page") +1);
        $data["pagePrev"] = (Input::get("page") -1);
        }else{
            $data["pageNext"] = 2;
            $data["pagePrev"] = 1;
        }
        $data['berita'] = \App\Berita::paginate(4);

        return view('berita/page')->with($data);
    }
 public function show($id){


                $tampilkan = Berita::find($id);
                return view('berita/show')->with('tampilkan',$tampilkan);

    
    }
    public function readmore($id){


                $tampilkan = Berita::find($id);
                return view('readmore')->with('tampilkan',$tampilkan);

    
    }
    public function downloadpdf_allberita()
    {
        $data['berita'] = Berita::all();
        $pdf = PDF::loadview('berita.pdfall',$data);
        return $pdf->download('data_beritaa     ll.pdf');
    }
    }

