@include('master')

<div class="container content" >
    <div class="container">
        
    <div class="about">
        <div class="container">
            <h3 class="tittle  pull-right">تجديد الاشتراك </h3>
            <div class="clearfix"></div>
            <div class="about-top">
                <div class="col-md-7 about-top-right">
                    <h4> نسعي لخدمتك و عدم ضايع وقتك فان وقتك يهمنا  </h4>
                    <p>اصبح من حقك ان تجد الاشتراك السنوي لتامين الصحي عن طريق الانترنت دون ان تضيع وقتك </p>
                    <p>والدفع يكون عن طريق احد خدمتنا   </p>
                    <p> الدفع عن طرق موبي كاش علي رقم  </p>
                    <p> 01200000000</p>
                    <p> الدفع عن طرق  فودفوان كاش علي رقم  </p>
                    <p> 0101000000000</p>

                </div>
                <div class="col-md-5 about-top-left">
                    <img src="/assets/images/complaint.jpg" class="img-responsive" alt="" style="width: 400px; height:400px"/>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
        <p style="color:#000">{{$user_1['0']->name}}</p>
        
        
        @if (count($number_status_no) > 0)
            <div class="panel panel-default">
                <div class="panel-heading">
                    الاقارب الغير مفعل لهم الاشتراك في الخدمه 
                </div>

                <div class="panel-body">
                    <table class="table table-striped task-table">
                        <thead>
                        <th><p style="color:#000">الاسماء</p></th>
                        <th>&nbsp;</th>
                        </thead>
                        <tbody>
                            @foreach ($number_status_no as $member)
                            <tr>
                                <td>
                                    <p style="color:#000">{{$member->name}}</p>
                                </td>
                               <td>
                                    <p style="color:#000">غير مفعل </p>
                                </td>
                                
                            </tr>
                            
                              @endforeach
                        </tbody>
                    </table>
                </div>
                @endif
                
            </div>
               <div style="height:100px"></div> 
                
                      
        @if (count($memb) > 0)
            <div class="panel panel-default">
                <div class="panel-heading">
                   القارب التي تم التسجيل لهم
                </div>

                <div class="panel-body">
                    <table class="table table-striped task-table">
                        <thead>
                        <th><p style="color:#000">الاسماء</p></th>
                      <th><p style="color:#000">الرقم البطاقه الصحيه</p></th>
                      <th><p style="color:#000">تاريخ الاشتراك لهم </p></th>
                        <th>&nbsp;</th>
                        </thead>
                        <tbody>
                            @foreach ($memb as $mem)
                            <tr>
                                <td>
                                    <p style="color:#000">{{$mem->name}}</p>
                                </td>
                                 <td>
                                    <p style="color:#000">{{$mem->health_id}}</p>
                                </td>
                                
                                 <td>
                                    <p style="color:#000">{{$mem->year}}</p>
                                </td>
                                
                            </tr>
                            
                              @endforeach
                        </tbody>
                    </table>
                </div>
                @endif           
                            
    </div>
</div>
        
        
        
    </div>
</div>
<div style="height:200px"></div>



<div class="footer">
    <div class="container">

        <div class="footer-text">
            <p>© ITI Graduation Project | Design by ITI</a> </p>
        </div>
    </div>
</div>