@extends('employees.layout')
@section('content')
<div class="card">
  <div class="card-header">Employees Page</div>
  <div class="card-body">
  
        <div class="card-body">
        <h5 class="card-title">Name : {{ $employees->first_name }}</h5>
        <p class="card-text">Gender : {{ $employees->gender }}</p>
        <p class="card-text">Date of Birth : {{ $employees->date_of_birth }}</p>
        <p class="card-text">Email : {{ $employees->email }}</p>
        <p class="card-text">Address : {{ $employees->address }}</p>
        <p class="card-text">Phone : {{ $employees->phone_number }}</p>
  </div>
      
    </hr>
  
  </div>
</div>