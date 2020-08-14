<?php get_header();?>
<br/>
<div class="container">
  <h4>Resultados da busca por: <?php echo get_search_query();?></h4>
  <br/>
    <div class="row">
        <div class="col-md-9">
          <?php 
            if(have_posts()):
              echo '<ul class="media-list pl-0">';
             while(have_posts()): the_post();
             
             $image = '';
             if (has_post_thumbnail()){
                 $image = sprintf('<div class="media-left"><a href="%s">%s</a></div>',
                get_the_permalink(), 
                get_the_post_thumbnail());
             }

             $body = sprintf('<div class="media-body ml-3"><h3 class="media-heading"><a href="%s">%s</a></h3><p>%s</p></div>',
             get_the_permalink(), get_the_title(), get_the_content('Continue lendo...'));

             printf('<li class="media">%s%s</li>',$image,$body);
             printf('<hr>');
             endwhile;
             echo "</ul>";
            else:
             echo "<p>Ainda não há nenhuma notícia publicada.</p>";
            endif;
          ?>
        </div>
        <div class="col-md-3">
            <?php get_sidebar(); ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>