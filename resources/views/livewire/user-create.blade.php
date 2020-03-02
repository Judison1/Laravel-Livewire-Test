<div>
    <form wire:submit.prevent="save">
        <div class="form-group">
            <input type="text" wire:model.lazy="name" placeholder="Nome" class="form-control">
        </div>
        <div class="form-group">
            <input type="email" wire:model.lazy="email" placeholder="E-mail" class="form-control">
        </div>
        <div class="form-group">
            <input type="password" wire:model.lazy="password" placeholder="Senha" class="form-control">
        </div>
        <button class="btn btn-primary">Enviar</button>
    </form>
</div>
