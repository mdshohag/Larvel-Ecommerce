@include('web.headers.fixedHeader') 
@include('web.common.HeaderCategories')
<header id="headerEight" class="header-area header-eight  header-desktop d-none d-lg-block d-xl-block">
  <div class="header-mini bg-top-bar">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-12">
          
          <nav id="navbar_0_8" class="navbar navbar-expand-md navbar-dark navbar-0">
            <div class="navbar-lang">
              @if(count($languages) > 1)
              <div class="dropdown">
                  <button class="btn dropdown-toggle" type="button" >
                    {{session('language_name')}}
                  </button>
                  <div class="dropdown-menu" >
                    @foreach($languages as $language)
                      <a class="dropdown-item" onclick="myFunction1({{$language->languages_id}})" href="#">
                        {{$language->name}}</a>
                    @endforeach 
                    
                  </div>
                </div> 
                @include('web.common.scripts.changeLanguage')
                @endif 
                @if(count($currencies) > 1) 
                <div class="dropdown">
                    <button class="btn dropdown-toggle" type="button" >
                      {{session('currency_code')}}
                    </button>
                    <div class="dropdown-menu">
                      @foreach($currencies as $currency)
                        <a class="dropdown-item" onclick="myFunction2({{$currency->id}})" class="dropdown-item" href="#">{{$currency->code}}</a>
                      @endforeach
                      
                    </div>
                  </div>
                  @include('web.common.scripts.changeCurrency')
                  @endif 
                </div>               
            
            <div class="navbar-collapse">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <div class="nav-avatar nav-link">
                      <div class="avatar">
                      <?php
                          if(auth()->guard('customer')->check()){
                            echo substr(auth()->guard('customer')->user()->first_name, 0, 1);
                          }
                      ?>                      
                      </div>
                      <span><?php if(auth()->guard('customer')->check()){ ?>@lang('website.Welcome') {{auth()->guard('customer')->user()->first_name}}&nbsp;!<?php }?> </span>
                    </div>
                  </li>
                  <?php if(auth()->guard('customer')->check()){ ?>
                    <li class="nav-item"> <a href="{{url('profile')}}" class="nav-link">@lang('website.Profile')</a> </li>
                    <li class="nav-item"> <a href="{{url('wishlist')}}" class="nav-link">@lang('website.Wishlist')<span class="total_wishlist"> ({{$result['commonContent']['total_wishlist']}})</span></a> </li>
                    <li class="nav-item"> <a href="{{url('compare')}}" class="nav-link">@lang('website.Compare')&nbsp;(<span id="compare">{{$count}}</span>)</a> </li>
                    <li class="nav-item"> <a href="{{url('orders')}}" class="nav-link">@lang('website.Orders')</a> </li>
                    <li class="nav-item"> <a href="{{url('shipping-address')}}" class="nav-link">@lang('website.Shipping Address')</a> </li>
                    <li class="nav-item"> <a href="{{url('logout')}}" class="nav-link padding-r0">@lang('website.Logout')</a> </li>
                    <?php }else{ ?>
                      <li class="nav-item"><div class="nav-link">@lang('website.Welcome') @lang('website.User')!</div></li>
                      <li class="nav-item"> <a href="{{ URL::to('/login')}}" class="nav-link -before"><i class="fa fa-lock" aria-hidden="true"></i>&nbsp;@lang('website.Login/Register')</a> </li>                      
                    <?php } ?>

                </ul> 
            </div>   
          </nav>
        </div>
      </div>
    </div> 
  </div>
  <div class="header-maxi bg-header-bar">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-12 col-sm-12 col-lg-3">
          <a href="{{ URL::to('/')}}" class="logo" data-toggle="tooltip" data-placement="bottom" title="@lang('website.logo')">
            @if($result['commonContent']['settings']['sitename_logo']=='name')
            <?=stripslashes($result['commonContent']['settings']['website_name'])?>
            @endif
        
            @if($result['commonContent']['settings']['sitename_logo']=='logo')
            <img class="img-fluid" src="{{asset('').$result['commonContent']['settings']['website_logo']}}" alt="<?=stripslashes($result['commonContent']['settings']['website_name'])?>">
            @endif
            </a>
        </div>
        <div class="col-6 col-sm-6 col-md-4 col-lg-9">
          <ul class="pro-header-right-options">
            <li class="phone-header">
              <a href="#">
                  <i class="fas fa-phone"></i>
                  <span class="block">
                    <span class="title">@lang('website.Call Us Now')</span>                    
                    <span class="items" dir="ltr">{{$result['commonContent']['setting'][11]->value}}</span>
                  </span>                   
              </a>
            </li>
            <li class="dropdown head-cart-content">
              @include('web.headers.cartButtons.cartButton8') 
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div> 
  <div class="header-navbar bg-menu-bar">
      <div class="container">
        <nav id="navbar_header_9" class="navbar navbar-expand-lg  bg-nav-bar">
    
          <div class="navbar-collapse" >
            <ul class="navbar-nav">
              {!! $result['commonContent']["menusRecursive"] !!}               
              <li class="nav-item">
              
                <form class="form-inline" action="{{ URL::to('/shop')}}" method="get">
                  <div class="search-field-module">          
                    <div class="search-field-wrap">
                        <input  type="text" name="search" placeholder="@lang('website.Search entire store here')..." data-toggle="tooltip" data-placement="bottom" title="@lang('website.Search Products')" value="{{ app('request')->input('search') }}">
                        <button class="btn btn-light swipe-to-top" data-toggle="tooltip" 
                        data-placement="bottom" title="@lang('website.Search Products')">
                        <i class="fa fa-search"></i></button>
                    </div>
                  </div>
                </form>
                  </li>
                        <!-- 
                   /**
                    *
                    * Vendor Account create
                    */ 
                      -->
           
            <li class="link-item"> 
              <a href="{{ route('vendor.account')}}">
               <i class="fa fa-store" aria-hidden="true"></i>&nbsp;Vendor Account
              </a> 
            </li>
            </ul>
          </div>
        </nav>
      </div>
    </div>
</header>