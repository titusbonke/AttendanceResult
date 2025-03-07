<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GracER</title>
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="icon" sizes="196x196" type="image/x-icon" href="../assets/img/gcoe_logo.png">
    <style>
    body {
        overflow-y: scroll;
    }

    body::-webkit-scrollbar {
        display: none;
    }

    .NotResultPostedTableBody td {
        border: 1px solid grey;
    }

    .home-section .col-sm-6 {
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        height: 50vh;
        margin-bottom: 10px;
    }


    .panel {
        max-height: 280px;
        overflow-y: scroll;
        /* width: 640px; */
        margin-top: 10px;
        margin-left: 10px;
    }

    .panel-body {
        min-height: 40px;
    }

    .panel::-webkit-scrollbar {
        display: none;
    }


    label {
        margin-left: 10px;
        display: inline-block;
        max-width: 100%;
        margin-bottom: 5px;
        font-weight: 700;
    }

    .footer1 {
        background-image: linear-gradient(to right, rgb(79, 4, 79), rgb(193, 91, 193));
        text-align: center;
        position: fixed;
        bottom: 0;
        padding: 0.3% 0% 0.3% 0%;
        color: #fff;
        width: 100%;
    }

    .linkbtn {
        background-color: transparent;
        border: unset;
        color: black;
    }

    .linkbtn:hover,
    .linkbtn:active,
    .linkbtn:after,
    .linkbtn:before {
        background-color: transparent;
        border: unset;
        color: black;
    }

    * {
        box-sizing: border-box;
    }

    .row {
        margin-left: -2px;
        margin-right: -2px;
    }

    .row thead {
        position: sticky;
        top: 60px;
    }

    .column {
        flex: 48%;
        padding: 5px;
    }

    .column thead {
        top: 40px;
    }


    table {
        border-collapse: collapse;
        border-spacing: 0;
        width: 100%;
        border: 1px solid #ddd;
    }

    th,
    td {
        text-align: left;
        padding: 2px;
        cursor: pointer;

    }

    tr:nth-child(even) {
        background-color: #f2f2f2;
    }

    .stdcount {
        width: 385px;
        overflow-y: auto;
    }

    .result {
        /* width: 710px; */
        height: fit-content;
    }

    .result,
    .performer {
        width: 48%;

    }

    .result,
    .performer,
    .attendance,
    .stdcount {
        margin: 0 auto;
    }

    .attendance {
        height: fit-content;
        /* width: 710px; */
    }

    /* table {
          border-collapse: collapse;
          width: 100%;
        } */

    .table-header th {
        position: sticky;
        top: 0;
        background-color: #7dd87d;
        z-index: 1;
    }

    .panel-heading {
        position: sticky;
        top: 0;
        background-color: #f4f4f4;
        z-index: 1;
    }

    .panel-primary>.panel-heading {
        color: #fff;
        background-color: #4c9173;
        border-color: #4c9173;
    }

    .column-top th {
        position: sticky;
        top: 40px;
        background-color: #f1b24b;
    }

    #theader {
        position: sticky;
        top: 40px;
        background-color: #fa8572;
    }

    #tattend {
        position: sticky;
        top: 40px;
        background-color: #74bec1;
    }

    .container-top-perform {
        position: sticky;
        top: 40px;
        background-color: #f1b24b;
    }

    .container-top-perform form select,
    label {
        width: min-content;
    }

    .container-top-result {
        position: sticky;
        top: 40px;
        background-color: #fa8572;
    }

    .container-top-attendance {
        position: sticky;
        top: 40px;
        background-color: #74bec1;
    }

    .percentage-above50 thead {
        position: sticky;
        top: 60px;
        background-color: #f1b24b;
    }

    .panel-success>.panel-heading {
        color: #F5F5DC;
        background-color: #d68438;
        border-color: #d6e9c6;
    }

    .panel-success {
        border-color: #d68438;
    }

    .panel-danger>.panel-heading {
        color: #F5F5DC;
        background-color: #516091;
        border-color: #516091;
    }

    .panel-heading {
        position: sticky;
        top: 0;
        color: #F5F5DC;
        background-color: #d68438;
        z-index: 1;
    }

    .panel-danger {
        border-color: #516091;
    }

    .panel-info>.panel-heading {
        color: #F5F5DC;
        background-color: #b24968;
        border-color: #b24968;
    }

    .panel-info {
        border-color: #b24968;
    }
    </style>
    <link rel="stylesheet" href="../assets/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <?php
    ob_start();
    include('../includes/config.php');
    include('../includes/header.php');
    ?>

    <div class="main-container">
        <?php include('../includes/sidebar.php'); ?>
        <main>
        </main>
    </div>

    <?php
    include('../includes/footer.php');
    ob_end_flush();
    ?>
</body>
<script src="../assets/js/script.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
</script>

</html>