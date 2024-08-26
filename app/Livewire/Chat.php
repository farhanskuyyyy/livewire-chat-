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
        return view('livewire.chat',[
            'messages' => Message::where('from_user_id',auth()->user()->id)
                ->orWhere('from_user_id',$this->user->id)
                ->orWhere('to_user_id',auth()->user()->id)
                ->orWhere('to_user_id',$this->user->id)
                ->get()
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
