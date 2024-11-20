<?php
echo"
<html>
<head>
    <meta charset='UTF-8'
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Users List</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: #f9f9f9;
            color: #333;
        }
        h1 {
            text-align: center;
            color: #444;
        }
        a {
            text-decoration: none;
            color: #007bff;
        }
        a:hover {
            text-decoration: underline;
        }
        .table-container {
            max-width: 800px;
            margin: auto;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            background-color: #fff;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 0;
        }
        th, td {
            padding: 12px 16px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #007bff;
            color: white;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        tr:hover {
            background-color: #e9f7ff;
        }
        .actions a {
            margin-right: 8px;
            padding: 6px 12px;
            border-radius: 4px;
            color: white;
            background-color: #007bff;
        }
        .actions a:hover {
            background-color: #0056b3;
        }
        .add-button {
            display: inline-block;
            margin: 20px 0;
            padding: 10px 20px;
            color: white;
            background-color: #28a745;
            border: none;
            border-radius: 4px;
            text-decoration: none;
            font-weight: bold;
        }
        .add-button:hover {
            background-color: #218838;
        }
    </style>
</head>
<body>
    <h1>Users List</h1>
    <div class='table-container'>
        <a href='add_user.php' class='add-button'>Add New User</a>
        <table>
            <tr>
                <th>UserID</th>
                <th>Username</th>
                <th>Email</th>
                <th>Actions</th>
            </tr>
            ";
            require './db_connection.php';

            // Fetch users
            $sql = "SELECT * FROM users";
            $result = $conn->query($sql);

            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                    <td>{$row['id']}</td>
                    <td>{$row['username']}</td>
                    <td>{$row['email']}</td>
                    <td class='actions'>
                        <a href=''>Edit</a>
                        <a href='' style='background-color: #dc3545;'>Delete</a>
                    </td>
                </tr>";
            }

            $conn->close();
            echo"
           
        </table>
    </div>
</body>
</html>
 ?>
 ";