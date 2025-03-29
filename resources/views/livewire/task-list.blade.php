<div>
    <h1 class="text-2xl font-bold mb-4">Task Manager</h1>

    <!-- Form tambah task -->
    <div class="mb-4">
        <input
            type="text"
            wire:model="newTask"
            placeholder="Tambahkan task baru..."
            class="border p-2 rounded">
        <button
            wire:click="addTask"
            class="bg-blue-500 text-white p-2 rounded ml-2">
            Tambah
        </button>
    </div>

    <!-- Daftar task -->
    <ul class="space-y-2">
        @foreach($tasks as $task)
        <livewire:task-item :task="$task" :key="$task['id']" />
        @endforeach
    </ul>


</div>