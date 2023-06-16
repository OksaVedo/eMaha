<div>
    <form wire:submit.prevent="simpan">
        <div class="form-group">
            <label>Judul</label>
            <input wire:model="judul" type="text" name="" placeholder="Masukkan Judul">
        </div>

        <div class="form-group">
            <label>Deskripsi</label>
            <textarea wire:model="deskripsi" id="" cols="30" rows="10" 
            class="form-control" placeholder="Masukkan Deskripsi..."></textarea>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-info">Submit</button>
        </div>
    </form>
</div>
