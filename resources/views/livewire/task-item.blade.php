<div>
    <li class="flex items-center justify-between p-2 border rounded">
        <!-- Checkbox toggle -->
        <div class="flex items-center ">
            <input
                type="checkbox"
                wire:model="completed"
                wire:click="toggleComplete"
                class="mr-2">


            @if($isEditing)
            <input
                type="text"
                wire:model="title"
                class="border p-2 rounded flex-grow mr-2"
                wire:keydown.enter="saveEdit">
            <button wire:click="saveEdit" class="text-green-600 px-3">
                ✅
            </button>
            <button wire:click="cancelEdit" class="text-red-600 px-3">
                ❌
            </button>
            @else
            <span
                @class([ 'flex-grow' , 'line-through text-gray-400'=> $completed
                ])
                >
                {{ $title }}
            </span>
            <button
                wire:click="startEdit"
                class="text-blue-600 ml-2 px-3">
                ✏️
            </button>
            @endif

            <!-- <span @style(['color: #aaa' => $task['completed']]) >
                {{ $task['title'] }}
            </span> -->
        </div>

        @error('title') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        <!-- Tombol hapus -->
        <button
            wire:click="deleteTask"
            class="text-red-500 hover:text-red-700">
            Hapus
        </button>
    </li>


</div>