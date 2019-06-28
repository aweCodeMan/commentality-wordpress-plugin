<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       https://danesjenovdan.si/en/
 * @since      1.0.0
 *
 * @package    Commentality
 * @subpackage Commentality/public
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the public-facing stylesheet and JavaScript.
 *
 * @package    Commentality
 * @subpackage Commentality/public
 * @author     Today is a new day <vsi@danesjenovdan.si>
 */
class Commentality_Public {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $plugin_name       The name of the plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Commentality_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Commentality_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/commentality-public.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Commentality_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Commentality_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/commentality-public.js', array( 'jquery' ), $this->version, false );

	}

    public function add_shortcode(){
        add_shortcode('commentality', function ($attributes){
            if($attributes['id']){
                $url = "https://frontmentality.djnd.si/embed.html#id={$attributes['id']}";
                echo "<iframe id='commentality' width='100%' height='1000' src='{$url}' frameborder='0' class='commentality'></iframe>";
            }
       });
	}
}
