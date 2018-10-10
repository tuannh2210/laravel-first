@extends('layout.client')
@section('title',$post->title)
@section('crumb')
    <div class="td-crumb-container">
        <div class="entry-crumbs" itemscope itemtype="http://schema.org/BreadcrumbList">
            <span class="td-bred-first">
                <a href="{{route('homepage')}} ">Home</a>
            </span> 
            <i class="td-icon-right td-bread-sep"></i> 
            <span>
                <a title="View all posts in HR" class="entry-crumb" itemtype="http://schema.org/Thing"
                 href="{{route('cate.detail',['cateSlug' => $post->getCate()->slug])}} ">
                    <span itemprop="name">  {{$post->getCate()->name}}</span>    
                </a>    
            </span> 
            <i class="td-icon-right td-bread-sep td-bred-no-url-last"></i> 
            <span class="td-bred-no-url-last">{{$post->title}} </span>
        </div>
    </div>
@endsection

@section('content')
    <div class="td-pb-span8 td-main-content" role="main">
        <div class="td-ss-main-content">

            <article id="post-4585" class="post-4585 post type-post status-publish format-standard has-post-thumbnail hentry category-featured category-hr tag-stevejobs" itemscope itemtype="https://schema.org/Article">
                <div class="td-post-header">

                    <ul class="td-category">
                        <li class="entry-category">
                            <a  href="{{route('cate.detail',['cateSlug' => $post->getCate()->slug])}} "> 
                                {{$post->getCate()->name}}
                            </a>
                        </li>
                    </ul>
                    <header class="td-post-title">
                        <h1 class="entry-title">{{$post->title}} </h1>
                            <div class="td-module-meta-info">
                                <span class="td-post-date">
                                    <time class="entry-date updated td-module-date" datetime="2017-01-28T08:00:22+00:00">
                                     {{$post->publish_date}} </time>
                                </span>
                                <div class="td-post-views">
                                    <i class="td-icon-views"></i>
                                    <span class="td-nr-views-4585" name="view">{{$post->view}} </span>
                                </div>                
                            </div>
                    </header>
                </div>

                <div class="td-post-sharing td-post-sharing-top td-with-like">
                    <div class="td-default-sharing">
                        <a class="td-social-sharing-buttons td-social-facebook" href="" onclick="window.open(this.href, 'mywin','left=50,top=50,width=600,height=350,toolbar=0'); return false;">
                            <i class="td-icon-facebook"></i>
                            <div class="td-social-but-text">Share on Facebook</div>
                        </a>
                        <a class="td-social-sharing-buttons td-social-twitter" href=""  onclick="window.open(this.href, 'mywin','left=50,top=50,width=600,height=350,toolbar=0'); return false;">
                            <i class="td-icon-twitter"></i>
                            <div class="td-social-but-text">Tweet on Twitter</div>
                        </a>
                        <a class="td-social-sharing-buttons td-social-google" href="" onclick="window.open(this.href, 'mywin','left=50,top=50,width=600,height=350,toolbar=0'); return false;">
                            <i class="td-icon-googleplus"></i>
                        </a>
                        <a class="td-social-sharing-buttons td-social-pinterest" href="" onclick="window.open(this.href, 'mywin','left=50,top=50,width=600,height=350,toolbar=0'); return false;">
                            <i class="td-icon-pinterest"></i>
                        </a>
                        <a class="td-social-sharing-buttons td-social-whatsapp" href="" >
                            <i class="td-icon-whatsapp"></i>
                        </a>
                    </div>
                    <div class="td-classic-sharing">
                        <ul>
                            <li class="td-classic-facebook">
                               {{--  <iframe frameBorder="0" src="layout=button_count&amp;show_faces=false&amp;width=105&amp;action=like&amp;colorscheme=light&amp;height=21" style="border:none; overflow:hidden; width:105px; height:21px; background-color:transparent;"></iframe> --}}
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="td-post-content">

                    <div class="td-post-featured-image">
                        <a href="{{asset('theme/client/uploads/2018/02/photo1519183875226-1519183875226908478031.jpg')}}" >
                            <img width="600" height="375" class="entry-thumb td-modal-image" src="{{asset('theme/client/uploads/2018/02/photo1519183875226-1519183875226908478031.jpg')}}" srcset="https://topdev.vn/blog/wp-content/uploads/2018/02/photo1519183875226-1519183875226908478031.jpg 600w, https://topdev.vn/blog/wp-content/uploads/2018/02/photo1519183875226-1519183875226908478031-300x188.jpg 300w" sizes="(max-width: 600px) 100vw, 600px" alt="" title="Steve Job"/>
                        </a>
                    </div>
                    <h2 class="sapo">
                        <span style="font-size: 12pt;">
                            {!!$post->content!!}
                        </span>
                    </h2>
                    <p style="text-align: right;">
                        <em>
                            <strong>Nguồn: 
                                <a href="http://cafebiz.vn/steve-jobs-chi-can-noi-khong-voi-4-dieu-nay-ban-co-the-lam-tot-moi-cong-viec-20180221103224697.chn">Cafebiz</a>
                            </strong>
                        </em>
                    </p>

                    <p>&nbsp;</p>
                    <div class="td-a-rec td-a-rec-id-content_bottom  ">
                        <div class="ml-rcm" rc-type="content" rc-layout="bnewsttbc" rc-li="6" rc-title="" rc-for="url" >
                            
                        </div>
                        <div class="ml-rcm" rc-type="job" rc-layout="bjobs" rc-li="3" rc-for="user" rc-title="Những việc làm hấp dẫn" animate="on"></div>
                        <div class="ml-rcm" rc-type="job" rc-layout="bjobs" rc-li="5" rc-for="user" rc-title="Những việc làm hấp dẫn" token-site="RIBPOSVJgL+kR9V78tC1PePVkAR8STLmwYHXhY4o2z+8Jg6rR09xCNe2Zk2K/rcY1dv3kOtiRmtj5J4rtFRYiw==" animate="off"></div>
                        <div class="td-all-devices" id="b-g-i-net-VGlQQWtzTDVsdVE9"></div>
                    </div>
                </div>

                <footer>

                    <div class="td-post-source-tags">
                        <ul class="td-tags td-post-small-box clearfix">
                            <li>
                                <span>TAGS</span>
                            </li>
                            <li>
                                <a href="../tag/stevejobs/index.html">SteveJobs</a>
                            </li>
                        </ul>            
                    </div>

                    <div class="td-post-sharing td-post-sharing-bottom td-with-like">
                        <span class="td-post-share-title">SHARE</span>
                        <div class="td-default-sharing">
                           <a class="td-social-sharing-buttons td-social-facebook" href="" onclick="window.open(this.href, 'mywin','left=50,top=50,width=600,height=350,toolbar=0'); return false;">
                                <i class="td-icon-facebook"></i>
                                <div class="td-social-but-text">Facebook</div>
                            </a>
                           <a class="td-social-sharing-buttons td-social-twitter" href=>
                                <i class="td-icon-twitter"></i>
                                <div class="td-social-but-text">Twitter</div>
                            </a>
                           <a class="td-social-sharing-buttons td-social-google" href="" onclick="window.open(this.href, 'mywin','left=50,top=50,width=600,height=350,toolbar=0'); return false;">
                                <i class="td-icon-googleplus"></i>
                            </a>
                            <a class="td-social-sharing-buttons td-social-pinterest" href="" onclick="window.open(this.href, 'mywin','left=50,top=50,width=600,height=350,toolbar=0'); return false;">
                                <i class="td-icon-pinterest"></i>
                            </a>
                            <a class="td-social-sharing-buttons td-social-whatsapp" href="" >
                                <i class="td-icon-whatsapp"></i>
                            </a>
                        </div>
                        <div class="td-classic-sharing">
                            <ul>
                                <li class="td-classic-facebook">
                                    {{-- <iframe frameBorder="0" src="https://www.facebook.com/plugins/like.php?href=https://topdev.vn/blog/steve-jobs-chi-can-noi-khong-voi-4-dieu-nay-ban-co-the-lam-tot-moi-cong-viec/&amp;layout=button_count&amp;show_faces=false&amp;width=105&amp;action=like&amp;colorscheme=light&amp;height=21" style="border:none; overflow:hidden; width:105px; height:21px; background-color:transparent;"></iframe> --}}
                                </li>
                            </ul>
                        </div>
                    </div>                        
                    <div class="td-author-name vcard author" style="display: none">
                        <span class="fn">
                            <a href="../author/nhatvy/index.html">nhat vy</a>
                        </span>
                    </div>
                </footer>

            </article> <!-- /.post -->

        </div>
    </div>

@endsection
