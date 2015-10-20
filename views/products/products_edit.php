<? if (!$auth->is_admin): ?>
    <div class="alert alert-danger fade in">
        <button class="close" data-dismiss="alert">×</button>
        You are not an administrator.
    </div>
    <? exit(); endif; ?>
<h1>product '<?= $product['product_name'] ?>'</h1>
<form id="form" method="post">
    <table class="table table-bordered">
        <tr>
            <th>productname</th>
            <td><input type="text" name="data[product_name]" value="<?= $product['product_name'] ?>"/></td>
        </tr>
    </table>
</form>

<!-- BUTTONS -->
<div class="pull-right">

    <!-- CANCEL -->
    <button class="btn btn-default"
            onclick="window.location.href = 'products/view/<?= $product['product_id'] ?>/<?= $product['productname'] ?>'">
        Cancel
    </button>

    <!-- DELETE -->
    <button class="btn btn-danger" onclick="delete_product(<?= $product['product_id'] ?>)">
        Delete
    </button>

    <!-- SAVE -->
    <button class="btn btn-primary" onclick="$('#form').submit()">
        Save
    </button>

</div>
<!-- END BUTTONS -->

<!-- JAVASCRIPT
==============================================================================-->
<script type="application/javascript">
    function delete_product() {
        $.post('<?=BASE_URL?>products/delete', {product_id: <?= $product['product_id'] ?>}, function (response) {
            if(response == 'Ok'){
                window.location.href = '<?=BASE_URL?>products';
            }
        })
    }
</script>