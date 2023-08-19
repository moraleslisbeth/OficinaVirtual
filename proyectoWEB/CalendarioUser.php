<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Calendario de Eventos</title>

<!-- Scripts CSS -->
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/datatables.min.css">
<link rel="stylesheet" href="css/bootstrap-clockpicker.css">
<link rel="stylesheet" href="fullcalendar/main.css">

<!-- Scripts JS -->
<script src="js/jquery-3.6.0.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/datatables.min.js"></script>
<script src="js/bootstrap-clockpicker.js"></script>
<script src="js/moment-with-locales.js"></script>
<script src="fullcalendar/main.js"></script>


  </head>
  <body>

    <div class="container-fluid">
      <section class="content-header">
        <h1>
          Calendario
          <small>de  Eventos</small>
        </h1>
      </section>

          <div id="Calendario1" style="border: 1px solid #000; padding:2px"></div>
        
        <div class="col-2">
            <div id="listaeventospredefinidos"></div>
          </div>
        </div>
      </div>
    </div>

    <!-- Formulario de Eventos -->
    <div class="modal fade" id="FormularioEventos" tabindex="-1" role="dialog">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">x</span>
            </button>
          </div>

          <div class="modal-body">
            <input type="hidden" id="Id">

            <div class="form-row">
              <div class="form-group col-12">
                <label for="">Titulo del Evento:</label>
                <input type="text" id="Titulo" class="form-control" placeholder="">
              </div>
            </div>

            <div class="form-row">
              <div class="form-group col-md-6">
                <label>Fecha de inicio:</label>
                <div class="input-group" data-autoclose="true">
                  <input type="date" id="FechaInicio" value="" class="form-control">
                </div>
              </div>
              <div class="form-group col-md-6" id="TituloHoraInicio">
                <label>Hora de inicio:</label>
                <div class="input-group clockpicker" data-autoclose="true">
                  <input type="text" id="HoraInicio" value="" class="form-control" autocomplete="off">
                </div>
              </div>
            </div>

            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="">Fecha de fin:</label>
                <div class="input-group" data-autoclose="true">
                  <input type="date" id="FechaFin" class="form-control" value="">
                </div>
              </div>
              <div class="form-group col-md-6" id="TituloHoraFin">
                <label for="">Hora final del Evento:</label>
                <div class="input-group clockpicker" data-autoclose="true">
                  <input type="text" id="HoraFin" class="form-control" autocomplete="off">
                </div>
              </div>
            </div>

            <div class="form-row">
              <label for="">Descripcion:</label>
              <textarea id="Descripcion" class="form-control" rows="3"></textarea>
            </div>
            
           

          </div>

        

        </div>
      </div>
    </div>


    <script>

document.addEventListener("DOMContentLoaded", function(){

    new FullCalendar.Draggable(document.getElementById('listaeventospredefinidos'), {
      itemSelector: '.fc-event',
      eventData: function(eventEl){
        return{
            title: eventEl.innerText.trim()
        }
      }
    });

    $('.clockpicker').clockpicker();

    let calendario1 = new FullCalendar.Calendar(document.getElementById('Calendario1'),{
      droppable: true,
      height: 850,
      headerToolbar:{
        left: 'prev,next today',
        center: 'title',
        right: 'dayGridMonth,timeGridWeek,timeGridDay'
      },
      editable: true,
      events: 'datoseventos.php?accion=listar',

      eventClick: function(info) {
      
        $('#Id').val(info.event.id);
        $('#Titulo').val(info.event.title);
        $('#Descripcion').val(info.event.extendedProps.descripcion);
        $('#FechaInicio').val(moment(info.event.start).format("YYYY-MM-DD"));
        $('#FechaFin').val(moment(info.event.end).format("YYYY-MM-DD"));
        $('#HoraInicio').val(moment(info.event.start).format("HH:mm"));
        $('#HoraFin').val(moment(info.event.end).format("HH:mm"));
        $('#ColorFondo').val(info.event.backgroundColor);
        $('#ColorTexto').val(info.event.textColor);
        $("#FormularioEventos").modal('show');
      },
     
    
      
    });

    calendario1.render();

    //Eventos de botones de la aplicacion
  


    //funciones para comunicarse con el servidor AJAX!


    //funciones que interactuan con el FormularioEventos

  

    function recuperarDatosFormulario(){
      let registro = {
        id: $('#Id').val(),
        titulo: $('#Titulo').val(),
        descripcion: $('#Descripcion').val(),
        inicio: $('#FechaInicio').val() + ' ' + $('#HoraInicio').val(),
        fin: $('#FechaFin').val() + ' ' + $('#HoraFin').val(),
        colorfondo: $('#ColorFondo').val(),
        colortexto: $('#ColorTexto').val()
      }
      return registro;
    }

});
    </script>


  </body>
</html>
