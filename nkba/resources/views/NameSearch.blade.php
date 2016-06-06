<!DOCTYPE html>
<html>
<head>
  <title>Search Doctors</title>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<style type="text/css">
/*EndTesting*/
#reviewStars-input input:checked ~ label, #reviewStars-input label, #reviewStars-input label:hover, #reviewStars-input label:hover ~ label {
  background: url('http://positivecrash.com/wp-content/uploads/ico-s71a7fdede6.png') no-repeat;
}

@import "compass/css3";
 .star-cb-group {
  /* remove inline-block whitespace */
  font-size: 0;
  * {
    font-size: 1rem;
  }
  /* flip the order so we can use the + and ~ combinators */
  unicode-bidi: bidi-override;
  direction: rtl;
  & > input {
    display: none;
    & + label {
      /* only enough room for the star */
      display: inline-block;
      overflow: hidden;
      text-indent: 9999px;
      width: 1em;
      white-space: nowrap;
      cursor: pointer;
      &:before {
        display: inline-block;
        text-indent: -9999px;
        background: url('http://positivecrash.com/wp-content/uploads/ico-s71a7fdede6.png') 0 -16px;
      }
    }
    &:checked ~ label:before,
    & + label:hover ~ label:before,
    & + label:hover:before {
      background: url('http://positivecrash.com/wp-content/uploads/ico-s71a7fdede6.png') 0 -16px;
      color: #e52;
      text-shadow: 0 0 1px #333;
    }
  }
  
  /* the hidden clearer */
  & > .star-cb-clear + label {
    text-indent: -9999px;
    width: .5em;
    margin-left: -.5em;
  }
  & > .star-cb-clear + label:before {
    width: .5em;
  }

  &:hover > input + label:before {
    background: url('http://positivecrash.com/wp-content/uploads/ico-s71a7fdede6.png') 0 -16px;
    text-shadow: none;
  }
  &:hover > input + label:hover ~ label:before,
  &:hover > input + label:hover:before {
    background: url('http://positivecrash.com/wp-content/uploads/ico-s71a7fdede6.png') 0 -16px;
    text-shadow: 0 0 1px #333;
  }
}

/*// extra styles*/
:root {
  font-size: 2em;
  font-family: Helvetica, arial, sans-serif;
}

body {

  color: $unchecked-color;
}
fieldset {
  border: 0;
  background: #222;
  width: 5em;
  border-radius: 1px;
  padding: 1em 1.5em 0.9em;
  margin: 1em auto;
}
#log {
  margin: 1em auto;
  width: 5em;
  text-align: center;
  background: transparent;
}
h1 {
  text-align: center;
}

</style>
</head>
<body>
	


 @foreach($doctor as $doc)
 <div style=" width: 10px; height: 20px;">
  <td>
    <br><br>
    <div  class="alert alert-info" role="alert"><center><center></div>
    <div class="grid_4">
      <div class="img_container"><a href="{{$doc->path}}"><img src="{{$doc->path}}" alt="projects"></a></div>
      <article>
        <h5> Name:{{
         $doc->name
       }}</h5>
       <p>Address:{{
         $doc->address
       }}</p><br>
       <p>Discription:{{
         $doc->discription
       }}</p><br>
       <p>Phone:{{
         $doc->phone
       }}</p><br>
        <a href="http://localhost:8000/">Back</a>
                  
       <!-- Begine Star Of Evaluate-->


<!-- This is true stars -->



@if (!Auth::guest())
  <h1>Star Rating</h1>
  <form id='3' name='{{ Auth::id() }}' >
    <fieldset id="reviewStars-input">
      <span class="star-cb-group">
        <input type="radio" id="rating-5" name="{{ $doc->id }}" value="5" onclick="Rate()" /><label for="rating-5"></label>
        <input type="radio" id="rating-4" name="{{ $doc->id }}" value="4" checked="checked" onclick="Rate()" /><label for="rating-4"></label>
        <input type="radio" id="rating-3" name="{{ $doc->id }}" value="3"  onclick="Rate()" /><label for="rating-3"></label>
        <input type="radio" id="rating-2" name="{{ $doc->id }}" value="2"  onclick="Rate()" /><label for="rating-2"></label>
        <input type="radio" id="rating-1" name="{{ $doc->id }}" value="1" onclick="Rate()" /><label for="rating-1"></label>
        <input type="radio" id="rating-0" name="{{ $doc->id }}" value="0" class="star-cb-clear" onclick="Rate()" /><label for="rating-0"></label>
      </span>
    </fieldset>
    
  </form>
  @endif

  
  <!-- End Star Of Evaluate -->

</article>
</div>

</td>

</div>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

@endforeach

<script type="text/javascript" src="/JavaScriptAndCssFiles/JavascriptRate.js"></script>
</body>
</html>