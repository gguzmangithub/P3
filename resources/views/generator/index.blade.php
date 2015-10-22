@extends('layouts.master')


@section('title')
    Code Generator
@stop


{{--
This `head` section will be yielded right before the closing </head> tag.
Use it to add specific things that *this* View needs in the head,
such as a page specific styesheets.
--}}
@section('head')

@stop

@section('content')
    <h1>Developer's Best Friend</h1>
{{-- should be using fields sets and labels in the form below --}}
<form method='POST' action='/generator'>

  <input type='hidden' name='_token' value='{{ csrf_token() }}'>

      Number of Paragraphs: <input type='text' name='number_of_paragraphs' value={{old('number_of_paragraphs')}}>
      {{-- Number of Paragraphs: <input type='text' name='number_of_paragraphs'> --}}

      @if(count($errors) > 0)
          <ul>
              @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
              @endforeach
          </ul>
      @endif

  <input type='submit' value='Calculate paragraphs'>

</form>
@stop

{{--
This `body` section will be yielded right before the closing </body> tag.
Use it to add specific things that *this* View needs at the end of the body,
such as a page specific JavaScript files.
--}}
@section('body')

@stop
