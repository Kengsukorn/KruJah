	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

	    <!-- Header
		============================================= -->
	    <header id="header" class="full-header">
	        <div id="header-wrap">
	            <div class="container">
	                <div class="header-row">

	                    <!-- Logo
						============================================= -->
	                    <div id="logo">
	                        <a href="index.php" class="standard-logo" data-dark-logo="images/logo-dark.png"><img src="images/logo.png" alt="test"></a>
	                        <a href="index.php" class="retina-logo" data-dark-logo="images/logo-dark@2x.png"><img src="images/logo@2x.png" alt="test"></a>
	                    </div><!-- #logo end -->

	                    <div class="header-misc">




	                    </div>

	                    <div id="primary-menu-trigger">
	                        <svg class="svg-trigger" viewBox="0 0 100 100">
	                            <path d="m 30,33 h 40 c 3.722839,0 7.5,3.126468 7.5,8.578427 0,5.451959 -2.727029,8.421573 -7.5,8.421573 h -20"></path>
	                            <path d="m 30,50 h 40"></path>
	                            <path d="m 70,67 h -40 c 0,0 -7.5,-0.802118 -7.5,-8.365747 0,-7.563629 7.5,-8.634253 7.5,-8.634253 h 20"></path>
	                        </svg>
	                    </div>

	                    <!-- Primary Navigation
						============================================= -->
	                    <nav class="primary-menu">

	                        <ul class="menu-container">
	                            <li class="menu-item">
	                                <a class="menu-link" href="index.php">
	                                    <div>Home</div>
	                                </a>
	                            </li>
	                            <li class="menu-item">
	                                <a class="menu-link" href="about.php">
	                                    <div>About</div>
	                                </a>
	                            </li>
	                            <li class="menu-item">
	                                <a class="menu-link" href="contact.php">
	                                    <div>Contact</div>
	                                </a>
	                            </li>

	                        </ul>

	                    </nav>

	                    <script>
	                        document.querySelectorAll(".menu-link").forEach((link) => {
	                            if (link.href === window.location.href) {
	                                link.classList.add("active");
	                                link.setAttribute("aria-current", "page");
	                            }
	                        });
	                    </script>

	                    <!-- #primary-menu end -->

	                    <form class="top-search-form" action="search.html" method="get">
	                        <input type="text" name="q" class="form-control" value="" placeholder="Type &amp; Hit Enter.." autocomplete="off">
	                    </form>

	                </div>
	            </div>
	        </div>
	        <div class="header-wrap-clone"></div>
	    </header><!-- #header end -->

	    