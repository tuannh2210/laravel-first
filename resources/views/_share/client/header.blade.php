<div class="td-header-wrap td-header-style-7">
    <div class="td-header-top-menu-full">
        <div class="td-container td-header-row td-header-top-menu">

            <div class="top-bar-style-1">

                <div class="td-header-sp-top-menu">
                    
                </div>
            </div>
        </div>
    </div>

    <div class="td-header-menu-wrap-full">
        <div class="td-header-menu-wrap td-header-gradient">
            <div class="td-container td-header-row td-header-main-menu">
                <div class="td-header-sp-logo">
                    <a class="td-main-logo" href=" {{route('homepage')}}">
                        <img class="td-retina-data"  src="{{asset('theme/client/uploads/2017/01/logotopdev.png')}}" alt=""/>
                        {{-- <h3 class="td-visual">TopDev</h3> --}}
                    </a>
                </div>
                <div id="td-header-menu" role="navigation">
                    <div id="td-top-mobile-toggle">
                        <a href="#">
                            <i class="td-icon-font td-icon-mobile"></i>
                        </a>
                    </div>
                    <div class="td-main-menu-logo td-logo-in-header">
                        <a class="td-mobile-logo td-sticky-disable" href="../index.html">
                            <img class="td-retina-data" data-retina="https://blog.topdev.vn/wp-content/uploads/2017/01/logotopdev.png" src="{{asset('theme/client/uploads/2017/01/logotopdev.png')}}" alt=""/>
                        </a>
                        <a class="td-header-logo td-sticky-disable" href="../index.html">
                            <img class="td-retina-data" data-retina="https://blog.topdev.vn/wp-content/uploads/2017/01/logotopdev.png" src="{{asset('theme/client/uploads/2017/01/logotopdev.png')}}" alt=""/>
                        </a>
                    </div>
                    <div class="menu-main-menu-container">
                        <ul id="menu-main-menu-1" class="sf-menu">
                            @foreach($cateMenu as $menu)
                                <li id="menu-item-12" class="menu-item menu-item-type-custom menu-item-object-custom td-menu-item td-normal-menu menu-item-12">
                                    <a href="{{route('cate.detail',['cateSlug' =>$menu->slug ])}}"> {{str_limit($menu->name,'10','')}}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>

                <div class="td-search-wrapper">
                    <div id="td-top-search">
                    <!-- Search -->
                        <div class="header-search-wrap">
                            <div class="dropdown header-search">
                                <a id="td-header-search-button" href="#" role="button" class="dropdown-toggle " data-toggle="dropdown">
                                    <i class="td-icon-search"></i>
                                </a>
                                <a id="td-header-search-button-mob" href="#" role="button" class="dropdown-toggle " data-toggle="dropdown">
                                    <i class="td-icon-search"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="header-search-wrap">
                    <div class="dropdown header-search">
                        <div class="td-drop-down-search" aria-labelledby="td-header-search-button">
                            <form method="get" class="td-search-form" action="{{route('client.search')}} ">
                                <div role="search" class="td-head-form-search-wrap">
                                    <input id="td-header-search" type="text" name="s" autocomplete="off"  />
                                    <input class="wpb_button wpb_btn-inverse btn" type="submit" id="td-header-search-top" value="Search" />
                                </div>
                            </form>
                            <div id="td-aj-search"></div>
                        </div>
                    </div>
                </div>          
            </div>
        </div>
    </div>

    <div class="td-banner-wrap-full">
        <div class="td-container-header td-header-row td-header-header">
            <div class="td-header-sp-recs">
                <div class="td-header-rec-wrap"></div>          
            </div>
        </div>
    </div>

</div>