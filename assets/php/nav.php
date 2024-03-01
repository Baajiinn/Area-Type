<head>
    <link rel="stylesheet" href="./assets/css/nav.css">
    <!-- Font-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&display=swap"
        rel="stylesheet">
</head>
<nav>
    <a href="index.php" class="nav_l">Area Type</a>

    <ul class="nav_c hidden" id="navlinks">
        <li><a href="../../solo/ur_solo.php">Solo</a></li>
        <li><a href="../../select_multi.php">Multiplayer</a></li>
        <li><a href="../../loadboard.php">Loadboard</a></li>
        <li><a href="../../shop.php"><img class="shop" src="assets/svg/shop.png" alt=""></a></li>
    </ul>

    <div class="burger">
        <button onclick="openMenu()"><img src="../assets/svg/menu.png" alt="menu hamburger"
                class="menu-hamburger"></button>
        <button onclick="closeMenu()" class="cross"><img src="../assets/svg/cross.png" alt=""
                class="menu-hamburger-cross"></button>
    </div>
    <ul class="nav_r"">

        <li>
            <select class=" country" id="slick" name="">
        <option class="country-items" value="Fr" data-imagesrc="assets/svg/Fr.png"></option>
        <option class="country-items" value="En" data-imagesrc="assets/svg/En.png"></option>
        <option class="country-items" value="Es" data-imagesrc="assets/svg/Es.png"></option>
        <option class="country-items" value="Nl" data-imagesrc="assets/svg/Nl.png"></option>
        <option class="country-items" value="Po" data-imagesrc="assets/svg/Po.png"></option>
        <option class="country-items" value="It" data-imagesrc="assets/svg/It.png"></option>
        </select>
        </li>
        <li><a href="register.php">Login</a></li>
    </ul>
</nav>

<!--Lang burger-->
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script type="text/javascript" src="https://cdn.rawgit.com/prashantchaudhary/ddslick/master/jquery.ddslick.min.js">
</script>
<script>
$("#slick").ddslick({
    width: "100%",
    imagePosition: "left",
});
</script>

<!-- MENU BURGER -->
<!-- MENU BURGER -->
<script>
const menuHamburger = document.getElementById("navlinks");
const menuButtonOpen = document.querySelector(".menu-hamburger");
const menuButtonClose = document.querySelector(".menu-hamburger-cross");

function openMenu() {
    menuHamburger.classList.remove("hidden");
    menuHamburger.classList.add("show");
    menuButtonOpen.style.display = "none";
    menuButtonClose.style.display = "block";
}

function closeMenu() {
    menuHamburger.classList.add("hidden");
    menuHamburger.classList.remove("show");
    menuButtonOpen.style.display = "block";
    menuButtonClose.style.display = "none";
}
</script>