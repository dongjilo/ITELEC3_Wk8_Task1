<?php
include 'message.php';

$message1 = new Message("Person One", "Jovit Jay", "Hi, Jovit Jay! Nice to meet you.");
$message2 = new Message("Dongkie", "KawaiiDesu4U", "Hello, I am Dongkie. I hope we get along!");

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css'>
    <script src="./js/bootstrap.bundle.min.js"></script>
    <title>Message</title>

    <style>
        body {
            background-color: #eee;
        }
        .msg-container{
            width: 100%;
            display: flex;
        }

        .msg-container.right{
            justify-content: flex-end;
        }

        .msg-container.left{
            justify-content: flex-start;
        }

        .msg-container.right > .msg{
            background-color:#218aff;
            color: white;
        }

        .msg-container.left > .msg{
            background-color:#d8d8d8;
        }

        .msg{
            max-width: 50%;
            border-radius: 10px;
            padding: 10px;
        }
    </style>
</head>
<body>

<div class="container" style="margin-top: 5%">
    <div class="row">
        <div class="col">
            <div class="container border rounded p-3 bg-light">
                <div class="text-center"><i class='bi bi-person-circle h1'></i></div>
                <p class="h4 text-center"><?php $message1->getSender();?></p>
                <hr>
                <p class="small text-center text-secondary"><?php $message1->getDatetime(); ?></p>
                <div class="msg-container left">
                    <p class="msg"><?php $message1->retrieveMessage();?></p>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="container border rounded p-3 bg-light">
                <div class="text-center"><i class='bi bi-person-circle h1'></i></div>
                <p class="h4 text-center"><?php $message1->getReceiver();?></p>
                <hr>
                <p class="small text-center text-secondary"><?php $message1->getDatetime(); ?></p>
                <div class="msg-container right">
                    <p class="msg"><?php $message1->sendMessage();?></p>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-4">
        <div class="col">
            <div class="container border rounded p-3 bg-light">
                <div class="text-center"><i class='bi bi-person-circle h1'></i></div>
                <p class="h4 text-center"><?php $message2->getSender();?></p>
                <hr>
                <p class="small text-center text-secondary"><?php $message2->getDatetime(); ?></p>
                <div class="msg-container left">
                    <p class="msg"><?php $message2->retrieveMessage();?></p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="container border rounded p-3 bg-light">
                <div class="text-center"><i class='bi bi-person-circle h1'></i></div>
                <p class="h4 text-center"><?php $message2->getReceiver();?></p>
                <hr>
                <p class="small text-center text-secondary"><?php $message2->getDatetime();?></p>
                <div class="msg-container right">
                    <p class="msg"><?php $message2->sendMessage();?></p>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>
