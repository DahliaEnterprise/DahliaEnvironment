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
                max-width:500px;

            }

            #header_icons
            {
                height:30px;
            }

            #header_title
            {
                font-size:3em;
                font-family:pacifico;
                padding:0.1em;
                background: -webkit-linear-gradient(#6b1538, #38032d);
                -webkit-background-clip: text;
                -webkit-text-fill-color: transparent;
                width:99.999999%;
                text-align:center;

            }

            #sponsored_posts
            {
                width:99.999999%;

                overflow-y:hidden;
            }

            #sponsored_posts_scroll_container
            {
                 height:230px;
                 width:500px;
            }

            .sponsored_posts_post_container
            {
                float:left;
                width:150px;
                height:200px;
            }

            #trending_header
            {
                font-family: pacifico;
                text-align:center;
                font-size:1.7em;
                background: -webkit-linear-gradient(#6b1538, #38032d);
                -webkit-background-clip: text;
                -webkit-text-fill-color: transparent;
            }

            .trending_posts_row_container
            {
                width:99.999999%;
                border:1px solid #fad2de;
                border-radius:5px;
                background:#ffebf1;
                margin-bottom:1em;
                padding-bottom:0.5em;
            }

            .trending_posts_row_header
            {
                font-size:1.2em;
                font-family: pacifico;
                padding:0.5em;
            }

            .trending_posts_row_excerpt
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

            <!-- Sponsored Posts -->
            <div id="sponsored_posts">
                <div id="sponsored_posts_scroll_container">
                        <img class="sponsored_posts_post_container" src="/non_licensed_images/news_article_image.jpg" style="width:140px;height:200px;border-radius:15px;padding:0 0.5em 0 0.8em;"/>
                        <img class="sponsored_posts_post_container" src="/non_licensed_images/news_article_image.jpg" style="width:140px;height:200px;border-radius:15px;padding:0 0.5em 0 0.8em;"/>

                        <img class="sponsored_posts_post_container" src="/non_licensed_images/news_article_image.jpg" style="width:140px;height:200px;border-radius:15px;padding:0 0.5em 0 0.8em;"/>

                </div>
            </div>

            <!-- Trending Posts -->
                <!-- Trending Header -->
                <div id="trending_header">
                    Trending
                </div>
                <div id="trending_posts_container">
                    <div class="trending_posts_row_container">
                        <div class="trending_posts_row_header">
                            Science
                        </div>
                        <div class="trending_posts_row_excerpt">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        </div>
                    </div>
                    <div class="trending_posts_row_container">
                        <div class="trending_posts_row_header">
                            Science
                        </div>
                        <div class="trending_posts_row_excerpt">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        </div>
                    </div>
                    <div class="trending_posts_row_container">
                        <div class="trending_posts_row_header">
                            Science
                        </div>
                        <div class="trending_posts_row_excerpt">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
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
