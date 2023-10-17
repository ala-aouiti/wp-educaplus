<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

use Elementor\Core\Kits\Documents\Tabs\Global_Typography;

class Edubin_Elementor_Widget_Counter extends Widget_Base {

    public function get_name() {
        return 'edubin-counter';
    }
    
    public function get_title() {
        return __( 'Counter', 'edubin-addons' );
    }

    public function get_icon() {
        return 'edubin-icon eicon-counter';
    }

    public function get_categories() {
        return [ 'edubin-core' ];
    }
    public function get_keywords() {
        return [ 'counter', 'edubin counter', 'timer', 'count' ];
    }
    // public function get_script_depends() {
    //     return [ 'jquery-numerator' ];
    // }

    protected function register_controls() {
        $this->start_controls_section(
            'section_counter',
            [
                'label' => esc_html__( 'Counter', 'edubin-core' ),
            ]
        );


        $this->add_control(
            'counter_style',
            [
                'label' => __( 'Style', 'edubin-core' ),
                'type' => Controls_Manager::SELECT,
                'default' => '1',
                'options' => [
                    '1'   => __( 'Style 1', 'edubin-core' ),
                    '2'   => __( 'Style 2', 'edubin-core' ),
                ],
            ]
        );

        $this->add_control(
            'starting_number',
            [
                'label' => esc_html__( 'Starting Number', 'edubin-core' ),
                'type' => Controls_Manager::NUMBER,
                'default' => 0,
                'dynamic' => [
                    'active' => true,
                ],
            ]
        );

        $this->add_control(
            'ending_number',
            [
                'label' => esc_html__( 'Ending Number', 'edubin-core' ),
                'type' => Controls_Manager::NUMBER,
                'default' => 100,
                'dynamic' => [
                    'active' => true,
                ],
            ]
        );

        $this->add_control(
            'prefix',
            [
                'label' => esc_html__( 'Number Prefix', 'edubin-core' ),
                'type' => Controls_Manager::TEXT,
                'dynamic' => [
                    'active' => true,
                ],
                'default' => '',
                'placeholder' => 1,
            ]
        );

        $this->add_control(
            'suffix',
            [
                'label' => esc_html__( 'Number Suffix', 'edubin-core' ),
                'type' => Controls_Manager::TEXT,
                'dynamic' => [
                    'active' => true,
                ],
                'default' => '',
                'placeholder' => esc_html__( 'Plus', 'edubin-core' ),
            ]
        );

        $this->add_control(
            'count_unit',
            [
                'label' => __( 'Counter Unit', 'edubin-core' ),
                'type' => Controls_Manager::SELECT,
                'default' => 'crore',
                'options' => [
                    ''   => __( 'none', 'edubin-core' ),
                    'hundred'   => __( 'hundred', 'edubin-core' ),
                    'thousand'   => __( 'thousand', 'edubin-core' ),
                    'lakh'   => __( 'lakh', 'edubin-core' ),
                    'crore'   => __( 'crore', 'edubin-core' ),
                    'million'   => __( 'million', 'edubin-core' ),
                    'billion'   => __( 'billion', 'edubin-core' ),
                    'trillion'   => __( 'trillion', 'edubin-core' ),
                    'K'   => __( 'K', 'edubin-core' ),
                    'M'   => __( 'M', 'edubin-core' ),
                    'B'   => __( 'B', 'edubin-core' ),
                ],
                'condition' => [
                    'counter_style' => '2',
                ],

            ]
        );
        $this->add_control(
            'title',
            [
                'label' => esc_html__( 'Title', 'edubin-core' ),
                'type' => Controls_Manager::TEXT,
                'label_block' => true,
                'dynamic' => [
                    'active' => true,
                ],
                'default' => esc_html__( 'Cool Number', 'edubin-core' ),
                'placeholder' => esc_html__( 'Cool Number', 'edubin-core' ),
            ]
        );

        

        $this->add_control(
            'counter_image',
            [
                'label'   => __('Image', 'edubin-core'),
                'type'    => Controls_Manager::MEDIA,
                'separator' => 'before',
                'condition' => [
                    'counter_style' => '2',
                ],
            ]
        );
    

        $this->add_control(
            'view',
            [
                'label' => esc_html__( 'View', 'edubin-core' ),
                'type' => Controls_Manager::HIDDEN,
                'default' => 'traditional',
            ]
        );
        $this->add_control(
            'alignment',
            [
                'label' => esc_html__('Alignment', 'edubin-core'),
                'type' => Controls_Manager::CHOOSE,
                'toggle' => false,
                'options' => [
                    'left' => [
                        'title' => esc_html__('Left', 'edubin-core'),
                        'icon' => 'eicon-text-align-left',
                    ],
                    'center' => [
                        'title' => esc_html__('Center', 'edubin-core'),
                        'icon' => 'eicon-text-align-center',
                    ],
                    'right' => [
                        'title' => esc_html__('Right', 'edubin-core'),
                        'icon' => 'eicon-text-align-right',
                    ],
                ],
                'default' => 'left',
                'selectors' => [
                    '{{WRAPPER}} .elementor-counter .elementor-counter-number-wrapper-no' => 'text-align: {{VALUE}};',
                    '{{WRAPPER}} .elementor-counter .elementor-counter-title' => 'text-align: {{VALUE}};',
                ],
            ]
        );
        $this->end_controls_section();

        $this->start_controls_section(
            'section_number',
            [
                'label' => esc_html__( 'Number', 'edubin-core' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'number_color',
            [
                'label' => esc_html__( 'Text Color', 'edubin-core' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .elementor-counter-number-wrapper-no' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'typography_number',
                'selector' => '{{WRAPPER}} .elementor-counter-number-wrapper-no',
            ]
        );

        $this->add_group_control(
            Group_Control_Text_Shadow::get_type(),
            [
                'name' => 'number_shadow',
                'selector' => '{{WRAPPER}} .elementor-counter-number-wrapper-no',
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'section_title',
            [
                'label' => esc_html__( 'Title', 'edubin-core' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'title_color',
            [
                'label' => esc_html__( 'Text Color', 'edubin-core' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .elementor-counter-title' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'typography_title',
                'selector' => '{{WRAPPER}} .elementor-counter-title',
            ]
        );

        $this->add_group_control(
            Group_Control_Text_Shadow::get_type(),
            [
                'name' => 'title_shadow',
                'selector' => '{{WRAPPER}} .elementor-counter-title',
            ]
        );

        $this->end_controls_section();
    }

    /**
     * Render counter widget output on the frontend.
     */
    protected function render() {
        $settings = $this->get_settings_for_display();

        ?>

    <?php if( $settings['counter_style'] == '1' ): ?>

        <div class="elementor-counter counter-style-<?php echo $settings['counter_style']?>">
            <?php 

            ?>
            <div class="elementor-counter-number-wrapper-no">
                <span class="elementor-counter-number-prefix"><?php echo $settings['prefix']; ?></span>
                <span class="eb_counting" data-count="<?php echo $settings['ending_number']; ?>"><?php echo $settings['starting_number']; ?></span>
                
                <span class="elementor-counter-number-suffix"><?php echo $settings['suffix']; ?></span>
            </div>
            <?php if ( $settings['title'] ) : ?>
                <div class="elementor-counter-title"><?php echo $settings['title']; ?></div>
            <?php endif; ?>
        </div>

     <?php 
        elseif ($settings['counter_style'] == '2'): ?>
        <div class="elementor-counter counter-style-<?php echo $settings['counter_style']?>">
            <?php 

            ?>
            <div class="counter-wrapper">
                <div class="counter-icon">
                    <?php echo Group_Control_Image_Size::get_attachment_image_html($settings, 'counter_image'); ?>
                </div>
                <div class="counter-content">
                    <div class="elementor-counter-number-wrapper-no">
                        <span class="elementor-counter-number-prefix"><?php echo $settings['prefix']; ?></span>
                        <span class="eb_counting" data-count="<?php echo $settings['ending_number']; ?>"><?php echo $settings['starting_number']; ?></span><span class="elementor-counter-number-suffix"><?php echo $settings['suffix']; ?></span>
                        <?php if ( $settings['count_unit'] != '') : ?>
                            <span class="count-unit"><?php echo $settings['count_unit']; ?></span>
                        <?php endif; ?>
                    </div>
                    <?php if ( $settings['title'] ) : ?>
                        <div class="elementor-counter-title"><?php echo $settings['title']; ?></div>
                    <?php endif; ?>
                </div>
            </div>
            
        </div>

    <?php endif; ?>

        <?php
    }
}
