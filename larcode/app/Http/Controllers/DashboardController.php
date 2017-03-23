<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = auth()->user();
        
        if($user->user_type=='ADVERTISER'){
            return $this->advertiserDashboard($user);
        }
        
        if($user->user_type=='PUBLISHER'){
            return $this->publisherDashboard($user);
        }
        
        if($user->user_type=='MANAGER'){
            return $this->managerDashboard($user);
        }
        
        if($user->user_type=='ADMIN'){
            return $this->adminDashboard($user);
        }
    }

    public function logout(){
        auth()->logout();
        return redirect()->route('login');
    }


    public function unauthorized(){
        $data = array();
        return view('unauthorized',$data);
    }

    

    public function advertiserDashboard(){
        $data = array();
        return view('advertiser.dashboard.index',$data);
    }

    public function publisherDashboard(){
        $data = array();
        return view('publisher.dashboard.index',$data);
    }

    public function managerDashboard(){
        $data = array();
        return view('manager.dashboard.index',$data);
    }

    public function adminDashboard(){
        $data = array();
        return view('admin.dashboard.index',$data);
    }

}
