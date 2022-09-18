<style>
	#header-1 .header-nav {
		position: relative;
		padding-right: 3em;
	}

	#header-1 .header-nav:before,
	.header-nav:after {
		content: "";
		display: table;
	}

	#header-1 .header-nav:after {
		clear: both;
	}

	#header-1 .active,
	.dot:hover {
		background-color: transparent !important;
	}

	#header-1 .menu {
		display: inline-block;
		float: right;
		list-style-type: none;
		margin: 0;
		padding: 0;
	}

	#header-1 .menu li {
		/*display: inline-block;*/
	}

	#header-1 .menu li a {
		color: #0097bf;
		display: block;
		padding: 10px;
		position: relative;
		transition: color 0.3s;
		text-decoration: none;
	}

	#header-1 .search-button {
		transform: translate(0, -50%);
		position: absolute;
		display: contents;
	}

	#header-1 .search-toggle {
		position: relative;
		display: block;
		height: 40px;
		width: 20px;
	}

	#header-1 .search-toggle::before,
	.search-toggle::after {
		content: "";
		position: absolute;
		display: block;
		transition: all 0.1s;
	}

	/*.search-toggle::before {
		border: 2px solid #0097bf;
		border-radius: 50%;
		width: 95%;
		height: 45%;
		left: -1px;
		top: 30px;
	}
	.search-toggle::after {
		height: 2px;
		width: 10px;
		background: #0097bf;
		top: 50px;
		left: 15px;
		transform: rotate(45deg);
	}*/
	/*.search-toggle.active::before {
		width: 0;
		border-width: 1px;
		border-radius: 0;
		transform: rotate(45deg);
		top: -1px;
		left: 4px;
	}
	.search-toggle.active::after {
		width: 12px;
		left: -1px;
		top: 4px;
	}*/

	.search-input:focus {
		outline: none;
	}

	#header-1 .search-box {
		position: absolute;
		bottom: 65px;
		width: 300px;
		height: 100%;
		max-height: 0;
		transform: translateY(100%);
		background-color: #00303e;
		border-radius: 30px;
		transition: all 0.3s;
		right: 45px;
	}

	#header-1 .search-box .search-input {
		width: 300px;
		height: 100%;
		padding: 0 1em;
		border: 0;
		background-color: transparent;
		opacity: 0;
		color: #92a3af;
		margin-bottom: -10px;
	}

	#header-1 .search-box .search-input::-webkit-input-placeholder {
		color: rgba(255, 255, 255, 0.4);
	}

	#header-1.show .search-box {
		max-height: 40px;
	}

	#header-1.show .search-box .search-input {
		opacity: 1;
	}
</style>

<div class="menu-page-title page-title-non-bg transparent">
	<div class="row col-12" style="background-color: black;margin: 0 auto;max-width: 1280px; display:none;">
		@unless(empty($adminHome->sasc_image))
		@if($adminHome->sasc_status === 1)
		<div class="col-6 col-lg-6 col-md-6" style="max-height: 100px;padding-right:5px;">
			<a href="{{$adminHome->sasc_link}}">
				<img src="{{$adminHome->sasc_image}}" style="width:100%;max-height: 100px">
			</a>
		</div>
		@endif
		@endunless
		@unless(empty($adminHome->prc_solution_image))
		@if($adminHome->prc_solution_status === 1)
		<div class="col-6 col-lg-6 col-md-6" style="max-height: 100px;padding-left: 5px">
			<a href="{{$adminHome->prc_solution_link}}">
				<img src="{{$adminHome->prc_solution_image}}" style="width:100%;max-height: 100px">
			</a>
		</div>
		@endif
		@endunless
		@unless(empty($adminHome->prc_training_image))
		@if($adminHome->prc_training_status === 1)
		<div class="col-6 col-lg-6 col-md-6" style="max-height: 100px;padding-right: 5px">
			<a href="{{$adminHome->prc_training_link}}">
				<img src="{{$adminHome->prc_training_image}}" style="width:100%;max-height: 100px">
			</a>
		</div>
		@endif
		@endunless
		@unless(empty($adminHome->b2b_image))
		@if($adminHome->b2b_status === 1)
		<div class="col-6 col-lg-6 col-md-6" style="max-height: 100px;padding-left: 5px">
			<a href="{{$adminHome->b2b_link}}">
				<img src="{{$adminHome->b2b_image}}" style="width:100%;max-height: 100px">
			</a>
		</div>
		@endif
		@endunless
	</div>
	<div class="color-overlay"></div>

	<header class="site-header header" id="header-1">
		<div id="site-header-wrap" class="header-layout   is-sticky">
			<div class="clearfix">
				<div id="headroom" class="site-header-main">
					<div class="container">

						<div class="row">

							<a class="logo" href="/home" title="Phone Repair Centre" rel="home">
								<img src="{{ $adminStore->logo }}" alt="Phone Repair Centre">
							</a>
							<a class="logo logo-sticky" href="/home" title="Phone Repair Centre" rel="home">
								<img src="{{ $adminStore->logo }}" alt="Phone Repair Centre">
							</a>
							<span class="btn-nav-mobile open-menu">
								<span></span>
							</span>
							<nav id="site-navigation" class="main-navigation">
								<ul id="mastmenu" class="primary-menu clearfix">
									@if (!empty($layoutsUrl))
									@foreach ($layoutsUrl as $key=>$urls)
									@if($key == 0)
									@foreach($urls as $url)
									@if($url->childs->count() > 0)
									<li id="menu-item-42" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-42">
										<a {{ ($url->target =='_blank')?'target=_blank':''  }} href="{{ sc_url_render($url->url) }}">
											{{ ($url->name) }}</a>
										<ul class="sub-menu">
											@foreach($url->childs as $child)
											<li id="menu-item-776" class="menu-item menu-item-type-post_type menu-item-object-services menu-item-776">
												<a {{ ($child->target =='_blank')?'target=_blank':''  }} href="{{ sc_url_render($child->url) }}">{{ ($child->name) }}</a>
											</li>
											@endforeach
										</ul>
									</li>
									@else
									<li id="menu-item-375" class="menu-item menu-item-type-custom menu-item-object-custom   menu-item-375">
										<a {{ ($url->target =='_blank')?'target=_blank':''  }} href="{{ sc_url_render($url->url) }}">
											{{ ($url->name) }}</a>
									</li>
									@endif
									@endforeach
									@endif
									@endforeach
									@endif

									<li id="menu-item-40" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-40">
										<div class="search-button">
											<a href="#" class="search-toggle" data-selector="#header-1" style="color: #b3bec8;font-size: 35px;">
												<i class="zmdi zmdi-search"></i>
											</a>
										</div>

									</li>
								</ul>
								<form action="" class="search-box">
									<style>
										.search-box ul {
											padding-left: 0;
											list-style: none;
											margin-top: 45px;
											box-shadow: 5px 5px 15px grey;
											max-width: 300px;
											background-color: #e2e8f0;
										}

										.search-box ul>li {
											padding-top: 5px;
											padding-bottom: 5px;
											padding-left: 15px;
										}

										.search-box ul>li:hover {
											background-color: #e2e8f0;
										}
									</style>
									<input type="text" id="search-bar" class="text search-input" placeholder="Type here to search..." />
									<ul id="results">

									</ul>
								</form>

							</nav>

						</div>
					</div>
				</div>
			</div>
		</div>
	</header>




	<script type="text/javascript">
		jQuery(function($) {
			$('.header').on('click', '.search-toggle', function(e) {
				var selector = $(this).data('selector');

				$(selector).toggleClass('show').find('.search-input').focus();
				$(this).toggleClass('active');
				const resultsList = document.getElementById('results');
				if ($('.search-toggle.active').length == 0) {
					$('.zmdi').toggleClass('zmdi-search');
					$('.zmdi').removeClass('zmdi-close');
					resultsList.innerHTML = '';
				} else {
					$('.zmdi').toggleClass('zmdi-close');
					$('.zmdi').removeClass('zmdi-search');
					resultsList.innerHTML = '';
				}
				e.preventDefault();
			});

		});
	</script>
	<script>
		const resultsList = document.getElementById('results');

		function createLi(searchResult) {
			const li = document.createElement('li');
			const link = document.createElement('a');
			link.href = searchResult.view_link;
			link.textContent = searchResult.match;
			const h5 = document.createElement('h5')
			h5.appendChild(link);
			const span = document.createElement('span');
			//span.textContent = searchResult.match;
			span.appendChild(h5);
			//li.appendChild(h4);
			li.appendChild(span);
			return li;
		}
		document.getElementById('search-bar').addEventListener('input', function(event) {
			event.preventDefault();
			const searched = event.target.value;
			fetch('/site-search?search=' + searched, {
				method: 'GET'
			}).then((response) => {
				return response.json();
			}).then((response) => {
				console.log({
					response
				})
				const results = response.data;
				// empty list
				resultsList.innerHTML = '';
				results.forEach((result) => {
					resultsList.appendChild(createLi(result))
				})
			})
		})
	</script>


	<div class="page-title-container">