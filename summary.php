<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST['firstname']) || empty($_POST['middlename']) || empty($_POST['lastname']) || 
        empty($_POST['email']) || empty($_POST['phone_number']) || 
        empty($_POST['sex']) || empty($_POST['birthdate']) || 
        empty($_POST['program']) || empty($_POST['address'])) {
        header("Location: register.php");
        exit();
    }

    $firstname = htmlspecialchars($_POST['firstname']);
    $middlename = htmlspecialchars($_POST['middlename']);
    $lastname = htmlspecialchars($_POST['lastname']);
    $email = htmlspecialchars($_POST['email']);
    $country_code = htmlspecialchars($_POST['country_code']);
    $phone_number = htmlspecialchars($_POST['phone_number']);
    $sex = htmlspecialchars($_POST['sex']);
    $birthdate = htmlspecialchars($_POST['birthdate']);
    $program = htmlspecialchars($_POST['program']);
    $address = htmlspecialchars($_POST['address']);
} else {
    
    header("Location: register.php");
    exit();
}
?>

<html>
<head>
    <title>Summary</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
        .male {
            background-color: blue;
            color: white;
        }
        .female {
            background-color: red;
            color: white;
        }
    </style>
</head>
<body bgcolor="Lightskyblue">

<h2>Summary Table</h2>
<table>
    <tr>
        <th>Field</th>
        <th>Value</th>
    </tr>
    <tr>
        <td>First Name</td>
        <td class="<?= $sex == 'male' ? 'male' : 'female' ?>"><?= $firstname ?></td>
    </tr>
    <tr>
        <td>Middle Name</td>
        <td class="<?= $sex == 'male' ? 'male' : 'female' ?>"><?= $middlename ?></td>
    </tr>
    <tr>
        <td>Last Name</td>
        <td class="<?= $sex == 'male' ? 'male' : 'female' ?>"><?= $lastname ?></td>
    </tr>
    <tr>
        <td>Email</td>
        <td><?= $email ?></td>
    </tr>
    <tr>
        <td>Phone</td>
        <td><?= $country_code . $phone_number ?></td>
    </tr>
    <tr>
        <td>Sex</td>
        <td><?= ucfirst($sex) ?></td>
    </tr>
    <tr>
        <td>Birthdate</td>
        <td><?= $birthdate ?></td>
    </tr>
    <tr>
        <td>Program</td>
        <td><?= $program ?></td>
    </tr>
    <tr>
        <td>Address</td>
        <td><?= nl2br($address) ?></td>
    </tr>
</table>

</body>
</html>
