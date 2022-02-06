
                <h2>Edit contact</h2>


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
<form action="{{ route('message.update',$messageedit->id) }}" method="POST">
@csrf
        @method('PUT')

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Client:</strong>
                <input type="text" name="client" value="{{ $messageedit->client }}" class="form-control" placeholder="Name">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Title</strong>
                <input type="text" name="title" class="form-control" value="{{ $messageedit->title}}" placeholder="Name">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="Tel">
                <strong>Message:</strong>
                <input type="text" name="message" class="form-control" value="{{ $messageedit->message }}" placeholder="Name">
            </div>
        </div>
    
       
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>

</form>