<h1 class="display-6">Client</h1>

    <hr/>

    <dl>
    <td>{{$clientshow->id}}</td>
    <td>{{$clientshow->name}}</td>
    <td>{{$clientshow->address}}</td>
    <td>{{$clientshow->tel}}</td>
    <td>{{$clientshow->email}}</td>
    </dl>

    <div class="d-flex">
        <a href="{{route('client.edit', $clientshow->id)}}" class="btn btn-primary m-1">Edit</a>

        <form action="{{ route('client.destroy', $clientshow->id) }}" method="POST">
            <input type="hidden" name="_method" value="DELETE">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <button class="btn btn-danger m-1">Delete User</button>
        </form>
    </div>