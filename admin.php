<?php
include 'config.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="index.css">
</head>

<body>
    <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <a href="admin.php">
                    <h3>Creat Pages</h3>
                </a>
            </div>

            <ul class="list-unstyled components">
                <p>Pages Heading</p>
                <li>
                    <a href="pages_table.php">Existing Pages</a>
                </li>
                
            </ul>

            <ul class="list-unstyled CTAs">
                <li>
                    <a href="admin.php" class="download">Back to admin</a>
                </li>
                
            </ul>
        </nav>