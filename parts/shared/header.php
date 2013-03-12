
	<header>
		
		<!-- <h1><a href="/"><?php bloginfo( 'name' ); ?></a></h1>
		<?php bloginfo( 'description' ); ?>
		<?php get_search_form(); ?> -->
			<div class="logo">
				<span class="shot">shot</span>
				<!--<span class="sim">:</span> -->
				<span class="code">{: code}</span>
			<!-- <span class="slogan">::simpleCode</span> -->
				<p>/*ping pong code*/</p>
			</div> <!-- end .logo -->
		
			<div class="search"><?php get_search_form(); ?></div>

			<div class="menu">
				<ul class='menu-2'>
					<?php wp_list_categories('orderby=ASC&exclude=1&title_li=&hide_empty=0&title_li=');?>
				</ul>		
			</div> <!-- end .menu -->

	</header>


<div class="pagecontent">

