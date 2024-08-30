<?php

namespace App\Livewire;

use App\Models\User;
use App\Models\Message;
use Livewire\Component;
use Illuminate\Validation\Rule;

class Chat extends Component
{
    public User $user;

    #[Rule(['required'])]
    public $message = '';

    public function render()
    {
        return view('livewire.chat', [
            'messages' => Message::where(function ($query) {
                $query->where('from_user_id', auth()->user()->id)
                    ->where('to_user_id', $this->user->id);
            })->orWhere(function ($query) {
                $query->where('to_user_id', auth()->user()->id)
                    ->where('from_user_id', $this->user->id);
            })->get()
        ]);
    }

    public function sendMessage()
    {
        Message::create([
            'from_user_id' => auth()->user()->id,
            'to_user_id' => $this->user->id,
            'message' => $this->message
        ]);

        $this->reset('message');
    }
}
