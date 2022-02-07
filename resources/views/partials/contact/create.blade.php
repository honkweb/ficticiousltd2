

                <h2>Add contact</h2>


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
    <form action="{{route('contact.store')}}" method="POST" >
        @csrf

        <div class="row">
        <div class="col-xs-12 col-sm-8 col-md-6">
                <div class="form-group">
                    <strong>Name:</strong>
                    <input type="text" name="name" class="form-control" placeholder="Name">
                </div>
            </div>
            <div class="col-xs-12 col-sm-8 col-md-6">
                <div class="form-group">
                    <strong>Role:</strong>
                    <input type="text" name="role" class="form-control" placeholder="Name">
                </div>
            </div>
            <div class="col-xs-12 col-sm-8 col-md-6">
                <div class="Tel">
                    <strong>Tel:</strong>
                    <input type="text" name="tel" class="form-control" placeholder="Name">
                </div>
            </div>
            <div class="col-xs-12 col-sm-8 col-md-6">
                <div class="form-group">
                    <strong>Email:</strong>
                    <input type="text" name="email" class="form-control" placeholder="Name">
                </div>
            </div>
            <div class="col-xs-12 col-sm-8 col-md-6">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>

    </form>