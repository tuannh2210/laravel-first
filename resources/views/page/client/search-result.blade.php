@extends('layout.client')
{{-- Crumb --}}
@section('crumb')
    <div class="td-crumb-container">
        <div class="entry-crumbs" itemscope itemtype="http://schema.org/BreadcrumbList">
            <span class="td-bred-first">
                <a href="{{route('homepage')}} ">Home</a>
            </span> 
            <i class="td-icon-right td-bread-sep"></i> 
            <span>
                Search
            </span> 
        </div>
    </div>
@endsection

@section('content')
    
    <div class="td-pb-span8 td-main-content">
   <div class="td-ss-main-content">
      <div class="td-page-header">
         <h1 class="entry-title td-page-title">
            <span class="td-search-query">{{$search}} </span> - <span> search results</span>
         </h1>
         <div class="search-page-search-wrap">
            <form method="get" class="td-search-form-widget" action="{{route('client.search')}} ">
               <div role="search">
                  <input class="td-widget-search-input" type="text" value="{{$search}}" name="s"  >
                  <input class="wpb_button wpb_btn-inverse btn" type="submit" id="searchsubmit" value="Search">
               </div>
            </form>
            <div class="td_search_subtitle">
              Nếu bạn không hài lòng với kết quả, vui lòng thực hiện tìm kiếm khác    
            </div>
         </div>
      </div>
      @foreach($posts as $p)

        @php
            $cate = $p->getCate()->slug;
            $post = $p->slug;
        @endphp

      <div class="td_module_16 td_module_wrap td-animation-stack">
         <div class="td-module-thumb"><a href="{{route('post.detail',[$cate,$p])}} " rel="bookmark" title="Bí mật giúp bạn thành công khi phỏng vấn (P1)"><img width="150" height="150" class="entry-thumb" src="https://topdev.vn/blog/wp-content/uploads/2018/03/4-150x150.png" alt="" title="{{$p->title}} "></a></div>
         <div class="item-details">
            <h3 class="entry-title td-module-title"><a href="https://topdev.vn/blog/ban-phai-biet-nhung-dieu-nay-neu-muon-thanh-cong-trong-buoi-phong-van-ki-thuat-p1/" rel="bookmark" title="Bí mật giúp bạn thành công khi phỏng vấn (P1)"> {{str_limit($p->title,'70','...')}}  </a></h3>
            <div class="td-module-meta-info">
                <span class="td-post-date" style=" font-weight: bold;">
                    <a href="{{$cate}}">{{$p->getCate()->name}}</a>
                </span>
                    --
                <span class="td-post-date">
                    <time class="entry-date updated td-module-date" datetime="2018-03-04T07:45:11+00:00">
                        March 4, 2018
                    </time>
                </span>                                    
            </div>
            <div class="td-excerpt">
                {{str_limit($p->short_dess,'150','...')}}               
            </div>
         </div>
      </div>
    @endforeach
      <div class="page-nav  td-pb-padding-side">
            <div class="text-left">
            {{ $posts->links() }}
            </div>
        </div>
   </div>
</div>

@endsection
