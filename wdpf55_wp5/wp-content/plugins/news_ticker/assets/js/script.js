jQuery(document).ready(function ($) {
    $('.my-news-ticker').AcmeTicker({
        type:'marquee',/*horizontal/horizontal/Marquee/type*/
        direction: 'left',/*up/down/left/right*/
        speed: 0.05,/*true/false/number*/ /*For vertical/horizontal 600*//*For marquee 0.05*//*For typewriter 50*/
        controls: {
            toggle: $('.acme-news-ticker-pause'),/*Can be used for horizontal/horizontal/typewriter*//*not work for marquee*/
        }
    });
})