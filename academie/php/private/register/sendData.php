<?php
    require_once dirname(__DIR__, 2) . DIRECTORY_SEPARATOR . 'init.php';
    require_once dirname(__DIR__) . DIRECTORY_SEPARATOR . 'function.php';
    $response = '';
    if (isset($_POST['action'], $_POST['data']) && ($_POST['action'] != '') && ($_POST['data'] != '')) {
        $data = json_decode($_POST['data']);
        $firstname = $data->firstname;
        $lastname = $data->lastname;
        $phone = $data->phone;
        $email = $data->email;
        $domaine = $data->domaine;
        $niveau = $data->niveau;
        $reference = $data->reference;
        if (register($firstname, $lastname, $phone, $email, $domaine, $niveau, $reference)) {
            $response = 'good';
        } else {
            $response = 'kdl';
        }
    }
    echo json_encode(['response' => $response]);
?>