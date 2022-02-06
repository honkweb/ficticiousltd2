
hello


    <h1 class="display-6">messages</h1>
    <a href="{{ url('/') }}" class="text-sm text-gray-700 dark:text-gray-500 underline"> Home </a>
    <a href="{{route('message.create')}}">Create New</a>
    <hr/>


    <table class="table">
        <thead>
        <th>Id</th>
        <th>Client</th>
        <th>Title</th>
        <th>Message</th>
        <th>Created At</th>
        <th>Updated At</th>
        </thead>

        @foreach($messageindex as $messageindex)
            <tr>
                <td>{{$messageindex->id}}</td>
                <td><a href="{{ url('message', $messageindex->id) }}" class="btn btn-info">{{$messageindex->client}}</a></td>
                <td>{{$messageindex->title}}</td>
                <td>{{$messageindex->message}}</td>
                <td>{{$messageindex->created_at}}</td>
                <td>{{$messageindex->updated_at}}</td>
                    
            </tr>
        @endforeach
    </table>
