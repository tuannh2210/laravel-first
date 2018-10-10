<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <!--favicon icon-->
    <link rel="icon" type="image/png" href="{{asset('massive/img/favicon.png')}}">
    
    {{-- Title --}}
   <title>@yield('title')</title> 
    {{--end  Title --}}

    {{-- css --}}
    @include('_share.client.css')
    <!--common style-->
    
</head>

<body  class="post-template-default single single-post postid-4585 single-format-standard wpb-js-composer js-comp-ver-5.0.1 vc_responsive td-full-layout">
    
    {{-- Mobile screen --}}
    @include('_share.client.mobile')
    {{-- End mobile screen--}}

    {{-- laptop screen--}}
    <div id="td-outer-wrap">
        {{-- Header  --}}
        @include('_share.client.header')
        {{-- End header --}}
            @php 
               $r = Route::current()->getName();
               $wrap =  $r == 'homepage';
            @endphp

            @if($wrap)
                <div class="td-main-content-wrap td-main-page-wrap">

                    <div class="td-container tdc-content-wrap">
                        <div class="vc_row wpb_row td-pb-row">

                            @include('_share.client.wrapper')

                        </div>

                        <div class="vc_row wpb_row td-pb-row">
                            <div class="td-container td-post-template-default ">

                                <div class="td-pb-row">

                                    {{-- content  --}}
                                    @yield('content')
                                    
                                    {{-- @include('_share.client.wrapper-block') --}}
                                    {{-- @include('_share.client.content-cate') --}}
                                    {{-- @include('_share.client.post') --}}

                                    {{-- Sidebar --}}

                                     @include('_share.client.sidebar')
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            
            @else
                <div class="td-main-content-wrap">

                    <div class="td-container tdc-content-wrap">
                        <div class="vc_row wpb_row td-pb-row">

                            @if($r == 'cate.detail')
                                {{-- wrapper homepage --}}
                                @include('_share.client.category')
                                {{-- end wrapper homepage --}}

                            @endif

                        </div>

                        <div class="vc_row wpb_row td-pb-row">
                            <div class="td-container td-post-template-default ">

                                @yield('crumb')

                                <div class="td-pb-row">

                                    {{-- content  --}}
                                    @yield('content')
                                    
                                    {{-- @include('_share.client.wrapper-block') --}}
                                    {{-- @include('_share.client.content-cate') --}}
                                    {{-- @include('_share.client.post') --}}

                                    {{-- Sidebar --}}

                                     @include('_share.client.sidebar')
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endif

        {{-- Footer  --}}
        @include('_share.client.footer')
        
    </div>

    {{-- JS --}}
    @include('_share.client.js')


</body>

</html>
