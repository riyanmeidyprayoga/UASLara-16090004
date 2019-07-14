<?php

namespace App\Http\Controllers;
use App\Kategori;
use Illuminate\Http\Request;
use App\Helpers\Log;
use Auth;

class KategorisController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        Log::instance()->log(empty(Auth::user()->id) ? null : Auth::user(), 'on kategori');

        $data = Kategori::latest()->paginate();
        return view('pages.kategori.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.kategori.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Log::instance()->log(empty(Auth::user()->id) ? null : Auth::user(), 'menambah kategori');

        $request->validate([
            'nama_kategori'    =>  'required',
            'image'         =>  'required|image|max:2048'
        ]);

        $image = $request->file('image');

        $new_name = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('images/kategori'), $new_name);

        $form_data = array(
            'nama_kategori'       =>   $request->nama_kategori,
            'image'            =>   $new_name
        );
        Kategori::create($form_data);

        return redirect('kategori')->with('success', 'Data Kategori Telah Di TAMBAHKAN :)');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Kategori::findOrFail($id);
        return view('pages.kategori.view', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Kategori::findOrFail($id);
        return view('pages.kategori.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Log::instance()->log(empty(Auth::user()->id) ? null : Auth::user(), 'mengupdate kategori');

        $data = Kategori::findOrFail($id);
        $data->delete();
        return redirect('kategori')->with('success', 'Data Kategori Telah Di DELETE! :(');
    }
}
