<?php

namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Elementor Product Categories List.
 *
 * Elementor widget that inserts an embbedable content into the page, from any given URL.
 *
 * @since 1.0.0
 */
class Electro_Elementor_Products_One_Two_Block extends Widget_Base {

    /**
     * Get widget name.
     *
     * Retrieve Products 1-2 Block widget name.
     *
     * @since 1.0.0
     * @access public
     *
     * @return string Widget name.
     */
    public function get_name() {
        return 'electro_elementor_products_1_2_block';
    }

    /**
     * Get widget title.
     *
     * Retrieve Products 1-2 Block widget title.
     *
     * @since 1.0.0
     * @access public
     *
     * @return string Widget title.
     */
    public function get_title() {
        return esc_html__( 'Products 1-2 Block', 'electro-extensions' );
    }

    /**
     * Get widget icon.
     *
     * Retrieve Products 1-2 Block widget icon.
     *
     * @since 1.0.0
     * @access public
     *
     * @return string Widget icon.
     */
    public function get_icon() {
        return 'eicon-products';
    }

    /**
     * Get widget categories.
     *
     * Retrieve the list of categories the Ad Block widget belongs to.
     *
     * @since 1.0.0
     * @access public
     *
     * @return array Widget categories.
     */
    public function get_categories() {
        return [ 'electro-elements' ];
    }

    /**
     * Register Products 1-2 Block widget controls.
     *
     * Adds different input fields to allow the user to change and customize the widget settings.
     *
     * @since 1.0.0
     * @access protected
     */
    protected function register_controls() {

        $this->start_controls_section(
            'content_section',
            [
                'label' => esc_html__( 'Content', 'electro-extensions' ),
                'tab'   => Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'title',
            [
                'label' => esc_html__( 'Enter Title', 'electro-extensions' ),
                'type'  => Controls_Manager::TEXT,
            ]
        );

        $this->add_control(  
            'shortcode_tag',
            [
                'label' => esc_html__( 'Shortcode', 'electro-extensions' ),
                'type'  => Controls_Manager::SELECT,
                'options'   => [
                    'featured_products'     => esc_html__( 'Featured Products','electro-extensions'),
                    'sale_products'         => esc_html__( 'On Sale Products','electro-extensions'),
                    'top_rated_products'    => esc_html__( 'Top Rated Products','electro-extensions'),
                    'recent_products'       => esc_html__( 'Recent Products','electro-extensions'),
                    'best_selling_products' => esc_html__( 'Best Selling Products','electro-extensions'),
                    'product_category'      => esc_html__( 'Product Category','electro-extensions'),
                    'products'              => esc_html__( 'Products','electro-extensions'),
                ],
                'default' =>'recent_products'
            ]
        );

        $this->add_control(
            'orderby',
            [
                'label'     => esc_html__( 'Order by', 'electro-extensions' ),
                'type'      => Controls_Manager::TEXT,
                'description' => esc_html__( 'Designates the ascending or descending order of the \'orderby\' parameter. Defaults to \'DESC\'.', 'electro-extensions' ),
                'default'   => 'date',
            ]
        );

        $this->add_control(
            'order',
            [
                'label'     => esc_html__( 'Order', 'electro-extensions' ),
                'type'      => Controls_Manager::TEXT,
                'description' => esc_html__( 'Designates the ascending or descending order of the \'orderby\' parameter. Defaults to \'DESC\'.', 'electro-extensions' ),
                'default'   => 'DESC',
            ]
        );

        $this->add_control(
            'products_choice',
            [
                'label'     => esc_html__( 'Products Choice', 'electro-extensions' ),
                'type'      => Controls_Manager::SELECT,
                'options' =>[    
                    'ids'   =>  esc_html__( 'IDs', 'electro-extensions' ) ,
                    'skus'  =>  esc_html__( 'SKUs', 'electro-extensions' ) ,
                ],
                'default'   =>'ids',
            ]
        ); 

        $this->add_control(
            'product_id',
            [
                'label' => esc_html__( 'Product IDs or SKUs', 'electro-extensions' ),
                'type'  => Controls_Manager::TEXT,
                'description'   => esc_html__('Enter IDs/SKUs separate by comma(,).', 'electro-extensions'),
            ]
        );

        $this->add_control(
            'category',
            [
                'label' => esc_html__( 'Category', 'electro-extensions' ),
                'type'  => Controls_Manager::TEXT,
                'description'   => esc_html__('Enter slug separate by comma(,).', 'electro-extensions'),
            ]
        );

        $this->add_control(
            'cat_operator',
            [
                'label'     => esc_html__( 'Category Opeartor', 'electro-extensions' ),
                'type'      => Controls_Manager::TEXT,
                'description'   => esc_html__('Operator to compare categories. Possible values are \'IN\', \'NOT IN\', \'AND\'.', 'electro-extensions'),
                'default'   => 'IN',
            ]
        );

        $this->add_control(
            'action_text',
            [
                'label' => esc_html__( 'Action Text', 'electro-extensions' ),
                'type'  => Controls_Manager::TEXT,
            ]
        );

        $this->add_control(
            'action_link',
            [
                'label' => esc_html__( 'Action Link', 'electro-extensions' ),
                'type'  => Controls_Manager::TEXT,
            ]
        );



     $this->end_controls_section();

 }

    /**
     * Render Products 1-2 Block widget output on the frontend.
     *
     * Written in PHP and used to generate the final HTML.
     *
     * @since 1.0.0
     * @access protected
     */
    protected function render() {

        $settings = $this->get_settings();

        extract( $settings );

        $shortcode_atts = function_exists( 'electro_get_atts_for_shortcode' ) ? electro_get_atts_for_shortcode( array( 'shortcode' => $shortcode_tag, 'product_category_slug' => $category, 'cat_operator' => $cat_operator, 'products_choice' => $products_choice, 'products_ids_skus' => $product_id ) ) : array();
        $shortcode_atts = wp_parse_args( $shortcode_atts, array( 'order' => $order, 'orderby' => $orderby ) );

        $args = array(
            'section_title'         => $title,
            'shortcode_tag'         => $shortcode_tag,
            'shortcode_atts'        => $shortcode_atts,
            'action_text'           => $action_text,
            'action_link'           => $action_link,
        );

        if( function_exists( 'electro_products_1_2_block' ) ) {
            electro_products_1_2_block( $args );
        }

    }
}

Plugin::instance()->widgets_manager->register( new Electro_Elementor_Products_One_Two_Block );