<!-- edit-model-modal.blade.php -->
<div x-data="{ open: @entangle('isOpen').defer }" @keydown.escape.window="open = false">
    <div x-show="open" class="modal" tabindex="-1" style="display: none;" x-ref="modal" x-on:close.stop="open = false">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit Model</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" x-on:click="open = false"></button>
                </div>
                <form wire:submit.prevent="save">
                    <div class="modal-body">
                        <!-- Form fields -->
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Field Name</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" wire:model="modelName">
                        </div>
                        <!-- Add more fields as needed -->
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" x-on:click="open = false">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div x-show="open" class="modal-backdrop fade show" x-on:click="open = false"></div>
</div>