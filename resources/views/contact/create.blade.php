@extends('layouts.app')


@section('content')
    <h1>Contact us</h1>

    <form action="/contact" method="POST">

        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" value="{{ old('name') }}" class="form-control">
            <div class="alert-danger">{{$errors->first('name')}}</div>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" name="email" value="{{ old('email') }}" class="form-control">
            <div class="alert-danger">{{$errors->first('email')}}</div>
        </div>
        <div class="form-group">
            <label for="message">Message</label>
            <textarea name="message" id="message" cols="30" rows="10" class="form-control">{{ old('message') }}</textarea>
            <div class="alert-danger">{{$errors->first('message')}}</div>
        </div>

        @csrf
        <button type="submit" class="btn btn-primary">Send Message</button>
    </form>
@endsection