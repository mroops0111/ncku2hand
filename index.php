<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="utf-8" />
        <title>Main Manager v150102</title>
    </head>
    <body>
        <?php
        session_start();
        require_once('..\\..\\inc\\config.php');
        require_once('n2hDatabaseWrapper.php');
        require_once('n2hFacebookConnector.php');

        // FB SDK init
        $fbHandler = new n2hFacebookConnector(
                $_ncku2hand['fbAppId'],
                $_ncku2hand['fbAppSecret'],
                $_ncku2hand['fbRedirectUri']
                );

        // main procedure
        $dbHandler = new n2hDatabaseWrapper(
                $_ncku2hand['dbServerName'], 
                $_ncku2hand['dbUserName'], 
                $_ncku2hand['dbPassword'], 
                $_ncku2hand['dbName']
                );
        if($fbHandler->loggedIn()) {
            // Case: in logging-in flow
            // get a long-lived token then update to db
            $token = $fbHandler->getExtendedToken();
            $dbHandler->updateToken($token);
            echo 'Token updated</br>';
            echo '<a href="https://developers.facebook.com/tools/debug/accesstoken?q='.
                $token . '">Check new token in Access Token Debugger</a></br>';
        } else {
            // Case: not in logging-in flow
            // check pre-saved access_token
            $token = $dbHandler->getToken();
            echo "Token in the server: " .$token. '</br>';
            echo '<a href="https://developers.facebook.com/tools/debug/accesstoken?q='.
                    $token.
                    '">Check this token in Access Token Debugger</a></br>';
            // show login url
            echo '<a href="' . $fbHandler->getLoginUrl() . '">request token from FACEBOOK</a></br>';
        }

        echo '<a href="refresh_item.php">refresh data</a></br>';
        echo '<a href="http://localhost/phpmyadmin/">Database UI</a></br>';
        echo '<a>end of the php</a></br></p>';
        ?>
    </body>
</html>
