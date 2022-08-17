//for delete modal task
window.livewire.on('modal_delete', () => {
    $('#deleteModal').modal('show');
    $('.deleteModalClose').click(function (){
        $('#deleteModal').modal('hide');
    })
});

//for edit modal task
window.livewire.on('modal_edit', () => {
    $('#editModal').modal('show');
    $('.editModalClose').click(function (){
        Livewire.emit('regeneratedCodes');
        $('#editModal').modal('hide');
    })
});

//for create modal task
window.livewire.on('modal_create', () => {
    $('#createModal').modal('show');
    $('.createModalClose').click(function (){
        Livewire.emit('regeneratedCodes');
        $('#createModal').modal('hide');
    })
});

//for close Modal create task save event
window.livewire.on('closeModal', () => {
    Livewire.emit('regeneratedCodes');
    $('#createModal').modal('hide');
});

//for restore modal task
window.livewire.on('modal_restore', () => {
    $('#restoreModal').modal('show');
    $('.restoreModalClose').click(function (){
        $('#restoreModal').modal('hide');
    })
});
