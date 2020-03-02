
<div wire:poll class="row">
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
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td> <button class="btn btn-sm btn-danger" wire:click="destroy({{$user->id}})">Remover</button></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $this->users->links() }}
    </div>
</div>
