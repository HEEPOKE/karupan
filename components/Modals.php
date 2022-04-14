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
                        <div class="col-12 mt-3">
                            <input type="text" class="form-control" name="peoplename" placeholder="ชื่อผู้เบิก" required>
                        </div>
                        <div class="col-12 mt-3">
                            <input type="text" class="form-control" name="peoplelastname" placeholder="นามสกุลผู้เบิก" required>
                        </div>
                        <div class="col-12 mt-3">
                            <input type="text" id="hidden-namepackage" name="hidden-namepackage" style="display: none" />
                            <input type="number" class="form-control" name="ordering" placeholder="จำนวน" required>
                        </div>
                        <div class="col-12 mt-3">
                            <input type="text" class="form-control" name="note" placeholder="หมายเหตุ" required>
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


<div class="modal fade" id="modal-default-delete">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="services/deletePackageService.php" method="POST">
                <div class="modal-header">
                    <h4 class="modal-title" id="title-modal-delete"></h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>ต้องการที่จะลบรายการ?</p>
                    <input type="text" style="display: none" name="hidden-namepackage" id="hidden-namepackage-delete">
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="submit" class="btn btn-success col-3">ยืนยัน</button>
                    <button type="button" class="btn btn-danger col-3" data-dismiss="modal">ยกเลิก</button>
                </div>
            </form>
        </div>
    </div>
</div>