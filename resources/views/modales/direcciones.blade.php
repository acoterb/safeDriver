
    <br>
    <div class="col-md-12">
        <br>
        <center>
          <h4>Dirección</h4>
        </center>
    </div>

    <div class="col-md-4">
        <div class="input-group-addon">Estado</div>
        <input type="text" class="form-control" name="estadoDireccion" id="estado"
        @if(isset($clientes))
    value="{{$clientes->direccion->estado}}"
         @else
        placeholder="estado" value="JALISCO"
         @endif
         >
    </div>
    <div class="col-md-4">
        <div class="input-group-addon">Ciudad</div>
        <select required autofocus id="ciudad" name="ciudad" class="form-control selectpicker" data-live-search="true">
            @if(isset($clientes))
                <option selected value="{{$clientes->direccion->ciudad}}">{{$clientes->direccion->ciudad}}</option>
            @endif
            <option value="">Selecciona la ciudad</option>
            @foreach($municipio as $municipios)
                
                <option value="{{$municipios->Municipio}}">{{$municipios->Municipio}}</option>
            @endforeach
        </select>    
    </div>

    <div class="col-md-4">
        <a href="{{route('direcciones')}}">
            <button type="button" class="btn btn-primary">
                <i>Agregar dirección no existente</i>
            </button>
        </a>
    </div>

    <div class="col-md-4">
        <label class="sr-only" for="calle">Calle</label>
        <div class="input-group-addon">Calle</div>
      <input type="text" class="form-control" name="calle" id="calle"
    @if(isset($clientes))
       value="{{$clientes->direccion->calle}}" >
    @else
    placeholder="calle">
         @endif

    </div>
    <div class="col-md-4">
        <div class="input-group-addon">Colonia</div>
        <select required autofocus id="col" name="col" class="form-control selectpicker" data-live-search="true">
            @if(isset($clientes))
                <option selected value="{{$clientes->direccion->colonia}}">{{$clientes->direccion->colonia}}</option>
            @endif
            <option value="">Selecciona la colonia</option>
            @foreach($colonia as $col)
                <option value="{{$col->colonia}}">{{$col->colonia}}</option>
            @endforeach
        </select>
    </div>
    <div class="col-md-4">
        <div class="input-group-addon">Cruzes</div>
        <input type="text" class="form-control" name="cruzes" id="cruzes"
    @if(isset($clientes))
    value="{{$clientes->direccion->cruzes}}"

         @else
        placeholder="cruzes"
         @endif
        >
    </div>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.15/dist/js/bootstrap-select.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.15/dist/css/bootstrap-select.min.css">
    <script type="text/javascript">
        $( "#ciudad" ).change(function() {

        var Route = "/colonia/" + $('#ciudad').val();

        $("#col option").remove();

        $("#col").append("<option value = ><--Selecciona la colonia--></option>");
        $("#col").selectpicker('refresh');

        $.get(Route, function(res){
            for( i = 0; i < res.length;i++){
                console.log("La fila  "+ res[i]);

                $("#col").append("<option value = "+res[i].colonia+">"+res[i].colonia+"</option>");
            }
            $("#col").selectpicker('refresh');
    
        }).fail(function(res) {
            console.log(data + " - " + status + " - " + error);          
        });

    });
    </script>