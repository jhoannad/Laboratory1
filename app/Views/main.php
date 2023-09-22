<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<style>
        <style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        margin: 0;
        padding: 0;
    }

    .container {
        display: flex;
        flex-direction: row;
        justify-content: space-between;
        align-items: flex-start;
        min-height: 100vh;
    }

    .form-container,
    .list-container {
        background-color: #fff;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        padding: 20px;
        width: 48%;
    }

    .list-container h1 {
        text-align: center;
    }

    label {
        font-weight: bold;
    }

    input[type="text"] {
        width: 100%;
        padding: 8px;
        margin-bottom: 10px;
        border: 1px solid #ccc;
        border-radius: 4px;
    }

    input[type="number"] {
        width: 100%;
        padding: 8px;
        margin-bottom: 10px;
        border: 1px solid #ccc;
        border-radius: 4px;
    }
    input[type="submit"] {
        background-color: #007bff;
        color: #fff;
        border: none;
        border-radius: 4px;
        padding: 10px 20px;
        cursor: pointer;
    }

    input[type="submit"]:hover {
        background-color: #0056b3;
    }
    select {
        width: 100%;
        padding: 8px;
        margin-bottom: 10px;
        border: 1px solid #ccc;
        border-radius: 4px;
    }
    ul {
    list-style-type: none;
    padding: 0;
    }

    li {
        margin-bottom: 20px;
        border: 1px solid #ccc;
        padding: 10px;
        border-radius: 5px;
        background-color: #f9f9f9;
    }

    li strong {
        font-weight: bold;
    }

    li a {
        text-decoration: none;
        color: #007bff; 
        margin-left: 10px;
    }
</style>
    </style>
    <div class="container">
        <div class="form-container">
    <form action="<?=base_url('save')?>" method="post">  
        <input type="hidden" name="id" value="<?= $j['id'] ?? '' ?>">
        <label for="StudName">Full Name</label>
        <input type="text" id="StudName" name="StudName" placeholder="FullName" value="<?=$j['StudName'] ?? ''?>" required>
        <br>
        <label for="StudGender">Gender</label>
        <select id="StudGender" name="StudGender" placeholder="Gender" value="<?=$j['StudGender'] ??''?>" required> 
            <option value=" " disabled selected> Select Gender</option>
            <option value="Male">Male</option>
            <option value="Female">Female</option>
        </select>
        <br>
        <label for="StudCourse">Course</label>
        <input type="text" id="StudCourse" name="StudCourse" placeholder="Course" value="<?=$j['StudCourse'] ??''?>" required>
        <br>
        <label for="StudSection">Section</label>
        <input type="text" id="StudSection" name="StudSection" placeholder="Section" value="<?=$j['StudSection'] ??''?>" required>
        <br>
        <label for="StudYear">Year Level</label>
        <input type="number" id="StudYear" name="StudYear" placeholder="Select Year Level" value="<?=$j['StudYear'] ?? ''?>" required min="1" max="6">
        <br>
        <input type="submit" value="save">
    </form>
    </div>
    <div class="list-container">
    <h1> List of Students </h1>
    <ul>
        <?php foreach ($main as $mode): ?>
            <li>
                <strong>Full Name:</strong> <?= $mode['StudName'] ?><br>
                <strong>Gender:</strong> <?= $mode['StudGender'] ?><br>
                <strong>StudCourse:</strong> <?= $mode['StudCourse'] ?><br>
                <strong>Section:</strong> <?= $mode['StudSection'] ?><br>
                <strong>Year Level:</strong> <?= $mode['StudYear'] ?><br>
                <strong>Action:</strong> 
                <a href="/edit/<?= $mode['id'] ?>">Edit</a> || 
                <a href="/delete/<?= $mode['id'] ?>">Delete</a>
            </li>
        <?php endforeach; ?>
    </ul>
    </div>
    </div>
</body>
</html>
