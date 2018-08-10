<div id="broadnav" class="cd-morph-dropdown nes-broadnav-container">

  <nav class="show-for-large main-nav broadnav_container">
    <ul class="broadnav_menu">
        <li class="has-dropdown products-navitem" data-content="products">
          <a href="#0">Products</a>
        </li>
        <li class="has-dropdown services-navitem" data-content="services">
          <a href="#0">Services</a>
        </li>
        <li class="has-dropdown about-navitem" data-content="about">
          <a href="#0">About</a>
        </li>
        <li class="has-dropdown contact-navitem" data-content="contact">
          <a href="#0">Contact</a>
        </li>
        <li class="has-dropdown signin-navitem" data-content="signin">
          <a href="#0">Sign In</a>
          <span></span>
        </li>
    </ul>
  </nav>

  <div class="morph-dropdown-wrapper">
    <div id="ddlist" class="dropdown-list">
        <ul>
          <li id="products" class="dropdown products-dd">
            <div class="content">
              <div><a href=""><span class="lv-icon"></span></a></div>
              <div>
                <a href="">
                  <h4>LEAD VERIFIED</h4>
                  <p>Verify and record user engagement</p>
                </a>
              </div>
            </div>
          </li>
          <li id="services" class="dropdown services-dd">
            <div class="content">
              <a href="">
                <ul>
                  <li>Marketing Strategy</li>
                  <li>SEO/SEM/Display</li>
                  <li>Social Media Marketing</li>
                  <li>Web Development</li>
                </ul>
              </a>
            </div>
          </li>
          <li id="about" class="dropdown about-dd">
            <div class="content">
              <div class="pad_more">
                <h4><a href=""><i class="far fa-globe"></i> ABOUT NEW EPOCH</a></h4>
                <br>
                <h4><a href=""><i class="fas fa-user"></i> TEAM BIOS</a></h4>
              </div>
            </div>
          </li>
          <li id="contact" class="dropdown contact-dd">
            <div class="content">
              <div class="pad_more">
                <h4><a href=""><i class="fas fa-headset"></i> SUPPORT</a></h4>
              </div>
            </div>
          </li>
          <li id="signin" class="dropdown signin-dd">
            <div class="content">
              <div class="pad_more">
                <h4><a href=""><i class="fas fa-sign-in-alt"></i> LEAD VERIFIED</a></h4>
              </div>
            </div>
          </li>
        </ul>
        <div class="bg-layer" aria-hidden="true"></div>
    </div> <!-- dropdown-list -->
  </div> <!-- morph-dropdown-wrapper -->

</div>

<?php 

/**
 * NES Broadnav (Normal navigation menu, supports anchoring)
 */

 /*
wp_nav_menu(
  array(
    'theme_location'    => 'nes2018-broadnav',
    'menu_class'        => 'broadnav_menu',
    'menu_id'           => 'broadnav',
    'container'         => 'ul',
    'container_class'   => 'nes_broadnav',
    'item_spacing'      => 'discard',
    'walker'            => new NES_Walker_Broadnav(),
    'fallback_cb'       => FALSE,
  )
);

class NES_Walker_Broadnav extends Walker_Nav_Menu {

  public function start_lvl( &$output, $depth = 0, $args = array() ) {
		// depth dependent classes
		$level = ( $depth + 2 ); // because it counts the first submenu as 0

		// build html
		$output .= "\n" . '<ul class="w-nav-list level_' . $level . '">' . "\n";
	}

	public function end_lvl( &$output, $depth = 0, $args = array() ) {
		$output .= "</ul>\n";
	}
  
	public function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
		$level = ( $depth + 1 ); // because it counts the first submenu as 0

		$classes = empty( $item->classes ) ? array() : (array) $item->classes;
		$classes[] = 'w-nav-item';
		$classes[] = 'level_' . $level;
		$classes[] = 'menu-item-' . $item->ID;

		if ( ! empty( $item->mega_menu_cols ) ) {
			$classes[] = 'columns_' . $item->mega_menu_cols;
		}

		// Removing active classes for scroll links, so they could be handled by JavaScript instead
		if ( isset( $item->url ) AND strpos( $item->url, '#' ) !== FALSE ) {
			$classes = array_diff(
				$classes, array(
				'current-menu-item',
				'current-menu-ancestor',
				'current-menu-parent',
			)
			);
		}
		$class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item, $args ) );
		$class_names = $class_names ? ' class="' . esc_attr( $class_names ) . '"' : '';

		$id = apply_filters( 'nav_menu_item_id', 'menu-item-' . $item->ID, $item, $args );
		$id = $id ? ' id="' . esc_attr( $id ) . '"' : '';

		$output .= '<li' . $id . $class_names .'>';
		if ( $item->object == 'us_widget_area' ) {
			$item_post = get_post( $item->object_id );
			if ( $item_post AND is_active_sidebar( $item_post->post_name ) ) {
				ob_start();
				dynamic_sidebar( $item_post->post_name );
				$output .= ob_get_clean();
			}

		} else {
			$attributes = ! empty( $item->attr_title ) ? ' title="' . esc_attr( $item->attr_title ) . '"' : '';
			$attributes .= ! empty( $item->target ) ? ' target="' . esc_attr( $item->target ) . '"' : '';
			$attributes .= ! empty( $item->xfn ) ? ' rel="' . esc_attr( $item->xfn ) . '"' : '';
			$attributes .= ! empty( $item->url ) ? ' href="' . esc_attr( $item->url ) . '"' : '';

			$item_output = $args->before;
			$item_output .= '<a class="w-nav-anchor level_' . $level . '" ' . $attributes . '>';
			$item_output .= $args->link_before . '<span class="w-nav-title">' . apply_filters( 'the_title', $item->title, $item->ID ) . '</span><span class="w-nav-arrow"></span>' . $args->link_after;
			$item_output .= '</a>';
			$item_output .= $args->after;

			$output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
		}


	}

	public function end_el( &$output, $item, $depth = 0, $args = array() ) {
		$output .= "</li>\n";
  }
}
*/