@include('master')

   <div class="col-md-9">
        
    <div class="about">
              <div style="height: 100px"></div> 
    <div style="margin-right: 0px" >
        <h3 style="color: #3D7A33 ;alignment-adjust: left">تجديدات التامين الصحي و الاشتراك السنوي </h3>
        <div style="height: 100px"></div> 
    </div>
 
         <h5 style="color:#B32B2B" class="fa-stethoscope fa-2x">يمكنك الان تجديد اشتراكات </h5>
         <p style="font-size: 25px" class="animate slideInDown"> اصبج الاشتراك السنوي اكثر سهوله   </p>
                <p style="font-size: 25px" class="animate slideInDown"> يمكنك الدفع عن طريق فودافون كاش </p>
                <p style="font-size: 25px" class="animate slideInDown"> 010000000000</p>
                <p style="font-size: 25px" class="animate slideInDown"> و يمكنك الدفع عن طريق موبي كاش </p>
                <p style="font-size: 25px" class="animate slideInDown"> 012000000000</p>
<div style="height: 100px"></div>
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
         <div style="height:200px"></div>
            </div>
</div>




<div id="footer" class="background-grey" style="background-color: #555555">
    <div class="container">
        <div class="row">
       
   
       
    </div>
</div>