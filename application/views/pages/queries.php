<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Enos
 * Date: 21/06/13
 * Time: 18:22
 * To change this template use File | Settings | File Templates.
 */
?>

<table>
    <tr><th>Phone Number</th><th>Category</th><th>Details</th><th>Solved</th></tr>
<?php
    foreach($results as $query){
        $cat = $this->airtel_model->get_data("category","details",array("id"=>$query->cat));
        $solved = $this->airtel_model->get_data("status",array("short_desc", "details"),array("id"=>$query->solved));
?>
        <tr><td><?=$query->phone?></td><td><?=$cat[0]->details?></td><td><?=$query->details?></td><td title="<?=$solved[0]->details?>"><?=$solved[0]->short_desc?></td></tr>
<?php } ?>
</table>
<?php //var_dump($results); ?>