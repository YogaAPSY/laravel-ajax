<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class UserController extends Controller
{
    public function index(Request $request)
    {

        if ($request->ajax()) {

            $data = User::latest()->get();

            return DataTables::of($data)
                ->addIndexColumn()
                ->make(true);
        }
        return view('user');
    }
}
