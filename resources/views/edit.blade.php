@extends('layouts.app')
@yield('content')
<div class="container mt-5">
    {{-- @if($errors->any())
        @foreach($errors->all() as $error)
        <div class="alert alert-danger">
            {{$error}}
        </div>
        @endforeach
    @endif --}}
    <div class="row">
        <div class="col-6">
            <h3 class="text-primary">Update student management system</h3>
        </div>
        <div class="col-6">
            <a href="{{route('student.index')}}" class="btn btn-danger create_student"><i class="fa fa-backward"></i> Back</a>
        </div>
        <form action="{{route('student.update',$students->id)}}" method="post">
            @method('PUT')
            @csrf
            <div class="col-md-12 mt-5">
                <div class="form-group">
                    <label for="firstname">First name</label>
                    <input type="text" name="firstname" id="firstname" class="form-control" value="{{$students->firstname}}">
                    @if($errors->has('firstname'))
                    <span class="text-danger">{{$errors->first('firstname')}}</span>
                    @endif
                </div>
                <div class="form-group mt-2">
                    <label for="lastname">Last name</label>
                    <input type="text" name="lastname" id="lastname" class="form-control" value="{{$students->lastname}}">
                    @if($errors->has('lastname'))
                    <span class="text-danger">{{$errors->first('lastname')}}</span>
                    @endif
                </div>
                <div class="form-group mt-2">
                    <label for="dob">Date of birth</label>
                    <input type="date" name="dob" id="dob" class="form-control" value="{{$students->dob}}">
                    @if($errors->has('dob'))
                    <span class="text-danger">{{$errors->first('dob')}}</span>
                    @endif
                </div>
                <div class="form-group mt-2">
                    <label for="email">Email</label>
                    <input type="text" name="email" id="email" class="form-control" value="{{$students->email}}">
                    @if($errors->has('email'))
                    <span class="text-danger">{{$errors->first('email')}}</span>
                    @endif
                </div>
                <div class="form-group mt-2">
                    <label for="course">Course</label>
                    <select name="course" id="course" class="form-control">
                        <option value=""></option>
                        <option value="B.Sc" {{$students->course == 'B.Sc' ? 'selected' : ''}}>B.Sc</option>
                        <option value="B.A" {{$students->course == 'B.A' ? 'selected' : ''}}>B.A</option>
                        <option value="BBA" {{$students->course == 'BBA' ? 'selected' : ''}}>BBA</option>
                        <option value="B.Com" {{$students->course == 'B.Com' ? 'selected' : ''}}>B.Com</option>
                    </select>
                    @if($errors->has('course'))
                    <span class="text-danger">{{$errors->first('course')}}</span>
                    @endif
                </div>
                <div class="form-group mt-2">
                    <label for="major">Major</label>
                    <select name="major" id="major" class="form-control">
                        <option value=""></option>
                        <option value="Computer Science" {{$students->major == 'Computer Science' ? 'selected' : ''}}>Computer Science</option>
                        <option value="Mathematics" {{$students->major == 'Mathematics' ? 'selected' : ''}}>Mathematics</option>
                        <option value="Computer Applications" {{$students->major == 'Computer Applications' ? 'selected' : ''}}>Computer Applications</option>
                        <option value="Physics" {{$students->major == 'Physics' ? 'selected' : ''}}>Physics</option>
                        <option value="Chemistry" {{$students->major == 'Chemistry' ? 'selected' : ''}}>Chemistry</option>
                        <option value="Tamil" {{$students->major == 'Tamil' ? 'selected' : ''}}>Tamil</option>
                    </select>
                    @if($errors->has('major'))
                    <span class="text-danger">{{$errors->first('major')}}</span>
                    @endif
                </div>
                <div class="form-group mt-2">
                    <label for="email">Phone Number</label>
                    <input type="number" name="phone" id="phone" class="form-control" value="{{$students->phone}}">
                    @if($errors->has('phone'))
                    <span class="text-danger">{{$errors->first('phone')}}</span>
                    @endif
                </div>
                <div class="form-group mt-2">
                    <label for="email">Address</label>
                    <input type="text" name="address" id="address" class="form-control" value="{{$students->address}}">
                    @if($errors->has('address'))
                    <span class="text-danger">{{$errors->first('address')}}</span>
                    @endif
                </div>
                <div class="form-group mt-2">
                    <button type="submit" class="btn btn-success btn-block form-control">Update Details</button>
                </div>
            </div>
        </form>
    </div>
</div>