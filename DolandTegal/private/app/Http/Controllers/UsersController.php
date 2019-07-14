<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use App\Helpers\Log;
use Auth;

class UsersController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        Log::instance()->log(empty(Auth::user()->id) ? null : Auth::user(), 'on user');

        $data = User::latest()->paginate(5);
        return view('pages.user.index', compact('data'))
                ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create()
    {
        return view('pages.user.create');
    }

    public function store(Request $request)
    {
        Log::instance()->log(empty(Auth::user()->id) ? null : Auth::user(), 'menambah user');

        $request->validate([
            'nama'    =>  'required',
            'email'    =>  'required',
            'password'     =>  'required',
            'jenis_kelamin'     =>  'required'
        ]);

        $form_data = array(
            'nama'       =>   $request->nama,
            'email'    =>  $request->email,
            'password'        =>   $request->password,
            'jenis_kelamin'        =>   $request->jenis_kelamin
        );

        User::create($form_data);

        return redirect('user')->with('success', 'Data User Telah Di TAMBAHKAN :)');
    }

    public function show($id)
    {
        
    }

    public function edit($id)
    {
        $data = User::findOrFail($id);
        return view('pages.user.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        Log::instance()->log(empty(Auth::user()->id) ? null : Auth::user(), 'mengupdate user');

        $form_data = array(
            'nama'       =>   $request->nama,
            'email'    =>  $request->email,
            'password'        =>   $request->password,
            'jenis_kelamin'        =>   $request->jenis_kelamin
        );

        User::whereId($id)->update($form_data);
        return redirect('user')->with('success', 'Data User Telah Di UPDATE :|');

    }

    public function destroy($id)
    {
        Log::instance()->log(empty(Auth::user()->id) ? null : Auth::user(), 'mendelete user');

        $data = User::findOrFail($id);
        $data->delete();
        return redirect('user')->with('success', 'Data User Telah Di DELETE! :(');
    }
}
