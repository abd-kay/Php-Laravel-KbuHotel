<!-- HEADER LOGO & MENU -->
@php
    $parentCategories = \App\Http\Controllers\HomeController::categoryList();
    $hotel_category_id_list = \App\Http\Controllers\HomeController::get_all_hotel_category_id();
@endphp
<div class="header_content" id="header_content">

    <div class="container">
        <!-- HEADER LOGO -->
        <div class="header_logo">
            <a href="/"><img src="{{asset('assets')}}/images/logo-header.png" alt=""></a>
        </div>
        <!-- END / HEADER LOGO -->

        <!-- HEADER MENU -->
        <nav class="header_menu">
            <ul class="menu">
                <li @if(Request::url() === route('homepage') || Request::url() === route('home')  ) class="current-menu-item" @endif >
                    <a href="/">Home</a>
                </li>
                <li @if(Request::url() === route('hotels') ) class="current-menu-item" @endif >
                    <a href="{{route('hotel_list')}}">Hotels <span class="fa fa-caret-down"></span></a>
                    <ul class="sub-menu">
                        @foreach($parentCategories as $rs)
                        <li>
                            <a @if(!in_array($rs->id,$hotel_category_id_list)) href="{{route('get_hotels_via_category',['category_id'=>$rs->id])}}" @endif >{{$rs->title}} @if(count($rs->child))<span class="fa fa-caret-right"></span> @endif</a>

                                @if(count($rs->child))
                                    @include('home._category_tree',['child'=>$rs->child])
                                    @endif

                        </li>

                        @endforeach
                    </ul>
                </li>
                <li @if(Request::url() === route('references') ) class="current-menu-item" @endif ><a href="{{route('references')}}">References</a></li>
                <li @if(Request::url() === route('faq') ) class="current-menu-item" @endif ><a href="{{route('faq')}}">FAQ</a></li>
                <li @if(Request::url() === route('contact') ) class="current-menu-item" @endif ><a href="{{route('contact')}}">Contact</a></li>
                <li @if(Request::url() === route('about_us') ) class="current-menu-item" @endif ><a href="{{route('about_us')}}">About</a></li>




            </ul>
        </nav>
        <!-- END / HEADER MENU -->

        <!-- MENU BAR -->
        <span class="menu-bars">
                        <span></span>
                    </span>
        <!-- END / MENU BAR -->

    </div>
</div>
<!-- END / HEADER LOGO & MENU -->
