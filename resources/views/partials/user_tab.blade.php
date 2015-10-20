@if ( Auth::check() )
    <div class="user_info">
        <h5>Welcome, {!!  Auth::user()->name !!}</h5>
        <a href="/auth/logout">Logout</a>
    </div>
@else
    <div class="user_info">
        <h5>Welcome</h5>
        <a href="/auth/login">Login</a><br>
        <a href="/auth/register">Register</a>
    </div>
@endif

<hr>