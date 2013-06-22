<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Enos
 * Date: 21/06/13
 * Time: 18:32
 * To change this template use File | Settings | File Templates.
 */
?>

    <table>
        <tr><th>Admin ID</th><th>Query ID</th><th>Details</th><th>Date</th></tr>
        <?php
        foreach($results as $response){
           // $cat = $this->airtel_model->get_data("category","details",array("id"=>$query->cat));
           // $solved = $this->airtel_model->get_data("status",array("short_desc", "details"),array("id"=>$query->solved));
            ?>
            <tr><td><?=$response->admin_id?></td><td><?=$response->query_id?></td><td><?=$response->details?></td><td><?=$response->date?></td></tr>
        <?php } ?>
    </table>
<?php //var_dump($results); ?>