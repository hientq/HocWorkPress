<?php
/*
	Plugin Name: Test Widget
	Plugin URI: localhost
	Description: Thực hành tạo widget item.
	Author: HienTQ
	Version: 1.0
	Author URI: http://google.com
*/

/**
 * Adds New_Widget widget.
 */
class New_Widget extends WP_Widget {

    /**
     * Register widget with WordPress.
     */
    function __construct() {
        parent::__construct(
            'new_widget', // Base ID
            __( 'Test Widget', 'text_domain' ), // Name
            array( 'description' => __( 'A Foo Widget', 'text_domain' ), ) // Args
        );
    }

    /**
     * Front-end display of widget.
     *
     * @see WP_Widget::widget()
     *
     * @param array $args     Widget arguments.
     * @param array $instance Saved values from database.
     */
    public function widget( $args, $instance ) {
        extract( $args );
        $title = apply_filters( 'widget_title', $instance['title'] );
 
        echo $before_widget;
 
        //In tiêu đề widget
        echo $before_title.$title.$after_title;
 
        // Nội dung trong widget
 
        echo "ABC XYZ";
 
        // Kết thúc nội dung trong widget
 
        echo $after_widget; 
    }

    /**
     * Back-end widget form.
     *
     * @see WP_Widget::form()
     *
     * @param array $instance Previously saved values from database.
     */
    public function form( $instance ) {
        parent::form( $instance );

        //Biến tạo các giá trị mặc định trong form
		$default = array(
		        'title' => 'Tên của bạn'
		);
		//Gộp các giá trị trong mảng $default vào biến $instance để nó trở thành các giá trị mặc định
		$instance = wp_parse_args( (array) $instance, $default);
		//Tạo biến riêng cho giá trị mặc định trong mảng $default
		$title = esc_attr( $instance['title'] );
		//Hiển thị form trong option của widget
		echo "Nhập tiêu đề <input class='widefat' type='text' name='".$this->get_field_name('title')."' value='".$title."' />";

    }

    /**
     * Sanitize widget form values as they are saved.
     *
     * @see WP_Widget::update()
     *
     * @param array $new_instance Values just sent to be saved.
     * @param array $old_instance Previously saved values from database.
     *
     * @return array Updated safe values to be saved.
     */
    public function update( $new_instance, $old_instance ) {
        parent::update( $new_instance, $old_instance );
 
        $instance = $old_instance;
        $instance['title'] = strip_tags($new_instance['title']);
        return $instance;
    }

} // class New_Widget


// register New_Widget widget
function register_new_widget() {
    register_widget( 'New_Widget' );
}
add_action( 'widgets_init', 'register_new_widget' );