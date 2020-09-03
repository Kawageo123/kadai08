//課題4

ec2-user:~/environment $ cd ~/environment/mynews
ec2-user:~/environment/mynews $ php artisan make:controller Admin/ProfileController

//課題5

<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProfileController extends Controller
{
    //以下課題08
    public function add()
    {
        return view('admin.profile.create');
    }
    
    public function create()
    {
        return redirect('admin/profile/create');
    }
    
    public function edit()
    {
        return view('admin profile.edit');
    }
    public function update()
    {
        return redirect('admin/profile/edit');
    }
}
         
