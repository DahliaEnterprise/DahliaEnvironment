<?php

class dahliaenvironment_hideandseek
{
    public $character_map = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789'\";:,<.>/?~`!@#$%^&*()-_=+[{]}|\\";


    function self_additive_rotation($string_of_rotated_each_character)
    {
        $output = "";

        $string_of_rotated_each_character_index = 0;
        while( $string_of_rotated_each_character_index < strlen($string_of_rotated_each_character) )
        {
            $character_to_apply_additive_rotation = $string_of_rotated_each_character[$string_of_rotated_each_character_index];

            //per each character within string
            $string_of_rotated_each_character_second_index = 0;
            while( $string_of_rotated_each_character_second_index < strlen($string_of_rotated_each_character) )
            {
                //calculate total iterations
                $total_iterations = ($this->get_character_map_index_by_character($character_to_apply_additive_rotation) + 2);
                $total_iterations = $total_iterations * ($string_of_rotated_each_character_index + 2);

                $iterator_result = $this->decoration_element_iterator($character_to_apply_additive_rotation, $total_iterations);
                $character_to_apply_additive_rotation = $iterator_result["character"];

                $string_of_rotated_each_character_second_index = $string_of_rotated_each_character_second_index + 1;
            }

            $output = $output.$character_to_apply_additive_rotation;

            $string_of_rotated_each_character_index = $string_of_rotated_each_character_index + 1;
        }

        return $output;
    }


    function get_character_map_index_by_character($character)
    {
        $found_character_map_index_corresponding_to_character = -1;
        $character_map_index = 0;
        while( $character_map_index < strlen($this->character_map) )
        {
            if( strcmp($this->character_map[$character_map_index], $character) == 0)
            {
                $found_character_map_index_corresponding_to_character = $character_map_index;
                //stop while iterator
                $character_map_index = strlen($this->character_map);
            }

            $character_map_index = $character_map_index + 1;
        }

        $output = $found_character_map_index_corresponding_to_character;

        return $output;
    }

    function rotate_each_character_according_to_character_map_index_and_string_character_index($decoration_to_rotate)
    {
        $output = "";

        $decoration_to_rotate_index = 0;
        while( $decoration_to_rotate_index < strlen($decoration_to_rotate) )
        {
            //Handle character from "decoration_to_rotate"
            $character_from_decoration_to_rotate = $decoration_to_rotate[$decoration_to_rotate_index];
            //Determine total iterations
                //Add character map index to iterations (ensure it will grow by making it at least 2 or greater)
                $character_rotate_iterations = $this->get_character_map_index_by_character($character_from_decoration_to_rotate) + 2;
                //multiply by decoration_to_rotate_index (ensure it will grow by making it at least 2 or greater)
                $character_rotate_iterations = $character_rotate_iterations * ($decoration_to_rotate_index + 2);

            //commit to rotation
            $iteration_result = $this->decoration_element_iterator($character_from_decoration_to_rotate, $character_rotate_iterations);
            $output = $output.$iteration_result["character"];

            $decoration_to_rotate_index = $decoration_to_rotate_index + 1;
        }

        return $output;
    }

    function decoration_element_iterator($character, $iterations)
    {
        $output = [];
        $output["character"] = $character;
        $output["successful_process"] = -1;

        //Find index of character contained within the character map
        $index_of_character_within_character_map = $this->get_character_map_index_by_character($character);
        $character_found = 0;
        if($index_of_character_within_character_map > -1){ $character_found = 1; }

        if( $character_found == 1 )
        {
            //index of character found
            //traverse the index of the character map strength of intended iterations
            $strength_achieved_intensity_traversed = 0;
            $character_map_index = $index_of_character_within_character_map;
            while( $strength_achieved_intensity_traversed < $iterations )
            {
                $character_map_index = $character_map_index + 1;
                if( $character_map_index >= strlen($this->character_map) )
                {
                    //loop to begining of ring buffer
                    $character_map_index = 0;
                }

                $strength_achieved_intensity_traversed = $strength_achieved_intensity_traversed + 1;
            }

            //produce result
            $output["character"] = "".$this->character_map[$character_map_index];
            $output["character_map_index"] = $character_map_index;
            $output["successful_process"] = 1;
        }

        return $output;
    }

    function hide( $decoration_to_hide)
    {
        $output = "";

        //Rotate each character according to character map ring
        $string_of_rotated_each_character = $this->rotate_each_character_according_to_character_map_index_and_string_character_index($decoration_to_hide);

        //Apply self additive rotation
        $self_additive_rotation_applied = $this->self_additive_rotation($string_of_rotated_each_character);

        //Truncate the end of the result
        $truncated_string = substr($self_additive_rotation_applied, 0, 32);

        //convert to hex format
        $hex_format = bin2hex($truncated_string);

        $output = $hex_format;

        return $output;
    }
}

?>

