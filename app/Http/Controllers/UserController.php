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

    return view('user.edit_profile', ['user' => $user]);
    /**
         * Show the create form of lorong.
         *
         * @return \Illuminate\Contracts\Support\Renderable
         */
    }

    public function create() {
        return view('user.create');
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
            'phone_number' => 'required',
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

        return redirect()->route('my profile')->with('success', 'Berhasil mengubah user.');
    }
}