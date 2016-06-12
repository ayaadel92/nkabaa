

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




  
  <!-- End Star Of Evaluate -->

</article>
</div>

</td>

</div>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

@endforeach

