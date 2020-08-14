<form class="form-horizontal" action="<?php echo home_url('/')?>" method="get">
<div class="form-group">
    <input type="search" name="s" class="form-control" value="<?php echo get_search_query(); ?>">
</div>
<div class="form-group">
    <button class="btn btn-dark" type="submit">Pesquisar</button>
</div>
</form>