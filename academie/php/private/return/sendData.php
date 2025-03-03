<?php
    require_once dirname(__DIR__, 2) . DIRECTORY_SEPARATOR . 'init.php';
    require_once dirname(__DIR__) . DIRECTORY_SEPARATOR . 'function.php';
    $response = '';
    if (isset($_GET['status'], $_GET['reference'], $_GET['Method'])) {
        $status = $_GET['status'];
        $reference = $_GET['reference'];
        $Method = $_GET['Method'];
        $phone = trim(str_replace('+', '', $_GET['phone']));
        if (updateRegister($reference, $status, $Method)) {
            $url = "http://localhost:3000/register/?phone=$phone";
            $response = file_get_contents($url);
            if ($response === FALSE) {
                exit('Erreur avec file_get_contents()');
            } else {
                header("Location: $protocol://" . $_SERVER['HTTP_HOST'] . "/");
                exit();
            }
        } else {
            exit("ERREUR INCONNU CONTACTEZ LE SUPPORT.");
        }
    }
    echo json_encode(['response' => $response]);
?>