<h3>product</h3>
<ul class="list-group">
    <? foreach ($products as $product): ?>
        <li class="list-group-item">
            <a href="products/<?= $product['product_id'] ?>/<?= $product['product_name'] ?>"><?= $product['product_name'] ?></a>
        </li>
    <? endforeach ?>
</ul>

<?php if ($auth->is_admin): ?>
<h3>Add new product</h3>

<form method="post" id="form">
    <form id="form" method="post">
        <table class="table table-bordered">
            <tr>
                <th>Name</th>
                <td><input type="text" name="data[product_name]" placeholder=""/></td>
            </tr>
        </table>

        <button class="btn btn-primary" type="submit">Add</button>
    </form>
    <?php endif; ?>
