<?php
require("./services/helper.php");
//start a php session
session_name("customer");
session_start("customer");
helpers::getHeader("About Us");
?>

<body>
    <div class="about-us banner">
        <div class="banner-text">About Us</div>
    </div>
    <?php helpers::getNavBar("About Us");?>
    <div class="container">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ut nunc ex. Curabitur euismod vehicula
           ultrices. Vestibulum ultrices facilisis nunc et blandit. Nam pretium in elit sit amet sodales. Aenean
           rutrum malesuada lacus sit amet tincidunt. Sed congue, tellus eu pharetra sodales, ante augue tristique
           est, quis finibus libero ligula et sapien. Vestibulum id elit non metus consequat semper quis quis nibh.
           Nunc non imperdiet sem. Praesent non leo eros. Nulla facilisi. Proin ullamcorper viverra augue ac viverra.
           Nunc ac odio sed tellus venenatis semper id a nulla. Curabitur malesuada magna sit amet nunc laoreet, nec
           mattis lacus dignissim. Cras sit amet placerat lorem, quis accumsan nisl. Nullam nec urna libero. Aliquam
           ultricies sit amet dolor a bibendum.</p>
           <p>Suspendisse aliquam porta lacus sed pharetra. Sed quis leo a orci congue pretium. Duis id consequat leo.
           Integer accumsan consectetur mauris a malesuada. Phasellus pulvinar felis in ipsum consequat, ut euismod
           mauris accumsan. Donec nec tellus neque. Mauris tincidunt semper enim semper varius. Integer id malesuada
           ante, sed dictum velit. Cras euismod pulvinar odio sit amet vehicula. Duis eu lorem ut elit efficitur
           fermentum at in leo. Mauris vitae tellus auctor, condimentum libero lacinia, euismod leo. Quisque sit
           amet sodales sapien. Etiam finibus massa dolor, in elementum nisi varius a. Ut laoreet varius odio at
           pretium. Nulla pellentesque libero vitae leo venenatis interdum. Nullam lacinia mollis dolor, at
           dignissim lorem blandit quis.</p>
           <p>In semper ante quis urna faucibus efficitur. Phasellus vitae velit id odio vehicula ullamcorper. Maecenas
           tempor eros tellus, in interdum purus commodo vitae. Donec ultricies quam a sem ultrices fringilla. Integer
           enim ante, gravida id justo nec, tincidunt porta libero. Phasellus vitae aliquet ipsum. Nullam a tincidunt
           risus. Nullam tempus aliquet fermentum. In facilisis orci nec aliquet egestas. Proin luctus congue ligula,
           non iaculis ante congue id. Vivamus a nulla venenatis, blandit elit id, molestie eros. Nullam ac enim
           semper, consectetur dui vel, tristique urna. Sed quis tristique tortor. Sed aliquam massa et ex semper
           ultricies. Praesent porta nisl vel nunc condimentum, et porttitor augue varius.</p>
    </div>
    <?php helpers::getscripts();?>
</body>