<!DOCTYPE html>
<html>
<head>
  <title>LOL</title>
  <style type="text/css">
/*sprite with stars*/
/*StartTesting*/





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
        /*content: url('http://positivecrash.com/wp-content/uploads/ico-s71a7fdede6.png') no-repeat;*/
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
                  <!-- Begine Star Of Evaluate-->
                       {{-- <div class="rating">
                        <span id="1">☆</span><span id="2">☆</span><span id="3">☆</span><span id="4">☆</span><span id="5">☆</span>
                      </div> --}}

{{--                       <h1>Rate</h1>
<fieldset class="rating">
    <input type="radio" id="star5" name="rating" value="5" /><label class = "full" for="star5" title="Awesome - 5 stars"></label>
    <input type="radio" id="star4half" name="rating" value="4 and a half" /><label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
    <input type="radio" id="star4" name="rating" value="4" /><label class = "full" for="star4" title="Pretty good - 4 stars"></label>
    <input type="radio" id="star3half" name="rating" value="3 and a half" /><label class="half" for="star3half" title="Meh - 3.5 stars"></label>
    <input type="radio" id="star3" name="rating" value="3" /><label class = "full" for="star3" title="Meh - 3 stars"></label>
    <input type="radio" id="star2half" name="rating" value="2 and a half" /><label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
    <input type="radio" id="star2" name="rating" value="2" /><label class = "full" for="star2" title="Kinda bad - 2 stars"></label>
    <input type="radio" id="star1half" name="rating" value="1 and a half" /><label class="half" for="star1half" title="Meh - 1.5 stars"></label>
    <input type="radio" id="star1" name="rating" value="1" /><label class = "full" for="star1" title="Sucks big time - 1 star"></label>
    <input type="radio" id="starhalf" name="rating" value="half" /><label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
</fieldset> --}}

{{-- this is true stars --}}
@if (!Auth::guest())
<h1>Star Rating</h1>
  <form>
    <fieldset id="reviewStars-input">
      <span class="star-cb-group">
        <input type="radio" id="rating-5" name="rating" value="5" /><label for="rating-5"></label>
        <input type="radio" id="rating-4" name="rating" value="4" checked="checked" /><label for="rating-4"></label>
        <input type="radio" id="rating-3" name="rating" value="3" /><label for="rating-3"></label>
        <input type="radio" id="rating-2" name="rating" value="2" /><label for="rating-2"></label>
        <input type="radio" id="rating-1" name="rating" value="1" /><label for="rating-1"></label>
        <input type="radio" id="rating-0" name="rating" value="0" class="star-cb-clear" /><label for="rating-0"></label>

      </span>
    </fieldset>
    
  </form>
  @endif
<!-- End Star Of Evaluate -->
                   
                 </article>
               </div>
             </td>
           </div>
           @endforeach

<script type="text/javascript">
// var logID = 'log',
// log = $('<div id="'+logID+'"></div>');
// $('body').append(log);
// $('[type*="radio"]').change(function () {
//   var me = $(this);
//   log.html(me.attr('value'));
// });
</script>
</body>
</html>