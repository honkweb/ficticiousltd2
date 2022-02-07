
hello


    <h1 class="display-6">contacts</h1>
    <a href="{{ url('/') }}" class="text-sm text-gray-700 dark:text-gray-500 underline"> Home </a>
    <a href="{{route('contact.create')}}">Create New</a>
    <hr/>
    <form action="{{ route('contact.search') }}" method="GET">
    <input type="text" name="search" required/>
    <button type="submit">Search</button>
</form>


    <table class="table">
        <thead>
        <th>Id</th>
        <th>Name</th>
        <th>Role</th>
        <th>Tel</th>
        <th>Email</th>
        </thead>

        @foreach($contactindex as $contactindex)
            <tr>
                <td>{{$contactindex->id}}</td>
                <td><a href="{{ url('contact', $contactindex->id) }}" class="btn btn-info">{{$contactindex->name}}</a></td>
                <td>{{$contactindex->role}}</td>
                <td>{{$contactindex->tel}}</td>
                <td>{{$contactindex->email}}</td>                   
            </tr>
        @endforeach
    </table>
