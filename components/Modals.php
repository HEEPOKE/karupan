<div class="modal fade" id="modal-default">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="services/sendOrderService.php" method="POST">
                <div class="modal-header">
                    <h4 class="modal-title" id="title-modal"></h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-2">
                            <p class="h5 mt-1">จำนวน</p>
                        </div>
                        <div class="col-10">
                            <input type="text" id="hidden-namepackage" name="hidden-namepackage" style="display: none" />
                            <input type="number" class="form-control" name="ordering" required>
                        </div>
                        <div class="col-2 mt-3">
                            <p class="h5 mt-1">หมายเหตุ</p>
                        </div>
                        <div class="col-10 mt-3">
                            <input type="text" class="form-control" name="note" required>
                        </div>
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="submit" class="btn btn-success col-3">ยืม</button>
                    <button type="button" class="btn btn-danger col-3" data-dismiss="modal">ยกเลิก</button>
                </div>
            </form>
        </div>
    </div>
</div>