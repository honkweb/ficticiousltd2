
hello


    <h1 class="display-6">contacts</h1>
    <a href="{{ url('/') }}" class="text-sm text-gray-700 dark:text-gray-500 underline"> Home </a>
    <a href="{{route('contact.create')}}">Create New</a>
    <hr/>


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
                @foreach($contactindex->message as $contactindex1)
                <td>{{$contactindex1->client}}</td>
                <td>{{$contactindex1->title}}</td>
                <td>{{$contactindex1->message}}</td>
                @endforeach
                    
            </tr>
        @endforeach
    </table>
