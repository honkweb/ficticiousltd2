

                <h2>Create Message</h2>


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
    <form action="{{route('message.store')}}" method="POST" >
        @csrf

        <div class="row">
            <div class="col-xs-8 col-sm-8 col-md-8">
                <div class="form-group">
                    <select name="client" data-required="1" class="form-control">
                    @foreach ($clientlist as $dep)
                    <option value="{{ $dep->name }}" > {{ $dep->name}}</option>
                    @endforeach
                    </select>
                </div>
            </div>
            <div class="col-xs-8 col-sm-8 col-md-8">
                <div class="form-group">
                    <strong>Title:</strong>
                    <input type="text" name="title" class="form-control" placeholder="Name">
                </div>
            </div>
            <div class="col-xs-8 col-sm-8 col-md-8">
                <div class="Tel">
                    <strong>Message:</strong>
                    <input type="text" name="message" class="form-control" placeholder="Name">
                </div>
            </div>
            <div class="col-xs-8 col-sm-8 col-md-8">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>

    </form>