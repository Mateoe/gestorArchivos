$('#exampleModal').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget) // Button that triggered the modal
    var recipient = button.data('whatever') // Extract info from data-* attributes
    // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
    // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
    var modal = $(this)
    modal.find('.modal-body #barra').val(recipient)
  })

  $('#exampleModal2').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget) // Button that triggered the modal
    var recipient = button.data('whatever') // Extract info from data-* attributes
    // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
    // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
    var modal = $(this)
    modal.find('.modal-body #barra').val(recipient)
  })

  $('#exampleModal3').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget) // Button that triggered the modal
    var recipient = button.data('whatever') // Extract info from data-* attributes
    // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
    // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
    var modal = $(this)
    modal.find('.modal-body #barra').val(recipient)
  })



document.querySelectorAll('.seleccionar').forEach(item => {
  item.addEventListener('change',selectRadio,true);
})

function selectRadio(){
  ruta= document.getElementById("rutaM").value
  var resultado= "";
   $("input[type=checkbox]:checked").each(function(){
   var cont= 0;

 $(this).closest('td').siblings().each(function(){
   if(cont===0){
     var string= $(this).text();
     resultado+= ruta+"/"+string+" "
     
   }    
   cont = cont + 1;
 });

});
 document.getElementById("checkbox-seleccionados").value= resultado
 
}
 

