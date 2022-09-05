@extends('employees.layout')
@section('content')
<div class="card">
  <div class="card-header">Page</div>
  <div class="card-body">
      
      <form action="{{ url('employee/' .$employees->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$employees->id}}" id="id" />
        <label>First Name</label></br>
        <input type="text" name="first_name" id="first_name" value="{{$employees->first_name}}" class="form-control"></br>
        <label>Last Name</label></br>
        <input type="text" name="last_name" id="last_name" value="{{$employees->last_name}}" class="form-control"></br>
        <label>Gender</label></br>
        <input type="text" name="gender" id="gender" value="{{$employees->gender}}" class="form-control"></br>
        <label>Date of Birth</label></br>
        <input type="text" name="date_of_birth" id="date_of_birth" value="{{$employees->date_of_birth}}" class="form-control"></br>
        <label>Phone Number</label></br>
        <input type="text" name="phone_number" id="phone_number" value="{{$employees->phone_number}}" class="form-control"></br>
        
        <label>Address</label></br>
        <input type="text" name="address" id="address" value="{{$employees->address}}" class="form-control"></br>
    
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
  
  </div>
</div>
@sto