@extends('layouts.admin')

@section('content')
    <h1 class="text-2xl font-bold mb-6">User Messages</h1>

    <div class="space-y-4">
        @forelse($messages as $message)
            <div class="p-4 border rounded shadow-sm">
                <!-- User Info -->
                <p class="font-semibold">{{ $message->user->first_name }} {{ $message->user->last_name }}</p>

                <!-- Subject -->
                <p class="text-lg font-bold text-primary">{{ $message->subject }}</p>

                <!-- Message Content -->
                <p class="text-gray-600">{{ $message->message }}</p>

                <!-- Timestamp -->
                <p class="text-sm text-gray-400">Sent at {{ $message->created_at->format('d M Y, H:i') }}</p>
            </div>
        @empty
            <p class="text-muted-foreground">No messages found.</p>
        @endforelse
    </div>

    <div class="mt-6">
        {{ $messages->links() }}
    </div>
@endsection