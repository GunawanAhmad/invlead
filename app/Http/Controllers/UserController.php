<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\BankAccount;
use App\Models\MerchantProduct;
use App\Models\MerchantPaymentInvoice;
use App\Models\Peserta;
use App\Models\Transaction;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
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
     * Show the create form of lorong.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function my_profile()
    {
        $user = auth()->user();

        return view('user.my_profile', ['user' => $user]);
    }

    /**
     * Show the create form of lorong.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function edit_my_profile()
    {
        $user = auth()->user();

        return view('user.edit_my_profile', ['user' => $user]);
    }

    /**
     * Show the list and manage table of lorongs.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function list_and_manage()
    {
        $users = User::all();

        return view('user.list_and_manage', ['users' => $users]);
    }

    /**
     * Show the create form of lorong.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function create()
    {
        return view('user.create');
    }

     /**
     * Insert user.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function store(Request $request)
    {
        if(!auth()->user()->can('create users')) return redirect()->route('presence report');

        $request->validate([
            'fullname' => 'required|max:100',
            'email' => 'required|max:100|email|unique:users',
            'password' => 'required|max:100',
            'birthdate' => 'required|date',
            'gender' => 'required|string',
            'phone_number' => 'required|string'
        ]);
        
        // start inserting user
        $inserted_user = User::create([
            'fullname' => $request->input('fullname'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
            'birthdate' => $request->input('birthdate'),
            'gender' => $request->input('gender'),
            'phone_number' => $request->input('phone_number'),
        ]);
        
        if(!$inserted_user)
            return redirect()->route('create user')->withErrors(['failed_adding_user' => 'Gagal menambah user baru.']);
    }

    /**
     * Show the create form of lorong.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function edit($id)
    {        
        if(!auth()->user()->can('update users')) return redirect()->route('presence report');

        $user = User::find($id);
        $lorongs = Lorong::all();
        
        return view('user.edit', ['user' => $user, 'lorongs' => $lorongs]);
    }

    /**
     * Update user.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function update(Request $request)
    {
        $userIdToUpdate = $request->route('id');

        if(auth()->user()->id != $userIdToUpdate)
            if(!auth()->user()->can('update users')) return redirect()->route('dashboard');

        $request->validate([
            'fullname' => 'required|max:100',
            'email' => 'required|max:100|email',
            'birthdate' => 'required|date',
            'gender' => 'required|string',
            'phone_number' => 'required|number',
            'gender' => 'required|string',
        ]);

        // validate availability of user existence
        $user = User::find($userIdToUpdate);

        if(!$user)
            return redirect()->route('edit user', $userIdToUpdate)->withErrors(['user_not_found' => `Can't update unexisting user.`]); 

        // start updating user
        $user->fullname = $request->input('fullname');
        $user->email = $request->input('email');
        $user->birthdate = $request->input('birthdate');
        $user->gender = $request->input('gender');
        $user->phone_number = $request->input('phone_number');

        if($request->input('password'))
            $user->password = Hash::make($request->input('password'));

        $updated_user = $user->save();
        
        if(!$updated_user)
            return redirect()->route('edit user', $userIdToUpdate)->withErrors(['failed_updating_user' => 'Gagal mengubah user.']);

        return redirect()->route('edit user', $userIdToUpdate)->with('success', 'Berhasil mengubah user.');
    }

    /**
     * Update user.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function update_my_profile(Request $request)
    {
        $request->validate([
            'fullname' => 'required|max:100',
            'email' => 'required|max:100|email',
            'birthdate' => 'required|date',
            'gender' => 'required|string',
            'phone_number' => 'required|number',
        ]);        

        // validate availability of user existence
        $user = auth()->user();

        if(!$user)
            return redirect()->route('edit my profile')->withErrors(['user_not_found' => `Can't update unexisting user.`]); 

        // start updating user
        $user->fullname = $request->input('fullname');
        $user->email = $request->input('email');
        $user->birthdate = $request->input('birthdate');
        $user->gender = $request->input('gender');
        $user->phone_number = $request->input('phone_number');

        if($request->input('password'))
            $user->password = Hash::make($request->input('password'));

        $updated_user = $user->save();
        
        if(!$updated_user)
            return redirect()->route('edit my profile')->withErrors(['failed_updating_user' => 'Gagal mengubah user.']);

        return redirect()->route('edit my profile')->with('success', 'Berhasil mengubah user.');
    }

    /**
     * Show the presence info and its lorongs.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function view()
    {
        return view('user.view');
    }

    /**
     * Delete user.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function delete($id)
    {
        $user = User::find($id);
        
        if($user)
        {
            $deleted = $user->delete();

            if(!$deleted)
                return redirect()->route('user tm')->withErrors(['failed_deleting_user' => 'Gagal menghapus user.']);
        }

        return redirect()->route('user tm')->with('success', 'Berhasil menghapus user');
    }

    public function get_peserta()
    {
        $peserta = Peserta::all();

        return view('user.daftar_peserta', ['pesertas' => $peserta]);
    }

    public function transfer()
    {
        return view('transfer');
    }

    

    

    
}