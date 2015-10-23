@extends('layouts.master')


@section('title')
    Random User Generator
@stop


{{--
This `head` section will be yielded right before the closing </head> tag.
Use it to add specific things that *this* View needs in the head,
such as a page specific styesheets.
--}}
@section('head')

@stop

@section('content')
    <h1>Random User Generator</h1>
<form method='POST' action='/randomuser'>
  <input type='hidden' name='_token' value='{{ csrf_token() }}'>

      Number of Users: <input type='text' name='number_of_users' value={{old('number_of_users')}}>

      @if(count($errors) > 0)
          <ul>
              @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
              @endforeach
          </ul>
      @endif

  <input type='submit' value='Display users and addresses'>
</form>


@stop

{{--
This `body` section will be yielded right before the closing </body> tag.
Use it to add specific things that *this* View needs at the end of the body,
such as a page specific JavaScript files.
--}}
@section('body')

@stop
