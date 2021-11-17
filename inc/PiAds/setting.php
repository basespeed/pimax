<?php
// create custom plugin settings menu
add_action('admin_menu', 'Pimax_create_menu');

function Pimax_create_menu() {

	//create new top-level menu
	add_menu_page('PiMax', 'PiMax', 'administrator', 'pimax', 'template_piads' , plugin_dir_url(__FILE__) . '../../assets/images/icon.png' );

    add_submenu_page(
        'pimax', //$parent_slug
        'PiAds',  //$page_title
        'PiAds',        //$menu_title
        'manage_options', //$capability
        'pimax',//$menu_slug
        'template_piads'//$function
    );

    add_submenu_page(
        'pimax', //$parent_slug
        'Settings',  //$page_title
        'Settings',        //$menu_title
        'manage_options',           //$capability
        'settings',//$menu_slug
        'template2'//$function
    );

	//call register settings function
	add_action( 'admin_init', 'register_pimax_plugin_settings' );
}

function template2(){
    ?>
    <div id="pimax">
        <h1><img src="<?php echo plugin_dir_url(__FILE__) . '../../assets/images/logo.png'; ?>" alt="Piads" title="Piads" /></h1>

        <div class="menu_piads">
            <ul>
                <li <?php if($_GET['page'] == 'pimax'){echo "class='active'";} ?>><a href="?page=pimax">PiAds</a></li>
                <li <?php if($_GET['page'] == 'settings'){echo "class='active'";} ?>><a href="?page=settings">Settings</a></li>
            </ul>
        </div>
    </div>
    <?php
}

function register_pimax_plugin_settings() {
	//register our settings
	register_setting( 'pimax-plugin-settings-group', 'key_piads' );
	register_setting( 'pimax-plugin-settings-group', 'action_slt_piads' );
    register_setting( 'pimax-plugin-settings-group', 'disable_piads' );
    register_setting( 'pimax-plugin-settings-group', 'position_slt_piads' );
}

function template_piads() {
?>
<div id="pimax">
    <h1><img src="<?php echo plugin_dir_url(__FILE__) . '../../assets/images/logo.png'; ?>" alt="Piads" title="Piads" /></h1>

    <div class="menu_piads">
        <ul>
            <li <?php if($_GET['page'] == 'pimax'){echo "class='active'";} ?>><a href="?page=pimax">PiAds</a></li>
            <li <?php if($_GET['page'] == 'settings'){echo "class='active'";} ?>><a href="?page=settings">Settings</a></li>
        </ul>
    </div>

    <form method="post" action="options.php">
        <?php settings_fields( 'pimax-plugin-settings-group' ); ?>
        <?php do_settings_sections( 'pimax-plugin-settings-group' ); ?>
        <table class="form-table">
            <tr valign="top">
                <td scope="row">
                    <span>Key</span>
                    <input type="text" name="key_piads" value="<?php echo esc_attr( get_option('key_piads') ); ?>" />
                </td>
            </tr>

            <tr valign="top">
                <td>
                    <span>Action</span>
                    <select name="action_slt_piads">
                        <option value="phone" selected <?php
                            if( get_option('action_piads') == 'phone' ) {
                                echo "selected";
                            }
                        ?>>Phone</option>
                    </select>
                </td>
            </tr>

            <tr valign="top">
                <td>
                    <span>Position</span>
                    <select name="position_slt_piads">
                        <option value="" <?php
                            if( get_option('position_slt_piads') == '' ) {
                                echo "selected";
                            }
                        ?>>Header</option>
                        <option value="Footer" <?php
                            if( get_option('position_slt_piads') == 'Footer' ) {
                                echo "selected";
                            }
                        ?>>Footer</option>
                    </select>
                </td>
            </tr>

            <tr valign="top">
                <td>
                    <span>Enable / Disable</span>
                    <select name="disable_piads">
                        <option value="" <?php
                            if( get_option('disable_piads') == '' ) {
                                echo "selected";
                            }
                        ?>>False</option>
                        <option value="True" <?php
                            if( get_option('disable_piads') == 'True' ) {
                                echo "selected";
                            }
                        ?>>True</option>
                    </select>
                </td>
            </tr>
        </table>

        <button type="submit" name="submit_piads" class="button button-primary">Lưu cài đặt</button>

    </form>
</div>
<?php } ?>
