<!-- Start of the section and article tags will be closed at the beginning of the footer.php file. 
This allows the use of header.php and footer.php to be used as a reusable template.-->
<section aria-label="section"> 
<nav>
    <a href="index.php" <?php if($page == 'index') echo 'class="active"'; ?>> Home</a>
    <a href="Find.php" <?php if($page == 'find') echo 'class="active"'; ?>> Find a pet</a>
    <a href="DogCare.php" <?php if($page == 'dogcare') echo 'class="active"'; ?>> Dog Care</a>
    <a href="CatCare.php" <?php if($page == 'catcare') echo 'class="active"'; ?>> Cat Care </a>
    <a href="CreateAccount.php" <?php if($page == 'createacc') echo 'class="active"'; ?>> Create an Account </a>
    <a href="GiveAway.php" <?php if($page == 'giveaway') echo 'class="active"'; ?>> Have a pet to give away </a>
    <a href="LogOut.php" <?php if($page == 'logout') echo 'class="active"'; ?>>  Log Out </a>
    <a href="Contact.php" <?php if($page == 'contact') echo 'class="active"'; ?>> Contact Us </a>
</nav>
<article aria-label="article">