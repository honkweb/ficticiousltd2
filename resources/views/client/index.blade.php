
hello


    <h1 class="display-6">client</h1>
    <a href="{{ url('/') }}" class="text-sm text-gray-700 dark:text-gray-500 underline"> Home </a>
    <a href="{{route('client.create')}}">Create New</a>
    <hr/>


    <table class="table">
        <thead>
        <th>Id</th>
        <th>Name</th>
        <th>Address</th>
        <th>Tel</th>
        <th>Email</th>
        </thead>
        
        

        @foreach($clientindex as $clientindex)
            <tr>
                <td>{{$clientindex->id}}</td>
                <td><a href="{{ url('client', $clientindex->id) }}" class="btn btn-info">{{$clientindex->name}}</a></td>
                <td>{{$clientindex->address}}</td>
                <td>{{$clientindex->tel}}</td>
                <td>{{$clientindex->email}}</td>
                @foreach($clientindex->contact as $clientindex1)
                <td>{{$clientindex1->name}}</td>
                @endforeach
            </tr>
            
            @endforeach
    </table>
