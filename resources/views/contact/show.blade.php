<h1 class="display-6">contact</h1>

    <hr/>

    <dl>
    <td>{{$contactshow->id}}</td>
    <td>{{$contactshow->name}}</td>
    <td>{{$contactshow->role}}</td>
    <td>{{$contactshow->tel}}</td>
    <td>{{$contactshow->email}}</td>
    </dl>

    <div class="d-flex">
        <a href="{{route('contact.edit', $contactshow->id)}}" class="btn btn-primary m-1">Edit</a>

        <form action="{{ route('contact.destroy', $contactshow->id) }}" method="POST">
            <input type="hidden" name="_method" value="DELETE">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <button class="btn btn-danger m-1">Delete User</button>
        </form>
    </div>