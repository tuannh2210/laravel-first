<div class="wpb_column vc_column_container td-pb-span12">
    <div class="vc_column-inner ">
       	<div class="wpb_wrapper">
          	<div class="td_block_wrap td_block_big_grid_7 td_uid_2_5a96c4184cde5_rand td-grid-style-1 td-hover-1 td-pb-border-top"  data-td-block-uid="td_uid_2_5a96c4184cde5" >
            	<div id=td_uid_2_5a96c4184cde5 class="td_block_inner">

					<div class="td-big-grid-wrapper">
						@php
							// biến đếm sô lần lặp
							$count = 0
						@endphp

						@foreach($newPost as $post)
							@php   
                                $cateSlug = $cate->slug;
                                $slug = $post->slug;
                            @endphp

							@if(++$count<4) 
							
								<div class="td_module_mx12 td-animation-stack td-big-grid-post-0 td-big-grid-post td-small-thumb">
								   	<div class="td-module-thumb">
								   		<a href="{{route('post.detail',[$cateSlug,$slug])}} "
								   		 title="{{$post->title}} ">
								   			<img width="356" height="220" class="entry-thumb" src="{{asset('theme/client/uploads/2018/02/117software-developer-356x220.jpg')}}" 
								   			"/>
								   		</a>
								   	</div>
								   	<div class="td-meta-info-container">
									  	<div class="td-meta-align">
											<div class="td-big-grid-meta">
												<h3 class="entry-title td-module-title">
													<a href="" rel="bookmark" title="{{$post->title}}">
														{{str_limit($post->title,'50','...')}} {{$count}}</a>
												</h3>
											</div>
											<div class="td-module-meta-info">
												<span class="td-post-date">
													<time class="entry-date updated td-module-date" datetime="2018-02-28T16:00:29+00:00" >{{$post->publish_date}} </time>
												</span>                    
											</div>
										</div>
									</div>
								</div>
							@elseif(++$count<12)
							   	<div class="td_module_mx6 td-animation-stack td-big-grid-post-3 td-big-grid-post td-small-thumb">
									<div class="td-module-thumb">
									  	<a href="{{route('post.detail',[$cateSlug,$slug])}}" rel="bookmark" >
									  		<img width="265" height="198" class="entry-thumb" src="{{asset('theme/client/uploads/2018/02/1_Vc7jxYzWk8V5vA3uaDKYzA-265x198.jpg')}}"  sizes="(max-width: 265px) 100vw, 265px" alt="" title=""/>
									  	</a>
									</div>
									<div class="td-meta-info-container">
										<div class="td-meta-align">
											<div class="td-big-grid-meta">
											   	<h3 class="entry-title td-module-title">
												   	<a href="{{route('post.detail',[$cateSlug,$slug])}}">
												   		{{str_limit($post->title,'50','...')}}{{$count}}
												   	</a>
											   </h3>
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
		</div>
	</div>
</div>

