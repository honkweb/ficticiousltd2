<h1 class="display-6">Edit Client</h1>


@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Error!</strong> 
        <ul>
            @foreach ($errors->all() as $error)
                <li></li>
            @endforeach
        </ul>
    </div>
@endif
<form action="{{ route('client.update',$clientedit->id) }}" method="POST">
@csrf
        @method('PUT')

    <div class="row">
    <div class="col-xs-12 col-sm-8 col-md-6">
            <div class="form-group">
                <strong>Name:</strong>
                <input type="text" name="name" value="{{ $clientedit->name }}" class="form-control" placeholder="Name">
            </div>
        </div>
        <div class="col-xs-12 col-sm-8 col-md-6">
            <div class="form-group">
                <strong>Address:</strong>
                <input type="text" name="address" class="form-control" value="{{ $clientedit->address }}" placeholder="Name">
            </div>
        </div>
        <div class="col-xs-12 col-sm-8 col-md-6">
            <div class="Tel">
                <strong>Tel:</strong>
                <input type="text" name="tel" class="form-control" value="{{ $clientedit->tel }}" placeholder="Name">
            </div>
        </div>
        <div class="col-xs-12 col-sm-8 col-md-6">
            <div class="form-group">
                <strong>Email:</strong>
                <input type="text" name="email" class="form-control" value="{{ $clientedit->email }}" placeholder="Name">
            </div>
        </div>
        <div class="col-xs-12 col-sm-8 col-md-6">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>

</form>