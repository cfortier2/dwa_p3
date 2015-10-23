@extends('layouts.master')

@section('title')
  Lorem Ipsum Generator
@stop

@section('content')
  <h1>Developer's Best Friend</h1>

  <h1>Lorem Ipsum Generator</h1>
  <h2>According to <a href=https://en.wikipedia.org/wiki/Lorem_ipsum>Wikipedia</a> lorem ipsum is defined as:</h2>
  <p>In publishing and graphic design, lorem ipsum (derived from Latin dolorem ipsum, translated as "pain itself") is a filler text commonly used to demonstrate the graphic elements of a document or visual presentation. Replacing meaningful content with placeholder text allows viewers to focus on graphic aspects such as font, typography, and page layout without being distracted by the content. It also reduces the need for the designer to come up with meaningful text, as they can instead use quickly-generated lorem ipsum.</p>

  <h3>Lorem Ipsum Generator</h3>
    <form method='POST'>
      <input type='hidden' name='_token' value='{{ csrf_token() }}'>
      <label for="numberOfParagraphs">Number of paragraphs (max: 99)</label>
      <input type="text" class="form-control" id="numberOfParagraphs" maxlength="2" name="numberOfParagraphs">

      <button type="submit" class="btn btn-default">Submit</button>

      @if(isset($paragraphs))
        @foreach($paragraphs as $paragraph)
                <p>{{ $paragraph }}</p>
        @endforeach
      @endif
    </form>


  <h1>Random User Generator</h1>
@stop
