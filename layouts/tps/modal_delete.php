<!-- Modal Delete -->
<div class="modal fade" id="modalDelete" tabindex="-1" aria-labelledby="exampleModalLabelDelete" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Eliminar</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="crud.php" method="POST">
                <div class="modal-body">
                    <input type="hidden" name="clothes_id" id="delete_id">
                    <h4>Seguro que desea eliminar este articulo?</h4>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <button type="submit" name="delete_clothes" class="btn btn-outline-danger">Si</button>
                </div>
            </form>
        </div>
    </div>
</div>