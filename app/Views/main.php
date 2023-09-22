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
    table {
        border-collapse: collapse;
        width: 100%;
        margin-top: 20px;
    }

    th {
        border: 1px solid #dddddd;
        text-align: center;
        padding: 8px;
        background-color: #f2f2f2;
    }

    tr:nth-child(even) {
        background-color: #f2f2f2;
    }

    tr:hover {
        background-color: #dddddd;
    }
</style>
    </style>
    <div class="container">
        <div class="form-container">
    <form action="<?=base_url('save')?>" method="post">  
        <input type="hidden" name="id" value="<?= $j['id'] ?? '' ?>">
        <label for="StudName">Full Name</label>
        <input type="text" id="StudName" name="StudName" placeholder="StudName" value="<?=$j['StudName'] ?? ''?>" required>
        <br>
        <label for="StudGender">Gender</label>
        <select id="StudGender" name="StudGender" placeholder="StudGender" value="<?=$j['StudGender'] ??''?>" required> 
            <option value=" " disabled selected> Select Gender</option>
            <option value="Male">Male</option>
            <option value="Female">Female</option>
        </select>
        <br>
        <label for="Course">Course</label>
        <input type="text" id="Course" name="Course" placeholder="Course" value="<?=$j['Course'] ??''?>" required>
        <br>
        <label for="StudSection">Section</label>
        <input type="text" id="StudSection" name="StudSection" placeholder="StudSection" value="<?=$j['StudSection'] ??''?>" required>
        <br>
        <label for="StudYear">Year Level</label>
        <select id="StudYear" name="StudYear" placeholder="StudYear" value="<?=$j['StudYear'] ??''?>" required>
            <option value=" " disabled selected> Select Year </option>
            <option value="1st">1st</option>
            <option value="2nd">2nd</option>
            <option value="3rd">3rd</option>
            <option value="4th">4th</option>
        </select>
        <br>
        <input type="submit" value="save">
    </form>
    </div>
    <div class="list-container">
    <h1> List of Students </h1>
    <table border="1">
        <tr>
            <th>Full Name</th>
            <th>Gender</th>
            <th>Course</th>
            <th>Section</th>
            <th>Year Level</th>
            <th>Action</th>
        </tr>
        <?php foreach ($main as $mode): ?>
            <tr>
                <th><?= $mode['StudName'] ?></th>
                <th><?= $mode['StudGender'] ?></th>
                <th><?= $mode['Course'] ?></th>
                <th><?= $mode['StudSection'] ?></th>
                <th><?= $mode['StudYear'] ?></th>
                <th><a href="/edit/<?= $mode['id'] ?>"> Edit </a> || 
                    <a href="/delete/<?= $mode['id'] ?>">Delete</a></th>
            </tr>
            <?php endforeach; ?>
    </table>
    </div>
    </div>
</body>
</html>
