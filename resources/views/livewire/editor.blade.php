<div>
    <label for="editor" class="block text-sm font-medium text-gray-700">Content</label>
    <textarea id="editor" wire:model.defer="content"></textarea>
</div>

<script src="https://cdn.ckeditor.com/ckeditor5/30.0.0/classic/ckeditor.js"></script>
<script>
    // Function to initialize CKEditor
    function initCKEditor() {
        if (document.querySelector('#editor')) {
            ClassicEditor
                .create(document.querySelector('#editor'))
                .then(editor => {
                    // Update Livewire property on editor change
                    editor.model.document.on('change:data', () => {
                        @this.set('content', editor.getData());
                    });

                    // Store the editor instance for later cleanup
                    window.editorInstance = editor;
                })
                .catch(error => {
                    console.error(error);
                });
        }
    }

    // Initialize CKEditor after Livewire is loaded
    // document.addEventListener('livewire:load', function () {
        initCKEditor();
    // });

    // Reinitialize CKEditor after Livewire updates the DOM
    document.addEventListener('livewire:update', function () {
        if (window.editorInstance) {
            window.editorInstance.destroy().then(() => {
                initCKEditor();
            });
        }
    });
</script>
