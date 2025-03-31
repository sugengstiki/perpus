<div>
    <li class="flex items-center justify-between w-1/3 p-2 even:bg-emerald-100 odd:bg-amber-100 rounded">
        <div class="flex items-center">
            <input type="checkbox" wire:click="toggleComplete" class="mr-2" {{ $task->completed ? 'checked' : '' }}>

            <span @class(['line-through text-gray-400'=> $task->completed])>
                {{ $task->title }}
            </span>

            <button @click="$dispatch('open-modal', { taskId: {{ $task->id }} })" class="text-blue-600 ml-2 px-3">
                ✏️
            </button>
        </div>

        <button wire:click="deleteTask" class="text-red-500 hover:text-red-700">
            Hapus
        </button>
    </li>
</div>