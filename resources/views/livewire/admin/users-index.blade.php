<div class="card">
    <div class="card-header">
        <input wire:model="search" class="form-control" placeholder="Ingrese el nombre del Usuario">
    </div>
    @if ($users->count())
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nombre</th>
                        <th>Email</th>
                        <th></th>
                    </tr>
                </thead>

                <body>
                    @foreach ($users as $user)
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td with="10px">
                               <a class="btn btn-primary" href="{{route('admin.users.edit',$user)}}">Editar</a>
                            </td>
                        </tr>
                    @endforeach
                </body>
            </table>
        </div>

        <div class="card-footer">
            {{ $users->links() }}
        </div>
    @else
        <div class="card-body">
            <Strong>No hay ningun registro</Strong>   
        </div>
        
     @endif
</div>

