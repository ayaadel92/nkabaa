@extends('layouts.app')

@section('content')
<div class="container">
  <br>
      <div class="clearfix"> </div> 
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>

    <!-- Wrapper for slides -->'
    <div class="clearfix"> </div> 
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="/assets/images/image1.jpg" alt="Chania" width="800" height="345">
      </div>

      <div class="item">
        <img src="/assets/images/image2.jpg" alt="Chania" width="800" height="345">
      </div>
    
      <div class="item">
        <img src="/assets/images/image3.jpg" alt="Flower" width="800" height="345">
      </div>

      <div class="item">
        <img src="/assets/images/image4.jpg" alt="Flower" width="800" height="345">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

    <!--//end-banner-->
    
    <!--/services-->
   <div class="services" id="services">
       <div class="container">
     <h3 class="tittle  pull-right">ﺧﺪﻣﺘﻨﺎ </h3>
     <div class="clearfix"> </div> 
        <div class="serve-top">
     <div class="col-md-4 serve-icons">
     <div class="s-sub">
      <div class="col-md-2 icon">
        <i class="glyphicon glyphicon-globe"></i>
      </div>
      <div class="col-md-10 serve-text">
       <p> اﻻﺷﺘﺮاﻙ ﻓﻲ اﻟﺘﺎﻣﻴﻦ اﻟﺼﺤﻲ ﻟﻨﻘﺎﺑﻪ اﻟﻤﻬﻨﺪﺳﻴﻦ </p>
      </div>
          <div class="clearfix"> </div> 
      </div>
      <div class="s-sub">
      <div class="col-md-2 icon">
        <i class="glyphicon glyphicon-briefcase"></i>
      </div>
      <div class="col-md-10 serve-text">
       <p> ﺗﺠﺪﻳﺪ اﻻﺷﺘﺮاﻙ اﻟﺴﻨﻮﻱ ﺑﺎﻟﻨﻘﺎﺑﻪ </p>
      </div>
          <div class="clearfix"> </div> 
      </div>
     </div>
     <div class="col-md-4 serve-icons">
     <div class="s-sub">
      <div class="col-md-2 icon">
        <i class="glyphicon glyphicon-screenshot"></i>
      </div>
      <div class="col-md-10 serve-text">
       <p> ﺗﺠﺪﻳﺪ اﻻﺷﺮاﻙ اﻟﺴﻨﻮﻱ اﻻﺷﺘﺮاﻙ ﻓﻲ اﻟﺘﺎﻣﻴﻦ اﻟﺼﺤﻲ ﻟﻨﻘﺎﺑﻪ اﻟﻤﻬﻨﺪﺳﻴﻦ</p>
      </div>
          <div class="clearfix"> </div> 
      </div>
      <a href="/create"> <div class="s-sub">
      <div class="col-md-2 icon">
        <i class="glyphicon glyphicon-time"></i>
      </div>
     <div class="col-md-10 serve-text">
       <p> ﺧﺪﻣﻪ اﻟﺘﺤﻮﻳﻼﺕ ﺩﻭﻥ اﻟﺘﻌﺐ ﻓﻲ اﻟﺬﻫﺎﺏ اﻟﻲ اﻟﻨﻘﺎﺑﻪ ﻻﺧﺬ اﻟﺘﺤﻮﻳﻠﻪ ﻓﻮﻗﺘﻚ ﻳﻬﻤﻨﺎ </p>
      </div>
          <div class="clearfix"> </div> 
      </div>
     </div></a>
     <div class="col-md-4 serve-icons">
      <div class="s-sub">
      <div class="col-md-2 icon">
        <i class="glyphicon glyphicon-edit"></i>
      </div>
      <div class="col-md-10 serve-text">
       <p> اﻟﺒﺤﺚ ﻋﻦ اﻗﺮﺏ ﺩﻛﺘﻮﺭ اﻭ ﻣﺸﻔﻲ اﻭ ﻋﻴﺎﺩﻩ ﺑﺎﻟﻘﺮﺏ ﻣﻨﻚ ﻓﺎﻥ ﺣﻴﺎﺗﻚ ﺗﻬﻤﻨﺎ </p>
      </div>
          <div class="clearfix"> </div> 
      </div><div class="s-sub">
      <div class="col-md-2 icon">
        <i class="glyphicon glyphicon-certificate"></i>
      </div>
      <div class="col-md-10 serve-text">
       <p> اﻟﺸﻜﻮﻱ ﻓﻲ ﺣﺎﻟﻪ ﻣﺎ اﺯاﻱ ﻛﺎﻧﺖ اﻟﺨﺪﻣﻪ اﻟﻤﻘﺪﻣﻪ ﻏﻴﺮ ﻛﺎﻓﻴﻪ ﻭ اﻟﻤﻘﺘﺮﺣﺎﺕ </p>
      </div>
          <div class="clearfix"> </div> 
      </div>
     </div>
                          
                          
                          
                            <div class="col-md-4 serve-icons">
      <div class="s-sub">
      <div class="col-md-2 icon">
        <i class="glyphicon glyphicon-edit"></i>
      </div>
      <div class="col-md-10 serve-text">
       <p> اﻻﻥ ﺗﻘﺪﺭ ﻣﻌﻨﺎ اﻥ ﺗﻘﻴﻢ اﻟﺪﻛﺘﻮﺭ ﻭ ﺫﻟﻚ ﻻﺭﺗﻔﺎﻉ ﺑﻤﺴﺘﻮﻱ اﻟﺨﺪﻣﻪ اﻟﺘﻲ ﻧﻘﺪﻣﻬﺎ ﻟﻚ </p>
      </div>
          <div class="clearfix"> </div> 
      </div><div class="s-sub">
      <div class="col-md-2 icon">
        <i class="glyphicon glyphicon-certificate"></i>
      </div>
      <div class="col-md-10 serve-text">
       <p> ﻣﻮاﻋﻴﺪﻙ اﻻﻥ ﺗﺴﻄﻴﻊ ﻋﻤﻞ ﺟﺪﻭﻝ ﺑﻤﻮﻋﻴﺪ اﻻﺩﻭﻳﻪ اﻟﺨﺎﺻﻪ ﺑﻴﻚ ﻓﺎﻥ اﻻﻫﺘﻤﺎﻡ ﺑﻴﻚ ﻫﺪﻓﻨﺎ </p>
      </div>
          <div class="clearfix"> </div> 
      </div>
     </div>
                          
                          
     <div class="clearfix"> </div>  
           </div> 
       </div> 
   </div>





 

























<div class="blog-section">
 <div class="container"> 
   <h3 class="tittle  pull-right">اﻟﻤﺴﺘﺸﻔﻴﺎﺕ اﻻﻋﻠﻲ ﺗﻘﻴﻢ</h3>
   <div class="clearfix"> </div>
  <div class="blog-post-grids">
   <div class="blog-post">
     <a href="single.html"><img src="/assets/images/b2.jpg" class="img-responsive" alt="  "/></a>
     <div class="text">
      <a href="single.html"> ﻣﺴﺘﺸﻔﻲ اﻟﺤﻤﺎﻳﺎﺕ</a>
     </div>
     <div class="admin-tag">
     
     <p class="erat">ﻣﺴﺘﺸﻔﻲ اﻟﺤﻤﺎﻳﺎﺕ 
ﻻاﺗﺼﺎﻝ ﺑﻴﻨﺎ ﻳﺮﺟﻲ اﻟﻌﻠﻢ اﻥ ﺳﺎﻋﺎﺕ اﻟﻌﻤﻞ      
ﻣﻦ اﻟﺤﺎﺩﻳﻪ ﻋﺸﺮ اﻟﻲ ﺛﺎﻧﻴﻪ ﻋﺸﺮ      
اﺛﻤﻤﻤﻤﻤﻤﻤﻤﻤﻤﻤﻤﻤﻤﻤﻤﻤﻤﻤﻤﻤﻤﻤﻤﻤﻤﻤﻤﻤﺦ     </p>
     <a href="single.html" class="hvr-shutter-in-horizontal more">Readmore<span> </span></a>
     </div>
   </div>
  
  </div>
  <div class="blog-post-grids">
   <div class="blog-post">
    <a href="single.html"><img src="/assets/images/b3.jpg" class="img-responsive" alt="  "/></a>
    <div class="text">
      <a href="single.html"> ﻣﺴﺘﺸﻔﻲ اﻟﺤﻤﺎﻳﺎﺕ</a>
     </div>
     <div class="admin-tag">
     
     <p class="erat">ﻣﺴﺘﺸﻔﻲ اﻟﺤﻤﺎﻳﺎﺕ 
ﻻاﺗﺼﺎﻝ ﺑﻴﻨﺎ ﻳﺮﺟﻲ اﻟﻌﻠﻢ اﻥ ﺳﺎﻋﺎﺕ اﻟﻌﻤﻞ      
ﻣﻦ اﻟﺤﺎﺩﻳﻪ ﻋﺸﺮ اﻟﻲ ﺛﺎﻧﻴﻪ ﻋﺸﺮ      
اﺛﻤﻤﻤﻤﻤﻤﻤﻤﻤﻤﻤﻤﻤﻤﻤﻤﻤﻤﻤﻤﻤﻤﻤﻤﻤﻤﻤﻤﻤﺦ     </p>
     <a href="single.html" class="hvr-shutter-in-horizontal more">Readmore<span> </span></a>
     </div>
   </div>
  
  </div>
  <div class="blog-post-grids">
   <div class="blog-post">
    <a href="single.html"><img src="/assets/images/b4.jpg" class="img-responsive" alt="  "/></a>
    <div class="text">
      <a href="single.html"> ﻣﺴﺘﺸﻔﻲ اﻟﺤﻤﺎﻳﺎﺕ</a>
     </div>
     <div class="admin-tag">
     
     <p class="erat">ﻣﺴﺘﺸﻔﻲ اﻟﺤﻤﺎﻳﺎﺕ 
ﻻاﺗﺼﺎﻝ ﺑﻴﻨﺎ ﻳﺮﺟﻲ اﻟﻌﻠﻢ اﻥ ﺳﺎﻋﺎﺕ اﻟﻌﻤﻞ      
ﻣﻦ اﻟﺤﺎﺩﻳﻪ ﻋﺸﺮ اﻟﻲ ﺛﺎﻧﻴﻪ ﻋﺸﺮ      
اﺛﻤﻤﻤﻤﻤﻤﻤﻤﻤﻤﻤﻤﻤﻤﻤﻤﻤﻤﻤﻤﻤﻤﻤﻤﻤﻤﻤﻤﻤﺦ     </p>
     <a href="single.html" class="hvr-shutter-in-horizontal more">Readmore<span> </span></a>
     </div>
   </div>
   
   <div class="clearfix"> </div>
  </div>
  <div class="clearfix"> </div>
 </div>
 <!--start-news-pagenate-->
    <div class="blog-pagenat">
     <ul>
      <li><a class="frist" href="#">Prev</a></li>
      <li><a href="#">1</a></li>
      <li><a href="#">2</a></li>
      <li><a href="#">3</a></li>
      <li><a href="#">4</a></li>
      <li><a href="#">5</a></li>
      <li><a href="#">6</a></li>
      <li><a class="last" href="#">Next</a></li>
     </ul>
    </div>
   <!--//End-news-pagenate-->
 </div> 




















<div class="blog-section">
 <div class="container"> 
   <h3 class="tittle  pull-right">اﻟﺪﻛﺘﻮﺭ اﻻﻋﻠﻲ ﺗﻘﻴﻤﺎ</h3>
   <div class="clearfix"> </div>
  <div class="blog-post-grids">
   <div class="blog-post">
     <a href="single.html"><img src="/assets/images/b2.jpg" class="img-responsive" alt="  "/></a>
     <div class="text">
      <a href="single.html"> ﻣﺴﺘﺸﻔﻲ اﻟﺤﻤﺎﻳﺎﺕ</a>
     </div>
     <div class="admin-tag">
     
     <p class="erat">ﻣﺴﺘﺸﻔﻲ اﻟﺤﻤﺎﻳﺎﺕ 
ﻻاﺗﺼﺎﻝ ﺑﻴﻨﺎ ﻳﺮﺟﻲ اﻟﻌﻠﻢ اﻥ ﺳﺎﻋﺎﺕ اﻟﻌﻤﻞ      
ﻣﻦ اﻟﺤﺎﺩﻳﻪ ﻋﺸﺮ اﻟﻲ ﺛﺎﻧﻴﻪ ﻋﺸﺮ      
اﺛﻤﻤﻤﻤﻤﻤﻤﻤﻤﻤﻤﻤﻤﻤﻤﻤﻤﻤﻤﻤﻤﻤﻤﻤﻤﻤﻤﻤﻤﺦ     </p>
     <a href="single.html" class="hvr-shutter-in-horizontal more">Readmore<span> </span></a>
     </div>
   </div>
  
  </div>
  <div class="blog-post-grids">
   <div class="blog-post">
    <a href="single.html"><img src="/assets/images/b3.jpg" class="img-responsive" alt="  "/></a>
    <div class="text">
      <a href="single.html"> ﻣﺴﺘﺸﻔﻲ اﻟﺤﻤﺎﻳﺎﺕ</a>
     </div>
     <div class="admin-tag">
     
     <p class="erat">ﻣﺴﺘﺸﻔﻲ اﻟﺤﻤﺎﻳﺎﺕ 
ﻻاﺗﺼﺎﻝ ﺑﻴﻨﺎ ﻳﺮﺟﻲ اﻟﻌﻠﻢ اﻥ ﺳﺎﻋﺎﺕ اﻟﻌﻤﻞ      
ﻣﻦ اﻟﺤﺎﺩﻳﻪ ﻋﺸﺮ اﻟﻲ ﺛﺎﻧﻴﻪ ﻋﺸﺮ      
اﺛﻤﻤﻤﻤﻤﻤﻤﻤﻤﻤﻤﻤﻤﻤﻤﻤﻤﻤﻤﻤﻤﻤﻤﻤﻤﻤﻤﻤﻤﺦ     </p>
     <a href="single.html" class="hvr-shutter-in-horizontal more">Readmore<span> </span></a>
     </div>
   </div>
  
  </div>
  <div class="blog-post-grids">
   <div class="blog-post">
    <a href="single.html"><img src="/assets/images/b4.jpg" class="img-responsive" alt="  "/></a>
    <div class="text">
      <a href="single.html"> ﻣﺴﺘﺸﻔﻲ اﻟﺤﻤﺎﻳﺎﺕ</a>
     </div>
     <div class="admin-tag">
     
     <p class="erat">ﻣﺴﺘﺸﻔﻲ اﻟﺤﻤﺎﻳﺎﺕ 
ﻻاﺗﺼﺎﻝ ﺑﻴﻨﺎ ﻳﺮﺟﻲ اﻟﻌﻠﻢ اﻥ ﺳﺎﻋﺎﺕ اﻟﻌﻤﻞ      
ﻣﻦ اﻟﺤﺎﺩﻳﻪ ﻋﺸﺮ اﻟﻲ ﺛﺎﻧﻴﻪ ﻋﺸﺮ      
اﺛﻤﻤﻤﻤﻤﻤﻤﻤﻤﻤﻤﻤﻤﻤﻤﻤﻤﻤﻤﻤﻤﻤﻤﻤﻤﻤﻤﻤﻤﺦ     </p>
     <a href="single.html" class="hvr-shutter-in-horizontal more">Readmore<span> </span></a>
     </div>
   </div>
   
   <div class="clearfix"> </div>
  </div>
  <div class="clearfix"> </div>
 </div>
 <!--start-news-pagenate-->
    <div class="blog-pagenat">
     <ul>
      <li><a class="frist" href="#">Prev</a></li>
      <li><a href="#">1</a></li>
      <li><a href="#">2</a></li>
      <li><a href="#">3</a></li>
      <li><a href="#">4</a></li>
      <li><a href="#">5</a></li>
      <li><a href="#">6</a></li>
      <li><a class="last" href="#">Next</a></li>
     </ul>
    </div>
   <!--//End-news-pagenate-->
 </div> 
















<div class="blog-section">
 <div class="container"> 
   <h3 class="tittle  pull-right">اﻟﻤﻌﺎﻣﻞ ﻭ اﻻﺷﺎﻋﺎﺕ </h3>
   <div class="clearfix"> </div>
  <div class="blog-post-grids">
   <div class="blog-post">
     <a href="single.html"><img src="/assets/images/b2.jpg" class="img-responsive" alt="  "/></a>
     <div class="text">
      <a href="single.html"> ﻣﺴﺘﺸﻔﻲ اﻟﺤﻤﺎﻳﺎﺕ</a>
     </div>
     <div class="admin-tag">
     
     <p class="erat">ﻣﺴﺘﺸﻔﻲ اﻟﺤﻤﺎﻳﺎﺕ 
ﻻاﺗﺼﺎﻝ ﺑﻴﻨﺎ ﻳﺮﺟﻲ اﻟﻌﻠﻢ اﻥ ﺳﺎﻋﺎﺕ اﻟﻌﻤﻞ      
ﻣﻦ اﻟﺤﺎﺩﻳﻪ ﻋﺸﺮ اﻟﻲ ﺛﺎﻧﻴﻪ ﻋﺸﺮ      
اﺛﻤﻤﻤﻤﻤﻤﻤﻤﻤﻤﻤﻤﻤﻤﻤﻤﻤﻤﻤﻤﻤﻤﻤﻤﻤﻤﻤﻤﻤﺦ     </p>
     <a href="single.html" class="hvr-shutter-in-horizontal more">Readmore<span> </span></a>
     </div>
   </div>
  
  </div>
  <div class="blog-post-grids">
   <div class="blog-post">
    <a href="single.html"><img src="/assets/images/b3.jpg" class="img-responsive" alt="  "/></a>
    <div class="text">
      <a href="single.html"> ﻣﺴﺘﺸﻔﻲ اﻟﺤﻤﺎﻳﺎﺕ</a>
     </div>
     <div class="admin-tag">
     
     <p class="erat">ﻣﺴﺘﺸﻔﻲ اﻟﺤﻤﺎﻳﺎﺕ 
ﻻاﺗﺼﺎﻝ ﺑﻴﻨﺎ ﻳﺮﺟﻲ اﻟﻌﻠﻢ اﻥ ﺳﺎﻋﺎﺕ اﻟﻌﻤﻞ      
ﻣﻦ اﻟﺤﺎﺩﻳﻪ ﻋﺸﺮ اﻟﻲ ﺛﺎﻧﻴﻪ ﻋﺸﺮ      
اﺛﻤﻤﻤﻤﻤﻤﻤﻤﻤﻤﻤﻤﻤﻤﻤﻤﻤﻤﻤﻤﻤﻤﻤﻤﻤﻤﻤﻤﻤﺦ     </p>
     <a href="single.html" class="hvr-shutter-in-horizontal more">Readmore<span> </span></a>
     </div>
   </div>
  
  </div>
  <div class="blog-post-grids">
   <div class="blog-post">
    <a href="single.html"><img src="/assets/images/b4.jpg" class="img-responsive" alt="  "/></a>
    <div class="text">
      <a href="single.html"> ﻣﺴﺘﺸﻔﻲ اﻟﺤﻤﺎﻳﺎﺕ</a>
     </div>
     <div class="admin-tag">
     
     <p class="erat">ﻣﺴﺘﺸﻔﻲ اﻟﺤﻤﺎﻳﺎﺕ 
ﻻاﺗﺼﺎﻝ ﺑﻴﻨﺎ ﻳﺮﺟﻲ اﻟﻌﻠﻢ اﻥ ﺳﺎﻋﺎﺕ اﻟﻌﻤﻞ      
ﻣﻦ اﻟﺤﺎﺩﻳﻪ ﻋﺸﺮ اﻟﻲ ﺛﺎﻧﻴﻪ ﻋﺸﺮ      
اﺛﻤﻤﻤﻤﻤﻤﻤﻤﻤﻤﻤﻤﻤﻤﻤﻤﻤﻤﻤﻤﻤﻤﻤﻤﻤﻤﻤﻤﻤﺦ     </p>
     <a href="single.html" class="hvr-shutter-in-horizontal more">Readmore<span> </span></a>
     </div>
   </div>
   
   <div class="clearfix"> </div>
  </div>
  <div class="clearfix"> </div>
 </div>
 <!--start-news-pagenate-->
    <div class="blog-pagenat">
     <ul>
      <li><a class="frist" href="#">Prev</a></li>
      <li><a href="#">1</a></li>
      <li><a href="#">2</a></li>
      <li><a href="#">3</a></li>
      <li><a href="#">4</a></li>
      <li><a href="#">5</a></li>
      <li><a href="#">6</a></li>
      <li><a class="last" href="#">Next</a></li>
     </ul>
    </div>
   <!--//End-news-pagenate-->
 </div> 









<!-- footer-->
 <div class="footer">
  <div class="container">
  
     <div class="footer-text">
      <p>© ITI Graduation Project | Design by ITI</a> </p>
     </div>
    </div>
   </div>
   <!-- footer-->
    <!--start-smoth-scrolling-->
      <script type="text/javascript">
         $(document).ready(function() {
          /*
          var defaults = {
             containerID: 'toTop', // fading element id
           containerHoverID: 'toTopHover', // fading element hover id
           scrollSpeed: 1200,
           easingType: 'linear' 
           };
          */
          
          $().UItoTop({ easingType: 'easeOutQuart' });
          
         });
        </script>
  <a href="#home" id="toTop" class="scroll" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
<!--JS-->
<script type="text/javascript" src="/assets/js/bootstrap-3.1.1.min.js"></script>

<!--//JS-->

</body>
</html>
@endsection
