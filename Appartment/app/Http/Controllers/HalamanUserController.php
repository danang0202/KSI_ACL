<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;

class HalamanUserController extends Controller
{
    // //Awal Menampilkan Halaman User
    //     public function halaman_dashboard()
    //     {
    //         return view('user.user-dashboard');
    //     }

    //     public function halaman_profile()
    //     {
    //         return view('user.user-profile');
    //     }

    //     public function halaman_list_request()
    //     {
    //         return view('user.user-list-request');
    //     }

    //     public function halaman_add_garden_request()
    //     {
    //         return view('user.user-add-garden-request');
    //     }

    //     public function halaman_add_pool_request()
    //     {
    //         return view('user.user-add-pool-request');
    //     }

    //     public function halaman_add_gym_request()
    //     {
    //         return view('user.user-add-gym-request');
    //     }

    //     public function halaman_add_badminton_request()
    //     {
    //         return view('user.user-add-badminton-request');
    //     }

    //     public function halaman_add_basket_request()
    //     {
    //         return view('user.user-add-basket-request');
    //     }
    // //Akhir Menampilkan Halaman User


    //Awal Edit Profile User
    public function edit_profile(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:' . User::class],
            'alamat' => ['required', 'string']
        ]);

        $user_id = Auth::id();

        $user = User::find($user_id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->alamat = $request->alamat;
        $user->save();

        return redirect('user.dashboard')->with('success', 'Pofil berhasil diperbarui');
    }
    //Akhir Edit Profile User

    //Awal Hapus Akun
    public function hapus_akun()
    {
        $user_id = Auth::id();
        $user = User::find($user_id);
        $user->delete();
        //diarahkan ke halaman sebelum login
        return redirect('welcome')->with('success', 'Akun berhasil dihapus');
    }
    //Akhir Hapus Akun
}
