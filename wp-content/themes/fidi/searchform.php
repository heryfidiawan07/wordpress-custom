<form action="<?= home_url('/') ?>" method="GET" class="form-inline my-2 my-lg-0">
	<input name="s" value="<?php the_search_query(); ?>" class="form-control form-control-sm mr-sm-2" type="search" placeholder="Search..." aria-label="Search">
	<button class="btn btn-outline-success btn-sm my-2 my-sm-0" type="submit">Search</button>
</form>