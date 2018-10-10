<div class="td-pb-span4 td-main-sidebar" role="complementary">
    <div class="td-ss-main-sidebar">
        <aside class="widget widget_search">
            <form method="get" class="td-search-form-widget" action="{{route('client.search')}} ">
            <div role="search">
                <input class="td-widget-search-input" type="text"  name="s" id="s" />
                <input class="wpb_button wpb_btn-inverse btn" type="submit" id="searchsubmit" value="Search" />
            </div>
            </form>
        </aside>
        <aside class="widget_text widget widget_custom_html">
            <div class="textwidget custom-html-widget">
                <div class="ml-rcm" rc-type="content" rc-layout="news" rc-title="Có thể bạn sẽ thích" rc-li="10" rc-for="user">
                </div>
            </div>
        </aside>
        <div class="td_block_wrap td_block_11 td_block_widget td_uid_4_5a96c425495bf_rand td-pb-border-top"  data-td-block-uid="td_uid_4_5a96c425495bf" >
            <div class="td-block-title-wrap">
                <h4 class="block-title">
                    <span>Featured</span>
                </h4>
            </div>
            <div id=td_uid_4_5a96c425495bf class="td_block_inner">

                <div class="td-block-span12">
                    @foreach($featured as $ft)

                    @php
                        $cate = $ft->getCate();
                        $cateSlug = $cate->slug.'/'.$ft->slug;

                    @endphp

                    <div class="td_module_10 td_module_wrap td-animation-stack">
                        <div class="td-module-thumb">
                            <a href="{{route('cate.detail',[$cateSlug])}} " rel="bookmark" title="Lợi ích của code sạch và các mẹo đơn giản để làm cho code trở nên sạch hơn (Phần 2)">
                                <img width="218" height="150" class="entry-thumb" src="{{asset('theme/client/uploads/2018/02/1_Vc7jxYzWk8V5vA3uaDKYzA-218x150.jpg')}}" srcset="https://topdev.vn/blog/wp-content/uploads/2018/02/1_Vc7jxYzWk8V5vA3uaDKYzA-218x150.jpeg 218w, https://topdev.vn/blog/wp-content/uploads/2018/02/1_Vc7jxYzWk8V5vA3uaDKYzA-100x70.jpeg 100w" sizes="(max-width: 218px) 100vw, 218px" alt="" title="Lợi ích của code sạch và các mẹo đơn giản để làm cho code trở nên sạch hơn (Phần 2)"/>
                            </a>
                        </div>
                        <div class="item-details">
                            <h3 class="entry-title td-module-title">
                                <a href="{{route('cate.detail',[$cateSlug])}}" rel="bookmark" title="{{$ft->title}} ">{{{str_limit($ft->title,50,'...')}}} </a>
                            </h3>
                            <div class="td-module-meta-info">
                                <span class="td-post-date">
                                <time class="entry-date updated td-module-date" datetime="2018-02-28T10:00:01+00:00" >February 28, 2018</time>
                                </span>                                        
                            </div>
                            <div class="td-excerpt">
                              {{str_limit($ft->short_dess,100,'...')}}            
                            </div>
                        </div>
                    </div>
                    @endforeach


                </div> <!-- ./td-block-span12 -->


            </div>
        </div> <!-- ./block -->
        <div class="td_block_wrap td_block_13 td_block_widget td_uid_5_5a96c42551a74_rand td-pb-border-top"  data-td-block-uid="td_uid_5_5a96c42551a74" >

            <div class="td-block-title-wrap">
                <h4 class="block-title">
                    <span>Đừng bỏ lỡ</span>
                </h4>
            </div>
            <div id=td_uid_5_5a96c42551a74 class="td_block_inner">
                @foreach($manyview as $view)
                <div class="td_module_mx3 td_module_wrap td-animation-stack">
                    <div class="td-module-thumb">
                        <a href="{{route('cate.detail',[$cateSlug])}} " rel="bookmark" title="{{$view->title}}">
                            <img width="324" height="235" class="entry-thumb" src="{{asset('theme/client/uploads/2018/02/1_YunI3ChUVMlpmFzo75FczQ-324x235.png')}}" alt="" title="{{$view->title}} "/>
                        </a>
                    </div>
                    <div class="td-module-meta-info">
                        <h3 class="entry-title td-module-title">
                            <a href="{{route('cate.detail',[$cateSlug])}}" rel="bookmark" title="{{$view->title}}">
                                {{str_limit($view->title,50,'...')}} </a>
                        </h3>                                                
                        <span class="td-post-date">
                            <time class="entry-date updated td-module-date" datetime="2018-02-07T16:00:04+00:00" >February 7, 2018</time>
                        </span>                            
                    </div>

                </div>
                @endforeach
            </div>
        </div> <!-- ./block -->                            
    </div>
</div>