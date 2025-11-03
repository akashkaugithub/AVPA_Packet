<!-- SIDEBAR -->
	<section id="sidebar">
		<a href="javascript:void(0);" class="brand">
			<img src="{{asset('admin/images/ca-image.jpg')}}" alt="">
		</a>
		<ul class="side-menu">
			<li class="{{ Request::is('teams-management') ? 'active' : '' }}">
				<a href="{{route('admin.teams.management')}}">
					<img src="{{asset('admin/images/menu-icons/1.svg')}}" alt="">
					<span class="text">Teams Management</span>
				</a>
			</li>
			<li class="{{ Request::is('service-management') ? 'active' : '' }}">
				<a href="{{route('admin.service.management')}}">
					<img src="{{asset('admin/images/menu-icons/5.svg')}}" alt="">
					<span class="text">Service Management</span>
				</a>
			</li>
			<li class="{{ Request::is('news-room-management') ? 'active' : '' }}">
				<a href="{{route('admin.news.management')}}">
					<img src="{{asset('admin/images/menu-icons/3.svg')}}" alt="">
					<span class="text">News Room Management</span>
				</a>
			</li>
			<li class="{{ Request::is('quick-links-management') ? 'active' : '' }}">
				<a href="{{route('admin.quick.link.management')}}">
					<img src="{{asset('admin/images/menu-icons/5-2.svg')}}" alt="">
					<span class="text">Quick Link Management</span>
				</a>
			</li>
			<li class="{{ Request::is('get-in-touch') ? 'active' : '' }}">
				<a href="{{route('admin.get.in.touch')}}">
					<img src="{{asset('admin/images/menu-icons/2.svg')}}" alt="">
					<span class="text">Get In Touch</span>
				</a>
			</li>
			<li class="{{ Request::is('industries-management') ? 'active' : '' }}">
				<a href="{{route('admin.industries.management')}}">
					<img src="{{asset('admin/images/menu-icons/3.svg')}}" alt="">
					<span class="text">Industries Management</span>
				</a>
			</li>
			<li class="{{ Request::is('testimonial-management') ? 'active' : '' }}">
				<a href="{{route('admin.testimonial.management')}}">
					<img src="{{asset('admin/images/menu-icons/3.svg')}}" alt="">
					<span class="text">Testimonial Management</span>
				</a>
			</li>
			<li class="{{ Request::is('address-management') ? 'active' : '' }}">
				<a href="{{route('admin.address.management')}}">
					<img src="{{asset('admin/images/menu-icons/5.svg')}}" alt="">
					<span class="text">Address Management</span>
				</a>
			</li>
			<li class="{{ Request::is('trusted-projects') ? 'active' : '' }}">
				<a href="{{route('admin.trusted.project')}}">
					<img src="{{asset('admin/images/menu-icons/3.svg')}}" alt="">
					<span class="text">Trusted Projects</span>
				</a>
			</li>

			<li class="{{ Request::is('admin-about-us') ? 'active' : '' }}">
				<a href="{{route('admin.about.us')}}">
					<img src="{{asset('admin/images/menu-icons/5.svg')}}" alt="">
					<span class="text">About Us</span>
				</a>
			</li>
			<li class="{{ Request::is('admin-privacy-terms') ? 'active' : '' }}">
				<a href="{{route('admin.privacy.terms')}}">
					<img src="{{asset('admin/images/menu-icons/5-2.svg')}}" alt="">
					<span class="text">Privacy policy & Terms</span>
				</a>
			</li>
		
			<li class="{{ Request::is('gallery-management') ? 'active' : '' }}">
				<a href="{{route('admin.gallery.management')}}">
					<img src="{{asset('admin/images/menu-icons/8.svg')}}" alt="">
					<span class="text">Gallery Management</span>
				</a>
			</li>
			<li>
				<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#logout" data-dismiss="modal">
					<img src="{{asset('admin/images/menu-icons/10.svg')}}" alt="">
					<span class="text">Logout</span>
				</a>
			</li>
		</ul>
	</section>
	<!-- SIDEBAR -->