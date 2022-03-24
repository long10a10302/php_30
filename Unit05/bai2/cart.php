<?php
session_start();

$products = $_SESSION['products'] ?? [];


?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Cart</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</head>

<body>
    <div class="container">
        <div class="container">
            <h2 class="text-center">Cart</h2>
            <a class="btn btn-success float-right" href="productlist.php" title="">Back to product list</a>

            <table class="table table-cart">
                <thead>
                    <tr>
                        <th scope="col">Mã sản phẩm</th>
                        <th scope="col">Tên sản phẩm</th>
                        <th scope="col">Giá tiền</th>
                        <th scope="col">Số lượng</th>
                        <th scope="col">Hình ảnh</th>
                        <th scope="col">Time</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sum = 0;
                    foreach ($products as $key => $value) {
                        $sum += $value['price'] * $value['number'];
                    ?>
                        <tr>
                            <td>
                                <input type="hidden" name="id[]" value="<?= $value['id'] ?>">
                                <?= $value['id'] ?>
                            </td>
                            <td><?= $value['name'] ?></td>
                            <td>
                                <input type="hidden" name="price[]" value="<?= $value['price'] ?>">
                                <?= number_format($value['price']) ?>VND
                            </td>
                            <td>
                                <div class="input-group input-group-quantity" style="width: 170px">
                                    <span class="input-group-btn">
                                        <button type="button" class="btn btn-default btn-stock" data-type="minus" data-field="quantity[]" <?php if ($value['number'] == 1) echo 'disabled' ?>>
                                            <i class="fa fa-minus" aria-hidden="true"></i>
                                        </button>
                                    </span>
                                    <input name="quantity[]" class="form-control input-stock" min="1" max="9999" value="<?= $value['number'] ?>" type="number" data-old-value="<?= $value['number'] ?>">
                                    <span class="input-group-btn">
                                        <button type="button" class="btn btn-default btn-stock" data-type="plus" data-field="quantity[]" <?php if ($value['number'] == 9999) echo 'disabled' ?>>
                                            <i class="fa fa-plus" aria-hidden="true"></i>
                                        </button>
                                    </span>
                                </div>
                            </td>

                            <td><img style="width: 80px;height: 80px;" src="<?= $value['thumbnail'] ?>"></td>
                            <td><?= $value['time'] ?></td>

                            <td>
                                <a class="btn btn-danger" href="deleteCart.php?id=<?= $value['id'] ?>" title="">Delete</a>
                            </td>
                            
                        </tr>
                    <?php } ?>
                </tbody>
                <tfoot>
                    <tr class="table-cart-row-sum-price">
                        <td colspan="2" style="color:red">Tổng tiền</td>
                        <td colspan="5"><b class="sum-price"><?=number_format($sum); ?></b>VND</td>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>

    <script type='text/javascript'>
        $(document).ready(function() {
            $('.btn-stock').click(function(e) {
                e.preventDefault();
                let fieldName = $(this).attr('data-field');
                let type = $(this).attr('data-type');
                let input = $(this).closest('.input-group-quantity').find("input[name='" + fieldName + "']");
                let currentVal = parseInt(input.val());
                if (!isNaN(currentVal)) {
                    if (type == 'minus') {
                        let minValue = parseInt(input.attr('min'));
                        if (!minValue) {
                            minValue = 1;
                        }
                        if (currentVal > minValue) {
                            input.val(currentVal - 1).change();
                        }
                        if (parseInt(input.val()) == minValue) {
                            $(this).attr('disabled', true);
                        }
                    } else if (type == 'plus') {
                        let maxValue = parseInt(input.attr('max'));
                        if (!maxValue) {
                            maxValue = 9999;
                        }
                        if (currentVal < maxValue) {
                            input.val(currentVal + 1).change();
                        }
                        if (parseInt(input.val()) == maxValue) {
                            $(this).attr('disabled', true);
                        }
                    }
                } else {
                    input.val(0);
                }
            });

            $('.input-stock').on('change', function() {
                let row = $(this).closest('tr');
                let id = row.find('input[name="id[]"]').val();
                let minValue = parseInt($(this).attr('min'));
                let maxValue = parseInt($(this).attr('max'));
                if (!minValue) {
                    minValue = 1;
                }
                if (!maxValue) {
                    maxValue = 9999;
                }
                let valueCurrent = parseInt($(this).val());
                let name = $(this).attr('name');
                if (valueCurrent >= minValue) {
                    row.find(".btn-stock[data-type='minus'][data-field='" + name + "']").removeAttr('disabled');
                } else {
                    alert('Xin lỗi không thể nhập số < 1');
                    valueCurrent = $(this).data('old-value');
                    $(this).val(valueCurrent);
                }
                if (valueCurrent <= maxValue) {
                    row.find(".btn-stock[data-type='plus'][data-field='" + name + "']").removeAttr('disabled')
                } else {
                    alert('Xin lỗi không thể nhập số > 1');
                    valueCurrent = $(this).data('old-value');
                    $(this).val(valueCurrent);
                }
                // load laij cart
                window.location.href = 'addToCart.php?id=' + id + '&quantity=' + valueCurrent;
            });

        });
    </script>
</body>

</html>