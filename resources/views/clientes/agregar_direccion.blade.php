<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>

    <div class="col-md-12">
      <div class="card" style="box-shadow: 0 5px 5px 0 rgba(0,0,0,0.5);">
        <div class="card-header">
          <center>
            <h3>Agregar Municipios</h3>
          </center>
        </div>

        <form method="POST" action="{{ route('crear.municipio') }}" aria-label="{{ __('Clientes') }}" enctype="multipart/form-data">
          @csrf
          <div class="card-body">
            <div class="row">
              <div class="col-md-12">
                <label>Descripción:</label>
                <label>En esta sección se agregara un minucipio que no este en la lista.
                Procura que el nombre comienzé con mayuscula, y si vas a poner municipios combinados separalos con una coma y que también comienzé con mayuscula.</label>
              </div>
          
              <div class="col-md-8">
                <label>Municipio:</label>
                <input id="municipio" type="text" placeholder="Municipio" class="form-control" name="municipio" maxlength="60">
              </div>

              </div>
          </div>
          
          <div class="card-footer">
            <div class="col-md-12">
              <center>
                <button type="submit" id="guardar" class="btn btn-success">
                  <i class="fas fa-save"></i>&nbsp;&nbsp;{{ __('Guardar') }}
                </button>
              </center>
            </div>
          </div>
        </form>
      </div>
    </div>

    <br><br><br>

    <div class="col-md-12">
      <div class="card" style="box-shadow: 0 5px 5px 0 rgba(0,0,0,0.5);">
        <div class="card-header">
          <center>
            <h3>Agregar Colonias</h3>
          </center>
        </div>

        <form method="POST" action="{{ route('crear.colonia') }}" aria-label="{{ __('Clientes') }}" enctype="multipart/form-data">
          @csrf
          <div class="card-body">
            <div class="row">
              <div class="col-md-12">
                <label>Descripción:</label>
                <label>En esta sección se agregara una colonia que no este en la lista.
                Primero selecciona el municio al que pertenece la colonia, el nombre de la colonia tiene que ser todo en mayusculas y deberas agregar su respectivo código postal.</label>
              </div>

              <div class="col-md-12">
                <br>
              </div>

              <div class="col-md-4">
                <label>Municipio:</label>
                <select required autofocus id="ciudad" name="ciudad" class="form-control selectpicker" data-live-search="true">
                  <option>Selecciona un area</option>
                  @foreach($municipios as $municipio)
                    <option value="{{$municipio->id}}">{{$municipio->Municipio}}</option>
                  @endforeach
                </select>
              </div>

              <div class="col-md-4">
                <label>Colonia:</label>
                <input id="colonia" type="text" placeholder="Colonia" class="form-control" name="colonia" maxlength="100">
              </div>
          
              <div class="col-md-4">
                <label>Código postal:</label>
                <input id="codigo_postal" type="text" placeholder="44000" class="form-control" name="codigo_postal" maxlength="5">
              </div>

              <div class="col-md-12">
                <br>
              </div>
              
            </div>
          </div>

          <div class="card-footer">
            <div class="col-md-12">
              <center>
                <button type="submit" id="guardar" class="btn btn-success">
                  <i class="fas fa-save"></i>&nbsp;&nbsp;{{ __('Guardar') }}
                </button>
              </center>
            </div>
          </div>
        </form>
      </div>
    </div>
</x-app-layout>