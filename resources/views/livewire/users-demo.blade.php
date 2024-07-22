<div>
    <label for="user-select">Select user to view their relationships with Posts:</label>
    <select id="user-select" wire:model.live="selectedUserId">
        <option value="all">All</option>
        @foreach($users as $user)
            <option value="{{ $user->id }}">{{ $user->name }}</option>
        @endforeach
    </select>

    <div>
        <h1>{{ $this->selectedUser->name ?? 'All users' }}</h1>

        <x-mermaid::livewire-component wire:model="mermaid" />
    </div>
</div>
