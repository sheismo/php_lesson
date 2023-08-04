<h1 style="text-align:center;">Multiplication Table</h1>

<div style="width:80%; margin:auto; border:5px solid blue; display:flex; justify-content: center;">
    <?php 
        for ($i = 1; $i < 7; $i++) {
        ?>
        <table border="1" style="margin-right:10px;">
        <tr>
            <th colspan="2"><?php echo $i." times Multiplication table" ?></th>
        </tr>
        <?php
            for  ($j = 1; $j < 13; $j++) {
                $sum = $i * $j;
            ?> 
            <tr>
                <td><?php echo $i." x ".$j?></td>
                <td><?php echo $sum ?></td>
            </tr> 
            <?php }   ?>
    <?php } ?>
    </table>

</div>