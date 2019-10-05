<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Package;
use App\Package_category;
use App\Package_gallery;
use App\Package_about;
use App\Package_itinerary;
use App\Package_sale;
use App\Package_information;
use App\Contact_info;

class PackageController extends Controller {

    public function index() {
        $data['packages'] = Package::join('package_categories', 'packages.category', '=', 'package_categories.id')
                ->join('package_sales', 'packages.id', '=', 'package_sales.package_id')
                ->select('packages.*', 'package_categories.name as package_category', 'package_sales.band as offer')
                ->orderBy('packages.rating', 'desc')
                ->get();
        return view('package', $data);
    }

    public function details($package_name) {

        $data['package_details'] = Package::where('alias', $package_name)->first();
        $data['package_category'] = Package_category::where('id', $data['package_details']->category)->first();
        $data['images'] = Package_gallery::where('package_id', $data['package_details']->id)->get();
        $data['abouts'] = Package_about::where('package_id', $data['package_details']->id)->get();
        $data['itineraries'] = Package_itinerary::where('package_id', $data['package_details']->id)->get();
        $data['sale'] = Package_sale::where('package_id', $data['package_details']->id)->first();
        $data['informations'] = Package_information::where('package_id', $data['package_details']->id)->get();
        $data['contact_info'] = Contact_info::first();

        $data['related_packages'] = Package::where('country', $data['package_details']->country)
                ->orderBy('rating', 'desc')
                ->get();
        //dd($data['related_packages']);
        return view('packagedetails', $data);
    }

}
