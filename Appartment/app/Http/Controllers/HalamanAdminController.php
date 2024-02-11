<?php

namespace App\Http\Controllers;

use App\Models\Permission;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\UserPermission;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;

use function PHPUnit\Framework\isNull;

class HalamanAdminController extends Controller
{
    //Awal Menampilkan Halaman Admin
        // public function halaman_dashboard()
        // {
        //     return view('admin.admin-dashboard');
        // }

        // public function halaman_list_request()
        // {
        //     return view('admin.admin-list-request');
        // }

        public function halaman_kontrol_akses()
        {
            $users = User::with(['permissions'])->get();
            // dd(gettype($users));
            // $users->toArray();
            return view('admin.admin-access-control',[
                'users' => $users
            ]);
            // ini sudah mendapatkan permission dari user, cara aksesnya untuk setiap user adalah $user->permissions (in array) nanti dilooping dan bisa diakses misal $user->permissions[0]->id
        }
        
        public function halaman_edit_user()
        {
            return view('admin.admin-edit-user');
        }
    //Akhir Menampilkan Halaman Admin

    
    //Awal Edit Akses User
        public function edit_control_akses(Request $request): RedirectResponse{
            $user_id = Auth::id();
            
            UserPermission::where('user_id', $user_id)->delete();

            $permit = $request->fasilitas;
            if (preg_match('/1/', $permit)) {
                $user_permission = UserPermission::create([
                    'user_id' => $user_id,
                    'permission_id' => 1
                ]);
                $user_permission->save(); //akses taman
            } 
            
            if(preg_match('/2/', $permit)){
                $user_permission = UserPermission::create([
                    'user_id' => $user_id,
                    'permission_id' => 2
                ]);
                $user_permission->save(); //akses kolam renang
            }

            if(preg_match('/3/', $permit)){
                $user_permission = UserPermission::create([
                    'user_id' => $user_id,
                    'permission_id' => 3
                ]);
                $user_permission->save(); //akses gym
            }

            if(preg_match('/4/', $permit)){
                $user_permission = UserPermission::create([
                    'user_id' => $user_id,
                    'permission_id' => 4
                ]);
                $user_permission->save(); //akses lapangan bulutangkis
            }

            if(preg_match('/5/', $permit)){
                $user_permission = UserPermission::create([
                    'user_id' => $user_id,
                    'permission_id' => 5
                ]);
                $user_permission->save(); //akses lapangan basket
            }

            return redirect('admin-kontrol-akses')->with('success', 'Akses berhasil diperbarui');
        }
    //Akhir Edit Akses User

}