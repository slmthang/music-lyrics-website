<!DOCTYPE html>
<html lang="us">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="../../css/styles1.css">
        <link rel="stylesheet" href="../../css/homepage.css">
        <script src="../../js/scripts.js"></script>
        <!-- font -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Leckerli+One&display=swap" rel="stylesheet">
        <!-- end -->
        <link rel="icon" href="../../images/favicon.png">
        <title>Homepage</title>
    </head>
    <body>
        
        <?php include "../boilerplates/top-nav-bar.php"; ?>
        <?php include "../boilerplates/side-nav-bar.php"; ?>
        
        <main id="main-homepage">
            <div id="search-bar">
                <form>
                    <input type="text" id="search" name="search" placeholder="song/artist/album...">
                    <input type="submit" value="Search">
                </form>
            </div>
            <div id="song-charts">
                <div class="xcard-outer">
                    <a href="https://www.canisius.edu/" id="popular-songs-chart" class="popular">
                        <h3>Popular Songs</h3>
                    </a>
                </div>
                <div class="xcard-outer">
                    <a href="https://www.canisius.edu/" id="trending-songs-chart" class="trending">
                        <h3>Trending Songs</h3>
                    </a>
                </div>
                <div class="xcard-outer">
                    <a href="https://www.canisius.edu/" class="xcard">
                        <h3>N/A</h3>
                    </a>
                </div>
            </div>
            <div id="album-charts">
                <div class="xcard-outer">
                    <a href="https://www.canisius.edu/" id="popular-albums-chart" class="popular">
                        <h3>Popular Albums</h3>
                    </a>
                </div>
                <div class="xcard-outer">
                    <a href="https://www.canisius.edu/" id="trending-albums-chart" class="trending">
                        <h3>Trending Albums</h3>
                    </a>
                </div>
                <div class="xcard-outer">
                    <a href="https://www.canisius.edu/" class="xcard">
                        <h3>N/A</h3>
                    </a>
                </div>
            </div>
        </main>

        <?php include "../boilerplates/footer.php"; ?>   

    </body>
</html>