@extends('layouts.default')
 
@section('content')
<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Add New Company</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('company.index') }}"> Back</a>
            </div>
        </div>
    </div>
 @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
         @endif
         <form name="companystrorecreate" id="companystrorecreate" action="{{ route('company.update',$company->id) }}"method="POST">
         	  @method('PUT')

    	 @include('company.form',['company' => $company])
    </form> 
   
@endsection