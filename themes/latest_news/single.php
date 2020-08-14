<?php get_header();?>
<br/>
<div class="container">
    <div class="row">
        <div class="col-md-9 text-justify">
          <?php 
            if(have_posts()): the_post();
             printf('<div class="text-center"><div class="img-fluid">'); 
              the_post_thumbnail('medium_large');
             printf('</div></div><br/>');
              echo"<h3>";
              single_post_title();
              echo"</h3>";
              the_content();
            endif;
          ?>
        </div>
        <div class="col-md-3">
            <?php get_sidebar(); ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>