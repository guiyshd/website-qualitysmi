<?php
    $title       = "Empresa";
    $description = "asd"; // Manter entre 130 a 160 caracteres
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
        <section class="container text-justify">
            <?php echo $quality->breadcrumb(array($title)); ?>
            <h1><?php echo $h1; ?></h1>
            <img src="<?php echo $url; ?>imagens/sem-imagem.webp" alt="<?php echo $h1; ?>" title="<?php echo $h1; ?>" class="img-right">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis ipsam ea tempora accusamus quasi numquam architecto sequi ducimus minima enim facere temporibus quaerat rerum laudantium vel quas, exercitationem impedit in perspiciatis voluptatum soluta. Aut deserunt pariatur, cum vitae obcaecati facilis assumenda sunt animi aspernatur, atque nihil itaque necessitatibus laudantium rerum accusamus. Pariatur minima veritatis quaerat, aliquid delectus saepe illo porro adipisci id ab ullam beatae commodi dignissimos qui debitis. Blanditiis delectus exercitationem nostrum dolores numquam rerum fugiat porro quaerat beatae ducimus, culpa reprehenderit temporibus ipsum facere suscipit, voluptatem earum cupiditate a sunt aliquam. Deleniti rerum dolores, a facilis, consequuntur incidunt?</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit quis alias tempora repellendus dignissimos voluptates quibusdam quaerat autem possimus. Aliquam illum mollitia consequatur, dolorum blanditiis, aperiam temporibus, alias aliquid, animi rem quis inventore? Iste sit asperiores, doloribus excepturi, ipsa reiciendis quidem libero expedita rerum, pariatur dolore cupiditate voluptatibus voluptas. Neque!</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo laudantium eius eaque vero saepe atque quo eligendi ut nemo qui architecto, velit laboriosam, aperiam aspernatur veritatis minus. Laboriosam sunt, nemo!</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi soluta harum placeat vel dolore eveniet at qui ratione ea commodi veritatis, consequatur delectus accusantium, cum. Suscipit dignissimos, cumque ut debitis architecto impedit sit soluta veniam error veritatis consequatur totam ipsum consectetur unde temporibus vel delectus. Aliquam ad impedit atque voluptas.</p>
        </section>
    </main>
    
    <?php include "includes/_footer.php"; ?>
    
</body>
</html>