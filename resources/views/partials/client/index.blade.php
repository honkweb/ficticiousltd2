<h1 class="display-6">Client List</h1>
    <hr/>
    <form action="{{ route('client.search') }}" method="GET">
    <input type="text" name="search" required/>
    <button type="submit">Search</button>
</form>




    <table class="table">
        <thead>
        <th>Name</th>
        <th>Address</th>
        <th>Tel</th>
        <th>Email</th>
        </thead>
        
        

        @foreach($clientindex as $clientindex)
            <tr>
                <td><a href="{{ url('client', $clientindex->id) }}" class="btn btn-info">{{$clientindex->name}}</a></td>
                <td>{{$clientindex->address}}</td>
                <td>{{$clientindex->tel}}</td>
                <td>{{$clientindex->email}}</td>
            </tr>
            
            @endforeach
    </table>
    <a href="{{route('client.create')}}" class="btn btn-primary m-1">New Client</a>