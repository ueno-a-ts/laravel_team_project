<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">
<!-- Scripts -->
<script src="{{ asset('/js/app.js') }}" defer></script>

<div>
    <header class="site-navbar" role="banner">
        <div class="site-navbar-top">
          <div class="container">
            <div class="row align-items-center">

              <div class="col-6 col-md-4 order-2 order-md-1 site-search-icon text-left">
                <form action="" class="site-block-top-search">
                  <span class="icon icon-search2"></span>
                  <input type="text" class="form-control border-0" placeholder="Search">
                </form>
              </div>

              <div class="col-12 mb-3 mb-md-0 col-md-4 order-1 order-md-2 text-center">
                <div class="site-logo">
                  <a href="/" class="js-logo-clone">Music ec</a>
                </div>
              </div>

              <div class="col-6 col-md-4 order-3 order-md-3 text-right">
                <div class="site-top-icons">
                  <ul>
                    @auth
                        <li>
                            <a href="/home">
                                <span class="icon icon-person">
                                    {{ Auth::user()->name }}
                                </span>
                            </a>
                        </li>
                        <li>
                            {{-- todo: カート --}}
                          <a href="/cart" class="site-cart">
                            <span class="icon icon-shopping_cart"></span>
                          </a>
                        </li>
                    @endauth
                    <li class="d-inline-block d-md-none ml-md-0"><a href="#" class="site-menu-toggle js-menu-toggle"><span class="icon-menu"></span></a></li>
                  </ul>
                </div>
              </div>

            </div>
          </div>
        </div>
        <nav class="site-navigation text-right text-md-center" role="navigation">
          <div class="container">
            <ul class="site-menu js-clone-nav d-none d-md-block">
              <li>
                <a href="/top">TOP</a>
              </li>
              <li>
                <a href="/">Item</a>
              </li>
              {{-- todo: admin header --}}
              <li class="has-children">
                <a href="/admin">Admin</a>
                <ul class="dropdown">
                  <li><a href="/admin/items">Admin Items</a></li>
                  <li><a href="/admin/users">Admin Users</a></li>
                </ul>
              </li>
              @guest
                    <li>
                        <a href="{{ route('login') }}">{{ __('LOGIN') }}</a>
                    </li>
                @if (Route::has('register'))
                    <li>
                        <a href="{{ route('register') }}">{{ __('REGISTER') }}</a>
                    </li>
                @endif
                @else
                    <li>
                        <div>
                            <a href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                {{ __('LOGOUT') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
          </div>
        </nav>
    </header>
</div>
