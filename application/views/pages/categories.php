<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Enos
 * Date: 01/07/13
 * Time: 12:39
 * To change this template use File | Settings | File Templates.
 */
?>
    <script>
        $(function() {
            $( "#dialog" ).dialog({
                autoOpen: false,
                show: {
                    effect: "blind",
                    duration: 200
                },
                hide: {
                    effect: "fade",
                    duration: 300
                },
                resizable: false,
                modal : true,
                buttons: {
                    "Delete all items": function() {
                        $( this ).dialog( "close" );
                        document.location.href()
                    },
                    Cancel: function() {
                        $( this ).dialog( "close" );
                    }
                }
            });
            $( ".opener" ).click(function() {
                $( "#dialog" ).dialog( "open" );
            });
        });
    </script>
    <div id="dialog" title="Delete Category?">
        <p>
            <span class="ui-icon ui-icon-alert" style="float: left; margin: 0 7px 20px 0;"></span>
            This category will be permanently deleted and cannot be recovered. Are you sure?
        </p>
    </div>
    <table>
        <tr><th>Short Name</th><th>Details</th><th>Date Added</th><td></td></tr>
        <?php foreach($results as $query){ ?>
            <tr><td><?=$query->short_name?></td><td><?=$query->details?></td><td class="opener"><?=$query->date?></td><td>Edit | <a href="<?php echo site_url("pages/del_cat/$query->id") ?>">Delete</a></td></tr>
        <?php } ?>
        <?php if(strlen($links) != 0){ ?>
            <tr><td colspan="4" align="center"><p><?php echo $links; ?></p></td></tr>
        <?php } ?>
        <tr><td colspan="4" align="right">Add</td> </tr>
    </table>
<?php //var_dump($links); ?>