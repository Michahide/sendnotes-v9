<?php

namespace App\Http\Livewire\Layout;

use App\Http\Livewire\Auth\Logout;
use App\Models\User;
use Livewire\Component;

class Navigation extends Component
{
    public $user;

    public function mount(User $user)
    {
        $this->user = $user;
    }
    /**
     * Log the current user out of the application.
     */
    // public function logout(Logout $logout): void
    // {
    //     $logout();

    //     $this->redirect('/', navigate: true);
    // }

    public function render()
    {
        return view('livewire.layout.navigation');
    }
}
