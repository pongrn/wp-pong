// Vídeos oEmbed responsivos - Válido para YouTube e Vimeo
jQuery(document).ready(function($) {
    var $all_oembed_videos = $("iframe[src*='youtube'], iframe[src*='vimeo'], iframe[src*='dailymotion']");
    $all_oembed_videos.each(function() {
        $(this).removeAttr('height').removeAttr('width').wrap( "<div class='embed-container'></div>" );    
    });
});