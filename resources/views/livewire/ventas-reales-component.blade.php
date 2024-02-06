<div>
   <h1>Gestionar ventas reales</h1>
   {{----------------------Area Busqueda---------------------------------}}
   <div class="bg-white shadow rounded-lg p-6">
      <form>
          <div class="">
              <div>
                  <x-label>Tipo de Plan</x-label>
                  <x-select class="w-full m-6" placeholder="Seleccione..."></x-select>
              </div>
              <div>
                  <x-label>Version</x-label>
                  <x-select class="w-full m-6" placeholder="Seleccione..."></x-select>
              </div>
              <div>
                  <x-label>UEB</x-label>
                  <x-select class="w-full m-6" placeholder="Seleccione..."></x-select>
              </div>           
          </div>
          <div class="flex justify-end row mt-3">
              <x-button class="mr-2">Buscar</x-button>
              <x-danger-button class="">Cancelar</x-danger-button>
          </div>
      </form>
  </div>
  {{----------------------Area de la tabla---------------------------------}}
  <div class="bg-white shadow rounded-lg p-6 mt-6">
      <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
              <div class="table-responsive">
                  <table class="table table-striped table-bordered table-condensed table-hover">
                      <thead>
                          <th>Id</th>
                          <th>Año</th>
                          <th>Tipo de Plan</th>
                          <th>Opciones</th>
                      </thead>
                  {{-- @foreach () --}}
                      <tr>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td>
                              <x-button>Editar</x-button>
                              <x-danger-button>Eliminar</x-danger-button>
                              
                          </td>
                      </tr>
                      {{-- @endforeach --}}
                  </table>
              </div>
              <div class="row">
                  <div class="col-md-10">
                      {{-- {{ $plan->render() }} --}}
                  </div>                    
              </div>
          </div>
      </div>
  </div>
  {{----------------------Formulario de edicion---------------------------------}}
</div>
