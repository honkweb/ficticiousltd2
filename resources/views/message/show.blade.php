<h1 class="display-6">contact</h1>

    <hr/>

    <dl>
    <td>{{$messageshow->id}}</td>
                <td>{{$messageshow->client}}</td>
                <td>{{$messageshow->title}}</td>
                <td>{{$messageshow->message}}</td>
                <td>{{$messageshow->created_at}}</td>
                <td>{{$messageshow->updated_at}}</td>
    </dl>

    <div class="d-flex">
        <a href="{{route('message.edit', $messageshow->id)}}" class="btn btn-primary m-1">Edit</a>

        <form action="{{ route('message.destroy', $messageshow->id) }}" method="POST">
            <input type="hidden" name="_method" value="DELETE">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <button class="btn btn-danger m-1">Delete User</button>
        </form>
    </div>