<div class="td-category-header">
   <div class="td-container">
       <div class="td-pb-row">
           <div class="td-pb-span12">
               <div class="td-crumb-container"><div class="entry-crumbs" itemscope="" itemtype="http://schema.org/BreadcrumbList"><span class="td-bred-first"><a href="https://topdev.vn/blog/">Home</a></span> <i class="td-icon-right td-bread-sep td-bred-no-url-last"></i> <span class="td-bred-no-url-last">{{$cate->name}} </span></div></div>

                   <h1 class="entry-title td-page-title">{{$cate->name}}</h1>
                   
           </div>
       </div>
       {{-- <div class="td-category-pulldown-filter td-wrapper-pulldown-filter"><div class="td-pulldown-filter-display-option"><div class="td-subcat-more">Latest <i class="td-icon-menu-down"></i></div><ul class="td-pulldown-filter-list"><li class="td-pulldown-filter-item"><a class="td-pulldown-category-filter-link" id="td_uid_3_5aa1f62799f44" data-td_block_id="td_uid_2_5aa1f62799ef4" href="https://topdev.vn/blog/category/ask-me-anything/">Latest</a></li><li class="td-pulldown-filter-item"><a class="td-pulldown-category-filter-link" id="td_uid_4_5aa1f62799f8e" data-td_block_id="td_uid_2_5aa1f62799ef4" href="https://topdev.vn/blog/category/ask-me-anything/?filter_by=featured">Featured posts</a></li><li class="td-pulldown-filter-item"><a class="td-pulldown-category-filter-link" id="td_uid_5_5aa1f62799fdd" data-td_block_id="td_uid_2_5aa1f62799ef4" href="https://topdev.vn/blog/category/ask-me-anything/?filter_by=popular">Most popular</a></li><li class="td-pulldown-filter-item"><a class="td-pulldown-category-filter-link" id="td_uid_6_5aa1f6279a029" data-td_block_id="td_uid_2_5aa1f62799ef4" href="https://topdev.vn/blog/category/ask-me-anything/?filter_by=popular7">7 days popular</a></li><li class="td-pulldown-filter-item"><a class="td-pulldown-category-filter-link" id="td_uid_7_5aa1f6279a06e" data-td_block_id="td_uid_2_5aa1f62799ef4" href="https://topdev.vn/blog/category/ask-me-anything/?filter_by=review_high">By review score</a></li><li class="td-pulldown-filter-item"><a class="td-pulldown-category-filter-link" id="td_uid_8_5aa1f6279a089" data-td_block_id="td_uid_2_5aa1f62799ef4" href="https://topdev.vn/blog/category/ask-me-anything/?filter_by=random_posts">Random</a></li></ul></div></div> --}}   
</div>

</div>
<div class="td-category-grid">
   <div class="td-container">
      <div class="td-pb-row">
         <div class="td-pb-span12">
            <div class="td_block_wrap td_block_big_grid_3 td_uid_9_5a96c42102dbf_rand td-grid-style-1 td-hover-1 td-pb-border-top" data-td-block-uid="td_uid_9_5a96c42102dbf">
               <div id="td_uid_9_5a96c42102dbf" class="td_block_inner">
                  <div class="td-big-grid-wrapper">
                     @php
                     // biến đếm sô lần lặp
                        $count = 0
                     @endphp

                     @foreach($newPost as $post)
                        @php   
                             $cateSlug = $cate->slug;
                             // $cate = 
                             $slug = $post->slug;

                         @endphp

                     @if(++$count==1)
                     <div class="td_module_mx5 td-animation-stack td-big-grid-post-0 td-big-grid-post td-big-thumb">
                        <div class="td-module-thumb"><a href="{{route('post.detail',[$cateSlug,$slug])}} " rel="bookmark" title="{{$post->title}}"><img width="534" height="300" class="entry-thumb" src="../../wp-content/uploads/2018/02/117software-developer-534x300.jpg" srcset="https://topdev.vn/blog/wp-content/uploads/2018/03/Resume-1-534x462.jpg" alt="" title="{{$post->title}}"></a></div>
                        <div class="td-meta-info-container">
                           <div class="td-meta-align">
                              <div class="td-big-grid-meta">
                                 <h3 class="entry-title td-module-title"><a href="{{route('post.detail',[$cateSlug,$slug])}} " rel="bookmark" title="{{$post->title}}"> {{$post->title}} </a></h3>
                              </div>
                              <div class="td-module-meta-info">
                                 <span class="td-post-date"><time class="entry-date updated td-module-date" datetime="2018-02-28T16:00:29+00:00">February 28, 2018</time></span>                    
                              </div>
                           </div>
                        </div>
                     </div>
                     @elseif(++$count == 3)
                     <div class="td-big-grid-scroll">
                        <div class="td_module_mx11 td-animation-stack td-big-grid-post-1 td-big-grid-post td-medium-thumb">
                           <div class="td-module-thumb"><a href="{{route('post.detail',[$cateSlug,$slug])}} " rel="bookmark" title="{{$post->title}}"><img width="533" height="261" class="entry-thumb" src="../../wp-content/uploads/2018/02/photo1519183875226-1519183875226908478031-533x261.jpg" srcset="https://topdev.vn/blog/wp-content/uploads/2018/02/photo1519183875226-1519183875226908478031-533x261.jpg 533w, https://topdev.vn/blog/wp-content/uploads/2018/02/photo1519183875226-1519183875226908478031-324x160.jpg 324w" sizes="(max-width: 533px) 100vw, 533px" alt="" title="{{$post->title}}"></a></div>
                           <div class="td-meta-info-container">
                              <div class="td-meta-align">
                                 <div class="td-big-grid-meta">
                                    <h3 class="entry-title td-module-title"><a href="{{route('post.detail',[$cateSlug,$slug])}} " rel="bookmark" title="{{$post->title}}">{{$post->title}} </a></h3>
                                 </div>
                              </div>
                           </div>
                        </div>
                        @elseif(++$count > 6)
                           <div class="td_module_mx6 td-animation-stack td-big-grid-post-2 td-big-grid-post td-small-thumb">
                              <div class="td-module-thumb">
                                <a href="{{route('post.detail',[$cateSlug,$slug])}}" title="{{$post->title}}">
                                <img width="265" height="198" class="entry-thumb" src="../../wp-content/uploads/2018/02/dsec_blog_1-2-265x198.jpg" srcset="https://topdev.vn/blog/wp-content/uploads/2018/02/dsec_blog_1-2-265x198.jpg 265w, https://topdev.vn/blog/wp-content/uploads/2018/02/dsec_blog_1-2-80x60.jpg 80w" sizes="(max-width: 265px) 100vw, 265px" 
                                 title="{{$post->title}}">{{$post->title}}
                              </a>
                              </div>
                              <div class="td-meta-info-container">
                                 <div class="td-meta-align">
                                    <div class="td-big-grid-meta">
                                       <h3 class="entry-title td-module-title"><a href="{{route('post.detail',[$cateSlug,$slug])}} " title="{{$post->title}}  ">{{$post->title}} </a></h3>
                                    </div>
                                 </div>
                              </div>
                           </div>


                     @endif
                  @endforeach
                  </div>
                  <div class="clearfix"></div>
               </div>
            </div>
            <!-- ./block -->                    
         </div>
      </div>
   </div>
</div>