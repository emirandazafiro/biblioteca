@extends("theme.$theme.layout")
@section('titulo')
    Menus
@endsection
@section('contenido')
<div class="row">
    <div class="col-lg-12">
            <div class="box box-primary">
                    <div class="box-header with-border">
                      <h3 class="box-title">Menus</h3>
                    </div>
                    <div class="box-body table-responsive no-padding">
                        <table class="table table-bordered table-hover table-striped">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Nombre</th>
                                    <th>Slug</th>
                                    <th></th>
                                </tr>
                                <tbody>
                                    @foreach ($permisos as $permiso)
                                        <tr>
                                            <td>{{$permiso->id}}</td>
                                            <td>{{$permiso->nombre}}</td>
                                            <td>{{$permiso->slug}}</td>
                                        </tr>
                                    @endforeach
                                </tbody>

                                </thead>    
                        </table>
                    </div>

            </div>
    </div>
</div>
@endsection