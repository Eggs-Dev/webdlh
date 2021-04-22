<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Yajra\Datatables\Datatables;
use Auth;
use DateTime;

class AdminController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function CheckLogin() {
        switch(Auth::user()->level) {
            case 1:
                return redirect('/admin/dashboard');
                break;
            case 2:
                return redirect('/admin/dashboard');
                break;
            case 3:
                return redirect('/admin/dashboard');
                break;
            case 4:
                return redirect('/admin/dashboard');
                break;
            case 5:
                return redirect('/admin/dashboard');
                break;
            case 6:
                return redirect('/admin/dashboard');
                break;
            case 10:
                return redirect('/admin/dashboard');
                break;
        }
    }

    public function ChangePassword(Request $v) {
        $user = User::findOrFail($v->myID);

        $user->password = Hash::make($v->passwd);

        return ['success' => true];
    }

    public function AdminDashboard() {
        // $client = Client::where('UserID', Auth::user()->id)->first();
        $role = Auth::user()->level;

        if ($role == 1) {
            return view('admin.web.index');
        }   else if ($role == 2) {
            return view('admin.inti.index');
        }   else if ($role == 3) {
            return view('admin.plasma.index');
        } else if ($role == 4) {
            return view('admin.intiplasma.index');
        }   else if ($role == 5) {
            return view('admin.maggot.index');
        }   else if ($role == 6) {
            return view('admin.pjlp.index');
        } else if ($role == 10) {
            return view('admin.super.index');
        }
    }
}
