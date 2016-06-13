@extends('layouts.app')

@section('content')

<div class="container background-white bottom-border" >

       <!-- Begin Sidebar Menu -->
       <div class="col-md-3" style="margin-right: 0px">
                            <ul class="list-group sidebar-nav" id="sidebar-nav">
                                <!-- Typography -->
                                <li style="color: #3D7A33"> 
                                    <a class=" active"  href="{{ url('/engineer') }}/{{ Auth::user()->id }}">المعلومات الشخصيه</a>
                                
                                </li>
                                <!-- End Typography -->
                                <!-- Components -->
                                <li >
                                    <a class="accordion-toggle" href="{{ url('/fin') }}/{{ Auth::user()->id }}" >كشف حساب </a>
                                 
                                </li>
                                <!-- End Components -->
                                <!-- Icons -->
                                <li >
                                    <a class="accordion-toggle"  href="{{ url('/complain') }}/{{ Auth::user()->id }}">الشكاوي </a>
                                    
                                </li>
                                <!-- End Icons -->
                                <!-- Testimonials -->
                                <li >
                                    <a class="accordion-toggle" href="{{ url('/task') }}/{{ Auth::user()->id }}">مواعيدك </a>
                                </li>
                                <!-- End Testimonials -->
                                <!-- Accordion and Tabs -->
                                 @if (Auth::user()->role === "مهندس")
                                <li  >
                                    <a  class="accordion-toggle"  href="{{ url('/member') }}/{{ Auth::user()->id }}">الاشتراك في التامين</a>
                                </li>
                                <!-- End Accordion and Tabs -->
                                <!-- Buttons -->
                                <li >
                                    <a  class="accordion-toggle" href="{{ url('/rin') }}/{{ Auth::user()->id }}">التجديدات</a>
                                </li>
                                  @endif
                            
                                <!-- End Grid System -->
                            </ul>
                        </div>
                        <!-- End Sidebar Menu -->



    @endsection
<!--    #313131-->
  
