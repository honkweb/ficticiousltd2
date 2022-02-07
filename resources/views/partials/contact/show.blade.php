<h1 class="display-6">{{$contactshow->name}}</h1>
<hr/>
<div class="row">
<div class="col-sm">
<h2>Details</h2>
<p>Role - {{$contactshow->role}}</p>
<p>{{$contactshow->tel}}</p>
<p>{{$contactshow->email}}</p>
</div>
<div class="col-sm">
<h2>Clients</h2>
<dl>
@foreach($contactshow->message as $contactshow1)
<dl>
<p>Client - {{$contactshow1->client}}</p>
</dl>
@endforeach
</dl>
</div>
<div class="col-sm">
<h2>Messages</h2>
<dl>
@foreach($contactshow->message as $contactshow1)
<div class="clientshowmessage">
<dl>
<p>Client - {{$contactshow1->client}}</p>
<p>Title - {{$contactshow1->title}}</p>
<p>Message - {{$contactshow1->message}}</p>
</dl>
@endforeach
</div>
</div>


<div class="d-flex">
<a href="{{route('contact.edit', $contactshow->id)}}" class="btn btn-primary m-1">Edit</a>

<form action="{{ route('contact.destroy', $contactshow->id) }}" method="POST">
<input type="hidden" name="_method" value="DELETE">
<input type="hidden" name="_token" value="{{ csrf_token() }}">
<button class="btn btn-danger m-1">Delete User</button>
</form>
</div>