<table style="font-size: 14px;">
  <tr>
    <th style="position: absolute;left: 70%; top: 14%"><b>{{substr($contrato->poliza,4)}}</b></th>
    <th style="position: absolute;left: 12%; top: 23.5%"><b>{{$contrato->contrato->nombres}} {{$contrato->contrato->apellidos}}</b></th>
    <th></th>
  </tr>
  <tr>
    <td style="position: absolute;left: 15%;top: 25.8%;"><b>{{$direccion->calle}}</b></td>
    <th style="position: absolute;left: 76%;top: 25.8%"><b>{{$contrato->contrato->telefono}}</b></th>
  </tr>
  <tr>
    <td style="position: absolute;left: 16%;top: 28.5%"><b>{{$direccion->cruzes}}</b></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td style="position: absolute;left: 14%;top: 31%;"><b>{{$direccion->colonia}}</b></td>
  	<th style="position: absolute;left: 57%; top: 31%"><b>{{$direccion->ciudad}}</b></th>
    <th style="position: absolute;left: 85%; top: 31%"><b>{{$direccion->estado}}</b></th>
  </tr>
  <tr>
    <td style="position: absolute;left: 16%;top: 33.5%;"><b>{{$contrato->observaciones}}</b></td>
    <td style="position: absolute;left: 80%;top: 33.5%;"><b>{{$contrato->contrato->telefono_emergencia}}</b></td>
  </tr>


  <tr>
    <td style="position: absolute;left: 13%;top: 40.5%;"><b>{{$vehiculo->marca}}</b></td>
    <td style="position: absolute;left: 38%;top: 40.5%;"><b>{{$vehiculo->submarca}}</b></td>
    <td style="position: absolute;left: 61%;top: 40.5%;"><b>{{$vehiculo->tipo}}</b></td>
    <td style="position: absolute;left: 84%;top: 40.5%;"><b>{{$vehiculo->modelo}}</b></td>
  </tr>
  <tr>
    <td style="position: absolute;left: 12%;top: 43%;"><b>{{$vehiculo->servicio}}</b></td>
    <td style="position: absolute;left: 38%;top: 43%;"><b>{{$vehiculo->color}}</b></td>
    <td style="position: absolute;left: 65%;top: 43%;"><b>{{$vehiculo->placas}}</b></td>
    <td style="position: absolute;left: 85%;top: 43%;"><b>{{$vehiculo->estado}}</b></td>
  </tr>
   <tr>
    <td style="position: absolute;left: 15%;top: 46%;"><b>{{$vehiculo->nserie}}</b></td>
    <td style="position: absolute;left: 55%;top: 46%;"><b>{{$vehiculo->nregistro}}</b></td>
    <td style="position: absolute;left: 85%;top: 46%;"><b>{{$vehiculo->nmotor}}</b></td>
    
  </tr>

    <tr>
    <td style="position: absolute;left: 22%;top: 53%;"><b>{{$pagos->costoservicio}}</b></td>
    <td style="position: absolute;left: 56%;top: 53%;"><b>{{date("d/m/Y", strtotime($pagos->pagoinicial))}}</b></td>
  </tr>
  <tr>
    <td style="position: absolute;left: 15%;top: 81%;"><b>{{$contrato->plazo}} AÑOS</b></td>
    <td style="position: absolute;left: 40%;top: 81%;"><b>{{ date("d/m/Y", strtotime($contrato->desde))}}</b></td>
    <td style="position: absolute;left: 75%;top: 81%;"><b>{{ date("d/m/Y", strtotime($contrato->hasta))}}</b></td>
  </tr>
</table>

