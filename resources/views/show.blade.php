@extends('layouts.app')
@yield('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-6">
            <h3 class="text-primary">Student management system</h3>
        </div>
        <div class="col-6">
            <a href="{{route('student.index')}}" class="btn btn-danger create_student"><i class="fa fa-backward"></i> Back</a>
        </div>
        <div class="col-md-12 mt-5">
            <table class="table table-bordered text-center">
                <tr>
                    <th>Name</th>
                    <th>DOB</th>
                    <th>Email</th>
                    <th>Course</th>
                    <th>Phone Number</th>
                    <th>Address</th>
                </tr>
                <tr>
                    <td>{{$students->firstname.' '.$students->lastname}}</td>
                    <td>{{$students->dob}}</td>
                    <td>{{$students->email}}</td>
                    <td>{{$students->course.' '.$students->major}}</td>
                    <td>{{$students->phone}}</td>
                    <td>{{$students->address}}</td>
                </tr>
            </table>
        </div>
    </div>
</div>