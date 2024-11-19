<?php

namespace Theme;

class Template
{
    /**
     * Locate template
     * @param string $path
     * @param array $args 
     * @return string
     */
    public static function include($path, $args = [])
    {
        extract($args);
        include(self::locate($path));
    }

    /**
     * Locate template
     * @param string $path
     * @param array $args 
     * @return string
     */
    public static function locate($path)
    {
        return locate_template($path, false, true);
    }

    /**
     * Get the post ID
     * @return int
     */
    public static function getPostID()
    {
        global $post;
        return $post->ID;
    }
}
