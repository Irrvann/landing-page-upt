<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): RedirectResponse
    {
        $request->authenticate();

        $request->session()->regenerate();

        $user = Auth::user();

        return redirect()->intended(route('dashboard', absolute: false))->with('sukses', 'Di Halaman Admin '. $user->nama .'!');
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }


    public function index()
    {
        $data = User::all();
        return view('admin/akun_page/akun', [
            'akun' => $data
        ]);
    }

    public function hapus($id)
    {
        $data = User::find($id);
        $data->delete();
        return redirect('/akun')->with('hapus', 'Data Berhasil Dihapus');
    }

    public function tambah(Request $request): RedirectResponse
    {
        

        $request->validate([
            'nim' => ['required', 'string', 'max:11'],
            'nama' => ['required', 'string', 'max:255'],
            'jabatan' => ['required', 'string', 'max:255'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'nim' => $request->nim,
            'nama' => $request->nama,
            'jabatan' => $request->jabatan,
            'password' => Hash::make($request->password),
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect('/akun')->with('sukses', 'Akun Berhasil Ditambahkan');
    }
}
