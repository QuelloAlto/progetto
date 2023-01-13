<header>
     
    <script src="js/nav.js"></script>
    <span class="menu" onclick="openNav()">
    <img src="img/hamburger.png" alt="Icona Menu">
    </span>
    <div class="logo">
        <a href="index.php"><img src="img/Beyond Space.png" alt="logo"></a>
    </div>
    <div id="mySidenav" class="sidenav">
        <?php if(isset($_SESSION["logged"]) && $_SESSION["logged"])
            echo '<p class="user">Benvenuto ' . $_SESSION["firstname"] . '!</p>';
        ?>
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a href="index.php">Home</a>
        <a href="about.php">Chi siamo</a>
        <a href="crowdfunding.php">Crowdfunding</a>
        <a href="newsletter.php">Newsletter</a>
        <?php
        if(isset($_SESSION["logged"]) && $_SESSION["logged"])
        {
            echo '<a href="profile.php">Profilo</a>';
            echo '<a href="logout.php">Logout</a>';
            if($_SESSION["email"]=='beyondspacesaw@gmail.com')
            {
                echo '<a href="sendNewsletters.php">Invia Newsletter</a>';
            }
            
        }
        else {
            echo '<a href="login.php">Login</a>';
            echo '<a href="registration.php">Registrati</a>';
        }
        
        
        ?>
    </div>
</header>
<hr>
<br>