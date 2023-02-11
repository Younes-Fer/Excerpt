<?php 

    /**
     * 
     *  Function to get Excerpt from paragraph by number words 
     * 
     * 
     */
    function get_limit_words($nb_words, $paragraph, $end = "...")
    {
        $paragraph = trim($paragraph);
        $paragraph = strip_tags($paragraph);
        $text_limit = explode(' ', $paragraph, -1);
        if ($nb_words > 0 && $nb_words < sizeof($text_limit)) {
            $table =  array_slice($text_limit, 0, $nb_words);
            $excerpt_limit = implode(' ', $table);
            return $excerpt_limit . $end;
        }
        return $paragraph;
    }

    $text = "Function to get Excerpt from paragraph by number words";

    echo get_limit_words(6, $text, "...");

