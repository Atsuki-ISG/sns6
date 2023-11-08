<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SnsController extends Controller
{
    //追加
    public function add()
    {
        return view('admin.sns.create');
    }
    
    public function create(Request $request)
    {
        return redirect('admin/sns/create');
    }
}