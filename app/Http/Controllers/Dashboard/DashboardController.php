<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $roles = $user->getRoleNames()->toArray();

        $navs_top= [
            [
                'route' => 'dashboard',
                'title' => 'haha'
            ],
            [
                'route' => 'dashboard',
                'title' => 'good'
            ]
        ];
        if(\in_array('Admin',$roles)){
            return view('page.dashboard.dashboard-admin')->with('navs_top',$navs_top);
        }else{
            return view('page.dashboard.dashboard-user')->with('user',$user);
        }

    }
}
