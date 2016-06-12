
@extends('layouts.app')


@section('content')


    @foreach($doctor as $doc)
<div id="content" class="bottom-border-shadow">
    <div class="container background-white bottom-border">
        <div class="row margin-vert-30">
    <div class="blog">
        <div class="clearfix"></div>
        <div class="blog-post-body row margin-top-15">
            <div class="col-md-5">
                <img class="margin-bottom-20" src="{{$doc->path}}" alt="thumb1" style="height: 300px">
            </div>
            <div class="col-md-7">
                          <h5> الاسم:{{$doc->name }}</h5>
           <p>العنوان:{{ $doc->address}}</p><br>
           <p>الوصف :{{$doc->discription }}</p><br>
           <p>الهاتف :{{$doc->phone}}</p><br>
           @if (!Auth::guest())
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
                <!-- End Read More -->
            </div>
        </div>
    </div>
        </div>
    </div>
</div>
    @endforeach

<div id="footer" class="background-grey" style="background-color: #555555">
    <div class="container">
        <div class="row">
       
   
       
    </div>
</div>
</div>
@endsection

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
        width: 150px;
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

<script type="text/javascript">
    var logID = 'log',
            log = $('<div id="' + logID + '"></div>');
    $('body').append(log);
    $('[type*="radio"]').change(function () {
        var me = $(this);
        log.html(me.attr('value'));
    });
</script>
