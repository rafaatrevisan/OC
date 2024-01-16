$('#delete-modal').on('show.bs.modal', function (event) {
  
  var button = $(event.relatedTarget);
  var id = button.data('produto');
  
  var modal = $(this);
  modal.find('.modal-title').text('Excluir Produto #' + id);
  modal.find('#confirm').attr('href', 'produto-excluir.php?id=' + id);
})