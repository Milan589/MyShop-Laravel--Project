<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BackendController extends Controller
{
    public function index()
    {
        // $user = User::select (DB::raw("COUNT(*) as count*))->whereYear('created_at',date('Y'))->groupBy(DB::raw("Month,(created_at)"))->pluck('count');

        $data['orders'] = DB::table('orders')->count();
        $data['users'] =DB::table('users')->count();
        $data['balance'] = DB::table('orders')->where('payment_mode' ,'==', 'cod')->sum('total');
        return view('home',compact('data'));
    }
}
