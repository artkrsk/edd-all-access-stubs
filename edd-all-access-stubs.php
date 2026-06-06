<?php


namespace {
	// EDD All Access constants
	if (!defined('EDD_ALL_ACCESS_VER')) {
		define('EDD_ALL_ACCESS_VER', '1.2.6');
	}
	if (!defined('EDD_ALL_ACCESS_FILE')) {
		define('EDD_ALL_ACCESS_FILE', __FILE__);
	}
	if (!defined('EDD_ALL_ACCESS_DIR')) {
		define('EDD_ALL_ACCESS_DIR', plugin_dir_path(EDD_ALL_ACCESS_FILE));
	}
	if (!defined('EDD_ALL_ACCESS_URL')) {
		define('EDD_ALL_ACCESS_URL', plugins_url('/', EDD_ALL_ACCESS_FILE));
	}
}
namespace {
    /**
     * Main EDD_All_Access class
     *
     * @since       1.0.0
     */
    class EDD_All_Access
    {
        /**
         * Holds the class containing the EDD Recurring Integration.
         *
         * @var EDD_All_Access_Recurring
         */
        public static $edd_recurring;
        /**
         * Holds the class containing the EDD Software Licensing Integration.
         *
         * @var EDD_All_Access_Software_Licensing
         */
        public static $edd_software_licensing;
        /**
         * Holds the class containing the EDD Content Restriction Integration.
         *
         * @var EDD_All_Access_Content_Restriction
         */
        public static $edd_content_restriction;
        /**
         * Holds the class containing the EDD Commissions Integration.
         *
         * @var EDD_All_Access_Commissions
         */
        public static $edd_commissions;
        /**
         * Holds the class containing the EDD Bookings Integration.
         *
         * @var EDD_All_Access_Bookings
         */
        public static $edd_bookings;
        /**
         * Holds the class containing the EDD Downloads As Services Integration.
         *
         * @var EDD_All_Access_Downloads_As_Services
         */
        public static $edd_downloads_as_services;
        /**
         * Holds the class containing the EDD Simple Shipping Integration.
         *
         * @var EDD_All_Access_Simple_Shipping
         */
        public static $edd_simple_shipping;
        /**
         * Holds the class containing the EDD Frontend Submissions Integration.
         *
         * @var EDD_All_Access_Fes
         */
        public static $edd_fes;
        /**
         * Holds the class containing the EDD Free Downloads Integration.
         *
         * @var EDD_All_Access_Free_Downloads
         */
        public static $edd_free_downloads;
        /**
         * Holds the class containing the EDD Custom Prices Integration.
         *
         * @var EDD_All_Access_Custom_Prices
         */
        public static $edd_custom_prices;
        /**
         * Holds the class containing the EDD Auto Register Integration.
         *
         * @var EDD_All_Access_Auto_register
         */
        public static $edd_auto_register;
        /**
         * Holds the class containing the Marketify THeme Integration.
         *
         * @var EDD_All_Access_Marketify
         */
        public static $marketify_theme;
        /**
         * Holds the class containing the Restrict Content Pro Integration.
         *
         * @var EDD_All_Access_Restrict_Content_Pro
         */
        public static $restrict_content_pro;
        /**
         * Holds the class for the object cache integrations.
         *
         * @var EDD_All_Access_Object_Cache
         */
        public $object_cache;
        /**
         * Get active instance
         *
         * @access      public
         * @since       1.0.0
         * @return      object self::$instance The one true EDD_All_Access
         */
        public static function instance()
        {
        }
        /**
         * Register our All Access single view page
         *
         * @since  1.0.0
         * @return void
         */
        public function all_access_passes_view_page()
        {
        }
        /**
         * Internationalization
         *
         * @access      public
         * @since       1.0.0
         * @return      void
         */
        public function load_textdomain()
        {
        }
    }
    /**
     * EDD_Download_Reports_Table Class
     *
     * Renders the Download Popularity Table Class table
     *
     * @since 1.1.2
     */
    class EDD_AA_Download_Popularity_Table extends \WP_List_Table
    {
        /**
         * Set the values for the Pass in question
         *
         * @since 1.1.2
         *
         * @param int             $all_access_product_id The id of the AA product in question.
         * @param int             $all_access_price_id   The variable price id of the AA product in question.
         * @param array           $aa_product_ids        The All Access products on this site.
         * @param DateTime|string $start_date            The date object for the start date for which we want to get the
         *                                               results.
         * @param DateTime|string $end_date              The date object for the end date for which we want to get the
         *                                               results.
         */
        public function set_filter_values($all_access_product_id, $all_access_price_id, $aa_product_ids, $start_date, $end_date)
        {
        }
        /**
         * Define the columns.
         *
         * @since 1.1.2
         */
        public function get_columns()
        {
        }
        /**
         * Prepare the table items.
         *
         * @since 1.1.2
         */
        public function prepare_items()
        {
        }
        /**
         * Get the popular products from the database (EDD 3.0+)
         *
         * @since 1.1.5
         * @return array
         */
        protected function query_popular_products()
        {
        }
        /**
         * Queries for popular products in EDD 2.9 and lower.
         *
         * @param int    $all_access_product_id
         * @param int    $all_access_price_id
         * @param string $start_date
         * @param string $end_date
         *
         * @since 1.1.5
         * @return array
         */
        protected function query_popular_products_29($all_access_product_id, $all_access_price_id, $start_date, $end_date)
        {
        }
        /**
         * Get the popular products from the database.
         *
         * @param int      $all_access_product_id The id of the EDD Download which is an All Access Pass, and for which we want to know which products were downloaded.
         * @param int      $all_access_price_id The variable price id of the EDD Download which is an All Access Pass, and for which we want to know which products were downloaded.
         * @param DateTime $start_date The date object for the start date for which we want to get the results.
         * @param DateTime $end_date The date object for the end date for which we want to get the results.
         * @since 1.1.2
         */
        public function get_popular_products($all_access_product_id, $all_access_price_id, $start_date, $end_date)
        {
        }
        /**
         * Define the output for each column
         *
         * @param array  $item The item that represents this row of data.
         * @param string $column_name The name of the column.
         * @since 1.1.2
         */
        public function column_default($item, $column_name)
        {
        }
        /**
         * Gets the product title and row actions.
         *
         * @since 1.1.5
         * @param object $item
         * @return string
         */
        public function column_downloaded_product_name($item)
        {
        }
        /**
         * Output the table navigation
         *
         * @param string $which The context of the table navigation being output.
         * @since 1.1.2
         */
        public function display_tablenav($which)
        {
        }
        /**
         * Message to be displayed when there are no items
         *
         * @since 1.1.5
         */
        public function no_items()
        {
        }
    }
    /**
     * EDD_All_Access_Pass Class
     *
     * @since 1.0.0
     */
    class EDD_All_Access_Pass
    {
        /**
         * Set up the pass.
         *
         * @param int $payment_id  The payment ID to associate with this pass.
         * @param int $download_id The download ID to associate with this pass.
         * @param int $price_id    The variable price ID (if one) to associate with this pass.
         *
         * @since      1.0.0
         */
        public function __construct($payment_id = 0, $download_id = 0, $price_id = 0)
        {
        }
        /**
         * Magic __get function to dispatch a call to retrieve a private property
         *
         * @param    string $key The name of the private variable being fetched.
         * @since    1.0.0
         *
         * @return   mixed
         */
        public function __get($key)
        {
        }
        /**
         * Magic SET function
         *
         * @since    1.0.0
         * @param    string $key   The property name.
         * @param    mixed  $value  The value the property is being set to.
         */
        public function __set($key, $value)
        {
        }
        /**
         * Magic ISSET function, which allows empty checks on protected elements
         *
         * @since  1.0.0
         * @param  string $key The attribute to get.
         * @return boolean If the item is set or not.
         */
        public function __isset($key)
        {
        }
        /**
         * Get the metadata for an All Access pass.
         *
         * @since    1.0.0
         * @return   array $meta This will be all of the meta data used by the All Access pass to determine expiration, downloads per day, and more.
         */
        public function all_access_meta()
        {
        }
        /**
         * Set and save the date when the downloads-used counter was last reset
         *
         * @since       1.0.0
         * @param       int $time_of_last_download The timestamp of when the last download took place.
         * @return      int The last date (in PHP time format) this All Access Pass was used to download a product.
         */
        public function set_downloads_used_last_reset($time_of_last_download)
        {
        }
        /**
         * Set the number of downloads this All Access Pass has been used for.
         *
         * @since       1.0.0
         * @param       int $downloads_used The value to which the number of downloads used should be set.
         * @return      int The number of downloads this All Access Pass has been used for during this time period (per day, year etc).
         */
        public function set_downloads_used($downloads_used)
        {
        }
        /**
         * We may need to reset the downloads-used counter. This function can be used to check that and will reset it if needed.
         *
         * @since    1.0.0
         * @return   void
         */
        public function maybe_reset_downloads_used_counter()
        {
        }
        /**
         * This method relates to upgrades. Use this method to upgrade this All Access Pass to a new All Access Pass.
         * Upgrading will set the start_date of the new All Access Pass to the start_date of the current one.
         * It will also add a flag to the current All Access Pass letting it know it is an "prior" one.
         * Additionally, it will add a new key to the new All Access Pass's meta containing all prior passes.
         * If the current All Access Pass already contains prior passes (because it has already been upgraded)
         * those will be passed along to the new one as well. This will happen in a scenario where upgrade paths are more than 2 (Small -> Medium -> Large).
         *
         * @since       1.0.0
         * @param       EDD_All_Access_Pass $new_all_access_pass     The new All Access Pass object which this pass is being upgraded to.
         * @return      boolean Whether this All Access Pass is an prior one or not.
         */
        public function do_upgrade($new_all_access_pass)
        {
        }
        /**
         * Attempt to renew an All Access Pass.
         *
         * @since       1.0.0
         * @return      mixed
         */
        public function maybe_renew()
        {
        }
        /**
         * Convert an All Access Payment to be an active one. There are a few different things that make an All Access pass active.
         * All of those things are carried out by this function.
         *
         * @since       1.0.0
         * @return      mixed
         */
        public function maybe_activate()
        {
        }
        /**
         * Convert an active All Access Payment to be an expired one. There are a few different things that make an All Access pass expired.
         * All of those things are carried out by this function.
         *
         * @since       1.0.0
         * @param       array $args The args to control how expiration is handled.
         * @return      mixed
         */
        public function maybe_expire($args = array())
        {
        }
    }
    /**
     * All Access Shortcodes
     *
     * Adds additional recurring specific shortcodes as well as hooking into existing EDD core shortcodes to add additional subscription functionality
     *
     * @since  1.0.0
     */
    class EDD_All_Access_Shortcodes
    {
        /**
         * Get things started
         */
        public function __construct()
        {
        }
        /**
         * Allow the all_access_customer_downloads_only attribute to be used in the [purchase_link] shortcode.
         *
         * @param    array $out The output array of shortcode attributes.
         * @param    array $pairs The supported attributes and their defaults.
         * @param    array $atts The user defined shortcode attributes.
         * @return   array $out The output array of shortcode attributes
         * @since    1.0.0
         */
        public function edd_purchase_link_shortcode_atts($out, $pairs, $atts)
        {
        }
        /**
         * Adds our templates dir to the EDD template stack
         *
         * @since    1.0.0
         * @param    array $paths The paths of all EDD templates.
         * @return   mixed
         */
        public function add_template_stack($paths)
        {
        }
        /**
         * Modify the [downloads] shortcode so that if all_access_customer_downloads_only is added to the shortcode, it removes any products that aren't
         * covered by this customers All Access Passes.
         *
         * @since    1.0.0
         * @param    string $display The output of the shortcode.
         * @param    array  $atts The shortcode attributes.
         * @param    string $buy_button The value of "buy_button" in the $atts.
         * @param    string $columns The value of "columns" in the $atts.
         * @param    string $empty An empty string passed by EDD core to the filter.
         * @param    array  $downloads The array of products being shown.
         * @param    string $excerpt The value of "excerpt" in the $atts.
         * @param    string $full_content The value of "full_content" in the $atts.
         * @param    string $price The value of "price" in the $atts.
         * @param    string $thumbnails $price The value of "thumbnails" in the $atts.
         * @param    array  $query The array used to generate the query of product/downloads being shown.
         * @return   $query
         */
        public function override_downloads_shortcode($display, $atts, $buy_button, $columns, $empty, $downloads, $excerpt, $full_content, $price, $thumbnails, $query)
        {
        }
        /**
         * Modify the [downloads] shortcode so that if all_access_customer_downloads_only is added to the shortcode, it removes any products that aren't
         * covered by this customers All Access Passes.
         *
         * @since    1.0.0
         * @param    array $query The query that retrieved the products being shown.
         * @param    array $atts The array that was used to generate the query of products.
         * @return   $query
         */
        public function all_access_products_only_in_downloads($query, $atts)
        {
        }
        /**
         * All Access Passes shortcode callback
         *
         * Provides users with the data relating to their All Access passes.
         *
         * @since    1.0.0
         */
        public function edd_all_access_passes()
        {
        }
        /**
         * Allow the all_access_customer_downloads_only attribute to be used in the [downloads] shortcode.
         *
         * @since    1.0.0
         * @param    array $out The output array of shortcode attributes.
         * @param    array $pairs The supported attributes and their defaults.
         * @param    array $atts The user defined shortcode attributes.
         * @return   $out
         */
        public function shortcode_atts($out, $pairs, $atts)
        {
        }
        /**
         * Shortcode which can be used to easily give a user the option to log in or purchase an All Access Pass.
         * If the user is already logged in but does not have a valid All Access Pass, they will see a buy button.
         * If the user is both logged in and has a valid All Access Pass, they will be redirected to the page defined by the shortcode args.
         * Can also be used to restrict content.
         *
         * @since     1.0.0
         * @param     array  $atts Shortcode attributes.
         * @param     string $content The content that shoukd be shown if the user has the All Access Pass(s) in question.
         * @return    string Shortcode Output
         */
        public function edd_aa_all_access($atts, $content = \null)
        {
        }
        /**
         * Simple shortcode which can be used to show content only to people without an All Access Pass.
         *
         * @since    1.0.0
         * @param    array  $atts Shortcode attributes.
         * @param    string $content The content that should be shown if the user does not have the AA pass in question.
         * @return   string Shortcode Output
         */
        public function no_all_access($atts, $content = \null)
        {
        }
        /**
         * Simple shortcode which can be used to show content only to people with an All Access Pass.
         *
         * @since   1.0.0
         * @param    array  $atts Shortcode attributes.
         * @param    string $content The content that should be shown if the user does have the AA pass in question.
         * @return  string Shortcode Output
         */
        public function all_access_restrict($atts, $content = \null)
        {
        }
        /**
         * Registers the edd_aa_download_limit shortcode, to show a customer how many downloads their pass has left.
         *
         * @since 1.2
         * @param array $atts
         * @return string
         */
        public function download_limit($atts)
        {
        }
    }
    /**
     * Integrates EDD All Access with the EDD Auto Register extension
     *
     * @since 1.0.0
     */
    class EDD_All_Access_Auto_Register
    {
        /**
         * Get things started
         *
         * @since  1.0.0
         * @return void
         */
        public function __construct()
        {
        }
        /**
         * Since customers will be automatically registered, bypass the login check upon checkout
         *
         * @since       1.0.0
         */
        public function bypass_login_requirement()
        {
        }
    }
    /**
     * Integrates EDD All Access with the EDD Bookings extension
     *
     * @since 1.0.0
     */
    class EDD_All_Access_Bookings
    {
        /**
         * Get things started
         *
         * @since  1.0.0
         * @return void
         */
        public function __construct()
        {
        }
        /**
         * Don't allow All Access to change the download form shown to the user if the post is a Bookings post.
         * You can't download a booking-enabled post so having "access"to download it doesn't make sense here.
         *
         * @since    1.0.0
         * @param    bool   $allowed Whether to allow All Access to change the download form for this product or not.
         * @param    string $purchase_form The actual form output which is being filtered.
         * @param    array  $args The arguments passed to the edd_purchase_download_form filter.
         * @param    int    $post_id The ID of the product which is being shown.
         * @param    int    $price_id The variable price ID of the product which is being shown.
         * @return   bool   $allowed Whether to allow All Access to change the download form for this product or not.
         */
        public function allow_bookings($allowed, $purchase_form, $args, $post_id, $price_id)
        {
        }
    }
    /**
     * Integrates EDD All Access with the EDD Commissions extension
     *
     * @since 1.0.0
     */
    class EDD_All_Access_Commissions
    {
        /**
         * Get things started
         *
         * @since  1.0.0
         * @return void
         */
        public function __construct()
        {
        }
        /**
         * Run the Commissions integration. Set up as a separate function
         * to allow a Commissions version check to be run after the Commissions
         * version has been defined.
         *
         * @since 1.1.11
         * @return void
         */
        public function run()
        {
        }
        /**
         * When Commission rates are shown and need formatting, set them to show as a %.
         *
         * @since       1.0.0
         * @param       string $formatted_rate  The formatted rate being shown.
         * @param       int    $rate_only       The rate, but unformatted.
         * @param       string $commission_type The type of commission this is.
         * @return      string
         */
        public function edd_all_access_format_rate($formatted_rate, $rate_only, $commission_type)
        {
        }
        /**
         * Add "All Access" as a commission type
         *
         * @since       1.0.0
         * @param       array $commission_types The types of commissions available to choose from.
         * @return      array
         */
        public function edd_all_access_commission_types($commission_types)
        {
        }
        /**
         * Hide All Access Split option by default if All Access is not enabled.
         *
         * @since       1.0.0
         * @return      void
         */
        public function edd_all_access_default_css()
        {
        }
        /**
         * Make sure we are at the minimum version of EDD Commissions - which is 3.3.
         *
         * @since       1.0.0
         * @return      void
         */
        public function edd_all_access_commissions_too_old_notice()
        {
        }
        /**
         * Enqueue the commissions javascript for All Access in wp-admin.
         *
         * @since       1.0.0
         * @return      void
         */
        public function admin_enqueue_scripts()
        {
        }
        /**
         * In case the site owner entered Commissions Recipients in the settings for the actuall All Access Product, strip them out.
         *
         * @since       1.0.0
         * @param       array $recipients  The users getting commissions.
         * @param       int   $download_id The product for which users are getting commissions.
         * @return      array $recipients
         */
        public function edd_all_access_strip_recipients_from_aa_products($recipients, $download_id)
        {
        }
        /**
         * Register a tab in the single commission view for All Access information.
         *
         * @since  1.0.0
         * @param  array $tabs An array of existing tabs.
         * @return array       The altered list of tabs
         */
        public function edd_all_access_commissions_tab($tabs)
        {
        }
        /**
         * Register a view in the single commission view for All Access information.
         *
         * @since  1.0.0
         * @param  array $views An array of existing views.
         * @return array        The altered list of views
         */
        public function edd_all_access_commissions_view($views)
        {
        }
        /**
         * Add a note to the Commissions metabox breify explaining how commissions are handled if downloaded via All Access.
         *
         * @since       1.0.0
         * @return      void
         */
        public function edd_all_access_commissions_post_meta()
        {
        }
        /**
         * Triggered when an All Access payment is expired, here we calculate any commissions that need to be awarded for that All Access product.
         *
         * @since       1.0.0
         * @param       EDD_All_Access_Pass $freshly_expired_all_access_pass The All Access Pass Object that has just expired.
         * @param       array               $args The array of args that were passed to the maybe_expire method.
         * @return      void
         */
        public function edd_all_access_calculate_commissions($freshly_expired_all_access_pass, $args)
        {
        }
        /**
         * Make the price that is being split include any prior pass purchases. This is so that upgraded passes include all pre-upgrade monies.
         *
         * @since       1.0.0
         * @param       int    $price The price being split for commissions.
         * @param       object $cart_item The EDD cart object on the payment being split for commissions.
         * @return      int
         */
        public function edd_all_access_commissions_total_price($price, $cart_item)
        {
        }
        /**
         * Prevent commissions from being generated at the time of payment for All Access products only.
         *
         * @since       1.0.0
         * @param       array  $commissions_calculated The array of commissions calculated by the eddc_calculate_payment_commissions function in EDD Commissions.
         * @param       object $payment The EDD_Payment object for which the commissions are being calculated.
         * @return      array
         */
        public function edd_all_access_prevent_aa_commissions($commissions_calculated, $payment)
        {
        }
        /**
         * Record Commissions for any expired All Access products in a payment.
         * This is a forked version of the eddc_record_commission function in the EDD Commissions function.
         * The reason this had to be forked is because the original function only fires if the $old_status was pending.
         * It also didn't allow us to set a "Commissions Already Generated" flag for each item in the cart
         * which we need for All Access since multiple All Access items can be in the same payment but could expire on different dates.
         *
         * @access      private
         * @since       1.0.0
         * @param       object $freshly_expired_all_access_pass The EDD_All_Access_Pass object for which we are recording commissions.
         * @return      void
         */
        public function edd_all_access_record_commissions($freshly_expired_all_access_pass)
        {
        }
    }
    /**
     * Integrates EDD All Access with the EDD Content Restriction extension
     *
     * @since 1.0.0
     */
    class EDD_All_Access_Content_Restriction
    {
        /**
         * Get things started
         *
         * @since  1.0.0
         * @return void
         */
        public function __construct()
        {
        }
        /**
         * Make sure we are at the minimum version of Content Restriction - which is 2.0
         *
         * @since       1.0.0
         */
        public function edd_all_access_cr_too_old_notice()
        {
        }
        /**
         * Check if user has access to content
         *
         * @since  1.1
         * @param  bool  $return Whether the user has access to the content or not.
         * @param  int   $user_id The ID of the WordPress user in question.
         * @param  array $restricted_to The ids of the product(s) that must be purchased in order to get access to the content in question.
         * @param  int   $post_id The id of the WordPress post containing the locked content.
         * @return bool
         */
        public function can_access_content_because_of_all_access($return, $user_id, $restricted_to, $post_id)
        {
        }
    }
    /**
     * Integrates EDD All Access with the EDD Simple Shipping extension
     *
     * @since 1.0.0
     */
    class EDD_All_Access_Custom_Prices
    {
        /**
         * Get things started
         *
         * @since  1.0.0
         * @return void
         */
        public function __construct()
        {
        }
        /**
         * If the customer has all access to the product in question, don't output the custom prices option. They ain't paying anything.
         *
         * @since       1.0.0
         * @return      void
         */
        public function maybe_remove_custom_prices_output()
        {
        }
    }
    /**
     * Integrates EDD All Access with the EDD Downloads As Services extension
     *
     * @since 1.0.0
     */
    class EDD_All_Access_Downloads_As_Services
    {
        /**
         * Get things started
         *
         * @since  1.0.0
         * @return void
         */
        public function __construct()
        {
        }
        /**
         * Don't allow All Access to change the download form shown to the user if the post is a Downloads As Services post.
         * You can't download a "service" so having "access" to download it doesn't make sense here.
         *
         * @since       1.0.0
         * @param       bool   $allowed Whether to allow All Access to change the download form for this product or not.
         * @param       string $purchase_form The actual form output which is being filtered.
         * @param       array  $args The arguments passed to the edd_purchase_download_form filter.
         * @param       int    $post_id The ID of the product which is being shown.
         * @param       int    $price_id  The variable price ID of the product which is being shown.
         * @return      bool   $allowed Whether to allow All Access to change the download form for this product or not.
         */
        public function allow_services($allowed, $purchase_form, $args, $post_id, $price_id)
        {
        }
        /**
         * Is service - This method is duplicated from the EDD Downloads As Services main class and modified to handle price ids from the filter args.
         *
         * @param  int $item_id ID of download.
         * @param  int $price_id Variable price ID of download.
         * @return bool true if service, false otherwise.
         */
        public function is_service($item_id, $price_id)
        {
        }
    }
    /**
     * Integrates EDD All Access with the EDD Frontend Submissions extension
     *
     * @since 1.0.0
     */
    class EDD_All_Access_Fes
    {
        /**
         * Get things started
         *
         * @since  1.0.0
         * @return void
         */
        public function __construct()
        {
        }
    }
    /**
     * Integrates EDD All Access with the EDD Free Downloads extension
     *
     * @since 1.0.0
     */
    class EDD_All_Access_Free_Downloads
    {
        /**
         * Get things started
         *
         * @since  1.0.0
         * @return void
         */
        public function __construct()
        {
        }
    }
    /**
     * Integrates EDD All Access with the EDD Recurring extension
     *
     * @since 1.0.0
     */
    class EDD_All_Access_Recurring
    {
        /**
         * Get things started
         *
         * @since  1.0.0
         * @return void
         */
        public function __construct()
        {
        }
        /**
         * If someone is migrating their users from Restrict Content Pro to EDD All Access, here's we'll migrate their subscription to EDD Recurring
         *
         * @since    1.0.0
         * @param    string $subscription_profile_id The profile id for the subscription being migrated.
         * @param    string $edd_payment The EDD Payment which will be used as the parent payment.
         * @param    int    $all_access_product_id The ID of the All Access Pass whose subscriptions are being migrated from RCP to EDD Recurring.
         * @return   void
         */
        public function migrate_rcp_subscriptions($subscription_profile_id, $edd_payment, $all_access_product_id)
        {
        }
        /**
         * Add "Sync with Recurring expiration" as an expiration option for All Access.
         *
         * @since    1.0.0
         * @param    array $all_access_length_options Array of expiration options for All Access.
         * @return   array $all_access_length_options Array (modified) of expiration options for All Access
         */
        public function edd_all_access_recurring_duration_option($all_access_length_options)
        {
        }
        /**
         * Add "Sync with Recurring expiration" as an expiration option for All Access on the Customer Meta (Single All Access Pass Page).
         *
         * @since    1.0.0
         * @param    array       $all_access_length_options Array of expiration options for All Access.
         * @param    EDD_Payment $payment The EDD Payment where the All Access Pass was purchased.
         * @param    int         $download_id The product id which was purchased, and is an All Access product.
         * @param    int         $price_id The variable price id which was purchased, and is an All Access product.
         * @return   array $all_access_length_options Array (modified) of expiration options for All Access
         */
        public function edd_all_access_recurring_duration_customer_option($all_access_length_options, $payment, $download_id, $price_id)
        {
        }
        /**
         * Include recurring payment statuses to the list of valid statuses
         *
         * @since    1.0.0
         * @param    array $valid_payment_statuses The statuses which are valid for All Access Passes.
         * @return   array $valid_payment_statuses
         */
        public function edd_all_access_recurring_valid_payment_statuses($valid_payment_statuses)
        {
        }
        /**
         * Make All Access pass payments that are set to sync with Recurring expiration expire when the Recurring does.
         * Note that EDD Recurring "grandfathers" existing subscriptions if the period for the product is updated.
         * Thus, we need to get the period from the customer's subscription rather than the product meta - which could be edited by the site owner after purchases have happened.
         *
         * @since    1.0.0
         * @param    int    $expiration_time - The timestamp this All Access Pass should expire.
         * @param    object $all_access_pass - The All Access Pass object.
         * @return   int    $expiration_time - The timestamp this All Access Pass should expire.
         */
        public function sync_expiration_time_with_recurring($expiration_time, $all_access_pass)
        {
        }
        /**
         * Show the right string for the All Access Pass if the duration is set to "Sync With Recurring"
         *
         * @since    1.0.0
         * @param    string $assembled_string - The All Access duration string shown to the user. For example, "1 year".
         * @param    object $all_access_pass - The All Access Pass Object.
         * @return   bool   $is_active - whether this All Access pass is active or not.
         */
        public function duration_string($assembled_string, $all_access_pass)
        {
        }
        /**
         * Check if an AA pass would expire based on the duration unit being "edd_software_licensing", meaning its set to "sync with license expiration".
         *
         * @since    1.1.0
         * @param    string              $would_be_end_time The would-be end time.
         * @param    bool                $would_be_duration_number The duration number that would be used in our would-be scenario.
         * @param    string              $would_be_duration_unit The duration unit (day/week/month/edd_software_licensing) that would be used in our would-be scenario.
         * @param    EDD_All_Access_Pass $all_access_pass The All Access Pass in question.
         * @return   string $would_be_end_time The would-be end time adjusted for Software Licensing's license sync
         */
        public function check_if_pass_would_expire($would_be_end_time, $would_be_duration_number, $would_be_duration_unit, $all_access_pass)
        {
        }
        /**
         * This is fired directly after a subscription has been renewed. Here we hook into that to expire the old All Access Pass and activate the new.
         *
         * @since    1.0.0
         * @param    int    $subscription_id The ID of the subscription that was renewed.
         * @param    string $subscription_expiration The expiration date of the subscription in format Y-m-d H:i:s'.
         * @param    object $edd_subscription The Al Access Pass Object.
         * @return   void
         */
        public function check_expirations_post_renew($subscription_id, $subscription_expiration, $edd_subscription)
        {
        }
        /**
         * Deprecated: Prevent manual early renewal purchases of All Access if there is an active Subscription for it.
         *
         * @since       1.0.0
         * @param       array $valid_data The values relating to displaying the Purchase Button.
         * @param       array $post_data The values relating to displaying the Purchase Button.
         * @return      void
         */
        public function prevent_manual_renewals($valid_data, $post_data)
        {
        }
        /**
         * If the site owner has enabled the "Prevent downloads unless active subscription" option in EDD recurring,
         * override that if the AAP allows downloading of the product in question
         *
         * @since       1.1
         * @param       bool $has_access Whether the customer should be ablw to download this file.
         * @param       int  $user_id The ID of the user attached to the customer who is attempting to download this file.
         * @param       int  $download_id The ID of the product which is  attempting to be downloaded.
         * @param       bool $is_variable Whether or not the product being downloaded has variable pricing.
         * @return      bool
         */
        public function edd_recurring_download_has_access($has_access, $user_id, $download_id, $is_variable)
        {
        }
        /**
         * Prevent All Access for showing "Renew Now" on owned AA products if the user has an active subscription.
         *
         * @since 1.2.4
         * @param string $purchase_form The purchase form (already modified by All Access).
         * @param array  $args          The purchase form parameters.
         * @return string
         */
        public function renew_button($purchase_form, $args)
        {
        }
    }
    /**
     * Integrates EDD All Access with the Restrict Content Pro extension
     *
     * @since 1.0.0
     */
    class EDD_All_Access_Restrict_Content_Pro
    {
        /**
         * Get things started
         *
         * @since  1.0.2
         * @return void
         */
        public function __construct()
        {
        }
        /**
         * Process All Access Payments via ajax
         *
         * @since 1.0.2
         * @return void
         */
        public function edd_all_access_do_ajax_rcp_migrate()
        {
        }
        /**
         * Enqueue JS Scripts for RCP integration in admin
         *
         * @since       1.0.0
         * @return      void
         */
        public function admin_enqueue_scripts()
        {
        }
        /**
         * Display the "Migrate RCP Members to All Access members" tool.
         *
         * @since       1.0.0
         * @return      void
         */
        public function edd_all_access_migrate_from_rcp()
        {
        }
    }
    /**
     * Integrates EDD All Access with the EDD Simple Shipping extension
     *
     * @since 1.0.0
     */
    class EDD_All_Access_Simple_Shipping
    {
        /**
         * Get things started
         *
         * @since  1.0.0
         * @return void
         */
        public function __construct()
        {
        }
        /**
         * Don't allow All Access to change the download form shown to the user if the post is a Shipping product.
         * You can't download a Physical Product post so having "access" to download it doesn't make sense here.
         *
         * @since       1.0.0
         * @param       bool   $allowed Whether to allow All Access to change the download form for this product or not.
         * @param       string $purchase_form The actual form output which is being filtered.
         * @param       array  $args The arguments passed to the edd_purchase_download_form filter.
         * @param       int    $download_id The ID of the product which is being shown.
         * @param       int    $price_id The variable price ID of the product which is being shown.
         * @return      bool   $allowed Whether to allow All Access to change the download form for this product or not.
         */
        public function allow_simple_shipping($allowed, $purchase_form, $args, $download_id, $price_id)
        {
        }
    }
    /**
     * Integrates EDD All Access with the EDD Software Licensing extension
     *
     * @since 1.0.0
     */
    class EDD_All_Access_Software_Licensing
    {
        /**
         * Get things started
         *
         * @since  1.0.0
         * @return void
         */
        public function __construct()
        {
        }
        /**
         * Make sure we are at the minimum version of Software Licensing - which is 3.5.
         *
         * @since 1.0.0
         */
        public function edd_all_access_sl_too_old_notice()
        {
        }
        /**
         * Add "Sync with License expiration" as an expiration option for All Access.
         * Not that because "Sync with Recurring" was originally the only syncing option,
         * and because Syncing with recurring is a bad idea if the product is also licensed (due to early renewals in SL which cause out-of-sync dates)),
         * this setting will only be available if EDD Recurring is not enabled/activated.
         *
         * @since    1.1.0
         * @param    array $all_access_length_options Array of expiration options for All Access.
         * @return   array $all_access_length_options Array (modified) of expiration options for All Access
         */
        public function edd_all_access_add_sl_duration_option($all_access_length_options)
        {
        }
        /**
         * Add "Sync with License expiration" as an expiration option for All Access on the Customer Meta (Single All Access Pass Page).
         * Not that because "Sync with Recurring" was originally the only syncing option,
         * and because Syncing with recurring is a bad idea if the product is also licensed (due to early renewals in SL which cause out-of-sync dates)),
         * this setting will only be available if EDD Recurring is not enabled/activated. If EDD Recurring is enabled, it falls back to the license.
         *
         * @since    1.1.0
         * @param    array       $all_access_length_options Array of expiration options for All Access.
         * @param    EDD_Payment $payment The EDD Payment where the AA pass originated.
         * @param    int         $download_id The download ID where the AA pass originated.
         * @param    int         $price_id The variable price ID where the AA pass originated.
         * @return   array       $all_access_length_options Array (modified) of expiration options for All Access
         */
        public function edd_all_access_sl_duration_customer_options($all_access_length_options, $payment, $download_id, $price_id)
        {
        }
        /**
         * Software Licensing does not allow bundle activations to happen. In the case where a bundle-license is also an All Access product
         *
         * @since    1.0.2
         * @param    bool           $allow_bundle_activation Whether to allow bundles to be activated with a license.
         * @param    EDD_SL_License $license The license in question.
         * @return   bool           $allow_bundle_activation
         */
        public function allow_bundle_activations($allow_bundle_activation, $license)
        {
        }
        /**
         * When Software Licensing is checking if the passed-in title matches the title attached to the passed-in license in our Store,
         * Check if the license's product-title is an All Access product which includes the product trying to be accessed/downloaded. If it does, tell
         * Software Licensing the titles match up. In this way, we can "trick" Software Licensing into accepting a license other than one for the actual product.
         * In this case, it allows for a "master" license key to be used for products it isn't actually for (outside of the All Access extension).
         *
         * @since    1.0.0
         * @param    bool           $item_name_matches Whether the name of the item passed matches the name of the item on the license.
         * @param    int            $download_id The ID of the download in question.
         * @param    string         $item_name The name of the download in question.
         * @param    EDD_SL_License $license The license in question.
         * @return   bool   $item_name_matches
         */
        public function edd_all_access_sl_name_matches($item_name_matches, $download_id, $item_name, $license)
        {
        }
        /**
         * When Software Licensing is checking if the passed-in ID matches the ID attached to the passed-in license in our Store,
         * Check if the license's ID is an All Access product which includes the product trying to be accessed/downloaded. If it does, tell
         * Software Licensing the IDs match up. In this way, we can "trick" Software Licensing into accepting a license other than one for the actual product.
         * In this case, it allows for a "master" license key to be used for products it isn't actually for (outside of the All Access extension).
         *
         * @since    1.0.0
         * @param    bool   $license_match Whether the license matches the product it was submitted for.
         * @param    int    $download_id   The download ID passed.
         * @param    int    $license_download The license download.
         * @param    string $license_key The license key passed.
         * @return   bool   $license_match
         */
        public function edd_all_access_sl_id_matches($license_match, $download_id, $license_download, $license_key)
        {
        }
        /**
         * Tell Software Licensing if we should check for new version updates using the passed-in license or the passed-in name.
         * Because the All Access license isn't the product we are hoping to check for updates, we want to force Software Licensing to check using the name.
         *
         * @since    1.0.0
         * @param    bool $check_by_name_first Whether we should fetch update data using the passed-in name or using the passed-in license.
         * @return   bool $check_by_name_first We want to fetch update data using the passed-in name.
         */
        public function edd_all_access_sl_force_check_by_name($check_by_name_first)
        {
        }
        /**
         * If a license is attached to an All Access Pass, use the start time of the license instead of the start time of the All Access Pass
         *
         * @since    1.0.1
         * @param    int                 $all_access_start_time The start timestamp of the all access pass.
         * @param    EDD_Payment         $payment The EDD Payment where the AA pass originated.
         * @param    int                 $download_id The Download ID where the AA pass originated.
         * @param    int                 $price_id The variable price ID where the AA pass originated.
         * @param    EDD_All_Access_Pass $all_access_pass The AA pass in question.
         * @return   int
         */
        public function edd_all_access_sync_start_time_to_license_start_time($all_access_start_time, $payment, $download_id, $price_id, $all_access_pass)
        {
        }
        /**
         * If a license is attached to an All Access Pass, use the expiration time of the license instead of the expiration time of the All Access Pass
         *
         * @since    1.1.0
         * @param    int    $expiration_time - The timestamp this All Access Pass should expire.
         * @param    object $all_access_pass - The All Access Pass object.
         * @return   int    $expiration_time - The timestamp this All Access Pass should expire.
         */
        public function edd_all_access_sync_expiration_time_with_sl($expiration_time, $all_access_pass)
        {
        }
        /**
         * Check if an AA pass would expire based on the duration unit being "edd_software_licensing", meaning its set to "sync with license expiration".
         *
         * @since    1.1.0
         * @param    string              $would_be_end_time The would-be end time.
         * @param    bool                $would_be_duration_number The duration number that would be used in our would-be scenario.
         * @param    string              $would_be_duration_unit The duration unit (day/week/month/edd_software_licensing) that would be used in our would-be scenario.
         * @param    EDD_All_Access_Pass $all_access_pass The All Access Pass in question.
         * @return   string              $would_be_end_time The would-be end time adjusted for Software Licensing's license sync
         */
        public function check_if_pass_would_expire($would_be_end_time, $would_be_duration_number, $would_be_duration_unit, $all_access_pass)
        {
        }
        /**
         * Handle SL upgrades pt 1. Because edd_sl_license_upgraded fires before All Access passes get created, and we need the data from that hook,
         * to solve the race condition we have to store the data from the hook somewhere until after the All Access Pass is created.
         * We'll store the data as a global variable, and then use-it/clear-it in edd_all_access_check_updated_payment
         * which is where the All Access Pass gets created.
         *
         * @since    1.0.0
         * @param    string $license_id A timestamp of the time of upgrade payment.
         * @param    array  $args An array of settings relating to the upgrade.
         * @return   void
         */
        public function edd_all_access_store_sl_upgrade($license_id, $args)
        {
        }
        /**
         * Handle SL upgrades pt 2. This handles things like bronze -> silver -> gold upgrades
         * This fires directly after an all access activation takes place (possibly non-licensed, as Sl enables non licensed upgrades).
         * We use it here to update the All Access Pass customer meta
         * of both the old payment and the new payment.
         * The All Access Pass attached to the old_payment will get a flag letting it know it is an old/prior All Access Pass.
         * The All Access Pass attached to the new_payment will get an array containing all preliminary payments by taking them from the old All Access Pass.
         *
         * @since    1.0.0
         * @param    int $payment_id The payment id in question.
         * @param    int $download_id The download id in question.
         * @param    int $price_id The price ID in question.
         * @return   void
         */
        public function edd_all_access_handle_sl_upgrade($payment_id, $download_id, $price_id)
        {
        }
        /**
         * If an All Access Pass is being renewed and it is licensed, make sure the license is "renewed" in Software Licensing - as opposed to creating a new license.
         *
         * @since    1.0.0
         * @return   void
         */
        public function edd_all_access_sync_renewals()
        {
        }
        /**
         * Checks the license status of an otherwise valid pass.
         *
         * @since 1.2.5
         * @param EDD_All_Access_Pass $all_access_pass
         * @return void
         */
        public function check_license_status_for_valid_pass($all_access_pass)
        {
        }
        /**
         * Checks the license status of an All Access Pass to see if it is valid or not.
         *
         * @param string $status
         * @param EDD_All_Access_Pass $all_access_pass
         * @return string
         */
        public function check_license_status_for_pass_status($status, $all_access_pass)
        {
        }
    }
    /**
     * Integrates EDD All Access with the Marketify Theme - which acts much like a plugin.
     *
     * @since 1.0.0
     */
    class EDD_All_Access_Marketify
    {
        /**
         * Get things started
         *
         * @since  1.0.0
         * @return void
         */
        public function __construct()
        {
        }
        /**
         * Wait until the theme is loaded so we can see if Marketify exists or not.
         *
         * @since    1.0.0
         * @return   void
         */
        public function after_setup_theme()
        {
        }
        /**
         * Marketify completely changes the way that the purchase button is displayed by bringing up a pop-up modal when you click "Purchase".
         * We need to filter the text on that custom theme button to say "Download" if the user has access through All Access.
         *
         * @since    1.0.0
         * @param    string $button_text The text showing on the button.
         * @param    int    $download_id The download id in question.
         * @return   string
         */
        public function edd_all_access_marketify_purchase_button_text($button_text, $download_id)
        {
        }
    }
}
namespace EDD\AllAccess\Exceptions {
    class AccessException extends \Exception
    {
        /**
         * Failure reason ID. (For internal use.)
         *
         * @var string
         */
        protected $failureId;
        /**
         * The pass that triggered the error (if available).
         *
         * @var \EDD_All_Access_Pass|null
         */
        protected $pass;
        /**
         * Constructor.
         *
         * @param string                    $failureId Failure reason ID.
         * @param string                    $message   Failure message for display.
         * @param int                       $code      Error code.
         * @param null|\EDD_All_Access_Pass $pass      Pass that triggered the error, if available.
         * @param null|\Throwable           $previous  Previous exception.
         */
        public function __construct($failureId, $message = "", $code = 403, $pass = null, $previous = null)
        {
        }
        /**
         * Returns the failure ID.
         *
         * @since 1.2
         *
         * @return string
         */
        public function getFailureId()
        {
        }
        /**
         * Returns the pass that triggered the error.
         *
         * @since 1.2
         *
         * @return \EDD_All_Access_Pass|null
         */
        public function getPass()
        {
        }
    }
}
namespace EDD\AllAccess\Helpers {
    class DownloadAccessChecker
    {
        /**
         * @var \EDD_Customer Customer being checked.
         */
        public $customer;
        /**
         * @var int Product we're checking access to.
         */
        protected $download_id;
        /**
         * @var int|null Price ID to check.
         */
        protected $price_id;
        /**
         * @var bool Whether to check if the pass has exceeded its download limit. This should be set to `true`
         *           when seeing if the user is allowed to _download_ the particular product.
         */
        public $check_download_limit = false;
        /**
         * @var int|null Pass a download ID here if you want to check access _through_ a specific pass product
         *               ID. Otherwise, by default, we check if they have access via _any_ of their purchased
         *               passes.
         */
        public $aa_product_id = null;
        /**
         * Constructor.
         *
         * @since 1.2
         *
         * @param \EDD_Customer $customer
         * @param int           $download_id
         * @param int|null      $price_id
         */
        public function __construct(\EDD_Customer $customer, $download_id, $price_id = null)
        {
        }
        /**
         * Checks whether or not the customer has a pass that gives them access to
         * the specified download + price ID.
         *
         * If the customer does have access, the "winning" All Access Pass object
         * will be returned.
         *
         * If the customer does not have access, an AccessException will be thrown.
         *
         * @since 1.2
         *
         * @return \EDD_All_Access_Pass Pass that ultimately granted them access.
         * @throws AccessException
         */
        public function check()
        {
        }
    }
    /*
     * Integrates EDD All Access with the EDD Auto Register extension
     *
     * @since 1.0.0
     */
    class ObjectCacheHelper
    {
        /**
         * Get things started
         *
         * @since  1.0.0
         * @return void
         */
        public function __construct()
        {
        }
        /**
         * Get a pass from cache, or instantiate a new one and set the cache.
         *
         * @since 1.2.4.2
         *
         * @param int $payment_id  The Payment ID for the pass.
         * @param int $download_id The Download ID for the pass.
         * @param int $price_id    The Price ID of the pass.
         *
         * @return EDD_All_Access_Pass
         */
        public function get_pass($payment_id = 0, $download_id = 0, $price_id = 0)
        {
        }
        /**
         * Set the cache group persistence.
         *
         * @since 1.2.4.2
         */
        public function set_cache_group_persistence()
        {
        }
        /**
         * Clear pass cache when passes expire.
         *
         * @since 1.2.4.2
         *
         * @param EDD_All_Access_Pass $pass_object The pass object being expired.
         */
        public function clear_cache_on_pass_expired(\EDD_All_Access_Pass $pass_object)
        {
        }
        /**
         * Clear pass cache when passes are refreshed.
         *
         * @since 1.2.4.2
         *
         * @param EDD_All_Access_Pass $pass_object The pass object being refreshed.
         */
        public function clear_cache_on_pass_refresh(\EDD_All_Access_Pass $pass_object)
        {
        }
        /**
         * Clear pass cache when passes are activated
         *
         * @since 1.2.4.2
         *
         * @param int $payment_id  The Payment ID for the pass.
         * @param int $download_id The Download ID for the pass.
         * @param int $price_id    The Price ID of the pass.
         */
        public function clear_cache_on_pass_activation($payment_id = 0, $download_id = 0, $price_id = 0)
        {
        }
        /**
         * Clear pass cache when a pass status changes.
         *
         * @since 1.2.4.2
         *
         * @param EDD_All_Access_Pass $pass_object The pass object being refreshed.
         */
        public function clear_cache_on_pass_status_change(\EDD_All_Access_Pass $pass_object)
        {
        }
    }
}
namespace EDD\AllAccess\Models {
    class AllAccessProduct
    {
        /**
         * @var int ID of the product.
         */
        public $id;
        /**
         * @var int|null Duration of the pass.
         */
        public $duration = null;
        /**
         * @var string Duration unit.
         * @see edd_all_access_get_duration_unit_options()
         */
        public $duration_unit = 'never';
        /**
         * @var int Download limit. Will be `0` for unlimited.
         */
        public $download_limit = 0;
        /**
         * @var string Download limit period.
         * @see edd_all_access_get_download_limit_periods()
         */
        public $download_limit_period = 'per_day';
        /**
         * @var array|null ID of categories that this product gives access to.
         *                 If `null` then all categories are granted.
         */
        public $categories = null;
        /**
         * @var int Maximum number of price variations there are on a product.
         *          If `0` then price variations are not counted and
         *          `$included_price_ids` will be `null`.
         */
        public $number_price_ids = 0;
        /**
         * @var array|null Price IDs that this product gives access to.
         *                 If `null` then all price IDs are granted.
         */
        public $included_price_ids = null;
        /**
         * @var bool Whether to output a custom link in purchase receipts.
         */
        public $show_link_in_receipt = true;
        /**
         * @var string Message to use for the receipt link.
         */
        public $receipt_link_message;
        /**
         * @var string URL to use in the receipt.
         */
        public $receipt_link_url;
        /**
         * Constructor
         *
         * @param int $productId ID of the product.
         */
        public function __construct($productId)
        {
        }
    }
}
namespace {
    // Plugin version.
    // Plugin path.
    // Plugin URL.
    // Plugin Root File.
    // End if class_exists check
    /**
     * The main function responsible for returning the one true EDD_All_Access
     * instance to functions everywhere
     *
     * @since       1.0.0
     * @return      \EDD_All_Access The one true EDD_All_Access
     */
    function edd_all_access()
    {
    }
    /**
     * Admin notice used if EDD is not updated to 2.8 or later.
     *
     * @deprecated 1.2 In favour of ExtensionLoader class.
     *
     * @since       1.0.0
     */
    function edd_all_access_edd_too_old_notice()
    {
    }
    /**
     * Upon fresh activation, this function fires and prevents all previous upgrade routines from running as they are not needed on fresh installs.
     *
     * @since       1.0.0
     */
    function edd_all_access_install()
    {
    }
    /**
     * Render the All Access Pass Single View
     *
     * @access      public
     * @since       1.0.0
     * @return      void
     */
    function edd_all_access_pass_page()
    {
    }
    /**
     * All Access Pass Details
     * Outputs the subscriber details
     *
     * @param int $payment_id  The ID of the EDD payment where this All Access Pass was purchased.
     * @param int $download_id The ID of the product where this All Access Pass originated.
     * @param int $price_id    The ID of the price variation where this All Access Pass originated. Use 0 for a non variable priced product.
     * @since       1.0.0
     */
    function edd_all_access_display_pass_details($payment_id, $download_id, $price_id)
    {
    }
    /**
     * Handles saving/updating a single All Access Pass.
     *
     * @access      public
     * @since       1.0.0
     * @return      void
     */
    function edd_all_access_process_update()
    {
    }
    /**
     * Add the All Access Passes tab to the customer interface if the customer has All Access Passes
     *
     * @since  1.0.0
     *
     * @param array $tabs The tabs currently added to the customer view.
     *
     * @return array       Updated tabs array
     */
    function edd_all_access_customer_tab($tabs)
    {
    }
    /**
     * Register the All Access Passes view for the customer interface
     *
     * @since  1.0.0
     *
     * @param array $views The views currently added to the customer views.
     *
     * @return array       Updated tabs array
     */
    function edd_all_access_add_customer_view($views)
    {
    }
    /**
     * Display the All Access Passes area for the customer view
     *
     * @since  1.0.0
     *
     * @param object $customer The Customer being displayed.
     *
     * @return void
     */
    function edd_all_access_customer_view($customer)
    {
    }
    /**
     * EDD Discounts - add a multi-select chosen dropdown to the discount creation screen
     * which makes it possible to restrcit a dicount code to customs who have a specific, valid All Access Pass.
     *
     * @since       1.0.2
     * @return      void
     */
    function edd_all_access_discount_code_restrict_option_add()
    {
    }
    /**
     * EDD Discounts - add a multi-select chosen dropdown to the discount creation screen
     * which makes it possible to restrcit a dicount code to customs who have a specific, valid All Access Pass.
     *
     * @since       1.0.2
     * @param       int $discount_id The ID of the discount being created/edited.
     * @param       obj $discount The discount object.
     * @return      void
     */
    function edd_all_access_discount_code_restrict_option_edit($discount_id, $discount)
    {
    }
    /**
     * EDD Discounts - Save the All Access setting for discounts
     *
     * @since       1.0.2
     * @param       array $meta The default meat being saved.
     * @param       int   $discount_id The ID of the discount being saved.
     * @return      void
     */
    function edd_all_access_save_discount_code_setting($meta, $discount_id)
    {
    }
    /**
     * EDD Discounts - Save the All Access setting for discounts
     *
     * @since        1.0.2
     * @param bool   $is_valid      If the discount is valid or not.
     * @param int    $discount_id   Discount ID.
     * @param string $discount_code Discount code.
     * @param string $user          User info.
     */
    function edd_all_access_discount_is_valid($is_valid, $discount_id, $discount_code, $user)
    {
    }
    /**
     * Helper function to get the All Access discount metadata.
     *
     * @param int $discount_id
     * @return void
     */
    function edd_all_access_get_discount_meta($discount_id)
    {
    }
    /**
     * Add the All Access metabox to the product settings in wp-admin.
     *
     * @since       1.0.0
     * @return      void
     */
    function edd_all_access_add_meta_box()
    {
    }
    /**
     * Render the download information meta box
     *
     * @since       1.0.0
     * @return      void
     */
    function edd_all_access_render_all_access_meta_box()
    {
    }
    /**
     * Save data from the All Access metabox
     *
     * @access      public
     * @since       1.0.0
     * @param       string $post_id The ID of the post being saved.
     * @return      void
     */
    function edd_all_access_download_meta_box_save($post_id)
    {
    }
    /**
     * Register the All Access download type.
     *
     * @since  1.2.5
     * @param  array $types The existing download types.
     * @return array        The updated download types.
     */
    function edd_all_access_register_download_type($types)
    {
    }
    /**
     * Option to exclude this product from All Access
     *
     * @since     1.0.0
     * @param int $post_id The ID of the EDD Download being managed.
     * @return    void
     */
    function edd_all_access_excluded_product($post_id)
    {
    }
    /**
     * Save All Access data from the prices metabox
     *
     * @access      public
     * @since       1.0.0
     * @param       string $post_id The ID of the post being saved.
     * @return      void
     */
    function edd_all_access_price_meta_box_save($post_id)
    {
    }
    /**
     * Add "Exclude from All Access" to the variable pricing options
     *
     * @access      public
     * @since       1.0.4
     * @param       int   $download_id The ID of the EDD Product being managed.
     * @param       int   $price_id    The Variable Price ID being managed.
     * @param       array $args        Arguments for the variable price row passed in from the edd_download_price_option_row action hook.
     * @return      void
     */
    function edd_all_access_exclude_price_id_option($download_id, $price_id, $args)
    {
    }
    /**
     * Add a report to the dropdown in EDD's reports tab in EDD 2.9 and lower.
     *
     * @since       1.1.2
     * @param       array $views The available reports in EDD.
     * @return      array $views The modified list of available reports in EDD, with this report added.
     */
    function edd_all_access_most_popular_products_report_view($views)
    {
    }
    /**
     * Filter the product dropdown arguments to only show All Access Passes in the list.
     * This only runs when viewing the All Access report.
     *
     * @param array $query_args
     *
     * @since 1.1.5
     * @return array
     */
    function edd_all_access_filter_product_dropdown_for_report($query_args)
    {
    }
    /**
     * Registers reports with EDD 3.0+
     *
     * @param Report_Registry $reports
     *
     * @since 1.1.5
     * @return void
     */
    function edd_all_access_register_reports($reports)
    {
    }
    /**
     * Generate the output for the Popular Products report for All Access.
     *
     * @since       1.1.2
     */
    function edd_all_access_most_popular_products_report()
    {
    }
    /**
     * Add plugin section in extension settings
     *
     * @since  1.0.0
     * @param  array $sections The array of extension menu sections for edd.
     * @return array $sections The modified array of extension menu sections for edd
     */
    function edd_all_access_settings_menu($sections)
    {
    }
    /**
     * Add settings
     *
     * @since  1.0.0
     * @param  array $settings The existing EDD settings array.
     * @return array The modified EDD settings array.
     */
    function edd_all_access_settings($settings)
    {
    }
    /**
     * Add actual site-wide settings for EDD ALl Access.
     *
     * @since  1.0.0
     * @param  array $settings The existing EDD settings array.
     * @return array The modified EDD settings array
     */
    function edd_all_access_site_wide_settings($settings)
    {
    }
    /**
     * All Access Product Selector Callback
     *
     * Renders a "chosen" select field containing only All Access enabled products.
     *
     * @since 1.0.0
     * @param array $args Arguments passed by the setting.
     * @return void
     */
    function edd_all_access_all_product_dropdown_multiple_callback($args)
    {
    }
    /**
     * All Access Product Selector Callback
     *
     * Renders a "chosen" select field containing only All Access enabled products.
     *
     * @since 1.0.0
     * @param array $args Arguments passed by the setting.
     * @return void
     */
    function edd_all_access_product_dropdown_callback($args)
    {
    }
    /**
     * Renders an HTML Dropdown of all the Products (Downloads)
     *
     * @since 1.0.0
     * @param array $args Arguments for the dropdown.
     * @return string $output Product dropdown
     */
    function edd_all_access_product_dropdown($args = array())
    {
    }
    /**
     * Ajax callback for switching variable price IDs and putting the right download URL onto the "Download" button for All Access.
     *
     * @since    1.0.0
     * @return   void
     */
    function edd_all_access_update_download_url()
    {
    }
    /**
     * Process All Access Payments via ajax.
     *
     * There are 2 stages, or modes, which this function runs through.
     * The first stage is resetting all All Access Customer meta to be blank.
     * The second stage is re-creating/activating/deactivating each payment's All Access Passes.
     * The reason this is done is 2 stages, is because an All Access pass might be upgraded, renewed, or it could be fresh.
     * By deleting the customer meta first, and then, in stage 2, re-creating all of the AAPs for that customer from the beginning of time,
     * each All Access Pass will correctly use any prior passes to determine if it is a renewal or an upgrade, or if it is a fresh purchase.
     *
     * @since 1.0.0
     * @return void
     */
    function edd_all_access_do_ajax_process()
    {
    }
    /**
     * Check if a being-updated All Access would would be set to expire so we know whether to show the "Are you sure" popup.
     *
     * @since 1.0.0
     * @return void
     */
    function edd_all_access_expiration_check()
    {
    }
    /**
     * Check for any All Access Payments whose time period have passed and need to be expired.
     *
     * @since       1.0.0
     * @return      void
     */
    function edd_all_access_check_expired_periods()
    {
    }
    /**
     * When an All Access payment is freshly purchased, add it to the list of payments that need to be checked for expiration later.
     *
     * @since       1.0.0
     * @param       int         $payment_id The Payment ID being saved.
     * @param       EDD_Payment $payment    The Payment object being saved.
     * @todo deprecate when EDD minimum requirement is 3.0
     *
     * @return      void
     */
    function edd_all_access_check_updated_payment($payment_id, $payment)
    {
    }
    /**
     * When an order item transitions status, attempt to activate the related AA pass.
     *
     * @since 1.2
     * @param string $old_status
     * @param string $new_status
     * @param int    $order_id
     * @return void
     */
    function edd_all_access_maybe_activate_pass_on_order_item_transition($old_status, $new_status, $order_id)
    {
    }
    /**
     * When trashing an order in EDD 3.0, update the customer metadata as well.
     *
     * @param string $old_status The previous order status.
     * @param string $new_status The new order status.
     * @param int    $order_id   The order ID.
     * @return void
     */
    function edd_all_access_update_meta_on_trash($old_status, $new_status, $order_id)
    {
    }
    /**
     * When a payment status changes, check to see if any of it's purchased products should have All Access enabled or disabled.
     *
     * Note: Priority is set to 101 to ensure it triggers after the `edd_complete_purchase()` function in EDD 3.0.
     * That's the function that sets the payment `date_completed`, which is used in the AAP activation process.
     *
     * @see edd_complete_purchase()
     *
     * @since  1.0.0
     * @param  int    $payment_id The ID of the payment being saved.
     * @param  string $new_status The new status of the payment.
     * @param  string $old_status The old status of the payment.
     * @return mixed
     */
    function edd_all_access_check_updated_payment_on_status_change($payment_id, $new_status, $old_status)
    {
    }
    /**
     * Deletes the related All Access Pass(es) when a payment is deleted.
     *
     * @since 1.1.5
     * @param int $payment_id The ID of the payment being deleted.
     * @return void
     */
    function edd_all_access_delete_pass_by_payment($payment_id)
    {
    }
    /**
     * Once a day, check for any All Access Payments that may have expired.
     *
     * @since       1.0.0
     * @return      void
     */
    function edd_all_access_check_expired_periods_via_cron()
    {
    }
    /**
     * If edd_all_access_force_check_expirations is in the URL, do a check for expired payments.
     *
     * @since  1.0.0
     * @return void
     */
    function edd_all_access_check_expired_periods_via_url()
    {
    }
    /**
     * Override the download form for users logged-in with an active All Access pass.
     * This is where the "Buy Now" button is turned into a "Download Now" button.
     *
     * @since       1.0.0
     * @param       string $purchase_form The existing download form HTML.
     * @param       array  $args Arguments passed to the form.
     * @return      string $form The updated download form
     */
    function edd_all_access_download_form($purchase_form, $args)
    {
    }
    /**
     * Add the CSS class "edd_all_access_price_options" to the price option HTML if this product can be downloaded using an All Access pass by this user.
     *
     * @since    1.0.0
     * @param    array $price_options_classes The array of all class names that will be output on the edd-price-options div.
     * @param    int   $download_id The id of the product that is being output..
     * @return   array $price_options_classes The array of all class names that will be output on the edd-price-options div.
     */
    function edd_all_access_price_options_classes($price_options_classes, $download_id)
    {
    }
    /**
     * If this product can be downloaded using All Access, override the multi price mode to be OFF.
     * Multi Price mode needs to be off for All Access because you can only download 1 file at a time.
     * It won't zip multiple price options together for a single download. This likely will never become supported because tokenization wouldn't be supported.
     *
     * @since       1.0.0
     * @param       string $is_multi_enabled This will be "on" if true and empty if false.
     * @param       int    $download_id the ID of the download in question.
     * @return      bool true if multi price mode should be enabled and false if not.
     */
    function edd_all_access_override_multi_price_mode($is_multi_enabled, $download_id)
    {
    }
    /**
     * When viewing a product with an All Access pass, if quantities are enabled, disable them here.
     * People don't need to download multiple copies of the same file at once.
     *
     * @since       1.0.0
     * @param       string $quantity_input The html for the quantities input field.
     * @param       int    $download_id The ID of the download in question.
     * @param       array  $args Arguements.
     * @return      string $quantity_input an empty string since we do not want the quantities field
     */
    function edd_all_access_disable_quantities($quantity_input, $download_id, $args)
    {
    }
    /**
     * Hide the price amount when showing variable prices to All Access customers.
     * For example, this will hide the "$1.00" on variable prices.
     *
     * @since   1.0.3
     * @param   string $price_output   The HTML output of the variable price.
     * @param   int    $download_id    The ID of the download being viewed.
     * @param   int    $price_id       The key of this variable price in the array of variable prices for this product.
     * @param   array  $price          The array of data about this price.
     * @param   string $form_id        The HTML ID of the form containing these variable prices.
     * @param   string $item_prop      The HTML item prop attribute.
     * @return  string $price_output   The filtered/modified HTML output of the variable price.
     */
    function edd_all_access_remove_price_amounts($price_output, $download_id, $price_id, $price, $form_id, $item_prop)
    {
    }
    /**
     * Should we hide non relevant variable prices from customers with All Access?
     * For example, this is useful if you want to hide "Small" and "Medium" price options from customers who have access to the "Large" version.
     *
     * @since       1.0.2
     * @param       array $variable_prices The array of variable prices that would be shown in the download form.
     * @param       array $download_id The ID of the product being viewed.
     * @return      array $variable_prices The modified array of variable prices that will be shown in the download form.
     */
    function edd_all_access_hide_non_relevant_prices($variable_prices, $download_id)
    {
    }
    /**
     * Modify the default price ID to be the first one that the customer has All Access to. This is in a scenario where the first variable price is not included in All Access.
     *
     * @since  1.0.3
     * @param  int $price_id    The default Price ID to select.
     * @param  int $download_id The ID of the download being viewed or in question.
     * @return int $price_id ID The default Price ID to select
     */
    function edd_all_access_modify_default_price_id($price_id, $download_id)
    {
    }
    /**
     * This function is a modified version of the "edd_purchase_variable_pricing" function in EDD Core.
     *
     * It outputs the files available to download beneath each variable price so that All Access members can pick which file they want.
     *
     * @since 1.0.9
     * @param  int   $download_id Download ID.
     * @param  array $args The arguments which control how the download links are displayed.
     * @param  bool  $hide_non_relevant_prices Whether to hide or show prices which the AA Pass does not cover.
     * @return array An array containing the output and the file id to put on the "Download Now" button.
     */
    function edd_all_access_download_links($download_id, $args, $hide_non_relevant_prices)
    {
    }
    /**
     * This function adds the css class "edd_aa_single_file_per_price" to the selector area in the purchase form.
     *
     * @since 1.0.9
     * @param  array $css_classes The classes already being added to the selector area in the purchase form.
     * @return array $css_classes
     */
    function edd_all_access_single_file_per_price_css_class($css_classes)
    {
    }
    /**
     * This function removes the variable price options for a download
     * and then adds the action hook back for the next download in the loop.
     *
     * @since 1.2.4
     * @return void
     */
    function edd_all_access_remove_variable_pricing()
    {
    }
    /**
     * Used to deliver a download to a user without revealing the actual URL.
     *
     * @since    1.0.0
     * @return   void
     */
    function edd_all_access_convert_site_to_download()
    {
    }
    /**
     * After a download is completed by a customer using an All Access pass, add some meta to the log letting it know which All Access download was used.
     *
     * @since    1.0.0
     * @param    string      $requested_file The file being downloaded.
     * @param    array       $download The files attached to the product in question.
     * @param    string      $email The email address of the user downloading the file.
     * @param    EDD_Payment $payment The EDD_Payment object being used to download the file.
     * @return   array $download_args The args being set in the edd_process_download function.
     */
    function edd_all_access_add_download_id_to_file_log($requested_file, $download, $email, $payment)
    {
    }
    /**
     * When a customer is downloading a product, add the payment ID containing this All Access pass to the download args.
     * This is hooked to edd_process_download_args when a download using All Access is actually taking place.
     *
     * @since    1.0.0
     * @param    array $download_args The args being set in the edd_process_download function.
     * @return   array $download_args The args being set in the edd_process_download function.
     */
    function edd_all_access_add_payment_to_download_args($download_args)
    {
    }
    /**
     * Set the allowed token paramaters to include the edd-all-access-download URL paramater
     * This is hooked to edd_url_token_allowed_params when an All Access download is taking place.
     *
     * @since    1.0.0
     * @param    array $token_params The args being set in the edd_process_download function.
     * @return   array $token_params The args being set in the edd_process_download function.
     */
    function edd_all_access_url_tokens_add_params($token_params)
    {
    }
    /**
     * Get the file download logs for an order ID, grouped by the product ID and file id.
     *
     * @since 1.2.2
     * @param EDD_All_Access_Pass $all_access_pass The All Access Pass to collect unique logs for.
     *
     * @return array The array of unique product/file_ids downloaded by this pass.
     */
    function edd_all_access_get_unique_file_downloads($all_access_pass)
    {
    }
    /**
     * Given a pass, download, and file_id, determine if this pass has downloaded this file before.
     *
     * @since 1.2.2
     * @param EDD_All_Access_Pass $all_access_pass  The pass to use for these checks.
     * @param int                 $download         The Download ID to check for logs against.
     * @param int                 $file_id          The File ID being downloaded.
     *
     * @return bool If this pass has downloaded this file before.
     */
    function edd_all_access_pass_has_downloaded_file($all_access_pass, $download, $file_id)
    {
    }
    /**
     * Load admin scripts
     *
     * @since       1.0.0
     * @return      void
     */
    function edd_all_access_admin_post_meta_scripts()
    {
    }
    /**
     * Load frontend scripts
     *
     * @since       1.0.0
     * @return      void
     */
    function edd_all_access_scripts()
    {
    }
    /**
     * Check if a user has access to a specific EDD Download through an "All Access" purchase.
     * All we need to know for this function is which product/price-variation is being downloaded.
     * From there we can detect the user based on whether they are logged in.
     *
     * Note: in a case where a user has purchased multiple All Access passes, the first one that qualifies will be returned.
     *
     * @since    1.0.0
     * @param    array $args Array of options that determine the return.
     * @return   array - Array of success or failure messages depending on access.
     */
    function edd_all_access_check($args = array())
    {
    }
    /**
     * Get an array of product/download ids which are "All Access" enabled.
     *
     * @since    1.0.0
     * @since    1.2.1 Added the $force_lookup parameter to allow using the function to force a refresh.
     *
     * @param bool $force_lookup If the function should force possibly refreshing the array of product IDs.
     *
     * @return   array - The post ids of all "All Access" posts
     */
    function edd_all_access_get_all_access_downloads($force_lookup = \false)
    {
    }
    /**
     * Check if a download is an All Access enabled product.
     *
     * @since    1.0.0
     * @param    int $download_id The id of the product being checked.
     * @param    int $price_id The price id of the product being checked.
     * @return   int $download_id The id of the product being checked
     */
    function edd_all_access_download_is_all_access($download_id, $price_id = 0)
    {
    }
    /**
     * Check if an All Access pass (if theoretically purchased and active) would have access to an EDD Download. This is not dependant on any user or payment.
     *
     * @since    1.0.0
     * @param    array $args Array of options that determine the return.
     * @return   array This array contains either a success or failure message why it failed.
     */
    function edd_all_access_includes_download($args = array())
    {
    }
    /**
     * Get the URL used to download products using an All Access pass.
     *
     * @since    1.0.0
     * @param    int $download_id The post ID of the product being downloaded.
     * @param    int $price_id The price ID product being downloaded.
     * @param    int $file_id The ID of the file being downloaded.
     * @return   string - The URL used to downlodad the file via All Access
     */
    function edd_all_access_product_download_url($download_id, $price_id = 0, $file_id = 0)
    {
    }
    /**
     * Get the status label of an All Access pass.
     *
     * @since    1.0.0
     * @param    string $status The status of the All Access Pass.
     * @return   string "Active" if still active. 'Expired' if expired. 'Invalid' if invalid.
     */
    function edd_all_access_get_status_label($status)
    {
    }
    /**
     * Get the PHP acceptable time string for the download limit time period (Downloads per X).
     *
     * @since    1.0.0
     * @param    string $download_limit_time_period The saved meta for the download limit time period.
     * @param    bool   $allow_translations Whether to wrap the return value in a localization function, or force english.
     * @return   string The PHP str_to_time acceptable word equivalent.
     */
    function edd_all_access_download_limit_time_period_to_string($download_limit_time_period, $allow_translations = \true)
    {
    }
    /**
     * Turn $download_limit per $time_period into a human-readable string like "5 Downloads per Day".
     *
     * @since    1.0.0
     * @param    EDD_All_Access_Pass $all_access_pass An All Access Pass object.
     * @return   string - Easy to read string representing the download limit for an All Access Pass.
     */
    function edd_all_access_download_limit_string($all_access_pass)
    {
    }
    /**
     * Get the string for an All Access Pass's duration. For example, if you want to show "1 year" when referring to the length of an All Access Pass.
     *
     * @since    1.0.0
     * @param    EDD_All_Access_Pass $all_access_pass An All Access Pass object.
     * @return   string - Easy to read string representing the duration for an All Access Pass.
     */
    function edd_all_access_duration_string($all_access_pass)
    {
    }
    /**
     * Get the number of time periods that have passed since the original purchase.
     * For example, if the download limit is 1 download per day, here we find the number of days since the payment took place.
     * If the download limit is 1 download per year, here we find the number of years since the payment took place.
     *
     * @since    1.0.0
     * @param    EDD_All_Access_Pass $all_access_pass An All Access Pass object.
     * @return   int - The number of download-limit-time-periods that have passed since the original payment.
     */
    function edd_all_access_get_download_limit_time_periods_since_payment($all_access_pass)
    {
    }
    /**
     * Get the period in which the downloads-used count was last reset to 0.
     * For example, if all access was just purchased and it allows 1 download per month, the last reset period is 0 - because it was never reset.
     * If 5 months have passed but the downloads-used count was last reset to 0 in month 1, the period returned here is 1.
     *
     * @since    1.0.0
     * @param    EDD_All_Access_Pass $all_access_pass An All Access Pass object.
     * @return   int - The time period in which the downloads-used counter was last reset to 0.
     */
    function edd_all_access_get_download_limit_last_reset_period($all_access_pass)
    {
    }
    /**
     * Get the timestamp of when the previous period ended.
     * For example, if we are allowed 1 download per week and it's been 5 weeks since purchase, get the timestamp for the end of week 4.
     *
     * @since    1.0.0
     * @param    EDD_All_Access_Pass $all_access_pass An All Access Pass object.
     * @return   int - The timestamp for when the previous period ended.
     */
    function edd_all_access_get_current_period_start_timestamp($all_access_pass)
    {
    }
    /**
     * Check if a specific customer has a valid, specific All Access Pass.
     *
     * @since    1.0.0
     * @param int    $user_id The ID of the user.
     * @param int    $download_id The ID of the All Access product.
     * @param int    $price_id The price_id (price variation) of the All Access product.
     * @param string $required_pass_status The status of the pass we want to check if the user has.
     * @return EDD_All_Access_Pass|false The All Access Pass if it exists or false if not.
     */
    function edd_all_access_user_has_pass($user_id, $download_id, $price_id = 0, $required_pass_status = 'active')
    {
    }
    /**
     * By passing an All Access Pass object, check if a, higher, upgraded-to version of that All Access Pass is active for the customer.
     *
     * @since    1.0.0
     * @param    EDD_All_Access_Pass $prior_all_access_pass The All Access Pass Object to check.
     * @return   bool
     */
    function edd_all_access_user_has_upgrade_of_prior_pass($prior_all_access_pass)
    {
    }
    /**
     * This function will return different HTML depending on the current state of the viewer.
     * If logged out it will return HTML containing a Buy Button for an All Access Pass and a Login Form below it.
     * If logged in without an active All Access Pass, it will output a Buy Button only.
     * If logged in with a valid All Access Pass, it will simply return false, as no output is needed.
     *
     * @since       1.0.0
     * @param       array $atts The args for the output.
     * @return      mixed String or Boolean. See description above.
     */
    function edd_all_access_buy_or_login_form($atts)
    {
    }
    /**
     * Hook to footer to output login form in a modal popup box in the footer
     *
     * @since       1.0.0
     * @return      void
     */
    function edd_all_access_output_login_modal()
    {
    }
    /**
     * This function retrieves which variable prices are "relevant" to an All Access pass.
     * That is, which variable prices does the customer have access to because of their All Access pass?
     *
     * @since       1.0.10
     * @param       int $download_id The ID of the downloading being checked.
     * @return      array/boolean $relevant_variable_prices
     */
    function edd_all_access_get_relevant_prices($download_id)
    {
    }
    /**
     * This function returns whether all of the variable prices have a single file attached per price (true), or if any have more than 1 (false.
     *
     * @since       1.0.10
     * @param       int $download_id The ID of the downloading being checked.
     * @return      boolean
     */
    function edd_all_access_single_file_per_price($download_id)
    {
    }
    /**
     * This function returns the first available file ID linked to a price variation for a product
     *
     * @since       1.1
     * @param       int $download_id The ID of the downloading being checked.
     * @param       int $price_id The price ID of the downloading being checked.
     * @return      int
     */
    function edd_all_access_get_first_file_id_for_price($download_id, $price_id)
    {
    }
    /**
     * This function will take a UTC timestamp, convert it to the timezone of the WP store, and output it in the PHP date format provided.
     *
     * @since       1.1
     * @param       string $format The PHP date format to show the date in.
     * @param       string $timestamp The UTC timestamp being converted to the WP Timezone for output to the screen.
     * @return      string
     */
    function edd_all_access_visible_date($format, $timestamp)
    {
    }
    /**
     * This function will take a time in the WordPress timezone and convert it to a UTC time. This is useful
     * for times generated by javascript which are being passed to ajax, so that you can do math on the dates in UTC.
     *
     * @since       1.1
     * @param       string $wp_timestamp The WP timestamp being converted to the UTC Timezone.
     * @return      string
     */
    function edd_all_access_wp_timestamp_to_utc_timestamp($wp_timestamp)
    {
    }
    /**
     * Get the timestamp of when an All Access Pass was purchased in UTC
     *
     * @since       1.1
     * @param       EDD_All_Access_Pass $all_access_pass The All Access pass in question.
     * @return      int
     */
    function edd_all_access_get_aap_purchase_timestamp($all_access_pass)
    {
    }
    /**
     * Get the timestamp of when a payment or order in UTC
     *
     * @since       1.1
     * @param       EDD_Payment $payment_object The EDD_Payment object we are getting the UTC timestamp for.
     * @return      int
     */
    function edd_all_access_get_payment_utc_timestamp($payment_object)
    {
    }
    /**
     * Retrieves the payment statuses that count as "valid" for All Access.
     *
     * @since 1.2
     *
     * @return array
     */
    function edd_all_access_valid_order_statuses()
    {
    }
    /**
     * Returns the available duration unit options.
     *
     * @since 1.2
     *
     * @return array
     */
    function edd_all_access_get_duration_unit_options()
    {
    }
    /**
     * Returns the available download limit time periods.
     *
     * @since 1.2
     *
     * @return array
     */
    function edd_all_access_get_download_limit_periods()
    {
    }
    /**
     * Gets the customer's All Access Passes.
     *
     * @since 1.2
     * @param \EDD_Customer $customer
     * @return array
     */
    function edd_all_access_get_customer_passes(\EDD_Customer $customer)
    {
    }
    /**
     * Gets the pass objects for a specific customer.
     *
     * @since 1.1.11
     * @param \EDD_Customer $customer  The EDD Customer object.
     * @return array
     */
    function edd_all_access_get_customer_pass_objects(\EDD_Customer $customer)
    {
    }
    /**
     * Instantiates and activates a pass.
     *
     * @since 1.2
     * @param int      $order_id   The order/payment ID.
     * @param int      $product_id The download/product ID.
     * @param null|int $price_id   The purchased price ID.
     * @return mixed
     */
    function edd_all_access_get_and_activate_pass($order_id, $product_id, $price_id)
    {
    }
    /**
     * Returns if redownloads are enabled.
     *
     * @since 1.2.2
     * return bool
     */
    function edd_all_access_allow_redownload()
    {
    }
    /**
     * Helper function to get a pass based on payment id, download id, and price id.
     *
     * @since 1.2.4.2 - Replaces the oddly named function EDD_All_Access_Pass that is the same as the main class.
     *
     * @param    int $payment_id The ID of the payment attached to the All Access Pass.
     * @param    int $download_id The ID of the download attached to the All Access Pass.
     * @param    int $price_id The ID of the price attached to the All Access Pass.
     *
     * @return   object - an EDD_All_Access_Pass object
     */
    function edd_all_access_get_pass($payment_id = 0, $download_id = 0, $price_id = 0)
    {
    }
    /**
     * This function is useful for situations like an archive page where you might instatiate the same All Access Pass object many times in a single page load.
     * It caches the object into a global variable and uses that, rather than completely running the instantiation each time.
     * This name remains in Camel Case format to support backwards compatible calls.
     *
     * @since    1.0.0
     * @since    1.2.4.2 - Moved to the helper-functions.php and is now just a pass through.
     *
     * @param    int $payment_id The ID of the payment attached to the All Access Pass.
     * @param    int $download_id The ID of the download attached to the All Access Pass.
     * @param    int $price_id The ID of the price attached to the All Access Pass.
     * @return   object - an EDD_All_Access_Pass object
     */
    function EDD_All_Access_Pass($payment_id = 0, $download_id = 0, $price_id = 0)
    {
    }
    /**
     * Helper function to check if All Access is enabled for a download.
     *
     * @since 1.2.5
     * @param int $download_id
     * @return bool
     */
    function edd_all_access_enabled_for_download($download_id)
    {
    }
    /**
     * If a customer is looking at the purchase button for an All Access Product that they have an active All Access Pass for,
     * change the word on the button from "Purchase" to "Renew".
     *
     * @since       1.0.0
     * @param       array $args The values relating to displaying the Purchase Button.
     * @return      array $args The values relating to displaying the Purchase Button
     */
    function edd_all_access_modify_renew_btn_text($args)
    {
    }
    /**
     * Prevent bad purchases of All Access.
     * Make sure the user is logged in and has an account.
     * Also prevent an prior (prior-to-upgraded) All Access Pass from being purchased while the upgrade is still active.
     * This prevents errors relating to upgrades since it would overwrite the is_prior_of value.
     *
     * @since       1.0.0
     * @param       array $user The user in question, as passed from the edd_checkout_user_error_checks filter.
     * @param       array $valid_data The data in question, as passed from the edd_checkout_user_error_checks filter.
     * @param       array $post The post in question, as passed from the edd_checkout_user_error_checks filter.
     * @return      void
     */
    function edd_all_access_prevent_bad_purchases($user, $valid_data, $post)
    {
    }
    /**
     * Automatically remove deuplciate All Access products from the cart
     *
     * This has been superceded by `edd_all_access_maybe_prevent_add_to_cart()` and may no
     * longer be needed. It's still in place for now as a fallback.
     * @see edd_all_access_maybe_prevent_add_to_cart()
     *
     * @since       1.0.0
     * @param       array $cart The array of items in the cart.
     * @return      array $cart The array of items in the cart
     */
    function edd_all_access_auto_remove_duplicates($cart)
    {
    }
    /**
     * Prevents duplicate All Access Passes from being added to the cart.
     * This is a replacement for `edd_all_access_auto_remove_duplicates()`, which de-dupes
     * after the fact.
     *
     * @since 1.1.6
     *
     * @param array $item
     *
     * @return array|false
     */
    function edd_all_access_maybe_prevent_add_to_cart($item)
    {
    }
    /**
     * Modify the purchase form (Add To Cart) to append the Buy/Login form for All Access.
     * The default here is to make no change to the normal purchase form but if set in the settings, the output will change.
     *
     * @since       1.0.0
     * @param       string $purchase_form The existing download form.
     * @param       array  $args Arguments passed to the form.
     * @return      string $form The updated download form
     */
    function edd_all_access_modify_purchase_form($purchase_form, $args)
    {
    }
    /**
     * When modifying the purchase form, the priority matters a lot because EDD Free Downloads can make free products
     * downloadable, even if the AA settings should override it. If AA is set to "aa-only" mode, the priority
     * needs to be higher, so that it is used last, instead of Free Downloads.
     *
     * @since       1.1.0
     * @return      void
     */
    function edd_all_access_set_priority_of_purchase_form_modifier()
    {
    }
    /**
     * Exclude Bundles From All Access. Bundles aren't "real" products with actual downloadable files. Only products WITHIN bundles are.
     *
     * @since       1.0.0
     * @param       bool   $allowed Whether to allow All Access to change the download form for this product or not.
     * @param       string $purchase_form The actual form output which is being filtered.
     * @param       array  $args The arguments passed to the edd_purchase_download_form filter.
     * @param       int    $download_id The ID of the product in question..
     * @param       int    $price_id The price ID of the product in question.
     * @return      bool $allowed Whether to allow All Access to change the download form for this product or not.
     */
    function edd_all_access_exclude_bundles($allowed, $purchase_form, $args, $download_id, $price_id)
    {
    }
    /**
     * Add an informational box for All Access to the View Order Details screen.
     *
     * @since       1.0.0
     * @param       int $payment_id The ID of the Payment being viewed.
     * @return      void
     */
    function edd_all_access_view_order_details_sidebar($payment_id)
    {
    }
    /**
     * Because of a bug, when using the retroactive All Access Passes tool we'll do a check to make sure
     * all data that should exist does exist prior to attempting an activation.
     * Otherwise, it's possible that the activation gets falsely triggered as a renewal. See issue #152 on GitHub for more.
     *
     * @since       1.0.7
     * @param       EDD_All_Access_Pass $all_access_pass The All Access Pass in question.
     * @param       int                 $payment_id The ID of the payment in question.
     * @param       int                 $download_id The ID of the download/product in question.
     * @param       int                 $price_id The ID of the variable price in question.
     * @return      void
     */
    function all_access_issue_152_check($all_access_pass, $payment_id, $download_id, $price_id = 0)
    {
    }
    /**
     * Marks a function as deprecated and informs when it has been used.
     *
     * There is a hook edd_all_access_deprecated_function_run that will be called that can be used
     * to get the backtrace up to what file and function called the deprecated
     * function.
     *
     * The current behavior is to trigger a user error if WP_DEBUG is true.
     *
     * This function is to be used in every function that is deprecated.
     *
     * @uses do_action() Calls 'edd_all_access_deprecated_function_run' and passes the function name, what to use instead,
     *   and the version the function was deprecated in.
     * @uses apply_filters() Calls 'edd_deprecated_function_trigger_error' and expects boolean value of true to do
     *   trigger or false to not trigger error.
     *
     * @param string $function    The function that was called.
     * @param string $version     The version of Easy Digital Downloads that deprecated the function.
     * @param string $replacement Optional. The function that should have been called.
     * @param array  $backtrace   Optional. Contains stack backtrace of deprecated function.
     */
    function _edd_all_access_deprecated_function($function, $version, $replacement = \null, $backtrace = \null)
    {
    }
    /**
     * If the payment used to create this All Access Pass was an upgrade payment through Software Licensing,
     * check to see if the upgraded-from payment was All Access enabled. If not, we need to manually adjust the
     * start time of this AA pass to match the start time of the upgraded-from payment.
     * Note that only non-AA to AA upgrades are affected here, as AA to AA upgrades are handled correctly
     *
     * @since  1.1
     * @param  EDD_All_Access_Pass $all_access_pass The All Access Pass in question.
     * @param  EDD_Payment         $payment The EDD Payment in question.
     * @param  int                 $download_id The id of the product in question.
     * @param  int                 $price_id The id of the variable price in question.
     * @return array
     */
    function all_access_issue_229_check($all_access_pass, $payment, $download_id, $price_id)
    {
    }
    /**
     * This function makes it easy to allow the CSS property "display" in wp_kses.
     *
     * @since  1.1.2
     * @param  array $styles The allowed styles in wp_kses.
     * @return array
     */
    function edd_all_access_allow_css_display_in_wp_kses($styles)
    {
    }
    /**
     * This function makes it easy show specific tags required for the All Access download form.
     *
     * @since  1.1.2
     * @param  array $styles The allowed styles in wp_kses.
     * @return array
     */
    function edd_all_access_kses_for_download_form($allowedposttags, $context)
    {
    }
    /**
     * Modifies the download type to be "all_access" if the download is enabled for All Access.
     *
     * @since 1.2.5
     * @param string $type
     * @param int    $download_id
     * @return string
     */
    function edd_all_access_update_download_type($type, $download_id)
    {
    }
    /**
     * Adds a debug log entry when the _edd_all_access_enabled meta key is requested directly.
     *
     * @since 1.2.5
     * @param null  $value
     * @param int   $object_id
     * @param string $meta_key
     * @param bool  $single
     * @return null
     */
    function edd_all_access_get_post_metadata($value, $object_id, $meta_key, $single)
    {
    }
    /**
     * If no files are attached, remove any related output about that for All Access Products in the receipt.
     *
     * @since       1.0.0
     * @param       bool   $show_download_files Whether to show the downloadable files area on the Purchase Confirmation page.
     * @param       int    $item_id  The ID of the product purchased.
     * @param       array  $receipt_args  Receipt args from the product purchased.
     * @param       object $item EDD Cart item object.
     * @return      bool $show_download_files Whether to show the downloadable files area on the Purchase Confirmation page.
     */
    function edd_all_access_receipt_show_download_files($show_download_files, $item_id, $receipt_args, $item)
    {
    }
    /**
     * For email receipts, remove the "No Downloads Found" message for All Access products.
     *
     * @since       1.0.0
     * @param       string $message  The message to be shown.
     * @param       int    $download_id  The id of the product in question.
     * @param       int    $price_id The id of the variable price in question.
     * @param       int    $payment_id The cart object from the payment used to purchase this.
     * @return      string
     */
    function edd_all_access_remove_no_downloads_message($message, $download_id, $price_id, $payment_id)
    {
    }
    /**
     * Show a link in the purchase notes to start using All Access. This affects both receipts and purchase history pages.
     *
     * @since       1.0.0
     * @param       string $notes The notes for this product.
     * @param       int    $download_id  The ID of the product purchased.
     * @return      string
     */
    function edd_all_access_add_receipt_link($notes, $download_id)
    {
    }
    /**
     * Display the Backfill All Access Pass Tool
     *
     * @since       1.0.0
     * @return      void
     */
    function edd_all_access_process_payments_tool_display()
    {
    }
    /**
     * Display the Regenerate All Access Pass Tool on the Customer "Tools" page
     *
     * @since   1.0.13
     * @param   EDD_Customer $customer The EDD customer object for the customer being shown.
     * @return  void
     */
    function edd_all_access_customer_tools($customer)
    {
    }
    /**
     * Add the "page" which WordPress will use to handle the upgrades routines.
     *
     * @since       1.0.0
     * @return      void
     */
    function edd_all_access_register_upgrades_page()
    {
    }
    /**
     * This function controls what is shown on the upgrades page for All Access
     *
     * @since       1.0.0
     * @return      void
     */
    function edd_all_access_upgrades_screen()
    {
    }
    /**
     * Triggers all upgrade functions
     *
     * @since       1.0.0
     * @return      void
     */
    function edd_all_access_show_upgrade_notice()
    {
    }
    /**
     * Upgrade function which fixes pre-initial release data (bet testers), where the AAP key was only the download_id.
     * Now it uses the download_id + the price_id, even if that id is 0. This allows variably priced AAP products.
     *
     * @since 1.0
     * @return void
     */
    function edd_all_access_v1_upgrades_callback()
    {
    }
    /**
     * Upgrade function which resets all timestamps saved in relation to All Access. Originally, timestamps were converted the the timezone
     * of the WordPress store before being saved. This is not a good idea. Timestamps should always be saved in UTC. The only place they should
     * be converted to the WordPress timezone is upon display. This way, the timezone of the WP can be changed as often as needed, without the times
     * being thrown off. For more see https://github.com/easydigitaldownloads/edd-all-access/issues/210
     *
     * @since 1.0
     * @return void
     */
    function edd_aa_fix_utc_timezones_callback()
    {
    }
    /**
     * View All Access Data about a single Commission
     *
     * @since  3.5
     * @param  EDD_Commission $commission The commission object being displayed.
     * @return void
     */
    function edd_all_access_commissions_single_view($commission)
    {
    }
    /**
     * Software Licensing does not allow bundle activations to happen. In the case where a bundle-license is also an All Access product
     *
     * @since    1.1
     * @param    EDD_All_Access_Pass $all_access_pass The All Access pass in question.
     * @return   mixed                Returns false of no license found. An EDD_License object if one is found.
     */
    function edd_all_access_software_licensing_get_license_from_aa_pass($all_access_pass)
    {
    }
}