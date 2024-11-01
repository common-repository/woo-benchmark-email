=== Woo Benchmark Email ===
Contributors: seanconklin, randywsandberg
Donate link: https://codedcommerce.com/donate
Tags: WooCommerce, Abandoned cart, Drip campaigns, Email marketing automation, Benchmark Email
Requires at least: 4.9
Requires PHP: 7.4
Stable tag: 1.6.2
Tested up to: 6.7-RC2
License: GPLv2 (or later)
License URI: http://www.gnu.org/licenses/gpl-3.0.html

Connects WooCommerce with Benchmark Email - syncing customers and abandoned carts.


== Description ==

[youtube https://www.youtube.com/watch?v=MPROuswLJDs]

Feature: Connect to Benchmark Email ReST API

* Separate from optional Benchmark Email Lite plugin, this setting connects to one API key for WooCommerce specific communications.
* Settings located in WP Admin > WooCommerce > Settings > Advanced > Benchmark Email

Feature: Customer carts to Woo Abandoned Carts list

* Any time somebody clicks to go to the checkout page their email address, name, and cart details get sent to the Woo Abandoned Carts contact list.
* They may be logged in and this field might be pre-populated, still works.
* They may be making a purchase as a Guest and the field gets caught as typed.
* They may be authenticated yet not have Woo history, so they type the email in.
* There is a 2 second delay to ensure they are done typing the email before it sends.
* The email is validates as a properly formatted email before it gets sent to Benchmark.
* Use Automation Pro to manage the templates, timing of emails, and eventual deletion from list since subscription to this list is for short-term usage only.
* A URL and order data are included, so Automation Pro can manage the workflow.
* Benchmark is to provide the prebuilt Automation Pro template for our users.

Feature: Customer orders to Woo Customers list

* Also gets them removed from the Woo Abandoned Carts contact list since they have purchased.
* They get added to the Woo Customers list only if they select the checkbox.
* They get added to the Woo Customers list if there is no checkbox to select (if label disabled in settings).

Feature: Sync all order history to Woo Customers list

* Copies all historic orders, whether Guest or Registered customers to Woo Customers list.
* Uses AJAX to prevent timeouts, but may run for some time on larger stores.


== Installation ==

1. Upload the plugin files to the `/wp-content/plugins/woo-benchmark-email` directory, or install the plugin through the WordPress plugins screen directly.
1. Activate the plugin through the 'Plugins' screen in WordPress.
1. Use the `WooCommerce->Settings->Advanced->Benchmark Email` screen to configure the plugin.


== Screenshots ==

1. The settings panel where you place your API key.
2. A sample user completing checkout showing the data being captured behind the scenes as viewed from the inspector.


== Changelog ==

= 1.6.2 on 2023-04-19 =
* Fixed: Unchecked checkout opt-in field was still subscribing to the Customers list.

= 1.6.1 on 2023-03-23 =
* Fixed: PHP crash on order submit stemming from v1.6 code changes for HPOS.
* Fixed: Handling of checkbox field settings for debug and usage tracking.

= 1.6 on 2023-01-25 =
* Added: Support for WooCommerce HPOS feature using C.R.U.D. functions.
* Updated: switched WooCommerce class reference to superglobal.

= 1.5.1 on 2022-03-24 =
* Fixed: PHP crash on checkout when no order history found. Thanks to Paul Steiner for reporting.

= 1.5 on 2020-04-02 =
* Fixed: Compatibility with other plugins that hook into wp_dashboard_setup.

= 1.4 on 2020-03-19 =
* Updated: function to select which lists are used for Abandons and Customers in common languages.
* Updated: Removed caching of ListIDs to support translated list names.
* Updated: Consolidated debug logger messages to single entries.
* Fixed: plugins page settings link.

= 1.3 on 2020-03-09 =
* Added: developer admin analytics
* Updated: tested-to for WooCommerce v4.0 RC2 releasing eminently

= 1.2 on 2018-11-29 =
* Added: button to Get API Key on settings page
* Added: link to Settings on the plugins page
* Added: admin dashboard notice if API key not set
* Added: error handling to modal API Key logic
* Updated: Enabled our dashboard notices on plugin settings page as well as the main dashboard area
* Fixed: invalid function call is_plugin_inactive
* Fixed: array validation to prevent PHP notice and potential AJAX add-to-cart failure if API key or lists are unset and WP_DEBUG is turned ON

= 1.1 on 2018-11-06 =
* Added: Sister product activation and installation checks and message with dismiss link.
* Added: New fields for total spent, first order date, total number of orders to CustomerSync and order placement.
* Added: Order placement or CustomerSync to include addresses, company name, and phone number fields.
* Update: Moved Benchmark Email menu from underneath Advanced to WooCommerce Settings top level and utilized Settings API class reference.
* Update: Code consolidation.
* Update: Shortened some array syntax.
* Fixed: Contact lists query - needed trailing slash for REST API.
* Fixed: Add to cart authenticated - first and last name detection.
* Fixed: PHP Warning if no contact lists are found on an account.

= 1.0 on 2018-09-23 =
* Initial release


== Support ==

[Sign Up](http://www.benchmarkemail.com/Register) for your free Benchmark Email account.

Obtain your Benchmark Email API Key by logging into Benchmark Email, click on your Username, then click Integrations, now select the API Key option from the Left or Dropdown menu, last copy “Your API Key.”

Need help? Please call Benchmark Email at 800.430.4095
