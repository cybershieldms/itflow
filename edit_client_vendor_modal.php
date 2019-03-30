<div class="modal fade" id="editClientVendorModal<?php echo $client_vendor_id; ?>" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title"><i class="fa fa-building"></i> Edit Vendor</h5>
        <button type="button" class="close" data-dismiss="modal">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="post.php" method="post" autocomplete="off">
        <input type="hidden" name="client_vendor_id" value="<?php echo $client_vendor_id; ?>">
        <div class="modal-body">  
          <div class="form-group">
            <label>Vendor Name</label>
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fa fa-building"></i></span>
              </div>
              <input type="text" class="form-control" name="name" placeholder="Name of the vendor" value="<?php echo $client_vendor_name; ?>" required>
            </div>
          </div>
          <div class="form-group">
            <label>Description</label>
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fa fa-comment"></i></span>
              </div>
              <input type="text" class="form-control" name="description" placeholder="Description of the Vendor" value="<?php echo $client_vendor_description; ?>"required>
            </div>
          </div>
          <div class="form-group">
            <label>Account Number</label>
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fa fa-barcode"></i></span>
              </div>
              <input type="text" class="form-control" name="account_number" placeholder="Account number" value="<?php echo $client_vendor_account_number; ?>">
            </div>
          </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
          <button type="submit" name="edit_client_vendor" class="btn btn-primary">Save</button>
        </div>
      </form>
    </div>
  </div>
</div>