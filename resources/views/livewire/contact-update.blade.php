<div>
    <form wire:submit.prevent="update">
        <input type="hidden" wire:model="contactId">
        <div class="row mb-2">
            <div class="col">
                <input type="text" class="form-control @error('name') is-invalid @enderror" placeholder="Name" wire:model="name">
                @error('name')
                    <span class="invalid-feedback">{{ $message }}</span>
                @enderror
            </div>
            <div class="col">
                <input type="text" class="form-control @error('phone') is-invalid @enderror" placeholder="Phone..." wire:model="phone">
                @error('phone')
                    <span class="invalid-feedback">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <button type="submit" class="btn btn-sm btn-primary">Submit</button>
    </form>
</div>
