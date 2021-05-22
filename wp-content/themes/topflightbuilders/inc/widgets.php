<?php

    function topflightbuilders_widget_areas() {  
        // services section
        register_sidebar(
            array(
                'before_title' => '',
                'after_title' => '',
                'before_widget' => '',
                'after_widget' => '',
                'name' => 'Services Section',
                'id' => 'services-sidebar',
                'description' => 'Services Section of homepage'
            )
        );
        // testimonials section
        register_sidebar(
            array(
                'before_title' => '',
                'after_title' => '',
                'before_widget' => '',
                'after_widget' => '',
                'name' => 'Testimonials Section',
                'id' => 'testimonials-sidebar',
                'description' => 'Testimonials Section of homepage'
            )
        );
        // request a quote section
        register_sidebar(
            array(
                'before_title' => '',
                'after_title' => '',
                'before_widget' => '',
                'after_widget' => '',
                'name' => 'Quote Request Section',
                'id' => 'quote-sidebar',
                'description' => 'Request a Quote section of homepage'
            )
        );
        // footer social media icons
        register_sidebar(
            array(
                'before_title' => '',
                'after_title' => '',
                'before_widget' => '<ul>',
                'after_widget' => '</ul>',
                'name' => 'Social Media Sidebar',
                'id' => 'footer-social-media',
                'description' => 'Social Media Widgets'
            )
        );
    }

    add_action('widgets_init', 'topflightbuilders_widget_areas');

    function media_services_widget(){
        wp_enqueue_media();
        wp_enqueue_script('ads_script', get_template_directory_uri() . '/assets/js/widget.js', false, '1.0.0', true);
    }
    add_action('admin_enqueue_scripts', 'media_services_widget');


    // Creating the widget 
    class Services_Widget extends WP_Widget {
    
        // register widget
        function __construct() {
            parent::__construct(
                'services_widget', // Base ID
                esc_html__('TopFlight Builders Services Widget', 'services_widget_domain'), // Name
                array('description' => esc_html__('Add a new service to the homepage.', 'services_widget_domain'), ) // Args
            );
        }
        
        // Creating widget front-end
        public function widget( $args, $instance ) {
            echo $args['before_widget'];
            /*$service_picture = esc_url($instance['image_uri']);
            $service_name = apply_filters('widget_title', $instance['title'] );
            $service_description = apply_filters('widget_title', $instance['description'] );*/
            ?>
                <div class="col-lg-4 col-md-6 my-3">
                    <div class="card">
                        <div class="popup-text">
                            <span>
                                <p><?php echo apply_filters('widget_title', $instance['description'] ); ?></p>
                            </span>
                        </div>
                        <div class="text-left card-main-text">
                            <h3><?php echo apply_filters('widget_title', $instance['title'] ); ?></h3>
                        </div>
                        <img src="<?php echo esc_url($instance['image_uri']); ?>" alt="">
                    </div>
                </div>

            <?php 
            echo $args['after_widget'];
        }
                
        // Widget Backend 
        public function form( $instance ) {
            ?>
                <p>
                    <label for="<?php echo $this->get_field_id('title'); ?>">Service Name</label><br />
                    <input type="text" name="<?php echo $this->get_field_name('title'); ?>" id="<?php echo $this->get_field_id('title'); ?>" value="<?php echo $instance['title'] ?? ''; ?>" class="widefat" />
                </p>
                <p>
                    <label for="<?php echo $this->get_field_id('description'); ?>">Service Description</label><br />
                    <input type="text" name="<?php echo $this->get_field_name('description'); ?>" id="<?php echo $this->get_field_id('description'); ?>" value="<?php echo $instance['description'] ?? ''; ?>" class="widefat" />
                </p>
                <p>
                    <label for="<?= $this->get_field_id( 'image_uri' ); ?>">Image</label>
                    <img class="<?= $this->id ?>_img" src="<?= (!empty($instance['image_uri'])) ? $instance['image_uri'] : ''; ?>" style="margin:0;padding:0;max-width:100%;display:block"/>
                    <input type="text" class="widefat <?= $this->id ?>_url" name="<?= $this->get_field_name( 'image_uri' ); ?>" value="<?= $instance['image_uri'] ?? ''; ?>" style="margin-top:5px;" />
                    <input type="button" id="<?= $this->id ?>" class="button button-primary js_custom_upload_media" value="Upload Image" style="margin-top:5px;" />
                </p>
            <?php
        }
            
        // Updating widget replacing old instances with new
        public function update( $new_instance, $old_instance ) {
            $instance = $old_instance;
            $instance['title'] = strip_tags( $new_instance['title'] );
            $instance['image_uri'] = strip_tags( $new_instance['image_uri'] );
            $instance['description'] = strip_tags($new_instance['description']);
            return $instance;
        }
    
    } 

    
    
    function register_services_widget() {
        register_widget('Services_Widget');
    }
    add_action( 'widgets_init', 'register_services_widget' );
    add_action('admin_enqueque_scripts', 'wpse_load_media_library');


    // Creating the widget 
    class Testimonials_Widget extends WP_Widget {
    
        // register widget
        function __construct() {
            parent::__construct(
                'testimonials_widget', // Base ID
                esc_html__('TopFlight Builders Testimonials Widget', 'testimonials_widget_domain'), // Name
                array('description' => esc_html__('Add a new testimonial to the homepage.', 'testimonials_widget_domain'), ) // Args
            );
        }
        
        // Creating widget front-end
        public function widget( $args, $instance ) {
            echo $args['before_widget'];
            /*$service_picture = esc_url($instance['image_uri']);
            $service_name = apply_filters('widget_title', $instance['title'] );
            $service_description = apply_filters('widget_title', $instance['description'] );*/
            ?>
                <div class="p-2 col">
                    <div class="card border-light bg-light text-center h-100">
                        <i class="fa fa-quote-left fa-3x card-img-top rounded-circle" aria-hidden="true"></i>
                        <div class="card-body blockquote">
                            <p class="card-text"><?php echo apply_filters('widget_title', $instance['testimonial']); ?></p>
                            <div class="blockquote-footer"><cite title="Source Title"><?php echo apply_filters('widget_title', $instance['testimonial_author']); ?></cite></div>
                        </div>
                    </div>
                </div>
            <?php 
            echo $args['after_widget'];
        }
                
        // Widget Backend 
        public function form( $instance ) {
            ?>
                <p>
                    <label for="<?php echo $this->get_field_id('testimonial'); ?>">Testimonial</label><br />
                    <input type="text" name="<?php echo $this->get_field_name('testimonial'); ?>" id="<?php echo $this->get_field_id('testimonial'); ?>" value="<?php echo $instance['testimonial'] ?? ''; ?>" class="widefat" />
                </p>
                <p>
                    <label for="<?php echo $this->get_field_id('testimonial_author'); ?>">Testimonial Author</label><br />
                    <input type="text" name="<?php echo $this->get_field_name('testimonial_author'); ?>" id="<?php echo $this->get_field_id('testimonial_author'); ?>" value="<?php echo $instance['testimonial_author'] ?? ''; ?>" class="widefat" />
                </p>
            <?php
        }
            
        // Updating widget replacing old instances with new
        public function update( $new_instance, $old_instance ) {
            $instance = $old_instance;
            $instance['testimonial'] = strip_tags( $new_instance['testimonial'] );
            $instance['testimonial_author'] = strip_tags( $new_instance['testimonial_author'] );
            return $instance;
        }
    
    } 

    
    
    function register_testimonials_widget() {
        register_widget('Testimonials_Widget');
    }
    add_action( 'widgets_init', 'register_testimonials_widget' );

?>