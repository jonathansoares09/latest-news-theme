<?php /* get_search_form() */ ?>
<h4 class="text-center">Notícias por categorias</h4>
<ul class="list-group">
    <?php
        $categorias = get_categories();
        foreach($categorias as $categoria) {
            printf('<li class="list-group-item"><a href="%s">%s</a></li>',
            get_category_link($categoria->term_id),$categoria->name);
        }
    ?>
</ul>
<br/>
<h4 class="text-center">Notícias por Tags</h4>
<ul class="list-group">
    <?php
        $tags = get_tags();
        foreach($tags as $tag) {
            printf('<li class="list-group-item"><a href="%s">%s</a></li>',
            get_tag_link($tag->term_id),$tag->name);
        }
    ?>
</ul>
<br/>
<h4 class="text-center">Encontre por busca</h4>
<?php get_search_form() ?>