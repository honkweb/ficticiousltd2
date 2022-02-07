<h1 class="display-6">Client Search</h1>

        @if($searchcontact->isNotEmpty())
        <hr/>
        <table class="table">
        <thead>
        <th>Id</th>
        <th>Name</th>
        <th>Role</th>
        <th>Tel</th>
        <th>Email</th>
        </thead>
    @foreach ($searchcontact as $post)
            <tr>
                <td>{{$post->id}}</td>
                <td><a href="{{ url('contact', $post->id) }}" class="btn btn-info">{{ $post->name }}</a></td>
                <td>{{$post->role}}</td>
                <td>{{$post->tel}}</td>
                <td>{{$post->email}}</td>
            </tr>
            
            @endforeach
    </table>

    
@else 
    <div>
    <hr/>
        <h5>No contacts found</h5>
    </div>
@endif
<a href="{{route('contact.index')}}" class="btn btn-primary m-1">Back</a>