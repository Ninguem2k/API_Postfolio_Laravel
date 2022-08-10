@foreach ($users as $user)
<h3>{{ $user->name }}</h3>
<p>{{ $user->email }}</p>
@endforeach