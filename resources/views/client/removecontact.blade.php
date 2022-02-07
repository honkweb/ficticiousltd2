

                <h2>Add Client</h2>


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
    
        @csrf

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                    <select name="clientreq" data-required="1" class="form-control">
                   
                    <option value="{{ $clientlist->id }}" > {{$clientlist->name}}</option>
                  
                    </select>
                </div>
                <div class="form-group">
                    <select name="contactreq" data-required="1" class="form-control">
                    @foreach ($contactlist as $contactlist1)
                    
                    
                    <option value="{{ $contactlist1}}"> {{$contactlist1 }}</option>
                    
                   
                    @endforeach
                    </select>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>

    </form>