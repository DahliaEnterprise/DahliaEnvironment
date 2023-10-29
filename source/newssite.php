<?php

//Include the dahlia environment
include("/var/www/html/dahliaenvironment/dahliaenvironment.php");


$newssite_breadcrumbs = new dahliaenvironment_breadcrumbs();

//Hike (establish a connection)
$newssite_breadcrumbs->hike("newssite", "root", "password");

/** Cache information **/
$cache_of_category_information = $newssite_breadcrumbs->inaugurate_hike_according_to_plan_using_select_trails_only(["id", "display_name"], "directory_of_categories");

?>
<html>
    <head>
        <title>News Site | Home</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Prompt:ital@1&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@1,300&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
        <style type="text/css">
            *{
                margin:0;
                padding:0;
            }

            body
            {
                background: rgb(245,245,220);
                background: linear-gradient(90deg, rgba(245,245,220,1) 0%, rgba(250,235,215,1) 35%, rgba(247,231,206,1) 100%);
            }

            .header_text
            {
                font-family: 'Prompt', sans-serif;
                text-align:center;
                padding:1em;
                width:95.4%;
                font-size:2em;
            }

            .menu_container
            {
                width:99.99%;
                height:20px;
                border-top: #c3b091 solid 1px;
                border-bottom: #c3b091 solid 1px;
                text-align:center;
                padding-top:0.5em;
                padding-bottom:0.5em;

            }

            .news_story_main_attraction_container
            {
                width:99.99%;
            }

            .news_story_main_attraction_image_container
            {
                width:98%;
                margin:1em;
                border:1px solid #000;
                height:300px;
                background-color:grey;
            }

            #news_story_tablet_container
            {
                opacity:0.0;
            }

            .news_story_tablet_story_container
            {
                width:98.7%;
                margin-left:1.1%;

            }

            .news_story_tablet_story_left
            {
                float:left;
                width:32.999999%;
                height:250px;
            }

            .news_story_tablet_story_center
            {
                float:left;
                width:32.999999%;
                height:250px;
            }

            .news_story_tablet_story_right
            {
                float:left;
                width:32.999999%;
                height:250px;
            }

            .news_story_table_story_image_container
            {
                background: grey;
                float:left;
                margin-left: 2%;
                margin-top: 2%;
                margin-right: 2%;
                width: 150px;
                height:150px;

            }

            #personalize_your_experience_hover_container
            {
                    position:fixed;
                    bottom:0;
                    left:0;
                    width:99.999999%;
                    height:30px;
                    background:white;
                    text-align:center;
                    background-color:#c4ae78;
                    box-shadow: 1px -2px 5px 2px rgba(0,0,0,0.53);
                    -webkit-box-shadow: 1px -2px 5px 2px rgba(0,0,0,0.53);
                    -moz-box-shadow: 1px -2px 5px 2px rgba(0,0,0,0.53);
            }

            .personalize_your_experience:link
            {
                color:#FFF;
                text-decoration: none;
                font-family: 'Roboto', sans-serif;
            }

            .personalize_your_experience:active
            {
                color:#FFF;
                text-decoration: none;
                font-family: 'Roboto', sans-serif;
            }

            .personalize_your_experience:visited
            {
                color:#FFF;
                text-decoration: none;
                font-family: 'Roboto', sans-serif;
            }

            #personalize_your_experience_button_container
            {
                background: rgb(196,174,120);
                background: linear-gradient(90deg, rgba(196,174,120,1) 0%, rgba(213,191,136,1) 17%, rgba(213,191,136,1) 83%, rgba(196,174,120,1) 100%);
                width:400px;
                height:30px;
                margin:auto;
            }

            #personalize_your_experience_button_container:hover
            {
                 background: rgb(196,174,120);
                background: linear-gradient(90deg, rgba(196,174,120,1) 0%, rgba(176,156,106,1) 17%, rgba(176,156,106,1) 83%, rgba(196,174,120,1) 100%);
                width:400px;
                height:30px;
                margin:auto;
                padding-top:0.2em;
            }

            #personalize_your_experience_login_form_container
            {
                display:none;
            }

        </style>
        <script type="text/javascript">
            var fade_in_all_page_elements = null;



            function page_loaded()
            {
                fade_in_all_page_elements = new page_loaded_fade_in_elements();
                document.getElementById("news_story_tablet_container").style.opacity = "0.0";
                document.getElementById("body_container").style.opacity = "0.0";
                document.getElementById("personalize_your_experience_hover_container").style.opacity = 0.0;

                //fade_in_all_page_elements.begin_fade_in();
            }

            /** ** ** **/
            class page_loaded_fade_in_elements
            {
                constructor()
                {
                    this.fade_in_stage = 0;
                    this.fade_in_timer_iterval = setInterval(this.begin_fade_in, (1000/30));
                }

                begin_fade_in()
                {
                    let new_opacity = ( parseFloat(document.getElementById("news_story_tablet_container").style.opacity) + 0.03 );
                    if(parseInt(new_opacity * 1000000) < 1000000)
                    {

                        document.getElementById("news_story_tablet_container").style.opacity = new_opacity;
                        document.getElementById("body_container").style.opacity = new_opacity;

                    }else{
                        this.fade_in_timer_interval = null;
                    }

                    if((new_opacity * 1000000) >= 500000)
                    {
                        this.fade_in_stage = 1;
                    }

                    if(this.fade_in_stage == 1)
                    {
                        document.getElementById("personalize_your_experience_hover_container").style.opacity = parseFloat(document.getElementById("personalize_your_experience_hover_container").style.opacity) + 0.035;
                    }
                }
            }
            /** ** ** **/

            function initailize_personalized_experience()
            {
                document.getElementById("personalize_your_experience_hover_container").style.height = "100px";
                document.getElementById("personalize_your_experience_button_container").style.display = "none";
                document.getElementById("personalize_your_experience_login_form_container").style.display = "block";
            }

class DahliaEnvironmentHideAndSeek {
    constructor() {
        this.characterMap = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789'\";:,<.>/?~`!@#$%^&*()-_=+[{]}|\\";
    }

    decorationElementIterator(character, iterations) {
        const output = {
            character: `${character}`,
            successfulProcess: -1
        };

        // Find index of character contained within the character map
        let characterFound = 1;
        let indexOfCharacterWithinCharacterMap = 0;
        let keepSearching = 1;

        while (keepSearching === 1) {
            if (this.characterMap.charAt(indexOfCharacterWithinCharacterMap) === character) {
                keepSearching = 0;
            } else {
                indexOfCharacterWithinCharacterMap = indexOfCharacterWithinCharacterMap + 1;
                if (indexOfCharacterWithinCharacterMap >= this.characterMap.length) {
                    characterFound = 1;
                    keepSearching = 0;
                }
            }
        }

        if (characterFound === 1) {
            // Index of character found
            // Traverse the index of the character map with the strength of intended iterations
            let strengthAchievedIntensityTraversed = 0;
            let characterMapIndex = indexOfCharacterWithinCharacterMap;

            while (strengthAchievedIntensityTraversed < iterations) {
                characterMapIndex = characterMapIndex + 1;
                if (characterMapIndex >= this.characterMap.length) {
                    // Loop to the beginning of the ring buffer
                    characterMapIndex = 0;
                }

                strengthAchievedIntensityTraversed = strengthAchievedIntensityTraversed + 1;
            }

            // Produce result
            output.character = `${this.characterMap.charAt(characterMapIndex)}`;
            output.successfulProcess = 1;
        }

        return output;
    }

    hide(decorationToHide) {
        let output = "";

        // INPUT MUST BE LARGER THAN 32 CHARACTERS.

        // For each character, iterate using the integer representation of each and every other character (excluding the character to be modified).
        const totalCharacters = decorationToHide.length;

        for (let decorationToHideIndex = 0; decorationToHideIndex < totalCharacters; decorationToHideIndex++) {
            const characterToIterate = decorationToHide.charAt(decorationToHideIndex);

            for (let characterIterator = 0; characterIterator < totalCharacters; characterIterator++) {
                // Skip the index pertaining to "characterToIterate"
                if (characterIterator !== decorationToHideIndex) {
                    // Apply iterate
                }
            }
        }

        return output;
    }
}
        </script>
    </head>
    <body onLoad="page_loaded();">
        <div id="body_container">
            <div style="" class="header_text">
                The News Site Times
            </div>
            <div class="menu_container">
            <?php
                $is_first = 1;
                $row_data = null;
                while(($row_data = $cache_of_category_information["stmt"]->fetch()) != null)
                {
                    if($is_first == 1)
                    {
                        echo $row_data["display_name"];
                        $is_first = 0;
                    }else if($is_first == 0)
                    {
                        echo "&nbsp;&middot;&nbsp;".$row_data["display_name"];
                    }
                }

            ?>
            </div>
            <div class="news_story_main_attraction_container">
                <div class="news_story_main_attraction_image_container">
                    &nbsp;
                </div>
            </div>
            <div id="news_story_tablet_container">
                <div class="news_story_tablet_story_container">
                    <div class="news_story_tablet_story_left">
                        <div class="news_story_table_story_image_container">
                            &nbsp;
                        </div>
                        <p style="padding-top:0.7em;padding-left:0.7em;font-family: 'Josefin Sans', sans-serif;">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                        </p>
                    </div>
                    <div class="news_story_tablet_story_center">
                        <div class="news_story_table_story_image_container">
                            &nbsp;
                        </div>
                        <p style="padding-top:0.7em;padding-left:0.7em;font-family: 'Josefin Sans', sans-serif;">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                        </p>
                    </div>
                    <div class="news_story_tablet_story_right">
                        <div class="news_story_table_story_image_container">
                            &nbsp;
                        </div>
                        <p style="padding-top:0.7em;padding-left:0.7em;font-family: 'Josefin Sans', sans-serif;">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                        </p>
                    </div>
                </div>
                <div class="news_story_tablet_story_container">
                    <div class="news_story_tablet_story_left">
                        <div class="news_story_table_story_image_container">
                            &nbsp;
                        </div>
                        <p style="padding-top:0.7em;padding-left:0.7em;font-family: 'Josefin Sans', sans-serif;">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                        </p>
                    </div>
                    <div class="news_story_tablet_story_center">
                        <div class="news_story_table_story_image_container">
                            &nbsp;
                        </div>
                        <p style="padding-top:0.7em;padding-left:0.7em;font-family: 'Josefin Sans', sans-serif;">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                        </p>
                    </div>
                    <div class="news_story_tablet_story_right">
                        <div class="news_story_table_story_image_container">
                            &nbsp;
                        </div>
                        <p style="padding-top:0.7em;padding-left:0.7em;font-family: 'Josefin Sans', sans-serif;">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div id="personalize_your_experience_hover_container">
            <div id="personalize_your_experience_button_container">
                <a href="javascript:void(0)" onClick= "initailize_personalized_experience();" class="personalize_your_experience">Personalize your experience</a>
            </div>
            <div id="personalize_your_experience_login_form_container">
                <input type="text" style="height:50px;text-align:center;"/><br/>
            </div>
        </div>
        <Br/><Br/><Br/><Br/><Br/><Br/><Br/><Br/><Br/><Br/><Br/><Br/><Br/><Br/><Br/><Br/><Br/><Br/><Br/><Br/><Br/><Br/><Br/><Br/><Br/>
    </body>
</html>
