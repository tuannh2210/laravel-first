@extends('layout.client')
@section('title','Trang chủ')
@section('content')
    <div class="wpb_column vc_column_container td-pb-span8">
        <div class="vc_column-inner ">
            <div class="wpb_wrapper">
                <div class="td_block_wrap td_block_4 td_uid_3_5a96c4185589e_rand td_with_ajax_pagination td-pb-border-top"  data-td-block-uid="td_uid_3_5a96c4185589e" >
                    <div id=td_uid_3_5a96c4185589e class="td_block_inner">
                        <div class="td-block-row">
                            @foreach($posts as $p)
                                @php
                                    $cate = $p->getCate();
                                    $cateSlug = $cate->slug.'/'.$p->slug;

                                @endphp 

                            <div class="td-block-span6">
                                <div class="td_module_2 td_module_wrap td-animation-stack">
                                    <div class="td-module-image">
                                        <div class="td-module-thumb">
                                            <a href="{{route('cate.detail',[$cateSlug])}}"  title="{{$p->title}}">
                                                <img width="324" height="160" class="entry-thumb"
                                                 src="wp-content/uploads/2017/11/javascript8-324x160.jpg" srcset="https://topdev.vn/blog/wp-content/uploads/2017/11/javascript8-324x160.jpg 324w, https://topdev.vn/blog/wp-content/uploads/2017/11/javascript8-533x261.jpg 533w" sizes="(max-width: 324px) 100vw, 324px" alt="" title="{{$p->title}}"/>
                                            </a>
                                        </div>
                                    </div>
                                    <h3 class="entry-title td-module-title">
                                        <a href="{{route('cate.detail',[$cateSlug])}} " rel="bookmark" title="{{$p->title}}">
                                             {{str_limit($p->title,50,'...')}}
                                        </a>
                                    </h3>
                                    <div class="td-module-meta-info">
                                        <span class="td-post-date">
                                            <time class="entry-date updated td-module-date" datetime="2018-02-22T17:47:13+00:00" >February 22, 2018</time>
                                        </span>                            
                                 </div>
                                 <div class="td-excerpt">
                                    {!!str_limit($p->short_dess,140,'...')!!}           
                                 </div>
                              </div>
                            </div>
                           <!-- ./td-block-span6 -->
                        @endforeach

                        </div>
                        {{-- @endforeach --}}
                    </div>
                </div>
            </div>
        </div>
         <div class="page-nav  td-pb-padding-side">
            <div class="text-left">
            {{ $posts->links() }}
            </div>
        </div>
    </div>
    
@endsection
