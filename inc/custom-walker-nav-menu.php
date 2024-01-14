<?php
class Custom_Walker_Nav_Menu extends Walker_Nav_Menu {
    
    // add classes to ul sub-menus
    function start_lvl( &$output, $depth = 0, $args = array() ) {
    $indent = str_repeat( "\t", $depth );
        $classes = array( 'sub-menu' , 'my-class', 'another-class');

        // Add your additional classes here
        if ( $depth === 0 ) {
            $classes[] = 'my-menu-class';
            $classes[] = 'another-menu-class';
        }

        $class_names = implode( ' ', $classes );

        $output .= "\n$indent<ul class=\"$class_names\">\n";
    }

    // add main/sub classes to li's and links
    function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
        // depth-dependent classes
        $indent = ( $depth > 0 ? str_repeat("\t", $depth) : '' ); // code indentation
        $li_class = ( $depth > 0 ? 'sub-item' : '' ) . ' ' . ( $item->current || $item->current_item_ancestor ? 'active' : '' );
        $li_id = 'menu-item-' . $item->ID;
        $li_output = $indent . '<li id="' . $li_id . '" class="' . $li_class . '">';
        
        // link attributes
        $a_attributes = array();
        $a_attributes['class'] = ( $depth > 0 ? 'sub-link' : 'relative text-white-200 md:text-black-200 text-3xl md:text-base font-semibold tracking-wide lowercase nav-menu-item' ) . ' ' . ( $item->current || $item->current_item_ancestor ? 'active' : '' );
        $a_attributes['href'] = $item->url;
        $a_attributes['title'] = $item->title;
        $a_output = '<a';
        foreach( $a_attributes as $attribute => $value ) {
            $a_output .= ' ' . $attribute . '="' . $value . '"';
        }
        $a_output .= '>';
        $a_output .= $item->title;
        $a_output .= '</a>';

        // assemble li output
        $output .= $li_output;
        $output .= $a_output;
		
		
    }
}
?>