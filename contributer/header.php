<?php
include "head.php";

session_start();
if(!isset($_SESSION['username'])){
    header("Location: localhost:8080/readme/contributer/index.php");
}
?>
<link rel="stylesheet" href="../css/header.css">

</head>

<body>
    <header>
        <a href="./index.php">
            <p id="logo">Read<span>me</span></p>
        </a>
        <nav>
            <ul>
                <li><a href="./home.php">Home</a></li>
                <li><a href="">Your Blog</a></li>
                <li><a href="./create_blog.php">Create Blog Post</a></li>
                <li><a href="./logout.php" class="logout">Logout</a></li>
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
                <li><a href="./home.php">Home</a></li>
                <li><a href="">Your Blog</a></li>
                <li><a href="./create_blog.php">Create Blog Post</a></li>
                <li><a href="./logout.php" class="logout">Logout</a></li>
            </ul>
        </nav>
    </aside>

