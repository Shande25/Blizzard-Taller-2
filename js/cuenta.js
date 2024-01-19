function cerrarSesion() {
    alert("Cerrando sesión.¡Redirigiendo a la página de inicio de sesión!");
    window.location.href = "Iniciar.html";
}


let validarRegistro = () => {
    let usuario = document.getElementById('id_usuario').value.trim();
    let nombre = document.getElementById('id_nombre').value.trim();
    let apellido = document.getElementById('id_apellido').value.trim();
    let email = document.getElementById('id_email').value.trim();
    let contrasenia = document.getElementById('id_passw').value.trim();

    if (!usuario || !nombre || !apellido || !email || !contrasenia) {
      alert('Por favor, completa todos los campos antes de registrarte.');
      return false;
    }

    let regexCorreo = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!regexCorreo.test(email)) {
      alert('Por favor, ingresa un correo electrónico válido.');
      return false;
    }

    return true;
  };