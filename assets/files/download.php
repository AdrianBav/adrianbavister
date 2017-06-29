<?php

    $file = $_SERVER['DOCUMENT_ROOT'] . "/assets/files/AdrianBavisterResume.pdf";

    if (file_exists($file))
    {
        header('Content-Description: File Transfer');
        header('Content-Type: application/pdf');
        header('Content-Disposition: attachment; filename=' . basename($file));
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . filesize($file));

        ob_clean();
        flush();

        readfile($file);
    }

    exit;
