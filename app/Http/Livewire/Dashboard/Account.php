<?php

namespace App\Http\Livewire\Dashboard;

use Livewire\Component;
use Livewire\WithFileUploads;

class Account extends Component
{
    use WithFileUploads;

    public $first_name = '';
    public $last_name = '';
    public $email = '';
    public $street_address = '';
    public $country = '';
    public $city = '';
    public $zip = '';
    public $avatar;

    public function mount()
    {
        $this->first_name = auth()->user()->first_name;
        $this->last_name = auth()->user()->last_name;
        $this->email = auth()->user()->email;
        $this->street_address = auth()->user()->street_address;
        $this->country = auth()->user()->country;
        $this->city = auth()->user()->city;
        $this->zip = auth()->user()->zip;
    }

    public function save()
    {
        $this->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email|unique:users,email,' . auth()->user()->id,
            'street_address' => 'required',
            'country' => 'required',
            'city' => 'required|string',
            'avatar' => 'nullable|file|mimes:png,jpg,jpeg|max:1024'
        ]);

        $filename = $this->avatar ? $this->avatar->store('/avatars', 'public') : auth()->user()->avatarUrl() ;

        auth()->user()->update([
            'first_name' => $this->first_name,
            'last_name' => $this->last_name,
            'email' => $this->email,
            'street_address' => $this->street_address,
            'country' => $this->country,
            'city' => $this->city,
            'avatar' => $filename
        ]);

        session()->flash('notify-saved');
    }

    public function updateAvatar()
    {
        $this->validate([
            'avatar' => 'nullable|file|mimes:png,jpg,jpeg|max:1024'
        ]);
    }

    public function render()
    {
        return view('livewire.dashboard.account');
    }
}
