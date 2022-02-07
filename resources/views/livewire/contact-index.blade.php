<div>

    @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif

    @if ($statusUpdate)
        <livewire:contact-update></livewire:contact-update>
    @else
        <livewire:contact-create></livewire:contact-create>
    @endif

    <hr>

    <div class="row">
        <div class="col">
            <select wire:model="paginate" class="form-select w-auto">
                <option value="5">5</option>
                <option value="10">10</option>
                <option value="15">15</option>
            </select>
        </div>
        <div class="col">
            <input wire:model="search" type="search" class="form-control" placeholder="Search...">
        </div>
    </div>

    <hr>

    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Phone</th>
                <th scope="col">Handle</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($contacts as $contact)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $contact->name }}</td>
                    <td>{{ $contact->phone }}</td>
                    <td>
                        <button class="btn btn-sm btn-info text-white" wire:click="getContact({{ $contact->id }})">Edit</button>
                        <button class="btn btn-sm btn-danger text-white" wire:click="destroy({{ $contact->id }})">Delete</button>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="4">Tidak ada apapun!!</td>
                </tr>
            @endforelse
        </tbody>
    </table>
    {{ $contacts->links() }}
</div>
