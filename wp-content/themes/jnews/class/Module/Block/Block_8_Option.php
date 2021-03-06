<?php
/**
 * @author : Jegtheme
 */
namespace JNews\Module\Block;

Class Block_8_Option extends BlockOptionAbstract
{
    protected $default_number_post = 5;
    protected $show_excerpt = false;
    protected $default_ajax_post = 3;

    public function get_module_name()
    {
        return esc_html__('JNews - Module 8', 'jnews');
    }
}