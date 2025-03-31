<div x-data="{ open: false }"
    @open-modal.window="if ($event.detail.taskId) { open = true }"
    @close-modal.window="open = false">

    <!-- Background abu-abu transparan -->
    <div x-show="open"
        class="fixed inset-0 flex items-center justify-center bg-gray-900/80 transition-opacity"
        x-transition.opacity>

        <!-- Modal Box -->
        <div x-show="open"
            x-transition.scale
            class="bg-white rounded-lg shadow-lg p-6 w-[40%] max-w-lg">

            <!-- Judul Modal -->
            <h2 class="text-xl font-semibold text-gray-800 mb-4">Edit Task</h2>

            <!-- Input Field -->
            <input type="text" wire:model="title"
                class="w-full border rounded p-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
                placeholder="Masukkan judul task">

            @error('title')
            <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror

            <!-- Tombol Aksi -->
            <div class="flex justify-end space-x-2 mt-4">
                <button wire:click="saveEdit"
                    class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 transition">
                    Simpan
                </button>
                <button @click="open = false"
                    class="bg-gray-300 px-4 py-2 rounded hover:bg-gray-400 transition">
                    Batal
                </button>
            </div>
        </div>
    </div>
</div>