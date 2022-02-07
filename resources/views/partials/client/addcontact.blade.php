

<h1 class="display-6">Add Contact</h1>


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
<form action="{{route('client.storecontact')}}" method="POST" >
    @csrf

    <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-6">
        <p>Client Name</p>
        <div class="form-group">
                <select name="clientreq" data-required="1" class="form-control">
                <option value="{{ $clientlist->id }}" > {{$clientlist->name}}</option>
              
                </select>
            </div>
            <p>Contact Name</p>
            <div class="form-group">
                <select name="contactreq" data-required="1" class="form-control">
                
                @foreach ($contactlist as $contactlist1)
                <option value="{{ $contactlist1->id}}"> {{ $contactlist1->name}}</option>
                @endforeach
                </select>
            </div>
        </div>
        </div>
        <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-6">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>

</form>