<div style="padding-left:0px;"class="wrap">
<h2>My Database Explorer Settings</h2>

<form method="post" action="options.php">
    <?php settings_fields( 'my-plugin-settings-group' ); ?>
    <?php do_settings_sections( 'my-plugin-settings-group' ); ?>
    <table class="form-table">
        <tr valign="top">
        <th scope="row">Add Field</th>
        <td><input type="text" name="field" /></td>
        <td><button type="button">Add</button></td>
        </tr>
         
        <tr valign="top">
        <th scope="row">Data Type</th>
        <td><input type="text" name="dataType" /></td>
        </tr>
        
        <tr valign="top">
        <th scope="row">Form Input</th>
        <td><input type="text" name="accountant_email" /></td>
        </tr>
    </table>
    
<h2>Existing Fields</h2>
    
    <?php submit_button(); ?>

</form>
</div>