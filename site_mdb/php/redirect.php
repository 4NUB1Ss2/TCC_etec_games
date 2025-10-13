<?php include_once("./conexao.php");
require  "../vendor/autoload.php";
$client = new Google\Client;

$client->setClientId("842366646662-n4nvpknre73gu9jps7d778btqll4rjos.apps.googleusercontent.com");
$client->setClientSecret("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");
$client->setRedirectUri("http://localhost/TCC_etec_games/site_mdb/php/redirect.php");

if ( ! isset($_GET["code"])){

    exit("Login Failed");
    echo "<script>alert('Login Failed');</script>";

}
$token = $client->fetchAccessTokenWithAuthCode($_GET["code"]);

$client->setAccessToken($token["access_token"]);

$oauth = new Google\Service\Oauth2($client);

$userinfo = $oauth->userinfo->get();

$name = $userinfo->name;
$email = $userinfo->email;
$id = $userinfo->id;
$picture = $userinfo->picture;
$familyName = $userinfo->familyName;
$givenName = $userinfo->givenName;


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Redirecting...</title>
</head>
<body>
    Redirecionando... 

    <form id="googleLoginForm" action="googlelogin.php" method="post">
        <input type="hidden" name="name" value="<?php echo $name; ?>">
        <input type="hidden" name="username" value="<?php echo $givenName; ?>">
        <input type="hidden" name="email" value="<?php echo $email; ?>">
        <input type="hidden" name="password" value="<?php echo $id; ?>">
        <input type="submit" value="Continuar com o Google">
    </form>
    <script>
        window.onload = function() {
            document.getElementById("googleLoginForm").submit();
        };
    </script>
</body>
</html>




