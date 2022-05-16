@if (isset($tweets))
    @foreach ($tweets as $tweet)
        <div class="d-flex p-2 border-bottom mb-2">
            <div>
                <img src="https://i.pravatar.cc/50" alt="image" class="rounded-full" style="margin-right: 20px;">
            </div>

            <div>
                <h5 class="mb-3 mt-2 font-weight-700">{{ $tweet->user->name }}</h5>

                <p class="text-small">
                    {{ $tweet->body }}
                </p>
            </div>
        </div>
    @endforeach
@endif
