<div>
    <li class="flex items-center justify-between p-2 border rounded">
        <!-- Checkbox toggle -->
        <div class="flex items-center " >
            <input
                type="checkbox"
                wire:model="completed"
                wire:click="toggleComplete"
                class="mr-2">

            <!-- <input type="text" wire:model.live="completed" class="border p-2 rounded mr-2" /> -->
            <span @style(['background: #f33; padding:0.2em 0.6em' => $task['completed']]) >
                {{ $task['title'] }}
            </span>
        </div>

        <!-- Tombol hapus -->
        <button
            wire:click="deleteTask"
            class="text-red-500 hover:text-red-700">
            Hapus
        </button>
    </li>


</div>