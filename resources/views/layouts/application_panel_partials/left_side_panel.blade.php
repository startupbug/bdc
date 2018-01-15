<!-- Funder/Invester LEFT SIDEPANELW NAV Generic Layout -->

<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 r-m-p left_dash">
    <div class="dashboard_left_side clearfix">
        <a href="{{ route('publicPages', ['slug' => 'home']) }}" class="navbar-brand">
            <img src="{{ asset('panel_assets/images/logo.png') }}" class="img-responsive center-block"/>
        </a>
        <div class="user_deatils">
            <a href="#">
                <div class="avatar_box">
                    <img src="{{ asset('storage/'.Auth::user()->profile->image) }}" class="img-responsive center-block img-circle"/>
                    <form action="{{ route('ajaxProfilePicture') }}" method="post" enctype="multipart/form-data" id="change_profile">
                        <span class="camera_image">
                        <i class="fa fa-camera fa-2x" aria-hidden="true"></i>
                            {{csrf_field()}}
                            <input type="file" id="image_upload" value="" style="display: none" name="profile_picture"/>
                        </span>
                    </form>
                </div>
            </a>

            @if(Auth::check())
                <h3><a href="">{{Auth::user()->name}}</a></h3>
            @endif

                <p>{{ Auth::user()->role->role_name }}</p>

        </div><!--./End user details-->
        <div class="dashboard_navigation">

            
              @if(Auth::user()->roles == 2)
                <!-- Funder -->
                    <ul class="nav">
                        <li {{{ (Request::is('funder') ? 'class=active' : '') }}}"><a href="{{route('funder_home')}}"><i class="fa fa-tachometer"
                                                                      aria-hidden="true"></i>Dashboard</a></li>
                        <li {{{ (Request::is('funder/profile') ? 'class=active' : '') }}}><a href="{{route('funder_profile')}}"><i class="fa fa-user" aria-hidden="true"></i>My Profile</a></li>
                        <li {{{ (Request::is('funder/notifications') ? 'class=active' : '') }}}><a href="{{route('funder_notifications_index')}}"><i class="fa fa-bell-o" aria-hidden="true"></i>Notifications</a></li>
                        <li {{{ (Request::is('funder/view_listings') ? 'class=active' : '') }}}><a href="{{route('funder_view_listings')}}"><i class="fa fa-lightbulb-o" aria-hidden="true"></i>Viewed Listings</a></li>
                        <li {{{ (Request::is('funder/request_listing') ? 'class=active' : '') }}}><a href="{{route('funder_request_listing')}}"><i class="fa fa-paper-plane" aria-hidden="true"></i>Request Listing Review</a>
                        </li>
                        <li {{{ (Request::is('funder/fund_details') ? 'class=active' : '') }}}><a href="{{route('funder_fund_details')}}"><i class="fa fa-credit-card" aria-hidden="true"></i>Funded Details</a>
                        </li>
                        <li>
                            <form action="{{route('logout')}}" method="post">
                                <input type="hidden" name="_token" value="{{Session::token()}}">
                                <!-- <input type="submit" name="logout" value="Logout"> -->
                                <button class="btn btn-default" type="submit" name="logout">
                                    <i class="fa fa-sign-out" aria-hidden="true"></i>Log out
                                </button>
                            </form>
                        </li>
                    </ul>

              @elseif(Auth::user()->roles == 3)
                <!-- Innovator -->
                    <ul class="nav">
                        <li {{{ (Request::is('innovator') ? 'class=active' : '') }}}><a href="{{route('innovator_home')}}"><i class="fa fa-tachometer" aria-hidden="true"></i>Dashboard</a></li>
                        <li {{{ (Request::is('innovator/profile') ? 'class=active' : '') }}}><a href="{{route('innovator_profile')}}"><i class="fa fa-user" aria-hidden="true"></i>My Profile</a></li>
                        <li {{{ (Request::is('innovator/notifications') ? 'class=active' : '') }}}><a href="{{route('innovator_notifications_index')}}"><i class="fa fa-bell-o" aria-hidden="true"></i>Notifications</a></li>
                        <li {{{ (Request::is('innovator/listings') ? 'class=active' : '') }}}><a href="{{route('innovator_listings')}}"><i class="fa fa-lightbulb-o" aria-hidden="true"></i>Listing</a></li>
                        <li {{{ (Request::is('innovator/submit_listing') ? 'class=active' : '') }}}><a href="{{route('submit_listing_page')}}"><i class="fa fa-check" aria-hidden="true"></i>Submit listing</a></li>
                        <li {{{ (Request::is('innovator/contact_admin') ? 'class=active' : '') }}}><a href="{{route('contact_admin_page')}}"><i class="fa fa-paper-plane" aria-hidden="true"></i>Contact Admin</a></li>
                        <li {{{ (Request::is('innovator/request_services') ? 'class=active' : '') }}}><a href="{{route('request_services_page')}}"><i class="fa fa-paper-plane" aria-hidden="true"></i>Request Services</a></li>
                        <li {{{ (Request::is('innovator/transactions') ? 'class=active' : '') }}}><a href="{{route('transaction_page')}}"><i class="fa fa-credit-card" aria-hidden="true"></i>Transaction</a></li>
                        <li>
                            <form action="{{route('logout')}}" method="post">
                                <input type="hidden" name="_token" value="{{Session::token()}}">
                                <!-- <input type="submit" name="logout" value="Logout"> -->
                                <button class="btn btn-default" type="submit" name="logout">
                                    <i class="fa fa-sign-out" aria-hidden="true"></i>Log out
                                </button>
                            </form>
                        </li>
                    </ul>
              @endif


        </div>
    </div>
</div><!---./End Left Side--->
<div class="col-xs-12 col-sm-9 col-md-9 col-lg-9 r-m-p right_dash">