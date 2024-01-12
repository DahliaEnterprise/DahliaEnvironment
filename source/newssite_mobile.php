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
                <div style="float:left;"><img style="width:35px;height:35px;border-radius:33px;" src="/externally_aquired_icons/iconoir/profile-circle.svg"></div>

                <!-- Notifications Icon -->
                <div style="float:right;"><img style="width:35px;height:35px;border-radius:33px;" src="/externally_aquired_icons/iconoir/bell-notification.svg"></div>
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
