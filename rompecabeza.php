<?php
$data = include 'data.php';
$puzzle = $data['puzzle'];
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <title>Rompecabezas</title>
    <link rel="stylesheet" href="./CSS/rompecabeza.css">
</head>
<body>
    <h1>Rompecabezas</h1>
    <div class="puzzle-container">
    <?php foreach ($puzzle as $index => $piece): ?>
        <div class="puzzle-piece" id="piece-<?= $index ?>">
            <img src="<?= $piece['image'] ?>" alt="Imagen <?= $index ?>" class="hidden">
            <button onclick="showModal(<?= $index ?>, '<?= $piece['word'] ?>')">Revelar</button>
        </div>
    <?php endforeach; ?>
</div>

<!-- Modal -->
<div id="modal" class="modal hidden">
    <div class="modal-content">
        <h3>Escribe la palabra</h3>
        <input type="text" id="modal-input" placeholder="Escribe aquí">
        <button onclick="checkWord()">Confirmar</button>
        <button onclick="closeModal()">Cerrar</button>
    </div>
</div>

    <canvas id="confettiCanvas" class="confetti-canvas"></canvas>

<div id="final-phrase" class="hidden">
    <h2>Para Mi Novia:</h2>
    <h3></h3>
</div>

<script src="./rompecabeza.js"></script>
    

    <a href="timeline.php" class="btn">Volver a la línea del tiempo</a>
    <a href="./10/dramatic-fireworks.html" class="btn">Disfruta</a>


</body>
</html>
