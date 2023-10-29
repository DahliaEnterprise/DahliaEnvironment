<?php

class dahliaenvironment_hideandseek
{
    $character_map = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789'\";:,<.>/?~`!@#$%^&*()-_=+[{]}|\\";

    function decoration_element_iterator($character, $iterations)
    {
        $output = [];
        $output["character"] = ""+$character;
        $output["successful_process"] = -1;

        //Find index of character contained within the character map
        $character_found = 1;
        $index_of_character_within_character_map = 0;
        $keep_searching = 1;
        while( $keep_searching == 1 )
        {
            if( strcmp($character_map[$index_of_character_within_character_map], $character) == 0 )
            {
                $keep_searching = 0;
            }else{
                $index_of_character_within_character_map = $index_of_character_within_character_map + 1;
                if( $index_of_character_within_character_map >= strlen($character_map) )
                {
                    $character_found = 1;
                    $keep_searching = 0;
                }
            }
        }

        if( $character_found == 1 )
        {
            //=$ index of character found
            //traverse the index of the character map strength of intended iterations
            $strength_achieved_intensity_traversed = 0;
            $character_map_index = $index_of_character_within_character_map;
            while($strength_achieved_intesity_traversed < $iterations)
            {
                $character_map_index = $character_map_index + 1;
                if($character_map_index >= strlen($character_map))
                {
                    //loop to begining of ring buffer
                    $character_map_index = 0;
                }

                $strength_achieved_intesity_traversed = $strength_achieved_intesity_traversed + 1;
            }

            //produce result
            $output["character"] = "".$character_map[$strength_achieved_intesity_traversed];
            $output["successful_process"] = 1;
        }

        return $output;
    }

    function hide( $decoration_to_hide )
    {
        $output = "";

        //INPUT MUST BE LARGER THAN 32 CHARACTERS.

        //For each character iterate using the integer representation of each and every other character(exluding the character to be modified).
        $total_characters = strlen($decoration_to_hide);
        $decoration_to_hide_index = 0;
        while( $decoration_to_hide_index < $total_characters )
        {
            $character_to_iterate = $decoration_to_hide[$decoration_to_hide_index];

            $character_iterator = 0;
            while( $character_iterator < $total_characters )
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

