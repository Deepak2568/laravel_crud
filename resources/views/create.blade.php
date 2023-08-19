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
            <h3 class="text-primary">Create student management system</h3>
        </div>
        <div class="col-6">
            <a href="{{route('student.index')}}" class="btn btn-danger create_student"><i class="fa fa-backward"></i> Back</a>
        </div>
        <form action="{{route('student.store')}}" method="post">
            @csrf
            <div class="col-md-12 mt-5">
                <div class="form-group">
                    <label for="firstname">First name</label>
                    <input type="text" name="firstname" id="firstname" class="form-control" value="{{old('firstname')}}">
                    @if($errors->has('firstname'))
                    <span class="text-danger">{{$errors->first('firstname')}}</span>
                    @endif
                </div>
                <div class="form-group mt-2">
                    <label for="lastname">Last name</label>
                    <input type="text" name="lastname" id="lastname" class="form-control" value="{{old('lastname')}}">
                    @if($errors->has('lastname'))
                    <span class="text-danger">{{$errors->first('lastname')}}</span>
                    @endif
                </div>
                <div class="form-group mt-2">
                    <label for="dob">Date of birth</label>
                    <input type="date" name="dob" id="dob" class="form-control" value="{{old('dob')}}">
                    @if($errors->has('dob'))
                    <span class="text-danger">{{$errors->first('dob')}}</span>
                    @endif
                </div>
                <div class="form-group mt-2">
                    <label for="email">Email</label>
                    <input type="text" name="email" id="email" class="form-control" value="{{old('email')}}">
                    @if($errors->has('email'))
                    <span class="text-danger">{{$errors->first('email')}}</span>
                    @endif
                </div>
                <div class="form-group mt-2">
                    <label for="course">Course</label>
                    <select name="course" id="course" class="form-control">
                        <option value=""></option>
                        <option value="B.Sc" {{old('course') == 'B.Sc' ? 'selected' : ''}}>B.Sc</option>
                        <option value="B.A" {{old('course') == 'B.A' ? 'selected' : ''}}>B.A</option>
                        <option value="BBA" {{old('course') == 'BBA' ? 'selected' : ''}}>BBA</option>
                        <option value="B.Com" {{old('course') == 'B.Com' ? 'selected' : ''}}>B.Com</option>
                    </select>
                    @if($errors->has('course'))
                    <span class="text-danger">{{$errors->first('course')}}</span>
                    @endif
                </div>
                <div class="form-group mt-2">
                    <label for="major">Major</label>
                    <select name="major" id="major" class="form-control">
                        <option value=""></option>
                        <option value="Computer Science" {{old('major') == 'Computer Science' ? 'selected' : ''}}>Computer Science</option>
                        <option value="Mathematics" {{old('major') == 'Mathematics' ? 'selected' : ''}}>Mathematics</option>
                        <option value="Computer Applications" {{old('major') == 'Computer Applications' ? 'selected' : ''}}>Computer Applications</option>
                        <option value="Physics" {{old('major') == 'Physics' ? 'selected' : ''}}>Physics</option>
                        <option value="Chemistry" {{old('major') == 'Chemistry' ? 'selected' : ''}}>Chemistry</option>
                        <option value="Tamil" {{old('major') == 'Tamil' ? 'selected' : ''}}>Tamil</option>
                    </select>
                    @if($errors->has('major'))
                    <span class="text-danger">{{$errors->first('major')}}</span>
                    @endif
                </div>
                <div class="form-group mt-2">
                    <label for="email">Phone Number</label>
                    <input type="number" name="phone" id="phone" class="form-control" value="{{old('phone')}}">
                    @if($errors->has('phone'))
                    <span class="text-danger">{{$errors->first('phone')}}</span>
                    @endif
                </div>
                <div class="form-group mt-2">
                    <label for="email">Address</label>
                    <input type="text" name="address" id="address" class="form-control" value="{{old('address')}}">
                    @if($errors->has('address'))
                    <span class="text-danger">{{$errors->first('address')}}</span>
                    @endif
                </div>
                <div class="form-group mt-2">
                    <button type="submit" class="btn btn-success btn-block form-control">Submit</button>
                </div>
            </div>
        </form>
    </div>
</div>