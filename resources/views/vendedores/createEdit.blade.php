<x-app-layout>
    <x-slot name="header">

    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl max-l-7x1 mx-auto sm:px-6 lg:px-8">
            <div class="bg-white  shadow-xl sm:rounded-lg">
  <div class="col-md-12">
    <div class="card" style="box-shadow: 0 5px 5px 0 rgba(0,0,0,0.5);">
      @if(isset($vendedores))
          {{ Form::model($vendedores, ['route' => ['vendedores.update', $vendedores->id], 'method' => 'put', 'onsubmit' => 'before_submit();']) }}
      @else
          {{ Form::open(['route' => 'vendedores.store', 'method' => 'post']) }}
      @endif
      @include('vendedores.formFields')
    </div>
  </div>

{{ Form::close() }}

</div>
        </div>
    </div>
</x-app-layout>
