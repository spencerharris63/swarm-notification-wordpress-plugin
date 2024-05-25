=== Swarm Notification Plugin ===
Contributors: Spencer Harris
Donate link: https://venmo.com/Spencer-Harris-15
Tags: form, notification, WhatsApp, swarm
Requires at least: 5.0
Tested up to: 5.8
Stable tag: 1.0
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

== Description ==
A plugin to send swarm reports to a WhatsApp group.

== Installation from WordPress Official Plug In ==
1. Upload the plugin files to the `/wp-content/plugins/swarm-notification-plugin` directory, or install the plugin through the WordPress plugins screen directly.
2. Activate the plugin through the 'Plugins' screen in WordPress.
3. Use the [swarm_form] shortcode to display the form on any page or post.

== Installation from GitHub ==
1. Download the latest release from the [GitHub repository](https://github.com/yourusername/swarm-notification-plugin).
    - Click on the "Code" button and select "Download ZIP".
2. Log in to your WordPress admin dashboard (`https://yourwebsite.com/wp-admin`).
3. Navigate to Plugins > Add New.
4. Click on the “Upload Plugin” button at the top of the page.
5. Choose the ZIP file you downloaded from GitHub and click “Install Now”.
6. After installation, click “Activate Plugin”.

== Usage ==
1. **Configure WhatsApp Settings**:
   - After activating the plugin, navigate to the WordPress admin dashboard.
   - Go to `Swarm Notification` in the sidebar menu.
   - Enter your WhatsApp API Key and the WhatsApp Group Phone Number in the provided fields.
   - Click 'Save Changes' to store your settings.

2. **Add the Form to a Page or Post**:
   - Create or edit a page or post where you want the form to appear.
   - Add the shortcode `[swarm_form]` to the content area.
   - Publish or update the page or post to display the form.

3. **Form Submission**:
   - Users can fill out the form with details such as name, street, phone number, location of the swarm, and additional details.
   - Upon submission, the form data will be sent to the specified WhatsApp group.

== Changelog ==
= 1.0 =
* Initial release.
