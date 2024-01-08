<?php
require_once __DIR__ . '/../utils/constants.php';
?>
<!DOCTYPE html>
<html lang='es'>

<head>
  <meta charset='UTF-8'>
  <meta name='viewport' content='width=device-width, initial-scale=1.0'>
  <title><?= SITE_TITLE ?></title>
  <link rel='icon' type='image/png' href='./assets/images/favicon-alimentos-mary.png' />
  <link href='./styles/fonts/Inter/inter.css?version=<?= VERSION ?>' rel='stylesheet' />
  <link href='./styles/icons/style.css?version=<?= VERSION ?>' rel='stylesheet' />
  <link href='./styles/global.css?version=<?= VERSION ?>' rel='stylesheet' />
  <link href='./libraries/flowbite/styles.css?version=2.2.1' rel='stylesheet' />
  <script src='./libraries/tailwind/script.js?version=3.4.0'></script>
  <script>
    tailwind.config = {
      theme: {
        extend: {
          aspectRatio: {
            '16/8': '16 / 8'
          },
          height: {
            '16/8': 'calc(95vw * 8 / 16)'
          }
        }
      },
    }
  </script>
  <script src='./libraries/flowbite/script.js?version=2.2.1'></script>
</head>

<body>