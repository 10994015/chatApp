<?php

namespace App\Http\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class ChatBox extends Component
{
    public $chats;
    public $activeChat;

    public function mount(){
        $this->chats = Auth::user()->chats;
        $this->activeChat = Auth::user()->chats()->latest()->first();
    }
    public function render()
    {
        return view('livewire.chat-box');
    }
}
