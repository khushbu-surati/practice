
<?php 
class ET_Builder_Module_CustomVideoPopupModule extends ET_Builder_Module {
    public $slug = 'custom_video_popup';
    public $vb_support = 'partial';

    public function init() {
        $this->name = esc_html__('Youtube Video Popup', 'et_builder');
        $this->main_css_element = '%%order_class%%.custom_video_popup';
    }

    public function get_fields() {
        return [
            'video_title'     => array(
                'label'           => esc_html__( 'Title', 'divi' ),
                'type'            => 'text',
                'option_category' => 'basic_option',
                'toggle_slug'     => 'main_content',
            ),
            'video_url'     => array(
                'label'           => esc_html__( 'Video URL (Youtube)', 'divi' ),
                'type'            => 'text',
                'option_category' => 'basic_option',
                'toggle_slug'     => 'main_content',
            ),
        ];
    }

    public function shortcode_callback($atts, $content = null, $function_name) {
        $video_title    = ( !empty($this->props['video_title']) ? $this->props['video_title'] : '' );
        $video_url    = ( !empty($this->props['video_url']) ? $this->props['video_url'] : '' );
        ob_start();
        ?>
        <div class="custom-video-popup">
            <a class="popup-youtube" href="<?= $video_url ?>"><?= $video_title ?></a>
        </div>
        <?php
        return ob_get_clean();
    }
}
new ET_Builder_Module_CustomVideoPopupModule();
