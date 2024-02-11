<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\UserPermission;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        try {
            //memvalidasi input user
            $request->validate([
                'name' => ['required', 'string', 'max:255'],
                'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:' . User::class],
                'password' => ['required', 'confirmed', Rules\Password::defaults()],
                'no_kartu_unit' => ['required', 'string'],
                'tipe_unit_id' => ['required'],
                'alamat' => ['required', 'string']
            ]);

            //membuat user baru
            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'no_kartu_unit' => $request->no_kartu_unit,
                'tipe_unit_id' => $request->tipe_unit_id,
                'alamat' => $request->alamat,
            ]);
            //mencetak akses fasilitas
            $tipe_id = $request->tipe_unit_id;
            $user_id = User::select('id')->where('email', $request->email)->first()->id;
            //Awal Pengelompokan Akses
            // tipe amaryllis
            if ($tipe_id == 1) {
                $user_permission = UserPermission::create([
                    'user_id' => $user_id,
                    'permission_id' => 1
                ]);
                $user_permission->save(); //akses taman
            }
            //tipe bougenville
            elseif ($tipe_id == 2) {
                $user_permission_1 = UserPermission::create([
                    'user_id' => $user_id,
                    'permission_id' => 1
                ]);
                $user_permission_1->save(); //akses taman

                $user_permission_2 = UserPermission::create([
                    'user_id' => $user_id,
                    'permission_id' => 2
                ]);
                $user_permission_2->save(); //akses kolam renang
            }
            //tipe violet
            elseif ($tipe_id == 3) {
                $user_permission_1 = UserPermission::create([
                    'user_id' => $user_id,
                    'permission_id' => 1
                ]);
                $user_permission_1->save(); //akses taman

                $user_permission_2 = UserPermission::create([
                    'user_id' => $user_id,
                    'permission_id' => 4
                ]);
                $user_permission_2->save(); //akses lapangan bulutangkis
            }
            //tipe rose
            elseif ($tipe_id == 4) {
                $user_permission_1 = UserPermission::create([
                    'user_id' => $user_id,
                    'permission_id' => 1
                ]);
                $user_permission_1->save(); //akses taman

                $user_permission_2 = UserPermission::create([
                    'user_id' => $user_id,
                    'permission_id' => 2
                ]);
                $user_permission_2->save(); //akses kolam renang

                $user_permission_3 = UserPermission::create([
                    'user_id' => $user_id,
                    'permission_id' => 4
                ]);
                $user_permission_3->save(); //akses lapangan bulutangkis
            }
            //tipe clover
            elseif ($tipe_id == 5) {
                $user_permission_1 = UserPermission::create([
                    'user_id' => $user_id,
                    'permission_id' => 2
                ]);
                $user_permission_1->save(); //akses kolam renang

                $user_permission_2 = UserPermission::create([
                    'user_id' => $user_id,
                    'permission_id' => 3
                ]);
                $user_permission_2->save(); //akses kolam gym

                $user_permission_3 = UserPermission::create([
                    'user_id' => $user_id,
                    'permission_id' => 4
                ]);
                $user_permission_3->save(); //akses lapangan bulutangkis
            }
            //tipe orchid
            elseif ($tipe_id == 6) {
                $user_permission_1 = UserPermission::create([
                    'user_id' => $user_id,
                    'permission_id' => 1
                ]);
                $user_permission_1->save(); //akses taman

                $user_permission_2 = UserPermission::create([
                    'user_id' => $user_id,
                    'permission_id' => 3
                ]);
                $user_permission_2->save(); //akses gym

                $user_permission_3 = UserPermission::create([
                    'user_id' => $user_id,
                    'permission_id' => 5
                ]);
                $user_permission_3->save(); //akses lapangan basket
            }
            //Akhir Pengelompokan Akses
            // event(new Registered($user));
            // Auth::login($user);
            return redirect('login');
        } catch (\Throwable $th) {
            return redirect('error');
        }
    }
}
