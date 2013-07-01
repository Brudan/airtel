<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Enos
 * Date: 01/07/13
 * Time: 12:39
 * To change this template use File | Settings | File Templates.
 */
?>
    <table>
        <tr><th>Short Name</th><th>Details</th><th>Date Added</th><td></td></tr>
        <?php foreach($results as $query){ ?>
            <tr><td><?=$query->short_name?></td><td><?=$query->details?></td><td><?=$query->date?></td><td>Edit | Delete</td></tr>
        <?php } ?>
        <?php if(strlen($links) != 0){ ?>
            <tr><td colspan="4" align="center"><p><?php echo $links; ?></p></td></tr>
        <?php } ?>
        <tr><td colspan="4" align="right">Add</td> </tr>
    </table>
<?php //var_dump($links); ?>