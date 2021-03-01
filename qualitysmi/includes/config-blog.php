<?php

/*
    Definir tipo de submenu -> lista || thumb
*/
$tipoLista = 'thumb'; // thumb || lista


/*
    Setar páginas para blog carregar dinamicamente
*/
$paginasBlog = [
    'pagina-blog-teste-1' => [
        'title' => 'Pagina de teste 1',
        'description' => 'Página de teste 1',
        'keywords' => 'pagina, teste, 1',
        'artigo' => '<p>Lorem ipsum dolor sit amet, <strong>consectetur</strong> adipisicing elit. Perferendis ipsam ea tempora accusamus quasi numquam architecto sequi ducimus minima enim facere temporibus quaerat rerum laudantium vel quas, exercitationem impedit in perspiciatis voluptatum soluta. Aut deserunt pariatur, cum vitae obcaecati facilis assumenda sunt animi aspernatur, atque nihil itaque necessitatibus laudantium rerum accusamus. Pariatur minima veritatis quaerat, aliquid delectus saepe illo porro adipisci id ab ullam beatae commodi dignissimos qui debitis. Blanditiis delectus exercitationem nostrum dolores numquam rerum fugiat porro quaerat beatae ducimus, culpa reprehenderit temporibus ipsum facere suscipit, voluptatem earum cupiditate a sunt aliquam. Deleniti rerum dolores, a facilis, consequuntur incidunt?</p><h2>Sub título 1</h2><p><strong>Lorem ipsum</strong> dolor sit amet, consectetur adipisicing elit. Odit quis alias tempora repellendus dignissimos voluptates quibusdam quaerat autem possimus. Aliquam illum mollitia consequatur, dolorum blanditiis, aperiam temporibus, alias aliquid, animi rem quis inventore? Iste sit asperiores, doloribus excepturi, ipsa reiciendis quidem libero expedita rerum, pariatur dolore cupiditate voluptatibus voluptas. Neque!</p>',
        'image' => 'pagina-blog-teste-1.jpg',
    ],
    'pagina-blog-teste-2' => [
        'title' => 'Pagina de teste 2',
        'description' => 'Página de teste 2',
        'keywords' => 'pagina, teste, 2',
        'artigo' => '<p>Lorem ipsum dolor sit amet, <strong>consectetur</strong> adipisicing elit. Perferendis ipsam ea tempora accusamus quasi numquam architecto sequi ducimus minima enim facere temporibus quaerat rerum laudantium vel quas, exercitationem impedit in perspiciatis voluptatum soluta. Aut deserunt pariatur, cum vitae obcaecati facilis assumenda sunt animi aspernatur, atque nihil itaque necessitatibus laudantium rerum accusamus. Pariatur minima veritatis quaerat, aliquid delectus saepe illo porro adipisci id ab ullam beatae commodi dignissimos qui debitis. Blanditiis delectus exercitationem nostrum dolores numquam rerum fugiat porro quaerat beatae ducimus, culpa reprehenderit temporibus ipsum facere suscipit, voluptatem earum cupiditate a sunt aliquam. Deleniti rerum dolores, a facilis, consequuntur incidunt?</p><h2>Sub título 1</h2><p><strong>Lorem ipsum</strong> dolor sit amet, consectetur adipisicing elit. Odit quis alias tempora repellendus dignissimos voluptates quibusdam quaerat autem possimus. Aliquam illum mollitia consequatur, dolorum blanditiis, aperiam temporibus, alias aliquid, animi rem quis inventore? Iste sit asperiores, doloribus excepturi, ipsa reiciendis quidem libero expedita rerum, pariatur dolore cupiditate voluptatibus voluptas. Neque!</p>',
        'image' => 'pagina-blog-teste-2.jpg',
    ]
];

/*
    Configurações indexsação (Não alterar)
*/
$urlRequisitada = ltrim( parse_url( $_SERVER['REQUEST_URI'] , PHP_URL_PATH ) , '/' );
$depoisDoBlog = explode('blog/',$urlRequisitada);
if (count($depoisDoBlog) == 1) {
    $depoisDoBlog = explode('blog',$urlRequisitada);
}
$canonical = $canonical.'/'.end($depoisDoBlog);
$urlSolicitada = end($depoisDoBlog);
$areaGeral = true;
if (!empty($urlSolicitada)) {
    $areaGeral = false;
    $paginaRequisitada = $paginasBlog[$urlSolicitada];
    $paginaRequisitada['urlSolicitada'] = $urlSolicitada;

    $h1      	 = $paginaRequisitada['title'];
    $title    	 = $paginaRequisitada['title'];
    $description = $paginaRequisitada['description']; // Manter entre 130 a 160 caracteres
    $keywords    = $paginaRequisitada['keywords'];
    $meta_img    = $quality->url . 'imagens/blog/thumbs/' . $paginaRequisitada['image'];;
}
?>