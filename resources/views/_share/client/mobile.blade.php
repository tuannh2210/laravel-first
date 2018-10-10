<div class="td-menu-background"></div>
<div id="td-mobile-nav">
    <div class="td-mobile-container">
      <!-- mobile menu top section -->
        <div class="td-menu-socials-wrap">
            <!-- socials -->
            <div class="td-menu-socials">

              <span class="td-social-icon-wrap">
                <a target="_blank" href="https://www.facebook.com/topdevvietnam/" title="Facebook">
                  <i class="td-icon-font td-icon-facebook"></i>
                </a>
              </span>

            </div>
              <!-- close button -->
            <div class="td-mobile-close">
                <a href="#">
                    <i class="td-icon-close-mobile"></i>
                </a>
            </div>
        </div>

        <!-- login section -->
        
        <!-- menu section -->
        <div class="td-mobile-content">
            <div class="menu-main-menu-container">
                <ul id="menu-main-menu" class="td-mobile-main-menu">
                    @foreach($cateMenu as $menu)
                        <li id="menu-item-1085" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-first menu-item-1085">
                            <a href="{{route('cate.detail',['cateSlug' =>$menu->slug ])}}"> 
                                {{str_limit($menu->name,'10','')}}</a>
                        </li>
                    @endforeach
                </ul>
            </div>       
        </div>
    </div>

    <!-- register/login section -->
</div>
<div class="td-search-background"></div>
<div class="td-search-wrap-mob">
    <div class="td-drop-down-search" aria-labelledby="td-header-search-button">
        <form method="get" class="td-search-form" action="https://topdev.vn/blog/">
         <!-- close button -->
            <div class="td-search-close">
                <a href="#">
                    <i class="td-icon-close-mobile"></i>
                </a>
            </div>
            <div role="search" class="td-search-input">
                <span>Search</span>
                <input id="td-header-search-mob" type="text" value="" name="s" autocomplete="off" />
            </div>
        </form>
        <div id="td-aj-search-mob"></div>
    </div>
</div>