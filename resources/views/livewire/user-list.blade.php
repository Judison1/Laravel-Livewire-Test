
<div {{--wire:poll--}} class="row">
    <div class="offset-8 col-md-4">
        <input placeholder="Busca..." wire:model="search" class="form-control">
    </div>
    <div class="col-12">
        <table class="table table-bordered">
            <thead class="bg-primary text-white">
                <th>#id</th>
                <th>Nome</th>
                <th>E-mail</th>
                <th>Ações</th>
            </thead>
            <tbody>
                @foreach ($this->users as $user)
                    <tr>
                        <td>{{$user->id}}</td>
                        <td>
                            <input class="form-control-plaintext p-0" type="text" wire:change="update({{$user->id}})" wire:model="user.{{$user->id}}.name" value="{{$user->name}}">
                        <td>
                            <input  class="form-control-plaintext p-0" type="text" wire:change="update({{$user->id}})" wire:model="user.{{$user->id}}.email" value="{{$user->email}}">
                        </td>
                        
                        <td> <button class="btn btn-sm btn-danger" wire:click="destroy({{$user->id}})">Remover</button></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $this->users->links() }}
    </div>
</div>
