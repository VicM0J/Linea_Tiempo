<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuestra Historia</title>
    <link rel="stylesheet" href="CSS/index.css">
</head>
<style>
    .reglas {
        background-color: rgba(255, 255, 255); 
        color: #000000; 
        padding: 20px;
        border-radius: 10px; 
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2); 
        margin: 20px auto; 
        max-width: 600px; 
        font-family: 'Arial', sans-serif; 
        line-height: 1.6; 
        border: 1px solid rgba(255, 255, 255, 0.3);
        text-align: left;
        overflow-y: auto;
        max-height: 300px;
    }

    /* Título de las reglas */
    .reglas h2 {
        font-size: 24px;
        margin-bottom: 15px;
        text-align: center;
        text-transform: uppercase;
        color: #f0f0f0; /* Color ligeramente más claro */
        border-bottom: 2px solid rgba(255, 255, 255, 0.2); /* Separador */
        padding-bottom: 10px;
        color: #000000;
    }

    /* Lista de reglas */
    .reglas ul {
        list-style: inside square; /* Viñetas cuadradas */
        padding: 0;
    }

    .reglas ul li {
        margin-bottom: 10px; /* Espacio entre reglas */
        padding: 5px 10px; /* Espaciado interno */
        background-color: rgba(255, 255, 255, 0.05); /* Fondo tenue para cada regla */
        border-radius: 5px; /* Bordes redondeados para reglas */
        transition: transform 0.2s, background-color 0.3s;
    }

    /* Hover en las reglas */
    .reglas ul li:hover {
        background-color: rgba(255, 255, 255, 0.15); /* Fondo más brillante al pasar el cursor */
        transform: scale(1.02); /* Pequeño efecto de zoom */
    }
</style>
<body>
    <header>
        <h1>Bienvenida, mi amor</h1>
    </header>
    <main class="intro">
        <p>
            Esta página está hecha especialmente para ti, para recordarnos esos momentos mágicos que hemos vivido juntos, desde nuestros inicios hasta nuestra actualidad ❤️ 
        </p>
        <p>
            Espero que te guste y te haga sonreír tanto como a mí al crearla. 🥰
        </p>
    </main>
    <div class="reglas">
        <h2>Reglas</h2>
        <ul>
            <li>1: Cada cuadro tiene un número, mismo que corresponde a una carta.</li>
            <li>2: Para acceder al contenido del cuadro, deberás poner una clave.</li>
            <li>3: La clave se encuentra en el contenido de la carta física, deberás intuir cuál es.</li>
            <li>4: Cuando accedas al contenido de la carta, podrás ver un link a una canción de Spotify.</li>
            <li>5: Para el rompecabezas, te pedirá una palabra secreta.</li>
            <li>6: La palabra es el título de alguna canción que se encuentra en la línea del tiempo. Tendrás que adivinar qué título va en cada cuadro.</li>
            <li>7: Al finalizar todos los cuadros, revelarás una frase.</li>
            <li>Por ejemplo, en el primer cuadro dale a Revelar, y escribe "Rest Of My Life", es importante que las escribas tal cual está en el título.</li>
        </ul>
        <h1 style="text-align: center;">¡Suerte Mi Amor❤️!</h1>
    </div>
    <a href="timeline.php" class="btn">Ir a nuestra historia</a> <br>
    <a href="./Spotify/Spotify.apk" class="btn" download>Descargar Spotify</a>
</body>
</html>