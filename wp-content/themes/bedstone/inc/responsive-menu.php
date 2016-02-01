<div class="responsive-nav-holder"> 
  
  <div class="responsive-nav container">   

    <ul>

      <li class="responsive-close"><a href="#"><i class="fa fa-times"></i></a></li>

      <li class="is-parent<?php if(is_section(10)): ?> is-current<?php endif; ?>">
        <a href="<?php echo get_permalink(10); ?>"><?php echo get_the_title(10); ?></a>
      </li>

      <li class="is-parent<?php if(is_section(11)): ?> is-current<?php endif; ?>">
        <a href="<?php echo get_permalink(11); ?>"><?php echo get_the_title(11); ?></a>
        <div class="children">
          <ul>
            <li class="is-parent<?php if(is_section(28)): ?> is-current<?php endif; ?>">
              <a href="<?php echo get_permalink(28); ?>"><?php echo get_the_title(28); ?></a>
            </li>

            <li class="is-parent<?php if(is_section(PAGE_EDUCATION)): ?> is-current<?php endif; ?>">
              <a href="<?php echo get_permalink(PAGE_EDUCATION); ?>"><?php echo get_the_title(29); ?></a>
            </li>   
          </ul>
        </div>
      </li>

      <li class="is-parent<?php if(is_section(PAGE_IMPACT)): ?> is-current<?php endif; ?>">
        <a href="<?php echo get_permalink(PAGE_IMPACT); ?>"><?php echo get_the_title(PAGE_IMPACT); ?></a>
        <div class="children">
          <?php echo bedstone_sub_menu(PAGE_IMPACT) ?>
        </div>
      </li>

      <?php $blog = get_option('page_for_posts'); ?>

      <li class="is-parent<?php if(is_section($blog) || is_single() || is_archive()): ?> is-current<?php endif; ?>">
        <a href="<?php echo get_permalink($blog); ?>"><?php echo get_the_title($blog); ?></a>
      </li>

      <li class="is-parent<?php if(is_section(14)): ?> is-current<?php endif; ?>">
        <a href="<?php echo get_permalink(14); ?>"><?php echo get_the_title(14); ?></a>
      </li>

      <li class="is-parent<?php if(is_section(15)): ?> is-current<?php endif; ?>">
        <a href="<?php echo get_permalink(15); ?>"><?php echo get_the_title(15); ?></a>
      </li>

      <li class="donate"><a href="<?php echo get_permalink(46); ?>" class="button button-cta">Donate</a></li>

    </ul>

    <div class="social mobile">
      <ul>
        <li class="social-facebook"><a href="<?php the_ext('social-facebook'); ?>" target="_blank"></a></li>
        <li class="social-twitter"><a href="<?php the_ext('social-twitter'); ?>" target="_blank"></a></li>
        <li class="social-rss"><a href="<?php bloginfo('rss2_url'); ?>" target="_blank"></a></li>
        <li class="social-youtube"><a href="<?php the_ext('social-youtube'); ?>" target="_blank"></a></li>
      </ul>
    </div>

  </div>

</div>