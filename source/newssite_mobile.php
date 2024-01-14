<?php
include("/var/www/html/dahliaenvironment/dahliaenvironment.php");
$newssite_breadcrumbs = new dahliaenvironment_breadcrumbs();
$newssite_breadcrumbs->hike("newssite_mobile", "root", "password");
$newssite_breadcrumbs->order_ornaments("ORDER BY `front_page_ordered_list_index_point` ASC");
$fetched_of_category_information = $newssite_breadcrumbs->inaugurate_hike_according_to_plan_using_select_trails_only(["id", "display_category_name"], "heritage_category_index");
$is_first = 1;
$row_data = null;
while(($row_data = $fetched_of_category_information["stmt"]->fetch()) != null)
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
<html>
    <head>
        <title>Newssite, Mobile</title>
        <style type="text/css">
            @font-face {
                font-family: pacifico;
                src: url('/externally_aquired_fonts/Pacifico/Pacifico-Regular.ttf');
            }

            @font-face {
                font-family: DancingScript;
                src: url('/externally_aquired_fonts/DancingScript/DancingScript-VariableFont_wght.ttf');
            }

            body
            {
                background: #f7f0fa;
            }

            #body_content
            {
                min-width:200px;
                max-width:1024px;

            }

            #header_icons
            {
                height:30px;
            }

            #header_title
            {
                font-size:7em;
                font-family:pacifico;
                padding:0.1em;
                background: -webkit-linear-gradient(#6b1538, #38032d);
                -webkit-background-clip: text;
                -webkit-text-fill-color: transparent;
                width:99.999999%;
                text-align:center;

            }

            .profile_icon_container_left
            {
                float:left;
            }

            .profile_icon_container_right
            {
                float:right;
            }

            .profile_icon_img
            {
                width:100px;
                height:100px;
                border-radius:33px;
            }




            /* Subheader, Trending, and color graded containers */
            #subheader
            {
                font-family: pacifico;
                text-align:center;
                font-size:3em;
                background: -webkit-linear-gradient(#6b1538, #38032d);
                -webkit-background-clip: text;
                -webkit-text-fill-color: transparent;
            }

            .trending_posts_row_container
            {
                width:99.999999%;
                min-height:150px;
                border:1px solid #fad2de;
                border-radius:5px;
                background:#ffebf1;
                margin-bottom:1em;
                padding-bottom:0.5em;
            }

            .trending_posts_row_header
            {
                font-size:2.5em;
                font-family: pacifico;
                padding:0.2em 0.2em 0.2em 0.5em;
            }

            .trending_posts_row_excerpt
            {
                font-size:1.7em;
                font-family: DancingScript;
                padding:0 0.5em 0 0.5em;
            }

            .colorgrade_one_post_row_container
            {
                width:99.999999%;
                min-height:200px;
                border:1px solid #fabdcf;
                border-radius:5px;
                background:#f6cad6;
                margin-bottom:1em;
                padding-bottom:0.5em;
            }

            .colorgrade_one_post_row_header
            {
                font-size:1.2em;
                font-family: pacifico;
                padding:0.5em 0.5em 0.5em 0.9em;
            }

            .colorgrade_one_post_row_excerpt
            {
                font-size:1.7em;
                font-family: DancingScript;
                padding:0 0.5em 0 0.5em;
            }
        </style>
    </head>
    <body>
        <div id="body_content">
            <!-- Header Icons -->
            <div id="header_icons">
                <!-- Profile/Menu Icon-->
                <div class="profile_icon_container_left"><img class="profile_icon_img" src="/externally_aquired_icons/iconoir/profile-circle.svg"></div>

                <!-- Notifications Icon -->
                <div class="profile_icon_container_right"><img class="profile_icon_img" src="/externally_aquired_icons/iconoir/bell-notification.svg"></div>
            </div>

            <!-- Header Title -->
            <div id="header_title">Xcerpts</div>

            <!-- Trending Posts -->
                <!-- Trending Header -->
                <div id="subheader">
                    Trending
                </div>
                <div id="trending_posts_container">
                    <div class="trending_posts_row_container">
                        <div class="trending_posts_row_header">
                            Todays forcast on the flu
                        </div>
                        <div class="colorgrade_one_post_row_excerpt">
                            <img src="/non_licensed_images/news_article_image.jpg" style="float:left;width:120px;height:120px;border-radius:15px;margin-right:0.5em;"/>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        </div>
                    </div>
                    <div class="trending_posts_row_container">
                        <div class="trending_posts_row_header">
                            Science
                        </div>
                        <div class="colorgrade_one_post_row_excerpt">
                            <img src="/non_licensed_images/news_article_image.jpg" style="float:left;width:120px;height:120px;border-radius:15px;margin-right:0.5em;"/>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        </div>
                    </div>
                    <div class="trending_posts_row_container">
                        <div class="trending_posts_row_header">
                            Science
                        </div>
                        <div class="colorgrade_one_post_row_excerpt">
                            <img src="/non_licensed_images/news_article_image.jpg" style="float:left;width:120px;height:120px;border-radius:15px;margin-right:0.5em;"/>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        </div>
                    </div>
                </div>
            <!-- End Trending Posts -->

            <div style="width:99.999999%;height:25px;">&nbsp;</div>

            <!-- Nutrient Spotlight Posts -->
                <!-- Trending Header -->
                <div id="subheader">
                    Nutrient Spotlight
                </div>
                <div id="trending_posts_container">
                    <div class="colorgrade_one_post_row_container">
                        <div class="colorgrade_one_post_row_header">
                            Todays forcast on the flu
                        </div>
                        <div class="trending_posts_row_excerpt">
                            <img src="/non_licensed_images/news_article_image.jpg" style="float:left;width:120px;height:120px;border-radius:15px;margin-right:0.5em;"/>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        </div>
                    </div>
                    <div class="colorgrade_one_post_row_container">
                        <div class="colorgrade_one_post_row_header">
                            Science
                        </div>
                        <div class="trending_posts_row_excerpt">
                            <img src="/non_licensed_images/news_article_image.jpg" style="float:left;width:120px;height:120px;border-radius:15px;margin-right:0.5em;"/>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        </div>
                    </div>
                    <div class="colorgrade_one_post_row_container">
                        <div class="colorgrade_one_post_row_header">
                            Science
                        </div>
                        <div class="trending_posts_row_excerpt">
                            <img src="/non_licensed_images/news_article_image.jpg" style="float:left;width:120px;height:120px;border-radius:15px;margin-right:0.5em;"/>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        </div>
                    </div>
                </div>
            <!-- End Trending Posts -->

            <div>
                <br/><br/><br/>
            </div>
        </div>
    </bod>
</html>
