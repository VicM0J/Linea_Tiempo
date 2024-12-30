<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuestra Línea del Tiempo</title>
    <script src="contraseña.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="./CSS/timeline.css">
</head>
<style>
/* Estilos del botón */
.btn-inicio {
    display: inline-block;
    padding: 10px 20px;
    color: #fff;
    text-decoration: none;
    font-size: 16px;
    font-weight: bold;
    background-color: #ff6f61; /* Color azul */
    border-radius: 5px;
    transition: background-color 0.3s, transform 0.2s;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
}

/* Hover y efectos del botón */
.btn-inicio:hover {
    background-color: #ff6f63; /* Color azul más oscuro al pasar el cursor */
    transform: scale(1.05); /* Pequeño efecto de zoom */
    box-shadow: 0 6px 8px rgba(0, 0, 0, 0.2);
}

/* Activo */
.btn-inicio:active {
    transform: scale(1); /* Elimina el zoom al hacer clic */
    background-color: #003d82; /* Azul aún más oscuro */
}

        .modal {
            display: none; 
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.6); 
            justify-content: center;
            align-items: center;
            z-index: 1000;
        }

        .modal-content {
            background: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            text-align: center;
            width: 300px;
        }

        .modal-content h3 {
            margin: 0 0 10px;
        }

        .modal-content input {
            width: 90%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        .modal-content button {
            padding: 10px 20px;
            background: #ff6f61;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background 0.3s ease;
        }

        .modal-content button:hover {
            background: #b52d2b;
        }

        .close-btn {
            background: #d9534f;
            margin-top: 10px;
        }

        .close-btn:hover {
            background: #b52d2b;
        }
    </style>

<body>
    <header>
        <h1>Nuestra Historia</h1>
        <a href="index.php" class="btn-inicio">Inicio</a>
        <a href="./rompecabeza.php" class="btn-inicio">Rompecabezas</a>
    </header>
    <div class="timeline">
        <!-- Evento 1 -->
        <div class="event" onclick="triggerConfetti(event)">
            <h4>1</h4>
        <img src="./IMG/evnt1.png" alt="Cuando nos conocimos">
        <div class="event-content">
            <h2>9/Oct/2018</h2>
            <p>Cuando nos conocimos.</p>
            <button class="btn" onclick="openModal('evnt1.php', 'Mi Amor')">Leer</button>
        </div>
    </div>

   
        
        <!-- Evento 2 -->
        <div class="event" onclick="triggerConfetti(event)">
        <h4>2</h4>
    <img src="./IMG/evnt2.png" alt="Primera vez que fui a verla">
    <div class="event-content">
        <h2>15/11/2020</h2>
        <p>Primera vez que fuí a verte a tu casa.</p>
        <button class="btn" onclick="openModal('evnt2.php', 'Mi Vida')">Leer</button>
    </div>
</div>
        <!-- Evento 3 -->
        <div class="event" onclick="triggerConfetti(event)">
        <h4>3</h4>
            <img src="./IMG/evnt3.png" alt="Cuando me empezó a gustar">
            <div class="event-content">
                <h2>19/12/2020</h2>
                <p>Cuando me empezaste a gustar.</p>
                <button class="btn" onclick="openModal('evnt3.php', 'Mi Cielo')">Leer</button>
            </div>
        </div>

        <!-- Evento 4 -->
        <div class="event" onclick="triggerConfetti(event)">
        <h4>4</h4>
            <img src="./IMG/evnt4.png" alt="Nuestro primer “Te amo”">
            <div class="event-content">
                <h2>14/02/2021</h2>
                <p>Nuestro primer “Te amo”.</p>
                <button class="btn" onclick="openModal('evnt4.php', 'Mi Niña')">Leer</button>
            </div>
        </div>

        <!-- Evento 5 -->
        <div class="event" onclick="triggerConfetti(event)">
        <h4>5</h4>
            <img src="./IMG/evnt5.png" alt="Sentimientos encontrados">
            <div class="event-content">
                <h2>22/05/2021</h2>
                <p>Sentimientos correspondidos.</p>
                <button class="btn" onclick="openModal('evnt5.php', 'Cariño')">Leer</button>
            </div>
        </div>

        <!-- Evento 6 -->
        <div class="event" onclick="triggerConfetti(event)">
        <h4>6</h4>
            <img src="./IMG/evnt6.png" alt="Primera vez que salimos">
            <div class="event-content">
                <h2>20/06/2021</h2>
                <p>Primera vez que salimos.</p>
                <button class="btn" onclick="openModal('evnt6.php', 'Bebé')">Leer</button>
            </div>
        </div>

        <!-- Evento 7 -->
        <div class="event" onclick="triggerConfetti(event)">
        <h4>7</h4>
            <img src="./IMG/evnt7.png" alt="Nuestro primer día de novios">
            <div class="event-content">
                <h2>03/07/2021</h2>
                <p>Nuestro primer día de novios.</p>
                <button class="btn" onclick="openModal('evnt7.php', 'Hermosa')">Leer</button>
            </div>
        </div>

        <!-- Evento 8 -->
        <div class="event" onclick="triggerConfetti(event)">
        <h4>8</h4>
            <img src="./IMG/evnt8.png" alt="Nuestro primer beso">
            <div class="event-content">
                <h2>17/09/2021</h2>
                <p>Nuestro primer beso.</p>
                <button class="btn" onclick="openModal('evnt8.php', 'Dulzura')">Leer</button>
            </div>
        </div>

        <!-- Evento 9 -->
        <div class="event" onclick="triggerConfetti(event)">
        <h4>9</h4>
            <img src="./IMG/evnt9.png" alt="Nuestra primera navidad">
            <div class="event-content">
                <h2>25/12/2021</h2>
                <p>Nuestra primera navidad.</p>
                <button class="btn" onclick="openModal('evnt9.php', 'Mi Princesa')">Leer</button>
            </div>
        </div>

        <!-- Evento 10 -->
        <div class="event" onclick="triggerConfetti(event)">
        <h4>10</h4>
            <img src="./IMG/evnt10.png" alt="Un año de novios">
            <div class="event-content">
                <h2>03/07/2022</h2>
                <p>Un año de novios.</p>
                <button class="btn" onclick="openModal('evnt10.php', 'Mami')">Leer</button>
            </div>
        </div>

        <!-- Evento 11 -->
        <div class="event" onclick="triggerConfetti(event)">
        <h4>11</h4>
            <img src="./IMG/evnt11.png" alt="Cumplimos un logro en la escuela">
            <div class="event-content">
                <h2>15/07/2022</h2>
                <p>Cumplimos un logro en la escuela.</p>
                <button class="btn" onclick="openModal('evnt11.php', 'Mi Reina')">Leer</button>
            </div>
        </div>

        <!-- Evento 12 -->
        <div class="event" onclick="triggerConfetti(event)">
        <h4>12</h4>
            <img src="./IMG/evnt12.png" alt="Primera vez en Guadalajara">
            <div class="event-content">
                <h2>21/01/2023</h2>
                <p>Primera vez en Guadalajara.</p>
                <button class="btn" onclick="openModal('evnt12.php', 'Bonita')">Leer</button>
            </div>
        </div>

        <!-- Evento 13 -->
        <div class="event" onclick="triggerConfetti(event)">
        <h4>13</h4>
            <img src="./IMG/evnt13.png" alt="Fuimos a la playa">
            <div class="event-content">
                <h2>02/07/2023</h2>
                <p>Fuimos a la playa.</p>
                <button class="btn" onclick="openModal('evnt13.php', 'Linda')">Leer</button>
            </div>
        </div>

        <!-- Evento 14 -->
        <div class="event" onclick="triggerConfetti(event)">
        <h4>14</h4>
            <img src="./IMG/evnt14.png" alt="Nuestra cuarta navidad juntos">
            <div class="event-content">
                <h2>03/07/2024</h2>
                <p>3 años de novios.</p>
                <button class="btn" onclick="openModal('evnt14.php', 'Guapa')">Leer</button>
            </div>
        </div>

        <!-- Evento 15 -->
        <div class="event" onclick="triggerConfetti(event)">
        <h4>15</h4>
            <img src="./IMG/evnt15.png" alt="3 años de novios">
            <div class="event-content">
            <h2>25/12/2024</h2>
            <p>Nuestro 4to año nuevo juntos.</p>
                <button class="btn" onclick="openModal('evnt15.php', 'Esposa Mía')">Leer</button>  
            </div>
        </div>
        <div class="confetti"></div>
        <div class="hearts"></div>
    </div>
    
    <div class="modal" id="passwordModal">
    <div class="modal-content">
        <h3>Ingresa la contraseña</h3>
        <input type="text" id="passwordInput" placeholder="Palabra Clave:">
        <button onclick="validatePassword()">Acceder</button>
        <button class="close-btn" onclick="closeModal()">Cancelar</button>
    </div>
</div>

</body>

<script>
    function triggerConfetti(event) {
        // Previene que el evento de clic se propague a otros elementos
        event.stopPropagation();

        // Crea confeti o corazones al hacer clic
        const confettiContainer = document.querySelector('.confetti');
        const heartsContainer = document.querySelector('.hearts');
        
        // Limpiar los contenedores
        confettiContainer.innerHTML = '';  
        heartsContainer.innerHTML = '';  

        // Definir el número de confetis o corazones
        const numConfetti = 20;
        const numHearts = 15;

        // Aseguramos que cubra toda la pantalla
        confettiContainer.style.width = '100vw';
        confettiContainer.style.height = '100vh';
        heartsContainer.style.width = '100vw';
        heartsContainer.style.height = '100vh';

        // Generar confetis
        for (let i = 0; i < numConfetti; i++) {
            const confetti = document.createElement('span');
            confetti.style.left = `${Math.random() * 100}vw`; // Posición aleatoria horizontal
            confetti.style.animationDelay = `${Math.random() * 0.5}s`;
            confettiContainer.appendChild(confetti);
        }

        // Generar corazones
        for (let i = 0; i < numHearts; i++) {
            const heart = document.createElement('span');
            heart.innerHTML = '❤️';  // Corazón emoji
            heart.style.left = `${Math.random() * 100}vw`; // Posición aleatoria horizontal
            heart.style.animationDelay = `${Math.random() * 0.5}s`;
            heartsContainer.appendChild(heart);
        }

        // Eliminar los efectos después de 3 segundos
        setTimeout(() => {
            confettiContainer.innerHTML = '';  
            heartsContainer.innerHTML = '';  
        }, 3000);  // El efecto desaparece después de 3 segundos
    }
</script>

</html>
