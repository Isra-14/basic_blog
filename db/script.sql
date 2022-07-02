CREATE DATABASE blog_practica;
USE blog_practica;

CREATE TABLE articulos (
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    titulo VARCHAR(200),
    extracto VARCHAR(200),
    fecha TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    texto TEXT,
    thumb VARCHAR(50)
);

INSERT INTO blog_practica.articulos (id, titulo, extracto, fecha, texto, thumb) VALUES (1, 'Titulo del Primer Post Actualizado', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam pharetra, libero non pellentesque laoreet, tortor diam molestie urna, feugiat posuere nibh metus in est.', '2022-03-19 23:07:47', '              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam pharetra, libero non pellentesque laoreet, tortor diam molestie urna, feugiat posuere nibh metus in est. Nulla sollicitudin pretium nulla vel porttitor. Suspendisse potenti. Nam eu gravida augue, ut efficitur ligula. Aliquam pellentesque euismod dolor, sit amet laoreet leo pharetra facilisis. Cras sodales elementum lectus, et vehicula tortor fringilla nec. Aliquam lacinia elit consectetur magna rhoncus, sit amet faucibus urna facilisis. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nullam at accumsan nisi. Suspendisse fermentum ultricies tellus, ut ullamcorper nibh malesuada sit amet.
Suspendisse potenti. Fusce et libero ligula. Maecenas eu magna finibus, ullamcorper purus nec, auctor ex. Fusce vulputate, orci quis porttitor vehicula, ex eros luctus lacus, et vulputate urna urna vitae orci. Ut sodales orci vitae lacinia ornare. In hac habitasse platea dictumst. Nulla a risus arcu. Quisque sed convallis lorem. Sed sit amet leo quis ipsum fringilla gravida quis eu erat. Morbi rutrum convallis ligula, eu pellentesque nibh sollicitudin nec. Nulla velit enim, tincidunt sed justo iaculis, porttitor suscipit urna.            
Hola mundo!', 'ToadFondo.jpg');

SELECT * FROM articulos;