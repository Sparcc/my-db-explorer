<div style="padding-left:0px;"class="wrap">
<h2>My Database Explorer Settings</h2>

<form method="post" action="options.php">
    <?php settings_fields( 'my-plugin-settings-group' ); ?>
    <?php do_settings_sections( 'my-plugin-settings-group' ); ?>
    <table class="form-table">
        <tr valign="top">
        <th scope="row">Field 1</th>
        <td><input type="text" name="accountant_name" /></td>
        </tr>
         
        <tr valign="top">
        <th scope="row">Field 2</th>
        <td><input type="text" name="accountant_phone" /></td>
        </tr>
        
        <tr valign="top">
        <th scope="row">Field 3</th>
        <td><input type="text" name="accountant_email" /></td>
        </tr>
    </table>
    
    <?php submit_button(); ?>

</form>
</div>