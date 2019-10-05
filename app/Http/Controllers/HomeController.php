<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\URL;
use Illuminate\Http\Request;
use App\Package;
use Illuminate\Database\Eloquent\Collection;

class HomeController extends Controller {
    
    public function index() {
        
        $packages = Package::join('package_sales', 'packages.id', '=', 'package_sales.package_id')
                            ->join('countries', 'packages.country', '=', 'countries.id')
                            ->select('packages.*', 'package_sales.band as sale_tag', 'countries.country as country_name')
                            ->orderBy('packages.rating', 'desc')
                            ->limit(6)
                            ->get();
        
        return view('home', ['packages' => $packages]);
    }
}
