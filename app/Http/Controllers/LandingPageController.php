<?php

namespace App\Http\Controllers;

use App\Models\AboutModel;
use App\Models\GalleryModel;
use App\Models\ContactModel;
use App\Models\ServicesModel;
use App\Models\SosmedModels;
use App\Models\User;
use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function index()
    {
        $about = AboutModel::where('status', 'aktif')->get();
        

        $gallery = GalleryModel::where('status', 'aktif')->get();

        $contact = ContactModel::where('status', 'aktif')->value('link');

        $services = ServicesModel::where('status', 'aktif')->get();

        $sosmed = SosmedModels::where('status', 'aktif')->get();

        return view('landing-page/home', [
            'about' => $about,
            
            'gallery' => $gallery,
            'contact' => $contact,
            'services' => $services,
            'sosmed' => $sosmed
        ]);
    }

    public function admin()
    {
        return view('layout/app');
    }

    public function dashboard()
    {
        $jml_about = AboutModel::count();
        $jml_services = ServicesModel::count();
        $jml_gallery = GalleryModel::count();
        $jml_sosmed = SosmedModels::count();

        $user = User::all();

        return view('admin/dashboard/dashboard', [
            'jmlabout' => $jml_about,
            'jmlservices' => $jml_services,
            'jmlgallery' => $jml_gallery,
            'jmlsosmed' => $jml_sosmed,

            'user' => $user
        ]);
    }
}
