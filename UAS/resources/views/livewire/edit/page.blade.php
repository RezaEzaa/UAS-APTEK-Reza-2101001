<div>
    <div class="row">
        <x-adminlte-input name="iLabel" wire:model="judul" label="Judul" placeholder="Silahkan masukkan judul blog anda"
            fgroup-class="col-md-10" disable-feedback style="height: 50px"/>
    </div>

    <div class="row">
        <x-adminlte-textarea name="iLabel" wire:model="kutipan" label="Kutipan" placeholder="Silahkan masukkan kutipan blog anda"
            fgroup-class="col-md-10" disable-feedback style="height: 100px"/>
    </div>

    <div class="row">
        <x-adminlte-textarea name="iLabel" wire:model="deskripsi" label="Deskripsi" placeholder="Silahkan masukkan deskripsi blog anda"
            fgroup-class="col-md-10" disable-feedback style="height: 200px"/>
    </div>

    <div class="row">
        <x-adminlte-button icon="fas fa-edit" wire:click="update" theme="success" label="Edit/Update"/>
    </div>
</div>
