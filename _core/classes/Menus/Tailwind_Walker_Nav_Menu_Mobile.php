<?php

namespace Theme\Menus;

class Tailwind_Walker_Nav_Menu_Mobile extends \Walker_Nav_Menu {
    // Start Level
    function start_lvl(&$output, $depth = 0, $args = null) {
        $indent = str_repeat("\t", $depth);
        $classes = array('flex flex-col');
        $class_names = join(' ', apply_filters('nav_menu_submenu_css_class', $classes, $args, $depth));
        $class_names = $class_names ? 'class="' . esc_attr($class_names) . '"' : '';
        $output .= "\n$indent<div id=\"accordion-$args->parent_id\" class=\"hidden w-full\">\n";
        $output .= "\n$indent<ul $class_names>\n";
    }

    // Start Element
    function start_el(&$output, $item, $depth = 0, $args = null, $id = 0) {
        // Set the parent_id for the current level
        $args->parent_id = $item->ID;

        $indent = ($depth) ? str_repeat("\t", $depth) : '';
        $classes = empty($item->classes) ? array() : (array) $item->classes;
        $classes[] = 'flex flex-col items-center';
        $class_names = join(' ', apply_filters('nav_menu_css_class', array_filter($classes), $item, $args, $depth));
        $class_names = $class_names ? ' class="' . esc_attr($class_names) . '"' : '';

        $output .= $indent . '<li' . $class_names .'>';

        $atts = array();
        $atts['title']  = !empty($item->attr_title) ? $item->attr_title : '';
        $atts['target'] = !empty($item->target) ? $item->target : '';
        $atts['rel']    = !empty($item->xfn) ? $item->xfn : '';
        $atts['href']   = !empty($item->url) ? $item->url : '';

        // Handle submenu dropdowns
        if ($depth === 0 && $this->has_children) {
            $atts['data-collapse-toggle']  = 'accordion-' . $item->ID;
        }

        $attributes = '';
        foreach ($atts as $attr => $value) {
            if (!empty($value)) {
                $value = esc_attr($value);
                $attributes .= ' ' . $attr . '="' . $value . '"';
            }
        }

        $title = apply_filters('the_title', $item->title, $item->ID);
        $item_output = $args->before;
        $item_output .= '<a class="flex items-center w-full"'. $attributes .'>';
        $item_output .= $args->link_before . $title . $args->link_after;
        if ($depth === 0 && $this->has_children) {
            $item_output .= <<<SVG
                <svg 
                    style="width: .625rem; height: .625rem; margin-inline-start: 0.25rem;"
                    aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none" viewBox="0 0 6 10"
                >
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"></path>
                </svg>
            SVG;;
        }
        $item_output .= '</a>';
        $item_output .= $args->after;

        $output .= apply_filters('walker_nav_menu_start_el', $item_output, $item, $depth, $args);
    }

    // End Element
    function end_el(&$output, $item, $depth = 0, $args = null) {
        $output .= "</li>\n";
    }

    // End Level
    function end_lvl( &$output, $depth = 0, $args = null ) {
        $indent = str_repeat( "\t", $depth );
        $output .= "\n$indent</ul>\n";
        $output .= "\n$indent</div>\n";
    }
}
