<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;


    public function getInitials($nama)
    {
        $namaArr = explode(' ', $nama);
        $initials = '';
        foreach ($namaArr as $word) {
            $initials .= strtoupper(substr($word, 0, 1));
        }
        return substr($initials, 0, 2);
    }

    public function UserDashboard(Request $request)
    {
        return view('user.user-dashboard', ['user' => $request->user(), 'initials' => self::getInitials($request->user()->name)]);
    }

    public  function UserListRequest(Request $request)
    {
        return view('user.user-list-request', ['user' => $request->user(), 'initials' => self::getInitials($request->user()->name)]);
    }

    public  function UserGardenRequest(Request $request)
    {
        return view('user.user-add-garden-request', ['user' => $request->user(), 'initials' => self::getInitials($request->user()->name)]);
    }

    public  function UserPoolRequest(Request $request)
    {
        return view('user.user-add-pool-request', ['user' => $request->user(), 'initials' => self::getInitials($request->user()->name)]);
    }
    public  function UserGymRequest(Request $request)
    {
        return view('user.user-add-gym-request', ['user' => $request->user(), 'initials' => self::getInitials($request->user()->name)]);
    }
    public  function UserBadmintonRequest(Request $request)
    {
        return view('user.user-add-badminton-request', ['user' => $request->user(), 'initials' => self::getInitials($request->user()->name)]);
    }
    public  function UserBasketRequest(Request $request)
    {
        return view('user.user-add-basket-request', ['user' => $request->user(), 'initials' => self::getInitials($request->user()->name)]);
    }

    public function back_dashboard()
    {
        $user = User::find(Auth::id());
        return  $user->role_id == 1 ? redirect('/') : redirect('/admin');
    }
}
