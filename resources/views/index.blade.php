@extends('layouts.app')
@yield('content')
<div class="container mt-5">
    <div class="row">
        @if(session()->has('message'))
            <div class="alert alert-success">
                {{session()->get('message')}}
            </div>
        @endif
        <div class="col-6">
            <h3 class="text-primary">Student management system</h3>
        </div>
        <div class="col-6">
            <a href="{{route('student.create')}}" class="btn btn-success create_student"><i class="fa fa-plus"></i> Create Student</a>
        </div>
        <div class="col-md-12 mt-5">
            <table class="table table-bordered text-center">
                <tr>
                    <th>S No</th>
                    <th>Name</th>
                    <th>DOB</th>
                    <th>Email</th>
                    <th>Course</th>
                    <th>Phone Number</th>
                    <th>Address</th>
                    <th colspan='3'></th>
                </tr>
                @foreach($students as $key => $student)
                <tr>
                    <td>{{$key + 1}}</td>
                    <td>{{$student->firstname.' '.$student->lastname}}</td>
                    <td>{{$student->dob}}</td>
                    <td>{{$student->email}}</td>
                    <td>{{$student->course.' '.$student->major}}</td>
                    <td>{{$student->phone}}</td>
                    <td>{{$student->address}}</td>
                    <td><a class="btn btn-primary"><i class='fa fa-eye'></i> Show</a></td>
                    <td><a class="btn btn-success"><i class='fa fa-edit'></i> Edit</a></td>
                    <td><a class="btn btn-danger"><i class='fa fa-trash'></i> Delete</a></td>
                </tr>
                @endforeach
            </table>
            {{-- {{$students->links()}} --}}
        </div>
    </div>
</div>