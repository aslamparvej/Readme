<?php
include "head.php";
?>
<link rel="stylesheet" href="css/header.css">

</head>

<body>
    <header>
        <a href="./index.php">
            <p id="logo">Read<span>me</span></p>
        </a>
        <nav>
            <ul>
                <li><a href="./index.php">Home</a></li>
                <li><a href="./category.php">Category</a></li>
                <li><a href="contact.php">Contact Us</a></li>
                <li><a href="about.php">About Us</a></li>
            </ul>
        </nav>
        <!-- Hamburger Menu  -->
        <a href="#side-drawer" class="menu-btn">
            <span></span>
            <span></span>
            <span></span>
        </a>
    </header>
    <aside id="side-drawer">
        <header>
        <a href="#" class="menu-btn">
            <span></span>
            <span></span>
            <span></span>
        </a>
        </header>
        <nav id="side-drawer-nav">
            <ul>
                <li><a href="./index.php">Home</a></li>
                <li><a href="./category.php">Category</a></li>
                <li><a href="./Contact.php">Contact Us</a></li>
                <li><a href="./about.php">About Us</a></li>
            </ul>
        </nav>
    </aside>