<!--sidebar start-->
<aside style="float: right;">
    <div id="sidebar"  class="nav-collapse hidden-md hidden-sm">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu">                
            <li class="active">
                <a class="" href="index.html">
                    <i class="icon_house_alt"></i>
                    <span>الصفحة الرئيسية</span>
                </a>
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
                    <li><a class="" href="form_component.html">عرض الكل</a></li>                          
                    <li><a class="" href="form_validation.html">إضافة طبيب</a></li>
                </ul>
            </li>  
            <li class="sub-menu">
                <a href="javascript:;" class="">
                    <i class="icon_document_alt"></i>
                    <span>المستشفيات</span>
                    <span class="menu-arrow arrow_carrot-right"></span>
                </a>
                <ul class="sub">
                    <li><a class="" href="form_component.html">عرض الكل</a></li>                          
                    <li><a class="" href="form_validation.html">إضافة مستشفى</a></li>
                </ul>
            </li>  
            <li class="sub-menu">
                <a href="javascript:;" class="">
                    <i class="icon_document_alt"></i>
                    <span>المعامل</span>
                    <span class="menu-arrow arrow_carrot-right"></span>
                </a>
                <ul class="sub">
                    <li><a class="" href="form_component.html">عرض الكل</a></li>                          
                    <li><a class="" href="form_validation.html">إضافة معمل</a></li>
                </ul>
            </li>  
            <li class="sub-menu">
                <a href="javascript:;" class="">
                    <i class="icon_document_alt"></i>
                    <span>التحويلات</span>
                    <span class="menu-arrow arrow_carrot-right"></span>
                </a>
                <ul class="sub">
                    <li><a class="" href="form_component.html">عرض الكل</a></li>                          
                    <li><a class="" href="form_validation.html">إضافة تحويلة</a></li>
                </ul>
            </li>  
        </ul>
        <!-- sidebar menu end-->
    </div>
</aside>
<!--sidebar end-->