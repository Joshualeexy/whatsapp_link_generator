<?php

if (isset($_POST['generate'])) {
    unset($_SESSION['generateduri']);
    $Validator = new Validator;

    $targetedmessage = $Validator->validateText($_POST['targetedmessage']);
    $targetednumber = $Validator->Validateint($_POST['targetednumber']);
    setError('targetednumber', $Validator->num_err);
    $targetednumber = str_replace('+', '', $targetednumber);



    if (empty(getAllErrors())) {
        if (strlen($targetedmessage) > 0) {
            setError('targetedmessage', $Validator->text_err);
            if (strlen($targetedmessage) > 30) {
                setError('targetedmessage', 'Error : Message must be less than or equal to 30 characters');
            }
            if (empty(getAllErrors())) {
            $uri = 'https://api.whatsapp.com/send?phone=' . $targetednumber . '&text=' . $targetedmessage;
            $_SESSION['generateduri'] = $uri;
        }
        } else {
            $uri = 'https://api.whatsapp.com/send?phone=' . $targetednumber;
            $_SESSION['generateduri'] = $uri;
        }
    }
} else {
    setError('page', 'An error occured while generating link');
}
