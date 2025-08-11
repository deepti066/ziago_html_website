<?php

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

use Neotech\Elementor\Neotech_Base_Widgets;
use Elementor\Controls_Manager;
use Elementor\Group_Control_Box_Shadow;
use Elementor\Icons_Manager;
use Elementor\Repeater;

/**
 * Elementor tabs widget.
 *
 * Elementor widget that displays vertical or horizontal tabs with different
 * pieces of content.
 *
 * @since 1.0.0
 */
class Neotech_Elementor_Text_Carousel extends Neotech_Base_Widgets {

    public function get_categories() {
        return array('neotech-addons');
    }

    /**
     * Get widget name.
     *
     * Retrieve tabs widget name.
     *
     * @return string Widget name.
     * @since 1.0.0
     * @access public
     *
     */
    public function get_name() {
        return 'neotech-text-carousel';
    }

    /**
     * Get widget title.
     *
     * Retrieve tabs widget title.
     *
     * @return string Widget title.
     * @since 1.0.0
     * @access public
     *
     */
    public function get_title() {
        return esc_html__('Text Carousel', 'neotech');
    }

    /**
     * Get widget icon.
     *
     * Retrieve tabs widget icon.
     *
     * @return string Widget icon.
     * @since 1.0.0
     * @access public
     *
     */
    public function get_icon() {
        return 'eicon-slider-push';
    }

    /**
     * Enqueue scripts.
     *
     * Registers all the scripts defined as element dependencies and enqueues
     * them. Use `get_script_depends()` method to add custom script dependencies.
     *
     * @since 1.3.0
     * @access public
     */

    public function get_script_depends() {
        return ['neotech-elementor-text-carousel'];
    }

    /**
     * Register tabs widget controls.
     *
     * Adds different input fields to allow the user to change and customize the widget settings.
     *
     * @since 1.0.0
     * @access protected
     */
    protected function register_controls() {

        $this->start_controls_section(
            'section_text_carousel',
            [
                'label' => esc_html__('Texts', 'neotech'),
            ]
        );

        $repeater = new Repeater();

        $repeater->add_control(
            'text_cr_title',
            [
                'label'       => esc_html__('Text Item', 'neotech'),
                'type'        => Controls_Manager::TEXT,
                'default'     => esc_html__('Text Item', 'neotech'),
                'placeholder' => esc_html__('Text Item', 'neotech'),
                'label_block' => true,
            ]
        );

        $repeater->add_control(
            'link',
            [
                'label'       => esc_html__('Link to', 'neotech'),
                'type'        => Controls_Manager::URL,
                'dynamic'     => [
                    'active' => true,
                ],
                'placeholder' => esc_html__('https://your-link.com', 'neotech'),
            ]
        );

        $this->add_control(
            'text_carousel',
            [
                'label'       => esc_html__('Items', 'neotech'),
                'type'        => Controls_Manager::REPEATER,
                'fields'      => $repeater->get_controls(),
                'title_field' => '{{{ text_cr_title }}}',
            ]
        );

        $this->add_control(
            'heading_settings',
            [
                'label'     => esc_html__('Settings', 'neotech'),
                'type'      => Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );

        $this->add_responsive_control(
            'brand_align',
            [
                'label'     => esc_html__('Alignment', 'neotech'),
                'type'      => Controls_Manager::CHOOSE,
                'options'   => [
                    'flex-start' => [
                        'title' => esc_html__('Left', 'neotech'),
                        'icon'  => 'eicon-text-align-left',
                    ],
                    'center'     => [
                        'title' => esc_html__('Center', 'neotech'),
                        'icon'  => 'eicon-text-align-center',
                    ],
                    'flex-end'   => [
                        'title' => esc_html__('Right', 'neotech'),
                        'icon'  => 'eicon-text-align-right',
                    ],
                ],
                'default'   => 'center',
                'selectors' => [
                    '{{WRAPPER}} .elementor-text-carousel-text' => 'justify-content: {{VALUE}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'style_text_wrapper',
            [
                'label' => esc_html__('Wrapper', 'neotech'),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_responsive_control(
            'text_padding',
            [
                'label'      => esc_html__('Padding', 'neotech'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', '%'],
                'selectors'  => [
                    '{{WRAPPER}} .elementor-text-carousel-text' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'text_margin',
            [
                'label'      => esc_html__('Margin', 'neotech'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', '%'],
                'selectors'  => [
                    '{{WRAPPER}} .elementor-text-carousel-text' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_control(
            'text_background',
            [
                'label'     => esc_html__('Background Color', 'neotech'),
                'type'      => Controls_Manager::COLOR,
                'default'   => '',
                'selectors' => [
                    '{{WRAPPER}} .elementor-text-carousel-text' => 'background-color: {{VALUE}}',
                ],
            ]
        );

        $this->add_control(
            'text_border_radius',
            [
                'label'      => esc_html__('Border Radius', 'neotech'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%'],
                'selectors'  => [
                    '{{WRAPPER}} .elementor-text-carousel-text' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->start_controls_tabs('tabs_text_wrapper');

        $this->start_controls_tab(
            'tab_wrapper_normal',
            [
                'label' => esc_html__('Normal', 'neotech'),
            ]
        );

        $this->add_control(
            'text_color',
            [
                'label'     => esc_html__('Color', 'neotech'),
                'type'      => Controls_Manager::COLOR,
                'default'   => '',
                'selectors' => [
                    '{{WRAPPER}} .elementor-text-carousel-text ' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Box_Shadow::get_type(),
            [
                'name'     => 'text_wrapper',
                'selector' => '{{WRAPPER}} .elementor-text-carousel-text',
            ]
        );

        $this->end_controls_tab();

        $this->start_controls_tab(
            'tab_text_wrapper_hover',
            [
                'label' => esc_html__('Hover', 'neotech'),
            ]
        );


        $this->add_control(
            'text_color_hover',
            [
                'label'     => esc_html__('Color', 'neotech'),
                'type'      => Controls_Manager::COLOR,
                'default'   => '',
                'selectors' => [
                    '{{WRAPPER}}:hover .elementor-text-carousel-text ' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Box_Shadow::get_type(),
            [
                'name'     => 'text_wrapper_hover',
                'selector' => '{{WRAPPER}} .elementor-text-carousel-text:hover',
            ]
        );

        $this->end_controls_tab();

        $this->end_controls_tabs();


        $this->end_controls_section();
        $this->get_controls_column();
        // Carousel options
        $this->get_control_carousel();

    }

    /**
     * Render tabs widget output on the frontend.
     *
     * Written in PHP and used to generate the final HTML.
     *
     * @since 1.0.0
     * @access protected
     */
    protected function render() {
        $settings = $this->get_settings_for_display();
        if (!empty($settings['text_carousel']) && is_array($settings['text_carousel'])) {
            $this->add_render_attribute('wrapper', 'class', 'elementor-text-carousel-wrapper');
            // Row
            $this->add_render_attribute('item', 'class', 'elementor-text-carousel-item');
            $this->get_data_elementor_columns();
        }

        if (empty($settings['icon']) && !Icons_Manager::is_migration_allowed()) {
            $settings['icon'] = 'fa fa-star';
        }

        if (!empty($settings['icon'])) {
            $this->add_render_attribute('icon', 'class', $settings['icon']);
            $this->add_render_attribute('icon', 'aria-hidden', 'true');
        }

        ?>
        <div <?php $this->print_render_attribute_string('wrapper'); ?>>
            <div <?php $this->print_render_attribute_string('container'); ?>>
                <div <?php $this->print_render_attribute_string('inner'); ?>>
                    <?php foreach ($settings['text_carousel'] as $item) : ?>
                        <div <?php $this->print_render_attribute_string('item'); ?>>
                            <div class="elementor-text-carousel-text">
                                <?php echo esc_html( $item['text_cr_title'] ); ?>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <?php $this->get_swiper_navigation(count($settings['text_carousel'])); ?>
        </div>
        <?php
    }
}

$widgets_manager->register(new Neotech_Elementor_Text_Carousel());
