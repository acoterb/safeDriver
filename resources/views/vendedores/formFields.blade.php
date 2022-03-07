@section('breadcrumb')
   <li class="breadcrumb-item"><a href="{{url('/vendedores')}}">Vendedores</a></li>
@if(!isset($vendedores))
        <li class="breadcrumb-item active" aria-current="page">Create</li>
            @else
            <li class="breadcrumb-item active" aria-current="page">Edit</li>
          @endif

  
@endsection
<div class="card-body">
  <div class="row">
    <div class="col-md-12 text-center">
        <br>
        <h4>Vendedores</h4>

    </div>
    
     
      <div class="col-md-4">
          <label for="numero">numero</label>
          <input type="text" class="form-control" name="numero" id="numero" 
@if(!isset($vendedores))
placeholder="Numero"
    @else
    value="{{$vendedores->numero}}" 
     @endif
    >
      </div>
      <div class="col-md-4">
          <label for="nombres">nombres</label>
          <input type="text" class="form-control" name="nombres" id="nombres" 
@if(!isset($vendedores))
placeholder="nombres"
    @else
    value="{{$vendedores->nombres}}" 
     @endif
    >
      </div>
<div class="col-md-4">
          <label for="telefono">telefono</label>
          <input type="text" class="form-control" name="telefono" id="telefono" 
@if(!isset($vendedores))
placeholder="telefono"
    @else
    value="{{$vendedores->telefono}}" 
     @endif
    >
      </div>

       

       
</div>

</div>
<div class="card-footer">
    <div class="col-md-12">
      <center>
        <button type="submit" class="btn btn-success">
          <i class="fas fa-save"></i>&nbsp;&nbsp;{{ __('Guardar') }}
        </button>
        <a href="{{route('vendedores.index')}}">
          <button type="button" class="btn btn-default" >
            <i class="fas fa-undo-alt"></i>&nbsp;&nbsp;{{ __('Regresar') }}
          </button>
        </a>
      </center>
    </div>
  </div>
