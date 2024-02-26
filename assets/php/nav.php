<head>
    <link rel="stylesheet" href="./assets/css/nav.css">
    <!-- Font-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&display=swap"
        rel="stylesheet">
</head>
<nav>
    <p class="nav_l">Area Type</p>
    <ul class="nav_c">
        <li><a href="#">Solo</a></li>
        <li><a href="#">Multiplayer</a></li>
        <li><a href="#">Loadboard</a></li>
    </ul>
    <ul class="nav_r">
        <li><img src="assets/svg/shop.png"
                style="background-position:center; height: 35px; background-color:#e34c26; border-radius:5px; padding:5px;"
                alt=""></li>
        <li>
            <select class="country" id="slick" name="">
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