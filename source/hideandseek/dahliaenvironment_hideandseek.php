<?php

class dahliaenvironment_hideandseek
{
    function hide($decoration_to_hide)
    {
        $output = "";

        //For each character iterate using the integer representation of each and every other character(exluding the character to be modified).
        $total_characters = strlen($decoration_to_hide);
        $decoration_to_hide_index = 0;
        while($decoration_to_hide_index < $total_characters)
        {
            $character_to_iterate = $decoration_to_hide[$decoration_to_hide_index];

            $character_iterator = 0;
            while($character_iterator < $total_characters)
            {

                //skip
            }

            $index = $index + 1;
        }

        return $output;
    }
}

?>

