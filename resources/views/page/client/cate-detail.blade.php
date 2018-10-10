@extends('layout.client')
@section('title',"Tin tức về :  ".$cate->name)
@section('content')
    <div class="td-pb-span8 td-main-content">
        <div class="td-ss-main-content">
            @foreach($posts  as $post)
                 @php   
                     $cateSlug = $cate->slug;
                     // $cate = 
                     $slug = $post->slug;

                 @endphp
            <div class="td_module_10 td_module_wrap td-animation-stack">
                <div class="td-module-thumb">
                    <a href="{{route('post.detail',[$cateSlug,$slug])}} " rel="bookmark" title="{{$post->title}}">
                        <img width="218" height="150" class="entry-thumb" src="../../wp-content/uploads/2018/02/photo1517908933751-1517908933752661577879-218x150.jpg" srcset="https://topdev.vn/blog/wp-content/uploads/2018/02/photo1517908933751-1517908933752661577879-218x150.jpg 218w, https://topdev.vn/blog/wp-content/uploads/2018/02/photo1517908933751-1517908933752661577879-100x70.jpg 100w" sizes="(max-width: 218px) 100vw, 218px" alt="" title="{{$post->title}}">
                    </a>
                </div>
                <div class="item-details">
                    <h3 class="entry-title td-module-title">
                        <a href="{{route('post.detail',[$cateSlug,$slug])}}  " rel="bookmark" title="">
                            {{str_limit($post->short_dess,80,'...')}} </a>
                    </h3>
                    <div class="td-module-meta-info">
                        <span class="td-post-date"><time class="entry-date updated td-module-date" datetime="{{$post->publish_date}}">{{$post->publish_date}} </time></span>                                        
                    </div>
                    <div class="td-excerpt">
                       {{str_limit($post->short_dess,120,'...')}}              
                    </div>
                </div>
            </div>
        @endforeach
        </div>
        <div class="page-nav  td-pb-padding-side">
            <div class="text-left">
            {{ $posts->links() }}
            </div>
        </div>
    </div>

@endsection
