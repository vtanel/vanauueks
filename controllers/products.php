<?php

class products extends Controller
{

    function index()
    {
        $this->products = get_all("SELECT * FROM product");
    }

    function view()
    {
        $product_id = $this->params[0];
        $this->product = get_first("SELECT * FROM product WHERE product_id = '{$product_id}'");
    }

    function edit()
    {
        $product_id = $this->params[0];
        $this->product = get_first("SELECT * FROM product WHERE product_id = '{$product_id}'");
    }

    function post_edit()
    {
        $data = $_POST['data'];
        insert('product', $data);
    }

    function ajax_delete()
    {
        exit( q("DELETE FROM product WHERE product_id = '{$_POST['product_id']}'") ? 'Ok' : 'Fail' );
    }

}