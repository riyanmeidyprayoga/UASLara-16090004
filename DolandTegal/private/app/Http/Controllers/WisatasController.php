<?php

namespace App\Http\Controllers;
use App\Wisata;
use App\Kategori;
use Illuminate\Http\Request;
use App\Helpers\Log;
use Auth;

class WisatasController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        Log::instance()->log(empty(Auth::user()->id) ? null : Auth::user(), 'on wisata');

        $data = Wisata::latest()->paginate();
        return view('pages.wisata.index', compact('data'))
                ->with('i', (request()->input('page', 1) - 1) * 5);
        // $data = Wisata::latest();
        // return view('pages.wisata.index', compact('data'));
        
        
    }

    public function create()
    {

        $data = Kategori::all();
        return view('pages.wisata.create', compact('data'));
    }

    public function store(Request $request)
    {
        Log::instance()->log(empty(Auth::user()->id) ? null : Auth::user(), 'menambah wisata');

        $request->validate([
            'nama_wisata'    =>  'required',
            'id_kategori'    =>  'required',
            'lokasi'     =>  'required',
            'deskripsi'     =>  'required',
            'image'         =>  'required|image|max:2048'
        ]);

        $image = $request->file('image');

        $new_name = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('images'), $new_name);
        $form_data = array(
            'nama_wisata'       =>   $request->nama_wisata,
            'id_kategori'    =>  $request->id_kategori,
            'lokasi'        =>   $request->lokasi,
            'deskripsi'        =>   $request->deskripsi,
            'image'            =>   $new_name
        );

        Wisata::create($form_data);

        return redirect('wisata')->with('success', 'Data Wisata Telah Di TAMBAHKAN :)');
    }

    public function show($id)
    {
        $data = Wisata::findOrFail($id);
        return view('pages.wisata.view', compact('data'));
    }

    public function edit($id)
    {

        $data = Wisata::findOrFail($id);
        return view('pages.wisata.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        Log::instance()->log(empty(Auth::user()->id) ? null : Auth::user(), 'mengupdate wisata');

        $image_name = $request->hidden_image;
        $image = $request->file('image');
        if($image != '')
        {
            $request->validate([
                'nama_wisata'    =>  'required',
                // 'id_kategori'    =>  'required',
                'lokasi'     =>  'required',
                'deskripsi'     =>  'required',
                'image'         =>  'image|max:2048'
            ]);
            $image_name = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $image_name);
        }
        else
        {
            $request->validate([
                'nama_wisata'    =>  'required',
                // 'id_kategori'    =>  'required',
                'lokasi'     =>  'required',
                'deskripsi'     =>  'required'
            ]);
        }

        $form_data = array(
            'nama_wisata'    =>  $request->nama_wisata,
            // 'id_kategori'    =>  $request->id_kategori,
            'lokasi'     =>  $request->lokasi,
            'deskripsi'        =>   $request->deskripsi,
            'image'         =>  $image_name
        );

        Wisata::whereId($id)->update($form_data);
        return redirect('wisata')->with('success', 'Data Wisata Telah Di UPDATE :|');

    }

    public function destroy($id)
    {
        Log::instance()->log(empty(Auth::user()->id) ? null : Auth::user(), 'mendelete wisata');

        $data = Wisata::findOrFail($id);
        $data->delete();
        return redirect('wisata')->with('success', 'Data Wisata Telah Di DELETE! :(');
    }
}
