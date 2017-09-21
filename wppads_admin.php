<?php
/*
Admin options form
Author: Nguyen Quang Chien
Version: 1.0.0
*/
if($_POST['wppads_hidden'] == 'Y') {
    //Form data sent
	$wppads_script = $_POST['wppads_script'];
    $wppads_device = $_POST['wppads_device'];
	update_option('wppads_script', $wppads_script);
    update_option('wppads_device', $wppads_device);
?>
<div class="updated" xmlns="http://www.w3.org/1999/html"><p><strong><?php _e('Options saved.' ); ?></strong></p></div>
<?php
} else {
    //Normal page display
	$wppads_script = get_option('wppads_script');
    $wppads_device = get_option('wppads_device');
}
?>
<div class="wrap">
<?php    echo "<h2>" . __( 'Pop-up Ads Options', 'wppads_trdom' ) . "</h2>"; ?>
<form name="wppads_form" method="post" action="<?php echo str_replace( '%7E', '~', $_SERVER['REQUEST_URI']); ?>">
    <input type="hidden" name="wppads_hidden" value="Y">
    <?php    echo "<h4>" . __( 'Pop-up Ads Settings', 'wppads_trdom' ) . "</h4>"; ?>
	<p><?php _e("Custom Script: " ); ?><br>
        <textarea name="wppads_script" cols="90" rows="10"><?= stripslashes_deep($wppads_script) ?></textarea>
    </p>
    <p><?php _e("Choose device: "); ?>
        <select name="wppads_device">
            <option value="both" <?php if($wppads_device =='both'){ echo 'selected=""'; } ?> >Both</option>
            <option value="desktop" <?php if($wppads_device =='desktop'){ echo 'selected=""'; } ?> >Desktop</option>
            <option value="mobile" <?php if($wppads_device =='mobile'){ echo 'selected=""'; } ?>> Mobile</option>
        </select>
    </p>
    <hr />
    <?php    echo "<h4>" . __( 'Pop-up Ads Settings', 'wppads_trdom' ) . "</h4>"; ?>
	<p class="submit">
        <input type="submit" name="Submit" value="<?php _e('Update Options', 'wppads_trdom' ) ?>" />
    </p>
</form>
</div>