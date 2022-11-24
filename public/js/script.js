$('.mi_checkbox').change(function() {
  console.log("hola");  
  //Verifico el estado del checkbox, si esta seleccionado sera igual a 1 de lo contrario sera igual a 0
  var estatus = $(this).prop('checked') == true ? 1 : 0; 
  //var estatus = $(this).prop('checked') == true ? 'Activo' : 'Inactivo';
  var valorSelect = $(this).val(); //Capturo el valor del Checkbox  seleccionado
  console.log(estatus);
  
  //Recorrer toda la lista de los checkbox seleccionados
  var selected = '';    
      $('input[type=checkbox]').each(function(){
          if (this.checked) {
             dias =  selected += $(this).val();
          }
      }); 
      document.getElementById("name").value = "Pago "+ dias; 
    });


    
    $('.selectpicker').click(function () {
      console.log("hola"); 
    });
    
        