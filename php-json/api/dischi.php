<?php

include_once __DIR__ . '../db/database.php';

    header('Content-Type: application/json');
    echo json_encode($dischi);

