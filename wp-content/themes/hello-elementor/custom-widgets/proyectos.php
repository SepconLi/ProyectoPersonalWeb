<?php
namespace ELementor;

class Proyectos_Widget extends Widget_Base {
    public function get_name() {
        return 'contacto';
    }
    public function get_title() {
        return 'Contacto';
    }
    public function get_icon() {
        return  'eicon-person';
    }
    public function get_categories() {
        return ['basic'];
    }
    public function _register_controls() {
        $this ->start_controls_section(
            'Section_title',
            [
                'label' => __('Content','elementor'),
            ]
            );
        $this->add_control() (
            'title',
            [
                'label' => __( 'Titulo', 'elementor'),
                'label_block' => true,
                'type' => Controls_Manager::TEXT,
                'placeholder' => __('Ingrese su titulo', 'elementor'),
            ]
            );
        $this->add_control() (
            'description',
            [
                'label' => __('Descripcion','elementor'),
                'label_block' => true,
                'type' => Controls_Manager::TEXT,
                'placeholder' => __('Ingrese la descripcion','elementor'),
            ]
            );
            $this->end_controls_section();
    }
    public function render() {
        $settings = $this->get_settings_for_display();
        echo "<div class='title>$settings[title]</div> <div class='subtitle'>$settings[subtitle]</div>";
    }
    protected function _content_template(){

    }
}