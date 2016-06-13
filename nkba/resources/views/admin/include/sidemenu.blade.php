<!--sidebar start-->
<aside style="float: right;">
    <div id="sidebar"  class="nav-collapse hidden-md hidden-sm">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" style="backgroung-color: #F3F3F3;">                
            <li class="active" style="backgroung-color: #F3F3F3;">
                <a class="" href="/admin" style="color: #F3F3F3;">
                    <i class="icon_house_alt"></i>
                    <span style="color: #F3F3F3;">الصفحة الرئيسية</span>
                </a>
            </li>
            <li class="sub-menu">
                <a href="javascript:;" class="">
                    <i class="icon_document_alt"></i>
                    <span>المستخدمين</span>
                    <span class="menu-arrow arrow_carrot-right"></span>
                </a>
                <ul class="sub">
                    <li>{{ link_to_route('admin-user.index', 'عرض الكل') }}</li>  
                    <li>{{ link_to_route('admin-user.create', 'إضافة مستخدم') }}</li>
                </ul>
            </li> 
            <li class="sub-menu">
                <a href="javascript:;" class="">
                    <i class="icon_document_alt"></i>
                    <span>المهندسين</span>
                    <span class="menu-arrow arrow_carrot-right"></span>
                </a>
                <ul class="sub">
                    <li>{{ link_to_route('admin-engineer.index', 'عرض الكل') }}</li>  
                    <li>{{ link_to_route('admin-engineer.create', 'إضافة مهندس') }}</li>
                </ul>
            </li> 
            <li class="sub-menu">
                <a href="javascript:;" class="">
                    <i class="icon_document_alt"></i>
                    <span>الأقارب</span>
                    <span class="menu-arrow arrow_carrot-right"></span>
                </a>
                <ul class="sub">
                    <li>{{ link_to_route('admin-relative.index', 'عرض الكل') }}</li>                          
                    <li>{{ link_to_route('admin-relative.create', 'إضافة قريب') }}</li>
                </ul>
            </li>  
            <li class="sub-menu">
                <a href="javascript:;" class="">
                    <i class="icon_document_alt"></i>
                    <span>رصيد المهندس</span>
                    <span class="menu-arrow arrow_carrot-right"></span>
                </a>
                <ul class="sub">
                    <li>{{ link_to_route('admin-limit.index', 'عرض الكل') }}</li>                          
                    <li>{{ link_to_route('admin-limit.create', 'إضافة رصيد') }}</li>
                </ul>
            </li>        
            <li class="sub-menu">
                <a href="javascript:;" class="">
                    <i class="icon_document_alt"></i>
                    <span>الأطباء</span>
                    <span class="menu-arrow arrow_carrot-right"></span>
                </a>
                <ul class="sub">
                    <li>{{ link_to_route('admin-doctor.index', 'عرض الكل') }}</li>                          
                    <li>{{ link_to_route('admin-doctor.create', 'إضافة طبيب') }}</li>
                </ul>
            </li>  
            <li class="sub-menu">
                <a href="javascript:;" class="">
                    <i class="icon_document_alt"></i>
                    <span>المستشفيات</span>
                    <span class="menu-arrow arrow_carrot-right"></span>
                </a>
                <ul class="sub">
                    <li>{{ link_to_route('admin-hospital.index', 'عرض الكل') }}</li>                          
                    <li>{{ link_to_route('admin-hospital.create', 'إضافة مستشفى') }}</li>
                </ul>
            </li>  
            <li class="sub-menu">
                <a href="javascript:;" class="">
                    <i class="icon_document_alt"></i>
                    <span>المعامل</span>
                    <span class="menu-arrow arrow_carrot-right"></span>
                </a>
                <ul class="sub">
                    <li>{{ link_to_route('admin-lab.index', 'عرض الكل') }}</li>                          
                    <li>{{ link_to_route('admin-lab.create', 'إضافة معمل') }}</li>
                </ul>
            </li>  
            <li class="sub-menu">
                <a href="javascript:;" class="">
                    <i class="icon_document_alt"></i>
                    <span>الأشعة والتحاليل</span>
                    <span class="menu-arrow arrow_carrot-right"></span>
                </a>
                <ul class="sub">
                    <li>{{ link_to_route('admin-radio.index', 'عرض الكل') }}</li>                          
                    <li>{{ link_to_route('admin-radio.create', 'إضافة الأشعة او تحليل') }}</li>
                </ul>
            </li>  
        </ul>
        <!-- sidebar menu end-->
    </div>
</aside>
<!--sidebar end-->