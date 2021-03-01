<?php

    $title       = "Produtos_E-OU_Serviços";
    $description = ""; // Manter entre 130 a 160 caracteres
    $h1          = $title;
    $keywords    = $title;
    $meta_img    = "";

    include "includes/quality/class.quality.php"; 
    include "includes/_parametros.php";
    include "includes/quality/head.quality.php";
    
    $quality->compressCSS(array(
        
    ));
    
?>
</head>
<body>
    
    <?php include "includes/_header.php"; ?>
    
    <main class="main-content">
        <section class="container">
            <?php echo $quality->breadcrumb(array($title)); ?>
            <h1><?php echo $h1;?></h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas mollis ornare erat et malesuada. Fusce finibus quam non facilisis viverra. Vestibulum tempor libero neque, nec ultricies leo bibendum quis. Sed elit mi, semper ac purus a, laoreet molestie felis. Suspendisse sit amet mi porta, scelerisque orci eget, feugiat dui. Suspendisse condimentum purus eros. Fusce ultrices tincidunt suscipit.</p>
        </section>
    </main>
    
    <?php include "includes/_footer.php"; ?>
    
    
</body>
</html>