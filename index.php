<!doctype html>
<html class="no-js">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Responsive Website Design Template</title>
    <meta name="description" content="[[Meta Description]]" />
    <meta name="og:description" content="[[Meta Description]]]" />
    <meta property="og:title" content="Alex[] Codes a Thing" />
    <meta property="og:type" content="">
    <meta property="og:url" content="">
    <meta property="og:image" content="[[Meta Image]]]" />
    <link rel="shortcut icon" type="image/jpg" href="[[favicon]]" />
    <link rel="stylesheet" href="css/styles.css" />
</head>

<body>
    <header class="site-header">
        <?php 
            include('site-header.php')
         ?>
    </header>

    <section class="landing padding-sm">
        <?php 
            include('landing-section.php')
         ?>
    </section>

    <section class="call-to-action">
        <?php 
            include('cta.php') 
        ?>
    </section>

    <section class="article-grid padding-sm">
        <?php 
            include('article-grid.php') 
        ?>
    </section>


    <section class="call-to-action padding-large">
        <?php 
            include('cta.php') 
        ?>
    </section>


    <section class="footer padding-sm">
        <?php 
            include('footer.php') 
        ?>
    </section>
</body>

</html>
