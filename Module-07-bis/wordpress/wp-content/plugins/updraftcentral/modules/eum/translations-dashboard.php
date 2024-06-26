<?php

if (!defined('UD_CENTRAL_DIR')) die('Security check');

// Dashboard translations for the EUM module
return array(
	'generic_response_error' => __('An error has occurred while processing your request.', 'updraftcentral').' '.__('Please refer to the following error: %s', 'updraftcentral'),
	'feature_update_heading' => __('Feature update', 'updraftcentral'),
	'feature_update_success' => __('Feature has been updated successfully.', 'updraftcentral'),
	'feature_update_failed' => __('An error has occurred while updating the feature.', 'updraftcentral').' '.__('Server might be busy.', 'updraftcentral').' '.__('Please try again later.', 'updraftcentral'),
	'save_settings_heading' => __('Save settings', 'updraftcentral'),
	'save_settings_emails' => __('Save emails', 'updraftcentral'),
	'save_settings_emails_saving' => __('Saving emails...', 'updraftcentral'),
	'remember_save_settings' => __('Remember to save settings', 'updraftcentral'),
	'warning' => __('Warning: This operation is permanent.', 'updraftcentral').' '.__('Continue?', 'updraftcentral'),
	'could_not_return_content' => __('Easy Updates Manager plugin appears to be installed and activated but unfortunately the site could not return the requested information - perhaps you need to update it to a more recent Easy Updates Manager version?', 'updraftcentral'),
	'default'                                    => _x('Default', 'Option as Default', 'updraftcentral'),
	'on'                                         => _x('On', 'Option enabled', 'updraftcentral'),
	'off'                                        => _x('Off', 'Option disabled', 'updraftcentral'),
	'custom'                                     => _x('Custom', 'Option allows for configuration', 'updraftcentral'),
	'automatic_updates_default_status'           => __('You have selected default.', 'updraftcentral').' '.__('WordPress will behave as if this plugin is not installed for automatic updates.', 'updraftcentral'),
	'automatic_updates_on_status'                => __('Automatic updates are on.', 'updraftcentral'),
	'automatic_updates_off_status'               => __('Automatic updates are off.', 'updraftcentral'),
	'automatic_updates_custom_status'            => __('You have selected to customize the updates below.', 'updraftcentral'),
	'automatic_updates'                          => __('Automatic Updates', 'updraftcentral'),
	'automatic_updates_description'              => __('These options will enable or disable automatic updates (background updates) of certain parts of WordPress.', 'updraftcentral').' '.__('Select Custom for more flexibility.', 'updraftcentral').' '.__('Leave as Default for normal WordPress behavior', 'updraftcentral'),
	'automatic_major_updates'                    => _x('Major Releases', 'Major WordPress releases', 'updraftcentral'),
	'automatic_major_updates_description'        => __('Automatically update to major releases (e.g., 4.1, 4.2, 4.3).', 'updraftcentral'),
	'automatic_major_updates_label_on'           => __('Enable Major Releases', 'updraftcentral'),
	'automatic_major_updates_on_status'          => __('Automatic major release updates are now turned on.', 'updraftcentral'),
	'automatic_major_updates_label_off'          => __('Disable Major Releases', 'updraftcentral'),
	'automatic_major_updates_off_status'         => __('Automatic major release updates are now turned off.', 'updraftcentral'),
	'automatic_minor_updates'                    => _x('Minor Releases', 'Minor point releases for WordPress', 'updraftcentral'),
	'automatic_minor_updates_description'        => __('Automatically update to minor releases (e.g., 4.1.1, 4.1.2, 4.1.3).', 'updraftcentral'),
	'automatic_minor_updates_label_on'           => __('Enable Minor Releases', 'updraftcentral'),
	'automatic_minor_updates_on_status'          => __('Automatic minor release updates are now turned on.', 'updraftcentral'),
	'automatic_minor_updates_label_off'          => __('Disable Minor Releases', 'updraftcentral'),
	'automatic_minor_updates_off_status'         => __('Automatic minor release updates are now turned off.', 'updraftcentral'),
	'automatic_development_updates'              => _x('Development Updates', 'Beta and RC releases for WordPress', 'updraftcentral'),
	'automatic_development_updates_description'  => __('Allow your install to receive development updates from WordPress (for advanced users only)', 'updraftcentral'),
	'automatic_development_updates_label_on'     => __('Enable Development Updates', 'updraftcentral'),
	'automatic_development_updates_on_status'    => __('Automatic development release updates are now turned on.', 'updraftcentral'),
	'automatic_development_updates_label_off'    => __('Disable Development Updates', 'updraftcentral'),
	'automatic_development_updates_off_status'   => __('Automatic development release updates are now turned off.', 'updraftcentral'),
	'automatic_translation_updates'              => _x('Translation Updates', 'Enable or disable translation updates', 'updraftcentral'),
	'automatic_translation_updates_description'  => __('Automatically update your translations.', 'updraftcentral'),
	'automatic_translation_updates_label_on'     => __('Enable Translation Updates', 'updraftcentral'),
	'automatic_translation_updates_on_status'    => __('Automatic translation updates are now turned on.', 'updraftcentral'),
	'automatic_translation_updates_label_off'    => __('Disable Translation Updates', 'updraftcentral'),
	'automatic_translation_updates_off_status'   => __('Automatic translation updates are now turned off.', 'updraftcentral'),
	'select_individually'                        => __('Select Individually', 'updraftcentral'),
	'automatic_plugin_updates'                   => __('Automatic Plugin Updates', 'updraftcentral'),
	'automatic_plugin_updates_description'       => __('Automatically update your plugins.', 'updraftcentral').' '.__('Select always on, always off, the WordPress default, or select plugins individually using the Plugins tab.', 'updraftcentral'),
	'automatic_plugin_updates_default_status'    => __('Automatic updates for plugins are now at their default setting (default is off).', 'updraftcentral'),
	'automatic_plugin_updates_on_status'         => __('Automatic updates for plugins are now on.', 'updraftcentral'),
	'automatic_plugin_updates_off_status'        => __('Automatic updates for plugins are now off.', 'updraftcentral'),
	'automatic_plugin_updates_individual_status' => __('Automatic updates for plugins can be customized in the Plugins tab.', 'updraftcentral'),
	'automatic_theme_updates'                    => __('Automatic Theme Updates', 'updraftcentral'),
	'automatic_theme_updates_description'        => __('Automatically update your themes.', 'updraftcentral').' '.__('Select always on, always off, the WordPress default, or select themes individually using the Themes tab.', 'updraftcentral'),
	'automatic_theme_updates_default_status'     => __('Automatic updates for themes are now at their default setting (default is off).', 'updraftcentral'),
	'automatic_theme_updates_on_status'          => __('Automatic updates for themes are now on.', 'updraftcentral'),
	'automatic_theme_updates_off_status'         => __('Automatic updates for themes are now off.', 'updraftcentral'),
	'automatic_theme_updates_individual_status'  => __('Automatic updates for themes can be customized in the Themes tab.', 'updraftcentral'),
	'disable_updates'                            => __('Disable All Updates', 'updraftcentral'),
	'disable_updates_description'                => __('This is a master switch and will enable or disable updates for the WordPress installation.', 'updraftcentral').' '.__('Switching updates off is not recommended.', 'updraftcentral'),
	'disable_updates_label_on'                   => __('Enable All Updates', 'updraftcentral'),
	'all_updates_on_status'                      => __('All updates are allowed, however, you still need to configure the updates below.', 'updraftcentral'),
	'disable_updates_label_off'                  => __('Disable All Updates', 'updraftcentral'),
	'all_updates_off_status'                     => __('All updates are disabled.', 'updraftcentral'),
	'logs'                                       => _x('Logs', 'Log what is stored when assets update', 'updraftcentral'),
	'logs_description'                           => __('Logs will show you what assets have updated and will show up in the Logs tab.', 'updraftcentral'),
	'logs_label_on'                              => __('Enable Logs', 'updraftcentral'),
	'logs_on_status'                             => __('Logs are enabled.', 'updraftcentral').' '.__('You will find Logs in the Logs tab.', 'updraftcentral'),
	'logs_label_off'                             => __('Disable Logs', 'updraftcentral'),
	'logs_off_status'                            => __('Logs are disabled.', 'updraftcentral'),
	'misc_browser_nag'                           => _x('Browser Nag', 'WordPress shows a warning for older browsers', 'updraftcentral'),
	'misc_browser_nag_description'               => __('Enables or disables the browser nag for users using older browsers.', 'updraftcentral'),
	'misc_browser_nag_label_on'                  => __('Enable the Browser Nag', 'updraftcentral'),
	'misc_browser_nag_on_status'                 => __('The Browser Nag for older browsers is on.', 'updraftcentral'),
	'misc_browser_nag_label_off'                 => __('Disable the Browser Nag', 'updraftcentral'),
	'misc_browser_nag_off_status'                => __('The Browser Nag for older browsers is off.', 'updraftcentral'),
	'misc_wp_footer'                             => __('WordPress Version in Footer', 'updraftcentral'),
	'misc_wp_footer_description'                 => __('Enables or disables the WordPress version from showing in the footer of the admin area.', 'updraftcentral'),
	'misc_wp_footer_label_on'                    => __('Enable the Version in the Footer', 'updraftcentral'),
	'misc_wp_footer_on_status'                   => __('Showing the WordPress version in the footer is on.', 'updraftcentral'),
	'misc_wp_footer_off_status'                  => __('Showing the WordPress version in the footer is off.', 'updraftcentral'),
	'misc_wp_footer_label_off'                   => __('Disable the Version in the Footer', 'updraftcentral'),
	'emails'                                     => __('Core Notification E-mails', 'updraftcentral'),
	'emails_description'                         => __('WordPress periodically sends update notification e-mails, such as in the case of automatic updates.', 'updraftcentral').' '.__('By default, the email used is the one in Settings->General, but you can override this below.', 'updraftcentral'),
	'emails_label_on'                            => __('Enable Core Notification E-mails', 'updraftcentral'),
	'notification_core_update_emails_on_status'  => __('E-mail notifications are on.', 'updraftcentral').' '.__('You can configure which e-mail addresses are sent to below.', 'updraftcentral'),
	'emails_label_off'                           => __('Disable Core Notification E-mails', 'updraftcentral'),
	'notification_core_update_emails_off_status' => __('E-mail notifications are off', 'updraftcentral'),
	'emails_placeholder'                         => __('Add an e-mail address', 'updraftcentral'),
	'emails_input_label'                         => __('Enter Comma Separated E-mail Addresses', 'updraftcentral'),
	'emails_invalid'                             => __('One or more e-mail addresses are invalid.', 'updraftcentral'),
	'emails_save'                                => __('Save E-mail Addresses', 'updraftcentral'),
	'emails_save_empty'                          => __('Please enter an e-mail address', 'updraftcentral'),
	'emails_saving'                              =>__('Saving...', 'updraftcentral'),
	'core_updates'                               => __('WordPress Core Updates', 'updraftcentral'),
	'core_updates_description'                   => __('This allows you to disable or enable all core updates, including automatic updates.', 'updraftcentral'),
	'core_updates_label_on'                      => __('Enable Core Updates', 'updraftcentral'),
	'core_updates_on_status'                     => __('Core updates are enabled.', 'updraftcentral'),
	'core_updates_label_off'                     => __('Disable Core Updates', 'updraftcentral'),
	'core_updates_off_status'                    => __('Core updates are disabled.', 'updraftcentral'),
	'plugin_updates'                             => __('WordPress Plugin Updates', 'updraftcentral'),
	'plugin_updates_description'                 => __('This allows you to disable or enable all plugin updates.', 'updraftcentral').' '.__('Disabling this option will also disable automatic updates.', 'updraftcentral'),
	'plugin_updates_label_on'                    => __('Enable Plugin Updates', 'updraftcentral'),
	'plugin_updates_on_status'                   => __('Plugin updates are enabled.', 'updraftcentral'),
	'plugin_updates_label_off'                   => __('Disable Plugin Updates', 'updraftcentral'),
	'plugin_updates_off_status'                  => __('Plugin updates are disabled.', 'updraftcentral'),
	'theme_updates'                              => __('WordPress Theme Updates', 'updraftcentral'),
	'theme_updates_description'                  => __('This allows you to disable or enable all theme updates.', 'updraftcentral').' '.__('Disabling this option will also disable automatic updates.', 'updraftcentral'),
	'theme_updates_label_on'                     => __('Enable Theme Updates', 'updraftcentral'),
	'theme_updates_on_status'                    => __('Theme updates are enabled.', 'updraftcentral'),
	'theme_updates_label_off'                    => __('Disable Theme Updates', 'updraftcentral'),
	'theme_updates_off_status'                   => __('Theme updates are disabled.', 'updraftcentral'),
	'translation_updates'                        => __('WordPress Translation Updates', 'updraftcentral'),
	'translation_updates_description'            => __('This allows you to disable or enable all translations.', 'updraftcentral').' '.__('Disabling this option will also disable automatic translation updates.', 'updraftcentral'),
	'translation_updates_label_on'               => __('Enable Translation Updates', 'updraftcentral'),
	'translation_updates_on_status'              => __('Translation updates are enabled.', 'updraftcentral'),
	'translation_updates_label_off'              => __('Disable Translation Updates', 'updraftcentral'),
	'translation_updates_off_status'             => __('Translation updates are disabled.', 'updraftcentral'),
	'core_updates_label_on'                      => __('Manually update', 'updraftcentral'),
	'core_updates_label_off'                     => __('Disable core updates', 'updraftcentral'),
	'core_updates_label_auto_disabled'           => __('Disable auto updates', 'updraftcentral'),
	'core_updates_label_automatic'               => __('Auto update all releases', 'updraftcentral'),
	'core_updates_label_automatic_minor'         => __('Auto update all minor versions', 'updraftcentral'),
	'plugin_updates'                             => __('Plugin updates', 'updraftcentral'),
	'plugin_updates_description'                 => __('This allows you to disable or enable all plugin updates, including automatic updates.', 'updraftcentral'),
	'plugin_updates_label_on'                    => __('Manually update', 'updraftcentral'),
	'plugin_updates_label_off'                   => __('Disable plugin updates', 'updraftcentral'),
	'plugin_updates_label_automatic'             => __('Enable auto updates', 'updraftcentral'),
	'plugin_updates_label_auto_disabled'         => __('Disable auto updates', 'updraftcentral'),
	'plugin_updates_label_individually'          => __('Choose per plugin', 'updraftcentral'),
	'theme_updates'                              => __('Theme updates', 'updraftcentral'),
	'theme_updates_description'                  => __('This allows you to disable or enable all theme updates.', 'updraftcentral').' '.__('Disabling this option will also disable automatic updates.', 'updraftcentral'),
	'theme_updates_label_on'                     => __('Manually update', 'updraftcentral'),
	'theme_updates_label_off'                    => __('Disable theme updates', 'updraftcentral'),
	'theme_updates_label_automatic'              => __('Enable auto updates', 'updraftcentral'),
	'theme_updates_label_auto_disabled'          => __('Disable auto updates', 'updraftcentral'),
	'theme_updates_label_individually'           => __('Choose per theme', 'updraftcentral'),
	'translation_updates'                        => __('Translation updates', 'updraftcentral'),
	'translation_updates_description'            => __('This allows you to disable or enable all translations.', 'updraftcentral').' '.__('Choose automatic to automatically update your translations.', 'updraftcentral'),
	'translation_updates_label_on'               => __('Manually update', 'updraftcentral'),
	'translation_updates_label_on_status'        => __('Translation updates are enabled.', 'updraftcentral'),
	'translation_updates_label_off'              => __('Disable translation updates', 'updraftcentral'),
	'translation_updates_label_automatic'        => __('Enable auto updates', 'updraftcentral'),
	'translation_updates_label_auto_disabled'    => __('Disable auto updates', 'updraftcentral'),
	'development_updates'                        => __('Core development auto updates', 'updraftcentral'),
	'development_updates_description'            => __('This allows you to enable auto updates for development versions of WordPress.', 'updraftcentral'),
	'development_updates_label_on'               => __('Auto update', 'updraftcentral'),
	'development_updates_label_off'              => __('Disable auto updates', 'updraftcentral'),
	'not_valid_number' => __('Not a valid number', 'updraftcentral'),
	'enable_auto_backup' => __('Enable Auto Backup', 'updraftcentral'),
	'enabled_auto_backup_description' => __('Your site will be backed up automatically before updating.', 'updraftcentral'),
	'disable_auto_backup' => __('Disable Auto Backup', 'updraftcentral'),
	'disabled_auto_backup_description' => __('Your site will NOT be backed up automatically before updating.', 'updraftcentral'),
	'import_select_file' => __('You have not yet selected a file to import.', 'updraftcentral'),
	'import_invalid_json_file' => __('Error: The chosen file is corrupt.', 'updraftcentral').' '.__('Please choose a valid EUM export file.', 'updraftcentral'),
	'import_confirmation' => __("The file you're trying to import is not of this site, If you have customized plugin and themes update settings, this will override this site's settings.", 'updraftcentral').' '.__("Do you still want to import settings?", 'updraftcentral'),
	'update_cron_scheduled' => __('Your update cron is scheduled successfully', 'updraftcentral'),
	'webhook_enable' => __('Enable Webhook', 'updraftcentral'),
	'webhook_disable' => __('Disable Webhook', 'updraftcentral'),
	'webhook_copy' => _x('Copy', 'Copy webhook to clipboard', 'updraftcentral'),
	'webhook_copied' => _x('Copied', 'Copy webhook to clipboard', 'updraftcentral'),
	'saving'              => __('Saving...', 'updraftcentral'),
	'working'             => __('Working...', 'updraftcentral'),
	'enable_safe_mode'    => __('Enable Safe Mode', 'updraftcentral'),
	'disable_safe_mode'   => __('Disable Safe Mode', 'updraftcentral'),
	'enable_version_control'    => __('Enable Version Control Protection', 'updraftcentral'),
	'disable_version_control'   => __('Disable Version Control Protection', 'updraftcentral'),
	'enable_unmaintained_plugin_check'    => __('Enable Plugin Checks', 'updraftcentral'),
	'disable_unmaintained_plugin_check'   => __('Disable Plugin Checks', 'updraftcentral'),
	'plugin_name'         => __( 'Easy Updates Manager', 'updraftcentral' ),
	'version_incompatibility' => __( 'Please update Easy Updates Manager to 9.0.0 to see this section.', 'updraftcentral' ),
);
