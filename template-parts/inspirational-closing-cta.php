<div class="module__closing-cta callout large text-center">
    <div>
        <h4><?php the_field('footer_message', 'option'); ?></h4>
    </div>
    <div class="cta-links button-group stacked-for-small align-center">

      <?php
        if (have_rows('footer_cta-links', 'option')):
          while(have_rows('footer_cta-links', 'option')): the_row();
            $link_1 = get_sub_field('link_1');
            $link_2 = get_sub_field('link_2');

            if ($link_1): ?>
              <a class="button" href="<?php echo $link_1['url']; ?>" target="<?php echo $link_1['target']; ?>"><?php echo $link_1['title']; ?></a>
            <?php endif;
            if ($link_2): ?>
              <a class="button hollow" href="<?php echo $link_2['url']; ?>" target="<?php echo $link_2['target']; ?>"><?php echo $link_2['title']; ?></a>
            <?php endif;
          endwhile;
        endif;
      ?>

    </div>
</div>