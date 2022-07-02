<?php require 'header.php'; ?>

    <div class="contenedor">
        <div class="post">
            <article>
                <h2 class="titulo"><?php echo $post['titulo'] ?></h2>
                <p class="fecha"><?php echo fecha($post['fecha']) ?></p>
                <div class="thumb">
                    <img src="<?php echo RUTA . '/' . $blog_config['carpeta_imagenes'] . $post['thumb'] ; ?>" alt="<?php $post['titulo']; ?>">
                </div>
                <p class="extracto">
                    <!-- Lorem, ipsum dolor sit amet consectetur adipisicing elit. Possimus aliquam mollitia omnis. Impedit iusto veritatis laborum earum autem expedita deserunt magnam ipsa? Odio molestias repellendus fuga libero, consequuntur quod commodi at neque. Accusantium dolor aspernatur in quasi quod, qui accusamus harum. Nobis similique cumque praesentium dicta perferendis, itaque, fugiat fugit maiores id, modi dolorem aperiam harum non explicabo ullam rerum ab facere tempora vel magnam reprehenderit laboriosam! Velit, saepe suscipit! -->
                    <?php echo nl2br($post['texto']); ?>    <!-- // ! nl2br() para que los saltos de linea sean visibles en el texto -->
                </p>
            </article>
        </div>
    </div>

<?php require 'footer.php'; ?>