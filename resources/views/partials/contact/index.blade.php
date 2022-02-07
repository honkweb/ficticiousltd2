
    <h1 class="display-6">Contact List</h1>
    <hr/>
    <form action="{{ route('contact.search') }}" method="GET">
    <input type="text" name="search" required/>
    <button type="submit">Search</button>
</form>




    <table class="table">
        <thead>
        <th>Name</th>
        <th>Role</th>
        <th>Tel</th>
        <th>Email</th>
        </thead>
        
        

        @foreach($contactindex as $contactindex)
            <tr>
                <td><a href="{{ url('contact', $contactindex->id) }}" class="btn btn-info">{{$contactindex->name}}</a></td>
                <td>{{$contactindex->role}}</td>
                <td>{{$contactindex->tel}}</td>
                <td>{{$contactindex->email}}</td>
            </tr>
            
            @endforeach
    </table>
    <a href="{{route('contact.create')}}" class="btn btn-primary m-1">New Contact</a>