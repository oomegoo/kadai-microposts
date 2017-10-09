@if (count($users) > 0)
    <ul class="media-list">
        @foreach($users as $user)
            <li class="media">
                <div class="media-left">
                    <img class="media-object img-rounded" src="{{ Gravatar::src($user->email, 50) }}" alt="">
                </div>
                <div class="media-body">
                    {{ $user->name }}
                </div>
                <div>
                    <p>{!! link_to_route('users.show', 'View Profile',['id' => $user->id]) !!}</p>
                </div>
            </li>
        @endforeach
    </ul>
    {!! $users->render() !!}
@endif