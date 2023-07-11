<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use App\Models\Customer;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        return view('profile.edit', [
            'user' => $request->user(),
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $request->user()->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $request->user()->save();

        return Redirect::route('profile.edit')->with('status', 'profile-updated');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current-password'],
        ]);

        $user = $request->user();

        Auth::logout();


        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
    public function tampilForm()
    {
        $dataUser = User::where('id', Auth::user()->id)->first();
        return view('inputKtp', compact('dataUser'));
    }

    public function inputKTP(Request $request)
    {
        $validasi = $request->validate([
            'nik' => 'unique:customers,nik',
            'tanggal_lahir' => 'date',
            'alamat' => 'required',
            'foto_ktp' => 'image|mimes:jpeg,jpg,png|max:2048',
        ]);

        $image = $request->file('foto_ktp');
        $image_name = $request->name . "." . $request->file('foto_ktp')->extension();
        $image->move(public_path('img'), $image_name);

        $userKTP = Customer::where('id_user', Auth::user()->id)->first();
        $userKTP->update(
            [
                'nik' => $request->nik,
                'tempat_lahir' => $request->tempat_lahir,
                'tanggal_lahir' => $request->tanggal_lahir,
                'alamat' => $request->alamat,
                'rt_rw' => $request->rt_rw,
                'kelurahan' => $request->kelurahan,
                'kecamatan' => $request->kecamatan,
                'pekerjaan' => $request->pekerjaan,
                'kewarganegaraan' => $request->kewarganegaraan,
                'foto_ktp' => $image_name,
                'membership' => 'Non_Member',
                'status_nik' => 'Proses'
            ]
        );
        $dataUser = User::where('id', Auth::user()->id)->first();
        $dataUser->update([
            'name' => $request->name
        ]);
        if ($validasi == false) {
            return redirect()->back();
        } elseif ($validasi == true) {
            return redirect('dashboard');
        }
    }
}
