<?php require 'header.php'; ?>

    <div class="contenedor">
        <?php foreach($posts as $post): ?>
            <div class="post">
                <article>
                    <h2 class="titulo"><a href="single.php?id=<?php echo $post['id']; ?>"><?php echo $post['titulo']; ?></a></h2>
                    <p class="fecha"><?php echo fecha($post['fecha']); ?></p>
                    <div class="thumb">
                        <a href="single.php?id=<?php echo $post['id']; ?>">
                            <img src="<?php echo RUTA . '/' . $blog_config['carpeta_imagenes'] . $post['thumb']; ?>" alt="imagenPost">
                        </a>
                    </div>
                    <p class="extracto"><?php echo $post['extracto']; ?></p>
                    <a href="single.php?id=<?php echo $post['id']; ?>" class="continuar">Leer mas</a>
                </article>
            </div>
        <?php endforeach; ?>


        <?php require "paginacion.php" ?>
    </div>

<?php require 'footer.php'; ?>