<?php 
    /**
* Plugin Name: News Ticker
* Plugin URI: http://news55.com/news-ticker
* Description: Insert a brief description of what your plugin does here.
* Version: 1.0.0
* Author: Alin Ibne Imran
* Author URI: http://wdpf55.com
* License: GPL2
*/

function newsTicker_enqueue_scripts() {
    wp_enqueue_style( 'newsTicker', plugin_dir_url(__DIR__).'news_ticker/assets/css/style.css', false );
    wp_enqueue_script('newsTicker',plugin_dir_url(__DIR__).'news_ticker/assets/js/acmeticker.js',array(),'1.0', true);
    wp_enqueue_script('newsTickerInit',plugin_dir_url(__DIR__).'news_ticker/assets/js/script.js',array(),'1.0', true);
};
add_action( 'wp_enqueue_scripts', 'newsTicker_enqueue_scripts' );

function news_ticker(){
    $query = new WP_Query(array(
        'post_type' => 'post',
        'posts_per_page' => '5',
    ));
    $items = '';
    if($query->have_posts()){
        while($query->have_posts()){
            $query->the_post();
            $items .= "<li><a href=".get_the_permalink().">". get_the_title()."</a></li>";
        }
    }

    return '<div class="acme-news-ticker">
    <div class="acme-news-ticker-label">Letest News</div>

    <div class="acme-news-ticker-box">
        <ul class="my-news-ticker">'
            // <li><a href="#">ডেঙ্গুতে সর্বোচ্চ সংক্রমিত ১৫ এলাকার ১১টিই ঢাকা উত্তর সিটির &nbsp|</a></li>
            .$items.'
        </ul>

    </div>
    <div class="acme-news-ticker-controls acme-news-ticker-horizontal-controls">
        <button class="acme-news-ticker-pause"></button>
    </div>
</div> ';
}
add_shortcode('nt','news_ticker')
?>