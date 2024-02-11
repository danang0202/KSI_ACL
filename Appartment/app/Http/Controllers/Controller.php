<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

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
}
