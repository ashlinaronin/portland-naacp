<?php
function the_breadcrumb() {
    echo '<ul id="crumbs">';
  if (!is_home()) {
    $newslink = get_bloginfo( 'url' );
    echo '<li><a href="' . $newslink . '/news">';
    echo 'News';
    echo "</a></li>";
    if (is_single()) {
      echo "</li><li>";
      the_title();
      echo '</li>';
    } elseif (is_page()) {
      echo '<li>';
      echo the_title();
      echo '</li>';
    }
  }
  elseif (is_tag()) {single_tag_title();}
  elseif (is_day()) {echo"<li>Archive for "; the_time('F jS, Y'); echo'</li>';}
  elseif (is_month()) {echo"<li>Archive for "; the_time('F, Y'); echo'</li>';}
  elseif (is_year()) {echo"<li>Archive for "; the_time('Y'); echo'</li>';}
  elseif (is_author()) {echo"<li>Author Archive"; echo'</li>';}
  elseif (isset($_GET['paged']) && !empty($_GET['paged'])) {echo "<li>Blog Archives"; echo'</li>';}
  elseif (is_search()) {echo"<li>Search Results"; echo'</li>';}
  echo '</ul>';
}
?>