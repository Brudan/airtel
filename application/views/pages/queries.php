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
    <tr><th>Phone Number</th><th>Category</th><th>Details</th><th>Date</th><th>Solved</th><th>Action</th></tr>
<?php
    foreach($results as $query){
        $cat = $this->airtel_model->get_data("category","short_name",array("id"=>$query->cat));
        $solved = $this->airtel_model->get_data("status",array("short_desc", "details"),array("id"=>$query->solved));
?>
        <tr><td><?=$query->phone?></td><td><?=$cat[0]->short_name?></td><td><?=$query->details?></td><td><?=$query->date?></td><td title="<?=$solved[0]->details?>"><?=$solved[0]->short_desc?></td><td><?php if($solved[0]->short_desc == "No"){ ?><a href="<?php echo site_url("pages/respond/$query->id") ?>">Respond</a><?php } ?></td></tr>
<?php } ?>
<?php if(strlen($links) != 0){ ?>
    <tr><td colspan="6" align="center"><p><?php echo $links; ?></p></td></tr>
<?php } ?>
</table>
<?php //var_dump($results); ?>