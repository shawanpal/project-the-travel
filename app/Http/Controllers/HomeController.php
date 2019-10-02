<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\URL;
use Illuminate\Http\Request;
use App\Package;
use Illuminate\Database\Eloquent\Collection;

class HomeController extends Controller {
    
    public function index() {
        
        $packages = Package::orderBy('rating', 'desc')
                             ->limit(6)
                             ->get();
        
        return view('home', ['packages' => $packages]);
        
        
        
        
        
    }
}
