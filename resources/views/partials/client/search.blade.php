<h1 class="display-6">Client Search</h1>

        @if($searchclient->isNotEmpty())
        <hr/>
        <table class="table">
        <thead>
        <th>Id</th>
        <th>Name</th>
        <th>Address</th>
        <th>Tel</th>
        <th>Email</th>
        </thead>
    @foreach ($searchclient as $post)
            <tr>
                <td>{{$post->id}}</td>
                <td><a href="{{ url('client', $post->id) }}" class="btn btn-info">{{ $post->name }}</a></td>
                <td>{{$post->address}}</td>
                <td>{{$post->tel}}</td>
                <td>{{$post->email}}</td>
            </tr>
            
            @endforeach
    </table>

    
@else 
    <div>
    <hr/>
        <h2>No clients found</h2>
    </div>
@endif
<a href="{{route('client.index')}}" class="btn btn-primary m-1">Back</a>
