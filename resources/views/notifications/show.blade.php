@extends('layouts.app')

@section('content')
    <div class="container">
        <ul>
            @forelse ($notifications as $notification)
                <li>
                    @if ($notification->type === "App\Notifications\PaymentReceived")
                        We have recieved a payment of ${{ $notification->data['amount'] / 100 }} from you.
                    @endif
                </li>
            @empty
                <li>You have no unread notifications at this time.</li>
            @endforelse
        </ul>
    </div>
@endsection
