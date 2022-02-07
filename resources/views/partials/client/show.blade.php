<h1 class="display-6">{{$clientshow->name}}</h1>
<hr/>

<div class="row">
    <div class="col-sm">
    <dl>
    <h2>Details</h2>
    <p>{{$clientshow->address}}</p>
    <p>{{$clientshow->tel}}</p>
    <p>{{$clientshow->email}}</p>
    </dl>
    </div>
    <div class="col-sm">
    <h2>Contacts</h2>
    @foreach($clientshow->contact as $clientshow1)
    <dl>
    <a href="{{ url('contact', $clientshow1->id) }}" class="">{{$clientshow1->name}} - {{$clientshow1->role}}</a>
    <dl>
    @endforeach
    </div>
    <div class="col-sm">
    <h2>Messages</h2>
    @foreach($messageshow as $messageshow1)
    <div class="clientshowmessage">
    <dl>
    <div class="col">
    <p>Subject - {{$messageshow1->title}}</p>
    <p>Message -{{$messageshow1->message}}</p>
    <p>Created -{{$messageshow1->created_at}}</p>
    <p>Updated -{{$messageshow1->updated_at}}</p>
    </div>
    </dl>
    </div>
    @endforeach
    
    </div>
  </div>

    <div class="d-flex">
        <a href="{{route('client.edit', $clientshow->id)}}" class="btn btn-primary m-1">Edit</a>
        <a href="{{route('client.addcontact', $clientshow->id)}}" class="btn btn-primary m-1">Add Contact</a>

        <form action="{{ route('client.destroy', $clientshow->id) }}" method="POST">
            <input type="hidden" name="_method" value="DELETE">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <button class="btn btn-danger m-1">Delete User</button>
        </form>
    </div>