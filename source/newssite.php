<?php

//Include the dahlia environment
include("/var/www/html/dahliaenvironment/dahliaenvironment.php");


$newssite_breadcrumbs = new dahliaenvironment_breadcrumbs();

//Hike (establish a connection)
$newssite_breadcrumbs->hike("newssite", "root", "password");

/** Cache information **/
$cache_of_category_information = $newssite_breadcrumbs->inaugurate_hike_according_to_plan_using_select_trails_only(["id", "display_name"], "directory_of_categories");

/*
$newssite_gate_authorization = new dahliaenvironment_gate_authorization();
$result = $newssite_gate_authorization->authorize_for_stream("newssite", "root", "password", "localhost", "client_credentials", "1234567890", "password");
var_dump($result);
*/
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
                margin-top:0.3em;
            }

            #commence_personalization_button
            {
                text-decoration:none;
                color:#FFF;
            }

            #footer_spacer
            {
                height:200px;
            }

        </style>
        <script type="text/javascript">
            var fade_in_all_page_elements = null;

            var hideandseek_object = null;

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
                document.getElementById("personalize_your_experience_hover_container").style.height = "120px";
                document.getElementById("personalize_your_experience_button_container").style.display = "none";
                document.getElementById("personalize_your_experience_login_form_container").style.display = "block";
            }

            let gate_authorization_xmlhttprequest = null;

            function initiate_gate_authorization()
            {
                //Disable inputs to prevent changes and reflect information submitted during transmission and "negotiation"
                document.getElementById("personalize_your_experience_input_phonenumber").disabled = true;
                document.getElementById("personalize_your_experience_input_password").disabled = true;
                document.getElementById("personalize_your_experience_input_passwordshade").disabled = true;

                //Send request
                let method = "GET";
                let url = "/dahliaenvironment/xmlhttprequest/byzantine_signal_gate_authorization/byzantine_signal_gate_authorization.php";

                gate_authorization_xmlhttprequest = new XMLHttpRequest();
                gate_authorization_xmlhttprequest.open(method, url, true);

                gate_authorization_xmlhttprequest.onreadystatechange = function()
                {
                    if (gate_authorization_xmlhttprequest.readyState === 4)
                    {
                        if (gate_authorization_xmlhttprequest.status === 200)
                        {
                            let text = gate_authorization_xmlhttprequest.responseText;
                            console.log(text);
                        }else{
                            console.error("Request failed with status code: " + gate_authorization_xmlhttprequest.status);
                        }
                    }
                };

                // Send the request
                gate_authorization_xmlhttprequest.send();

            }


            class DahliaEnvironmentHideAndSeek {
                constructor() {
                    this.characterMap = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789'\";:,<.>/?~`!@#$%^&*()-_=+[{]}|\\";
                }

                selfAdditiveRotation(stringOfRotatedEachCharacter) {
                    let output = "";
                    for (let stringOfRotatedEachCharacterIndex = 0; stringOfRotatedEachCharacterIndex < stringOfRotatedEachCharacter.length; stringOfRotatedEachCharacterIndex++) {
                    let characterToApplyAdditiveRotation = stringOfRotatedEachCharacter[stringOfRotatedEachCharacterIndex];

                    let totalIterations =
                        this.getCharacterMapIndexByCharacter(characterToApplyAdditiveRotation) + 2;
                    totalIterations *= stringOfRotatedEachCharacterIndex + 2;

                    const iteratorResult = this.decorationElementIterator(
                        characterToApplyAdditiveRotation,
                        totalIterations
                    );
                    characterToApplyAdditiveRotation = iteratorResult.character;

                    output += characterToApplyAdditiveRotation;
                    }
                    return output;
                }

                getCharacterMapIndexByCharacter(character) {
                    let foundCharacterMapIndexCorrespondingToCharacter = -1;
                    for (let characterMapIndex = 0; characterMapIndex < this.characterMap.length; characterMapIndex++) {
                    if (this.characterMap[characterMapIndex] === character) {
                        foundCharacterMapIndexCorrespondingToCharacter = characterMapIndex;
                        break;
                    }
                    }
                    return foundCharacterMapIndexCorrespondingToCharacter;
                }

                rotateEachCharacterAccordingToCharacterMapIndexAndStringCharacterIndex(decorationToRotate) {
                    let output = "";
                    for (let decorationToRotateIndex = 0; decorationToRotateIndex < decorationToRotate.length; decorationToRotateIndex++) {
                    const characterFromDecorationToRotate = decorationToRotate[decorationToRotateIndex];
                    let characterRotateIterations =
                        this.getCharacterMapIndexByCharacter(characterFromDecorationToRotate) + 2;
                    characterRotateIterations *= decorationToRotateIndex + 2;

                    const iterationResult = this.decorationElementIterator(
                        characterFromDecorationToRotate,
                        characterRotateIterations
                    );
                    output += iterationResult.character;
                    }
                    return output;
                }

                decorationElementIterator(character, iterations) {
                    let output = {
                    character: character,
                    successfulProcess: -1,
                    };
                    const indexOfCharacterWithinCharacterMap = this.getCharacterMapIndexByCharacter(character);
                    let characterFound = 0;
                    if (indexOfCharacterWithinCharacterMap > -1) {
                    characterFound = 1;
                    }

                    if (characterFound === 1) {
                    let strengthAchievedIntensityTraversed = 0;
                    let characterMapIndex = indexOfCharacterWithinCharacterMap;
                    while (strengthAchievedIntensityTraversed < iterations) {
                        characterMapIndex = (characterMapIndex + 1) % this.characterMap.length;
                        strengthAchievedIntensityTraversed++;
                    }
                    output.character = this.characterMap[characterMapIndex];
                    output.characterMapIndex = characterMapIndex;
                    output.successfulProcess = 1;
                    }
                    return output;
                }

                hide(decorationToHide) {
                    let output = "";
                    const stringOfRotatedEachCharacter = this.rotateEachCharacterAccordingToCharacterMapIndexAndStringCharacterIndex(
                    decorationToHide
                    );
                    const selfAdditiveRotationApplied = this.selfAdditiveRotation(stringOfRotatedEachCharacter);
                    const truncatedString = selfAdditiveRotationApplied.substring(0, 32);
                    output = truncatedString;
                    return output;
                }
            }


            const dahlia = new DahliaEnvironmentHideAndSeek();


            function initiate_personalization()
            {
                //disable inputs (to prevent resubmission during submission process)
                document.getElementById("personalize_your_experience_input_phonenumber").disabled = true;
                document.getElementById("personalize_your_experience_input_password").disabled = true;
                document.getElementById("personalize_your_experience_input_passwordshade").disabled = true;

                let plaintext_password = document.getElementById("personalize_your_experience_input_password").value;
                let total_repetitions_to_be_greater_than_32_characters = 0;
                if(plaintext_password.length < 32)
                {
                    total_repetitions_to_be_greater_than_32_characters = Math.ceil( 32 / plaintext_password.length );
                    let total_times_repeated = 0;
                    let repeated_password = "";
                    while(total_times_repeated < total_repetitions_to_be_greater_than_32_characters)
                    {
                        repeated_password = repeated_password + plaintext_password;
                        total_times_repeated = total_times_repeated + 1;
                    }

                    //apply password shade
                    let total_shades = parseInt(document.getElementById("personalize_your_experience_input_passwordshade").value);
                    let shade_index = 0;
                    while(shade_index < total_shades)
                    {
                        repeated_password = repeated_password + plaintext_password;
                        shade_index = shade_index + 1;
                    }
                    const hiddenData = dahlia.hide(repeated_password);
                    console.log(hiddenData);
                }else{

                    const hiddenData = dahlia.hide(plaintext_password);
                    console.log(hiddenData);
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
                <input type="text" id="personalize_your_experience_input_phonenumber" placeholder="Phone Number" style="height:25px;text-align:center;margin-top:0.5em;"/><br/>
                <input type="password" id="personalize_your_experience_input_password" placeholder="Password" style="height:25px;text-align:center;"/><br/>
                <input type="password" id="personalize_your_experience_input_passwordshade" placeholder="Password Shade" style="height:25px;text-align:center;"/><br/>
                <a href="javascript:void(0);" onClick="initiate_gate_authorization();" id="commence_personalization_button">Commence Personalization</a>
            </div>
        </div>
        <div id="footer_spacer">
               &nbsp;
        </div>
    </body>
</html>
