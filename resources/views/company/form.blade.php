@csrf

<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group has-error">
            <strong>Name:</strong>
            <input type="text" name="name" placeholder="Name"  class="form-control" value="{{$company ?$company ->name:old('name')}}"/> 
            
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group has-error">
            <strong>Details:</strong>
        <textarea name="details" placeholder="Details"  class="form-control" style="height:100px">{{$company?$company->details:old('details')}}</textarea>
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
</div>
