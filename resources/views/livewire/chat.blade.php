<div>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="" wire:poll>
                        @foreach ($messages as $message)
                            <x-chat-bubble :message="$message" />
                        @endforeach
                    </div>
                    <div class="form-control">
                        <form action="" wire:submit.prevent="sendMessage">
                            <textarea name="" id="" class="textarea textarea-bordered w-full" placeholder="send your message..."
                                wire:model="message"></textarea>
                            <button type="submit" class="btn btn-primary">Send</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
