<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div class="col-md-12 text-center">
        <div class="card" style="box-shadow: 0 5px 5px 0 rgba(0,0,0,0.5);">
            <div class="card-header">
                <h2> GESTION DE COBRADORES</h2>
            </div>
            <div class="card-body">
                <h3>
                    <a href="{{route('cobradores.create')}}" style="color:#037DB4;"><i class="far fa-plus-square"></i>&nbsp;&nbsp;Cobrador</a>
                </h3>
                <table id="personalInfo" class="table table-striped table-bordered dt-responsive nowrap" style="width:100%">
                    <thead>
                    <tr>
                        <th>Numero de empleado</th>
                        <th>Nombre</th>
                        <th>Zona</th>
                        <th>Editar</th>
                        <th>Eliminar</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($cobradores as $cobrador)
                        <tr>


                            <td>{{$cobrador->id}}</td>
                            <td>{{$cobrador->nombre}}</td>
                            <td>{{$cobrador->zonas->zona}}</td>
                            <td>
                                <a href="{{route('cobradores.edit',$cobrador->id)}}">
                                    <button class="btn btn-primary">
                                        <i class="fas fa-edit"></i>
                                    </button>
                                </a>
                            </td>
                            <td>
                                <form method="POST" id="formEliminar" action="" aria-label="{{ __('paquete') }}" enctype="multipart/form-data">
                                    @csrf
                                    @method('DELETE')
                                    <button type="button" id="borrar" value="{{ route('cobradores.destroy',$cobrador->id) }}" name="borrar" class="btn btn-danger"
                                            onclick="  var r = confirm('Estas seguro que deseas Eliminarlo?');
                            if (r == true) {

                            $('#formEliminar').attr('action',this.value).submit();

                            } else {
                            return false;
                            }">
                                        <i class="fas fa-trash-alt"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

            </div>
        </div>
    </div>
</x-app-layout>
  <script defer src="{{asset('js/jquery/jquery.dataTables.min.js')}}" ></script>
  <script defer src="{{asset('js/jquery/dataTables.bootstrap4.min.js')}}" ></script>
  <script defer src="{{asset('js/jquery/dataTables.fixedHeader.min.js')}}" ></script>
  <script defer src="{{asset('js/jquery/dataTables.responsive.min.js')}}" ></script>
  <script defer src="{{asset('js/jquery/responsive.bootstrap.min.js')}}" ></script>

    <script type="text/javascript">

        $(document).ready(function() {
          $('#personalInfo').DataTable({
            "language": {
              "decimal": "",
              "emptyTable": "No hay información",
              "info": "Mostrando _START_ a _END_ de _TOTAL_ Entradas",
              "infoEmpty": "Mostrando 0 to 0 of 0 Entradas",
              "infoFiltered": "(Filtrado de _MAX_ total entradas)",
              "infoPostFix": "",
              "thousands": ",",
              "lengthMenu": "Mostrar _MENU_ Entradas",
              "loadingRecords": "Cargando...",
              "processing": "Procesando...",
              "search": "Buscar:",
              "zeroRecords": "Sin resultados encontrados",
              "paginate": {
                  "first": "Primero",
                  "last": "Ultimo",
                  "next": "Siguiente",
                  "previous": "Anterior"
              }
            },
          });
        } );

    </script>

