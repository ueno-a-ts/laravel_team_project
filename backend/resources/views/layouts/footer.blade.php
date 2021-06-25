<footer class="site-footer border-top">
    <div class="container">
      <div class="layout-footer">
        <div class="col-lg-6 mb-5 mb-lg-0">
          <div class="row">
            <div class="col-md-12">
              <h3 class="footer-heading mb-4">Navigations</h3>
            </div>
            <div class="col-md-6 col-lg-4">
              <ul class="list-unstyled">
                <li>
                    <a href="/top">Home</a>
                  </li>
                  <li>
                    <a href="/">Item</a>
                  </li>
                  <li>
                    <a href="/admin">Admin</a>
                      <li><a href="/admin/items">> Admin Items</a></li>
                      <li><a href="/admin/users">> Admin Users</a></li>
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
          </div>
        </div>

        <div class="col-md-6 col-lg-3">
          <div class="block-5 mb-5">
            <h3 class="footer-heading mb-4">Contact Info</h3>
            <ul class="list-unstyled">
              <li class="address">東京都品川区北品川4-7-35 <br> 御殿山トラストタワー7F</li>
              <li class="phone"><a href="tel://0357393350">03-5739-3350（代表）</a></li>
              <li class="email">https://beenos.com/</li>
            </ul>
          </div>

        </div>
      </div>
      <div class="row pt-5 mt-5 text-center">
        <div class="col-md-12">
          {{-- <p>
          <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
          Copyright &copy;<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank" class="text-primary">Colorlib</a>
          <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
          </p> --}}
        </div>

      </div>
    </div>
  </footer>
