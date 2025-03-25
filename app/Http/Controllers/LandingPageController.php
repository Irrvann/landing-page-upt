<?php

namespace App\Http\Controllers;

use App\Models\AboutModel;
use App\Models\GalleryModel;
use App\Models\ContactModel;
use App\Models\ServicesModel;
use App\Models\SosmedModels;
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
        return view('admin/dashboard/dashboard');
    }
}
