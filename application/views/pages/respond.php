<form method="post" action="<?php echo site_url('pages/handle_response') ?>">
    <fieldset>
        <input type="hidden" name="id" value="<?=$result[0]->id?>">
        <textarea disabled="true" rows="5" cols="25"><?=$result[0]->details?></textarea>
        <br />
        <label for="response">Response</label><br />
        <textarea name="response" rows="5" cols="25"></textarea>
        <br />
        <a onclick="submit()">Submit</a> | <a href="<?php echo site_url('pages/queries') ?>">Cancel</a>
    </fieldset>
</form>