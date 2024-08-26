<div class="">
    <div class="chat {{ ($message->from_user_id == auth()->user()->id) ? 'chat-end' : 'chat-start' }}">
        <div class="chat-image avatar">
            <div class="w-10 rounded-full">
                <img alt="Tailwind CSS chat bubble component"
                    src="https://img.daisyui.com/images/stock/photo-1534528741775-53994a69daeb.webp" />
            </div>
        </div>
        <div class="chat-header">
            {{ $message->fromUser->name }}
            <time class="text-xs opacity-50">{{ $message->created_at->diffForHumans() }}</time>
        </div>
        <div class="chat-bubble">{{ $message->message }}</div>
        {{-- <div class="chat-footer opacity-50">Delivered</div> --}}
    </div>
</div>
