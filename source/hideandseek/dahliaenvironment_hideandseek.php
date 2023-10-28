<?php

class dahliaenvironment_hideandseek
{
    $character_map = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789'\";:,<.>/?~`!@#$%^&*()-_=+[{]}|\\";

    function decoration_element_iterator($character, $iterations)
    {
        $output = ""+$character;

        //Find index of character contained within the character map
        $index_of_character_within_character_map = 0;
        $keep_searching = 1;
        while($keep_searching == 1)
        {
            if( strcmp($character_map[$index_of_character_within_character_map], $character) == 0)
            {
                $keep_searching = 0;
            }else{
                $index_of_character_within_character_map = $index_of_character_within_character_map + 1;
                if($index_of_character_within_character_map >= strlen($character_map))
                {
                    $keep_searching = 0;
                }
            }
        }

        $output = $character_map[$character_map];

        return $output;
    }

    function hide($decoration_to_hide)
    {
        $output = "";

        //INPUT MUST BE LARGER THAN 32 CHARACTERS.

        //For each character iterate using the integer representation of each and every other character(exluding the character to be modified).
        $total_characters = strlen($decoration_to_hide);
        $decoration_to_hide_index = 0;
        while($decoration_to_hide_index < $total_characters)
        {
            $character_to_iterate = $decoration_to_hide[$decoration_to_hide_index];

            $character_iterator = 0;
            while($character_iterator < $total_characters)
            {

                //skip the index pertaining to "character_to_iterate"
                if($character_iterator != $decoration_to_hide_index)
                {
                    //apply iterate

                }
            }

            $index = $index + 1;
        }

        return $output;
    }
}

?>

