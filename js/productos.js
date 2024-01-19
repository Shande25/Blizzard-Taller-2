let abrirModal = () => {
    document.getElementById('miModal').style.display = 'flex';
  };
  
  let cerrarModal = () => {
    document.getElementById('miModal').style.display = 'none';
  };
  
  let realizarCompra = () => {
    
    let numeroTarjeta = document.querySelector('#miModal input[placeholder="Número de tarjeta"]').value;
    let fechaVencimiento = document.querySelector('#miModal input[placeholder="Fecha de vencimiento"]').value;
    let codigoSeguridad = document.querySelector('#miModal input[placeholder="Código de seguridad"]').value;
  
    
    if (!numeroTarjeta || !fechaVencimiento || !codigoSeguridad) {
      alert('Por favor, completa todos los campos antes de realizar la compra.');
    } else {
  
      alert('Compra realizada con éxito. Gracias por tu compra.');
      cerrarModal();
    }
  };
