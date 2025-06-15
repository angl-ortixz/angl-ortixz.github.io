document.getElementById('loginForm').addEventListener('submit', function(event) {
    event.preventDefault(); // Prevenir el envío del formulario

    // Obtener los valores de los campos
    const username = document.getElementById('username').value;
    const password = document.getElementById('password').value;

    // Datos de login predeterminados (esto se puede cambiar)
    const validUsername = 'angel';
    const validPassword = '1234567890';

    // Validar si los datos son correctos
    if (username === validUsername && password === validPassword) {
        alert('¡Inicio de sesión exitoso!');
        // Aquí podrías redirigir a otra página, por ejemplo:
         window.location.href = 'index.html';
    } else {
        // Mostrar mensaje de error si las credenciales son incorrectas
alert("tas mal pa HAHAHA")
    }})
