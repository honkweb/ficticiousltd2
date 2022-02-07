<h1 class="display-6">Message</h1>
<hr/>
<div class="row">
<div class="col-sm">
<dl>
<p>Client - {{$messageshow->client}}</p>
<p>Subject - {{$messageshow->title}}</p>
<p>Message - {{$messageshow->message}}</p>
<p>Created - {{$messageshow->created_at}}</p>
<p>Updated - {{$messageshow->updated_at}}</p>
</dl>
</div>
</div>

<div class="d-flex">
<a href="{{route('message.edit', $messageshow->id)}}" class="btn btn-primary m-1">Edit</a>

<form action="{{ route('message.destroy', $messageshow->id) }}" method="POST">
<input type="hidden" name="_method" value="DELETE">
<input type="hidden" name="_token" value="{{ csrf_token() }}">
<button class="btn btn-danger m-1">Delete Message</button>
</form>
</div>