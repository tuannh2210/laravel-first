<div class="page-sidebar navbar-collapse collapse">
    <ul class="page-sidebar-menu  page-header-fixed " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200" style="padding-top: 20px">
        <li class="sidebar-toggler-wrapper hide">
            <div class="sidebar-toggler">
                <span></span>
            </div>
        </li>
        <li class="nav-item start active open">
            <a href="javascript:;" class="nav-link nav-toggle">
                <i class="icon-home"></i>
                <span class="title">Dashboard</span>
                <span class="selected"></span>
            </a>
        </li>
        <li class="nav-item start open">
            <a href="#" class="nav-link nav-toggle">
                <i class="icon-bulb"></i>
                <span class="title">Danh mục</span>
                <span class="selected"></span>
                <span class="arrow open"></span>
            </a>
            <ul class="sub-menu">
                <li class="nav-item start active open">
                    <a href="{{route('cate.index')}} " class="nav-link ">
                        <i class="icon-bar-chart"></i>
                        <span class="title">Danh sách  danh mục</span>
                    </a>
                </li>
                <li class="nav-item start ">
                    <a href="{{route('cate.add')}}" class="nav-link ">
                        <i class="icon-graph"></i>
                        <span class="title">Thêm danh mục</span>
                    </a>
                </li>
            </ul>
        </li>
        <li class="nav-item start open">
            <a href="#" class="nav-link nav-toggle">
                <i class="icon-book-open"></i>
                <span class="title">Bài viết</span>
                <span class="selected"></span>
                <span class="arrow open"></span>
            </a>
            <ul class="sub-menu">
                <li class="nav-item start active open">
                    <a href="{{route('post.index')}} " class="nav-link ">
                        <i class="icon-list"></i>
                        <span class="title">Danh sách bài viết</span>
                    </a>
                </li>
                <li class="nav-item start ">
                    <a href="{{route('post.add')}}" class="nav-link ">
                        <i class="icon-magnifier-add"></i>
                        <span class="title">Thêm bài viết</span>
                    </a>
                </li>
                
            </ul>
        </li>

    </ul>
</li>
</ul>
<!-- END SIDEBAR MENU -->
<!-- END SIDEBAR MENU -->
</div>