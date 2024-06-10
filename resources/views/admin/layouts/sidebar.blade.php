<div id="sidebar" class="navbar-nav-left sidebar">
  <nav class="navbar navbar-expand-xl">
    <div class="navbar-brand">
      <a class="nav-link" href="{{ url('/dashboard') }}">
        <img src="{{asset('public/assets/images/Favicon.png')}}" alt="demo-service">
      </a>
    </div>

    <div class="collapse navbar-collapse" id="sidebar-nav">
      <ul id="accordion" class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="{{ url('/dashboard') }}"><svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24">
              <path d="M0 0h24v24H0V0z" fill="none"></path>
              <path d="M5 5h4v6H5zm10 8h4v6h-4zM5 17h4v2H5zM15 5h4v2h-4z" opacity=".3"></path>
              <path d="M3 13h8V3H3v10zm2-8h4v6H5V5zm8 16h8V11h-8v10zm2-8h4v6h-4v-6zM13 3v6h8V3h-8zm6 4h-4V5h4v2zM3 21h8v-6H3v6zm2-4h4v2H5v-2z"></path>
            </svg> <span>Dashboard</span></a>
        </li>
        @if (Auth::user() && Auth::user()->role == App\Models\User::ROLE_ADMIN)
        
          <li class="nav-item">
          	<a class="nav-link" data-toggle="collapse" href="#user" role="button" aria-expanded="false" aria-controls="manage">
          <i class="fa fa-user"></i><span>User Management</span>
          </a>
         
          <div class="collapse" id="user" data-parent="#accordion">
            <ul class="sub-navbar-nav">

                     <li class="nav-item">
                  <a class="nav-link" href="{{ url('/dashboard/users') }}"><i class="fa fa-users"></i> <span>Users</span></a>
                </li>

            </ul>
          </div>

        </li>
        
        <li class="nav-item">
          <a class="nav-link" data-toggle="collapse" href="#manage" role="button" aria-expanded="false" aria-controls="manage">
          <i class="fa fa-tasks"></i><span>Manage</span>
          </a>
          <div class="collapse" id="manage" data-parent="#accordion">
            <ul class="sub-navbar-nav">

              <li class="nav-item">
                <a class="nav-link" href="{{ url('/dashboard/backup') }}"><i class="fal fa-download"></i> <span> Backup</span></a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="{{ url('/logActivity') }}"><i class="fal fa-history"></i> <span> Login History</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ url('/smtp/account') }}"><i class="fal fa-lock"></i> <span> SMTP</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ url('/logs') }}"><i class="fal fa-sign-in"></i> <span> Logs</span></a>
              </li>

            </ul>
          </div>

        </li>
        
        <li class="nav-item menu-list " data-id="page_management">
          <a class="nav-link" data-toggle="collapse" href="#page" role="button" aria-expanded="false" aria-controls="page">
            <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" class="side-menu__icon" viewBox="0 0 24 24">
              <g>
                <rect fill="none"></rect>
              </g>
              <g>
                <g></g>
                <g>
                  <path d="M21,5c-1.11-0.35-2.33-0.5-3.5-0.5c-1.95,0-4.05,0.4-5.5,1.5c-1.45-1.1-3.55-1.5-5.5-1.5S2.45,4.9,1,6v14.65 c0,0.25,0.25,0.5,0.5,0.5c0.1,0,0.15-0.05,0.25-0.05C3.1,20.45,5.05,20,6.5,20c1.95,0,4.05,0.4,5.5,1.5c1.35-0.85,3.8-1.5,5.5-1.5 c1.65,0,3.35,0.3,4.75,1.05c0.1,0.05,0.15,0.05,0.25,0.05c0.25,0,0.5-0.25,0.5-0.5V6C22.4,5.55,21.75,5.25,21,5z M3,18.5V7 c1.1-0.35,2.3-0.5,3.5-0.5c1.34,0,3.13,0.41,4.5,0.99v11.5C9.63,18.41,7.84,18,6.5,18C5.3,18,4.1,18.15,3,18.5z M21,18.5 c-1.1-0.35-2.3-0.5-3.5-0.5c-1.34,0-3.13,0.41-4.5,0.99V7.49c1.37-0.59,3.16-0.99,4.5-0.99c1.2,0,2.4,0.15,3.5,0.5V18.5z"></path>
                  <path d="M11,7.49C9.63,6.91,7.84,6.5,6.5,6.5C5.3,6.5,4.1,6.65,3,7v11.5C4.1,18.15,5.3,18,6.5,18 c1.34,0,3.13,0.41,4.5,0.99V7.49z" opacity=".3"></path>
                </g>
                <g>
                  <path d="M17.5,10.5c0.88,0,1.73,0.09,2.5,0.26V9.24C19.21,9.09,18.36,9,17.5,9c-1.28,0-2.46,0.16-3.5,0.47v1.57 C14.99,10.69,16.18,10.5,17.5,10.5z"></path>
                  <path d="M17.5,13.16c0.88,0,1.73,0.09,2.5,0.26V11.9c-0.79-0.15-1.64-0.24-2.5-0.24c-1.28,0-2.46,0.16-3.5,0.47v1.57 C14.99,13.36,16.18,13.16,17.5,13.16z"></path>
                  <path d="M17.5,15.83c0.88,0,1.73,0.09,2.5,0.26v-1.52c-0.79-0.15-1.64-0.24-2.5-0.24c-1.28,0-2.46,0.16-3.5,0.47v1.57 C14.99,16.02,16.18,15.83,17.5,15.83z"></path>
                </g>
              </g>
            </svg> <span>Pages</span>
          </a>
          <div class="collapse" id="page" data-parent="#accordion">
            <ul class="sub-navbar-nav">
              <li class="nav-item">
                <a class="nav-link menu-list-link" href="{{ url('page')}}"><i class="fal fa-file"></i> <span>Pages</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link menu-list-link" href="{{ url('faq')}}"><i class="fal fa-question"></i> <span>Faqs</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link menu-list-link" href="{{ url('favourite')}}"><i class="fal fa-heart "></i> <span>Favourites</span></a>
              </li>

            </ul>
          </div>
        </li>

		<li class="nav-item menu-list" data-id="seo"><a class="nav-link"
			data-toggle="collapse" href="#seo" role="button"
			aria-expanded="false" aria-controls="seo"> <i class="fas fa-key"></i>
				<span>SEO Manager</span>
				</a>
				<div class="collapse" id="seo" data-parent="#accordion">
					<ul class="sub-navbar-nav">
<!-- 					<li class="nav-item"><a class="nav-link menu-list-link" -->
<!-- 						href="{{ url('seo/')}}"><i class="fas fa-home"></i> <span>Home</span></a> -->
<!-- 					</li> -->
					<li class="nav-item"><a class="nav-link menu-list-link"
						href="{{ url('seo/manager')}}"><i class="fas fa-fire"></i> <span>Meta</span></a>
					</li>
					<li class="nav-item"><a class="nav-link menu-list-link"
						href="{{ url('seo/analytics')}}"><i class="fa fa-analytics"></i> <span>Analytics</span></a>
					</li>
					<li class="nav-item"><a class="nav-link menu-list-link"
						href="{{ url('seo/redirect')}}"><i class="fas fa-external-link"></i> <span>Redirect</span></a>
					</li>
						</ul>
				</div>
				</li>

				<li class="nav-item">
          <a class="nav-link" href="{{ url('/serviceProvider') }}"><i class="fas fa-user-cog"></i> <span>Service Providers</span></a>
        </li>

        <li class="nav-item menu-list" data-id="services">
          <a class="nav-link" data-toggle="collapse" href="#services" role="button" aria-expanded="false" aria-controls="services">
          <i class="far fa-cogs"></i><span>Services</span>
          </a>

          <div class="collapse" id="services" data-parent="#accordion">
            <ul class="sub-navbar-nav">
              <li class="nav-item">
                <a class="nav-link menu-list-link" href="{{ url('/services')}}"><i class="fal fa-tasks"></i> <span>Service Management</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link menu-list-link" href="{{ url('services/category')}}"><i class="fal fa-list-alt"></i> <span>Category</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link menu-list-link" href="{{ url('services/sub-category')}}"><i class="fal fa-tasks"></i> <span>Sub-Category</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link menu-list-link" href="{{ url('services/add-on')}}"><i class="fa fa-plus"></i> <span>Add on services</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link menu-list-link" href="{{ url('/services/custom-req')}}"><i class="fa fa-search"></i> <span>Custom Requests</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link menu-list-link" href="{{ url('services/coupon')}}"><i class="fal fa-star "></i> <span>Coupons</span></a>
              </li>

            </ul>
          </div>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="{{ url('/event/list') }}"><svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24">
              <path d="M0 0h24v24H0V0z" fill="none"></path>
              <path d="M5 5h15v3H5zm12 5h3v9h-3zm-7 0h5v9h-5zm-5 0h3v9H5z" opacity=".3"></path>
              <path d="M20 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h15c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zM8 19H5v-9h3v9zm7 0h-5v-9h5v9zm5 0h-3v-9h3v9zm0-11H5V5h15v3z"></path>
            </svg> <span>Events</span></a>
        </li>
         <li class="nav-item">
          <a class="nav-link" href="{{ url('/notifications') }}"><i class="fas fa-bell"></i> <span>Notifications</span></a>
        </li>
	 
       <li class="nav-item">
          <a class="nav-link" href="{{ route('orders') }}"><i class="fa fa-ticket"></i> <span>Orders</span></a>
        </li>
		<li class="nav-item">
          <a class="nav-link" href="{{ route('cancelReasons') }}"><i class="fas fa-comments"></i> <span>Cancel Reasons</span></a>
        </li>


		<div id="chat">
			<li class="nav-item"><a class="nav-link" href="{{ url('/chat') }}">
			<i class="fas fa-comments"></i> <span>Chats</span></a></li>
		</div>


		@endif

			</ul>
    </div>
    </li>
    </ul>
</div>
</nav>
</div>