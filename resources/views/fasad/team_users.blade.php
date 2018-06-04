@foreach($team_users as $team_user)
    <h2>{{$team_user->id}}</h2>
    <h2>{{$team_user->user_id}}</h2>
    <h2>{{$team_user->teams_id}}</h2>
    <h2>{{$team_user}}</h2>
{{--    <p>{{$team_user->price}}</p>--}}
@endforeach


