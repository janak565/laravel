@extends('layouts.default')
@section('content')
<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Company CRUD</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('company.create') }}">Create New Compnay</a>
            </div>
        </div>
    </div>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Details</th>
            <th width="280px">Action</th>
        </tr>
  	<?php //$i = 0; ?>

     @foreach ($companies as $company)
    <tr>
        <td>{{ ++$i }}</td>
        <td>{{ $company->name}}</td>
        <td>{{ $company->details}}</td>
        <td>
        <a class="btn btn-info" href="">Show</a>
        <a class="btn btn-primary" href="{{ route('company.edit',$company->id) }}">Edit</a>
  		<a class="btn btn-danger" href="{{ route('company.delete',$company->id) }}">Delete</a>
       
        </td>
         </tr>
 @endforeach

    </table>
     
   
        {!! $companies->render() !!}
@endsection