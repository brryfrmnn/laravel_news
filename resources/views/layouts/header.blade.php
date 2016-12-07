<header>
	<!--Top-->
	<nav id="top">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<strong>Welcome to Us!</strong>
				</div>
				<div class="col-md-6">
					<ul class="list-inline top-link link">
						<li><a href="index.html"><i class="fa fa-home"></i> Home</a></li>
						<li><a href="contact.html"><i class="fa fa-comments"></i> Contact</a></li>
						<li><a href="#"><i class="fa fa-question-circle"></i> FAQ</a></li>
					</ul>
				</div>
			</div>
		</div>
	</nav>
	
	<!--Navigation-->
    <nav id="menu" class="navbar container">
		<div class="navbar-header">
			<button type="button" class="btn btn-navbar navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse"><i class="fa fa-bars"></i></button>
			<a class="navbar-brand" href="#">
				<div class="logo"><span>Newspaper</span></div>
			</a>
		</div>
		<div class="collapse navbar-collapse navbar-ex1-collapse">
			<ul class="nav navbar-nav">
				<li><a href="index.html">Home</a></li>
				<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Account <i class="fa fa-arrow-circle-o-down"></i></a>
					<div class="dropdown-menu">
						<div class="dropdown-inner">
							<ul class="list-unstyled">
								<li><a href="archive.html">Login</a></li>
								<li><a href="archive.html">Register</a></li>
							</ul>
						</div>
					</div>
				</li>
				<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Video <i class="fa fa-arrow-circle-o-down"></i></a>
					<div class="dropdown-menu">
						<div class="dropdown-inner">
							<ul class="list-unstyled">
								<li><a href="archive.html">Text 201</a></li>
								<li><a href="archive.html">Text 202</a></li>
								<li><a href="archive.html">Text 203</a></li>
								<li><a href="archive.html">Text 204</a></li>
								<li><a href="archive.html">Text 205</a></li>
							</ul>
						</div> 
					</div>
				</li>
				<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Category <i class="fa fa-arrow-circle-o-down"></i></a>
					<div class="dropdown-menu" style="margin-left: -203.625px;">
						<div class="dropdown-inner">
						@php 
							$items = App\Category::all()->chunk(4);
						@endphp

						@foreach($items as $categories)
							<ul class="list-unstyled">

								@foreach($categories as $category)
									<li><a href="{{route('post.index', $category->id)}}">{{$category->name}}</a></li>
								@endforeach
							</ul>
						@endforeach
						</div>
					</div>
				</li>
				<li><a href="archive.html"><i class="fa fa-cubes"></i> Blocks</a></li>
				<li><a href="contact.html"><i class="fa fa-envelope"></i> Contact</a></li>
			</ul>
			<ul class="list-inline navbar-right top-social">
				<li><a href="#"><i class="fa fa-facebook"></i></a></li>
				<li><a href="#"><i class="fa fa-twitter"></i></a></li>
				<li><a href="#"><i class="fa fa-pinterest"></i></a></li>
				<li><a href="#"><i class="fa fa-google-plus-square"></i></a></li>
				<li><a href="#"><i class="fa fa-youtube"></i></a></li>
			</ul>
		</div>
	</nav>
</header>