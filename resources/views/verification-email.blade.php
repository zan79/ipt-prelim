<h1>Prelim App</h1>

<p>
  Welcome {{$user->name}},
</p>

<p>
  Thanks for signing up to Prelim App. To complete your registration
   please verify your email by clicking the link below.
</p>

<p>
  <a class="btn btn-success" href="{{url('/verification/' . $user->id . '/' . $user->remember_token)}}">
    Verify Email
  </a>
</p>
