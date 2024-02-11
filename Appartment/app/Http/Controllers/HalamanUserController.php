<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\UserPermission;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;

class HalamanUserController extends Controller
{
    // //Awal Menampilkan Halaman User
    //     public function halaman_dashboard()
    //     {
    //         return view('user.user-dashboard');
    //     }
        
        public function getInitials($nama)
        {
            $namaArr = explode(' ', $nama);
            $initials = '';
            foreach ($namaArr as $word) {
                $initials .= strtoupper(substr($word, 0, 1));
            }
            return substr($initials, 0, 2);
        }

        public function halaman_profil()
        {
            $user = User::with(['tipeUnit'])->find(Auth::id());
            return view('user.user-profile',['user' => $user, 'initials' => self::getInitials($user->name)]);
        }

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
    public function edit_profil(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'alamat' => ['required', 'string']
        ]);

        $user_id = Auth::id();

        $user = User::find($user_id);
        $user->name = $request->name;
        $user->alamat = $request->alamat;
        $user->save();

        return redirect('/user-profile')->with('success', 'Pofil berhasil diperbarui');
    }
    //Akhir Edit Profile User

    //Awal Hapus Akun
    public function hapus_akun($id)
    {
        $user = User::find($id);
        UserPermission::where('user_id', $id)->delete();
        $user->delete();
        //diarahkan ke halaman sebelum login
        return redirect('/')->with('success', 'Akun berhasil dihapus');
        //diarahkan ke halaman sebelum login
    }
    //Akhir Hapus Akun
}