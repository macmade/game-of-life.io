<!DOCTYPE html>
<html lang="en">
    <head>
        
        <!--
        
        ##################################################
        #                                                #
        #       Blood Sweat & Code (& Rock'N'Roll)       #
        #      Thanx for looking at the source code      #
        #                                                #
        #                 XS-Labs © 2013                 #
        #                                                #
        ##################################################
        
        -->
                
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>Game Of Life</title>
        <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css" type="text/css" media="all" />
        <link rel="stylesheet" href="/css/base.css" type="text/css" media="all" />
        <link rel="stylesheet" href="/css/layout.css" type="text/css" media="all" />
        <link rel="stylesheet" href="/css/styles.css" type="text/css" media="all" />
        <link rel="stylesheet" href="/css/project-icons.css" type="text/css" media="all" />
        <meta name="author" content="XS-Labs" />
        <meta name="description" content="Explore Game Of Life, a cellular automaton created by John Conway in 1970 with this highly customisable open-source implementation." />
        <meta name="keywords" content="conway,game,life,cell,cellular,automata,automaton,mathematics,pattern,turing" />
        <meta name="rating" content="General" />
        <meta name="robots" content="all" />
        <!--[if IE]><link rel="shortcut icon" href="/favicon.ico"><![endif]-->
        <link rel="icon" href="/favicon.png">
        <link rel="apple-touch-icon-precomposed" href="/favicon-apple-touch.png">
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-51035898-8"></script>
        <script type="text/javascript">
            // <![CDATA[
            
            window.dataLayer = window.dataLayer || [];
            
            function gtag()
            {
                dataLayer.push( arguments );
            }
            
            gtag( 'js', new Date() );
            gtag( 'config', 'UA-51035898-8' );
            
            // ]]>
        </script>
    </head>
    <body>
        <div class="container">
            <div class="header clearfix">
                <img src="/css/image/gol.png" width="128" height="128" alt="Game Of Life" class="pull-left" />
                <h1>Game Of Life</h1>
                <h2>Explore Game Of Life, a cellular automaton created by John Conway in 1970 with this highly customisable open-source implementation.</h2>
            </div>
            <div>
                <img src="/uploads/image/GOL.png" alt="Game Of Life" class="img-responsive" />
            </div>
            <div class="text-center">
                <button type="button" class="btn btn-success">Download on the App Store</button><br />
                <button type="button" class="btn btn-primary">View source on GitHub</button>
            </div>
            <div>
                <h3>About</h3>
                <p>        
                    The Game Of Life was created in 1970 by mathematician John Conway.
                </p>
                <p>
                    It consists of a two dimensional orthogonal grid of cells, each of which being alive or dead.<br />
                    Cells evolve at each turn following simple rules:
                </p>
                <ul>
                    <li>A live cell with fewer than two live neighbours dies.</li>
                    <li>A live cell with more than three live neighbours dies.</li>
                    <li>A dead cell with three live neighbours becomes alive.</li>
                </ul>
                <h3>Highlights</h3>
                <p>
                    Library of 800+ common patterns, which can be expanded.
                    Customisable rules, for exploring beyond the classic Conway's rules.
                    Open and save files as RLE (run length encoded).
                    Highly customisable interface.
                    Pattern viewer.
                    Live drawing and simple drag & drop from the library.
                </p>
                <h3>Screenshots</h3>
                <div class="row">
                    <div class="col-sm-3">
                        <div class="text-center">
                            <a href="/uploads/image/Screen-1.png" class="lightbox"><img src="/uploads/image/Screen-1.png" alt="Main Window" width="200" height="125" class="img-thumbnail"></a><br>
                            Main Window
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="text-center">
                            <a href="/uploads/image/Screen-2.png" class="lightbox"><img src="/uploads/image/Screen-2.png" alt="Preferences" width="200" height="125" class="img-thumbnail"></a><br>
                            Preferences
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="text-center">
                            <a href="/uploads/image/Screen-3.png" class="lightbox"><img src="/uploads/image/Screen-3.png" alt="Custom Rules" width="200" height="125" class="img-thumbnail"></a><br>
                            Custom Rules
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="text-center">
                            <a href="/uploads/image/Screen-4.png" class="lightbox"><img src="/uploads/image/Screen-4.png" alt="Pattern Viewer" width="200" height="125" class="img-thumbnail"></a><br>
                            Pattern Viewer
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer text-center">
                <a href="http://www.xs-labs.com/">XS-Labs &copy; <?php print date( 'Y', time() ); ?> - All Rights Reserved - All Wrongs Reserved</a>
            </div>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js" type="text/javascript"></script>
        <script src="/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="/js/imagelightbox.min.js" type="text/javascript"></script>
        <script type="text/javascript">
            // <![CDATA[
            
            $( document ).ready
            (
                function()
                {
                    $( 'a.lightbox' ).imageLightbox();
                }
            );
            
            // ]]>
        </script>
    </body>
</html>
