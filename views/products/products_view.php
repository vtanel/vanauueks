<h1>Product '<?= $product['product_name'] ?>'</h1>
<table class="table table-bordered">

    <tr>
        <th>Product ID</th>
        <td><?= $product['product_id'] ?></td>
    </tr>

    <tr>
        <th>Product name</th>
        <td><?= $product['product_name'] ?></td>
    </tr>

</table>

<!-- EDIT BUTTON -->
<? if ($auth->is_admin): ?>
    <form action="products/edit/<?= $product['product_id'] ?>">
        <div class="pull-right">
            <button class="btn btn-primary">
                Edit
            </button>
        </div>
    </form>
<? endif; ?>