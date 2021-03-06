<!DOCTYPE html>
<html>
    <head>
        <title>jQuery Mobile table</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" sizes="57x57" href="assets/favicons/apple-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="assets/favicons/apple-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="assets/favicons/apple-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="assets/favicons/apple-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="assets/favicons/apple-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="assets/favicons/apple-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="assets/favicons/apple-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="assets/favicons/apple-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="assets/favicons/apple-icon-180x180.png">
        <link rel="icon" type="image/png" sizes="192x192"  href="assets/favicons/android-icon-192x192.png">
        <link rel="icon" type="image/png" sizes="32x32" href="assets/favicons/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="96x96" href="assets/favicons/favicon-96x96.png">
        <link rel="icon" type="image/png" sizes="16x16" href="assets/favicons/favicon-16x16.png">
        <link rel="manifest" href="assets/favicons/manifest.json">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="assets/favicons/ms-icon-144x144.png">
        <meta name="theme-color" content="#ffffff"><link rel="stylesheet" href="assets/css/themes/mycolors.css" />
        <link rel="stylesheet" href="assets/css/themes/jquery.mobile.icons.min.css" />
        <!--<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile.structure-1.4.5.min.css" /> 
        <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script> 
        <script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script> -->
        <link rel="stylesheet" href="assets/css/jquery.mobile.structure-1.4.5.min.css" /> 
        <script src="assets/js/jquery-1.11.1.min.js"></script> 
        <script src="assets/js/jquery.mobile-1.4.5.min.js"></script>
    </head>
    <body>
        <div data-role="page">
            <div data-role="header">
                <h1>Tabellen in JQM</h1>
            </div>
            <div data-role="content">
                <table class="ui-responsive" data-mode="columntoggle" data-role="table">
                    <thead>
                        <tr>
                            <!-- Prioritäten werden als Dropdown angezeigt, hier Name und Vorname aber obligatorisch -->
                            <th data-priority="4">PersonalNr</th>
                            <th>Name</th>
                            <th data-priority="1">Vorname</th>
                            <th data-priority="3">PLZ</th>
                            <th data-priority="2">Ort</th>  
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>4</td>
                            <td>Schulz</td>
                            <td>Konrad</td>
                            <td>10878</td>
                            <td>Berlin</td>     
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>Meier-Wittgenberg</td>
                            <td>Andreas</td>
                            <td>10878</td>
                            <td>Berlin</td>     
                        </tr>
                    </tbody>
                </table>
            </div>
            <div data-role="footer">
                <p>&copy; 2018</p>
            </div>
        </div>


    </body>
</html>