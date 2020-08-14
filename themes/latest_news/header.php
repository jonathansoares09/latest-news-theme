<!DOCTYPE html>
<?php wp_head(); ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="<?php bloginfo('url');?>">
   <img src='<?php echo get_stylesheet_directory_uri()."/assets/images/logo.png";?>' id="logo" class="d-inline-block align-top"></img>
  </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
        <?php 
            $pages = get_pages(['parent' => 0]);
            foreach ($pages as $p):
                $link = get_page_link($p->ID);
                $childPages = get_pages(['child_of' => $p->ID]);
                if(!count($childPages)) {
                $title = $p->post_title;
                printf('<li class="nav-item"><a class="nav-link" href="%s">%s</a></li>',$link,$title);
                } else {
                  echo'<li class="nav-item dropdown">';
                   printf('<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                   %s </a>',$p->post_title);

                  echo '<ul class="dropdown-menu" aria-labelledby="navbarDropdown">';
                  foreach ($childPages as $child) {
                    $link = get_page_link($child->ID);
                    $title = $child->post_title;
                    printf('<li><a class="dropdown-item" href="%s">%s</a></li>',$link,$title);
                  }
                  echo "</li></ul>";
                }
            endforeach;    
        ?>
    </ul>
  </div>
</nav>
