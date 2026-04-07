<?php

require_once __DIR__. "/vendor/autoload.php";

use App\Chat\Message;
use App\Email\Message as EmailMessage;

$chatMessage = new Message();
$emailMessage = new EmailMessage();