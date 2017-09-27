
<div class="table-responsive">
    <table style="width: 100%; border: 1px solid #ddd; border-collapse: collapse;" >
        <thead>
        <tr style="background: #f9f9f9;">
            <th style="padding: 8px; border: 1px solid #ddd;">НАИМЕНОВАНИЕ</th>
            <th style="padding: 8px; border: 1px solid #ddd;">КОЛИЧЕСТВО</th>
            <th style="padding: 8px; border: 1px solid #ddd;">ЦЕНА</th>

        </tr>
        </thead>
        <tbody>
        <?php foreach ($session['cart'] as $id=>$item):?>
            <tr>
                <td style="padding: 8px; border: 1px solid #ddd;"><?=$item['name']?></td>
                <td style="padding: 8px; border: 1px solid #ddd;"><?=$item['qty']?></td>
                <td style="padding: 8px; border: 1px solid #ddd;"><?=$item['price']?></td>

            </tr>
        <?php endforeach;?>
        <tr>
            <td colspan="2" style="padding: 8px; border: 1px solid #ddd;">Итого</td>
            <td colspan="1" style="padding: 8px; border: 1px solid #ddd;"><?=$session['cart.qty']?></td>
        </tr>
        <tr>
            <td colspan="2" style="padding: 8px; border: 1px solid #ddd;">Общая сумма</td>
            <td colspan="1" style="padding: 8px; border: 1px solid #ddd;"><?=$session['cart.sum']?></td>
        </tr>
        </tbody>
    </table>
</div>