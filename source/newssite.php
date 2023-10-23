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
        </style>
    </head>
    <body>
        <div id="header">
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
            <div class="news_story_tablet_container">
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
        <div style="position:fixed;bottom:0;left:0;width:99.999999%;height:50px;background:white;text-align:center;">
            <a href="/personalize">Personalize your experience</a>
        </div>
        <Br/><Br/><Br/><Br/><Br/><Br/><Br/><Br/><Br/><Br/><Br/><Br/><Br/><Br/><Br/><Br/><Br/><Br/><Br/><Br/><Br/><Br/><Br/><Br/><Br/>
    </body>
</html>
