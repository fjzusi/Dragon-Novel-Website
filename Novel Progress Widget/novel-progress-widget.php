<?php
/*
Plugin Name: Novel Progress Widget
Plugin URI: http://www.google.com/
Description: Display the progress of your novels
Version: 1.0
Author: Joe Zusi
Author URI: http://littlehive.blogspot.com
License: GPL2
*/
?>
<?php
class novel_progress_widget extends WP_Widget {
	function novel_progress_widget() {
		parent::WP_Widget(false, $name = __('Novel Progress Widget', 'wp_widget_plugin'));
	}
	
	function form($instance) {
		if($instance) {
			$title1 = esc_attr($instance['title1']);
			$title2 = esc_attr($instance['title2']);
			$title3 = esc_attr($instance['title3']);
			$title4 = esc_attr($instance['title4']);
			$title5 = esc_attr($instance['title5']);
			
			$percent1 = esc_attr($instance['percent1']);
			$percent2 = esc_attr($instance['percent2']);
			$percent3 = esc_attr($instance['percent3']);
			$percent4 = esc_attr($instance['percent4']);
			$percent5 = esc_attr($instance['percent5']);
		} else {
			$title1 = '';
			$title2 = '';
			$title3 = '';
			$title4 = '';
			$title5 = '';
			
			$percent1 = '';
			$percent2 = '';
			$percent3 = '';
			$percent4 = '';
			$percent5 = '';
		}
		
		?>
		<table class="novel-progress-widget-table">
			<tr>
				<th class="novel-progress-widget-title">Title</th>
				<th class="novel-progress-widget-percent">Percent</th>
			</tr>
			<tr>
				<td class="novel-progress-widget-title">
					<input type="text" id="<?php echo $this->get_field_id('title1'); ?>" name="<?php echo $this->get_field_name('title1'); ?>" value="<?php echo $title1; ?>" size="25" />
				</td>
				<td class="novel-progress-widget-percent">
					<input type="text" id="<?php echo $this->get_field_id('percent1'); ?>" name="<?php echo $this->get_field_name('percent1'); ?>" value="<?php echo $percent1; ?>" size="2" />
				</td>
			</tr>
			<tr>
				<td class="novel-progress-widget-title">
					<input type="text" id="<?php echo $this->get_field_id('title2'); ?>" name="<?php echo $this->get_field_name('title2'); ?>" value="<?php echo $title2; ?>" size="25" />
				</td>
				<td class="novel-progress-widget-percent">
					<input type="text" id="<?php echo $this->get_field_id('percent2'); ?>" name="<?php echo $this->get_field_name('percent2'); ?>" value="<?php echo $percent2; ?>" size="2" />
				</td>
			</tr>
			<tr>
				<td class="novel-progress-widget-title">
					<input type="text" id="<?php echo $this->get_field_id('title3'); ?>" name="<?php echo $this->get_field_name('title3'); ?>" value="<?php echo $title3; ?>" size="25" />
				</td>
				<td class="novel-progress-widget-percent">
					<input type="text" id="<?php echo $this->get_field_id('percent3'); ?>" name="<?php echo $this->get_field_name('percent3'); ?>" value="<?php echo $percent3; ?>" size="2" />
				</td>
			</tr>
			<tr>
				<td class="novel-progress-widget-title">
					<input type="text" id="<?php echo $this->get_field_id('title4'); ?>" name="<?php echo $this->get_field_name('title4'); ?>" value="<?php echo $title4; ?>" size="25" />
				</td>
				<td class="novel-progress-widget-percent">
					<input type="text" id="<?php echo $this->get_field_id('percent4'); ?>" name="<?php echo $this->get_field_name('percent4'); ?>" value="<?php echo $percent4; ?>" size="2" />
				</td>
			</tr>
			<tr>
				<td class="novel-progress-widget-title">
					<input type="text" id="<?php echo $this->get_field_id('title5'); ?>" name="<?php echo $this->get_field_name('title5'); ?>" value="<?php echo $title5; ?>" size="25" />
				</td>
				<td class="novel-progress-widget-percent">
					<input type="text" id="<?php echo $this->get_field_id('percent5'); ?>" name="<?php echo $this->get_field_name('percent5'); ?>" value="<?php echo $percent5; ?>" size="2" />
				</td>
			</tr>
		</table>
		<?php
	}
	
	function update($new_instance, $old_instance) {
		$instance = $old_instance;
		
		$instance['title1'] = esc_attr($new_instance['title1']);
		$instance['title2'] = esc_attr($new_instance['title2']);
		$instance['title3'] = esc_attr($new_instance['title3']);
		$instance['title4'] = esc_attr($new_instance['title4']);
		$instance['title5'] = esc_attr($new_instance['title5']);
		
		$instance['percent1'] = esc_attr($new_instance['percent1']);
		$instance['percent2'] = esc_attr($new_instance['percent2']);
		$instance['percent3'] = esc_attr($new_instance['percent3']);
		$instance['percent4'] = esc_attr($new_instance['percent4']);
		$instance['percent5'] = esc_attr($new_instance['percent5']);
		
		return $instance;
	}
	
	function widget($args, $instance) {
		extract($args);
		
		$title1 = esc_attr($instance['title1']);
		$title2 = esc_attr($instance['title2']);
		$title3 = esc_attr($instance['title3']);
		$title4 = esc_attr($instance['title4']);
		$title5 = esc_attr($instance['title5']);
		
		$percent1 = esc_attr($instance['percent1']);
		$percent2 = esc_attr($instance['percent2']);
		$percent3 = esc_attr($instance['percent3']);
		$percent4 = esc_attr($instance['percent4']);
		$percent5 = esc_attr($instance['percent5']);
		
		echo $before_widget;

		echo '<div class="wp_widget_plugin_box novel-progress-widget">';
		echo '<img src="wp-content/themes/novel-dragon/image/sidebar/currentProjects.png" alt="Current Projects" />';
		echo '<table class="progressTable">';
		
		if($title1) {
			echo '<tr>';
			echo '<td class="projectTitle">';
			echo $title1;
			echo '</td>';
			echo '</tr>';
			
			echo '<tr>';
			echo '<td class="projectProgress">';
			echo '<img src="wp-content/themes/novel-dragon/image/sidebar/progressSeed.png" />';
			echo '<div class="progressImage" style="width: ' . $percent1 . '%;"></div>';
			echo '</td>';
			echo '</tr>';

			echo '<tr>';
			echo '<td class="projectPercent">';
			echo $percent1 . '%';
			echo '</td>';
			echo '</tr>';
		}
		
		if($title2) {
			echo '<tr>';
			echo '<td class="projectTitle">';
			echo $title2;
			echo '</td>';
			echo '</tr>';
			
			echo '<tr>';
			echo '<td class="projectProgress">';
			echo '<img src="wp-content/themes/novel-dragon/image/sidebar/progressSeed.png" />';
			echo '<div class="progressImage" style="width: ' . $percent2 . '%;"></div>';
			echo '</td>';
			echo '</tr>';

			echo '<tr>';
			echo '<td class="projectPercent">';
			echo $percent2 . '%';
			echo '</td>';
			echo '</tr>';
		}
		
		if($title3) {
			echo '<tr>';
			echo '<td class="projectTitle">';
			echo $title3;
			echo '</td>';
			echo '</tr>';
			
			echo '<tr>';
			echo '<td class="projectProgress">';
			echo '<img src="wp-content/themes/novel-dragon/image/sidebar/progressSeed.png" />';
			echo '<div class="progressImage" style="width: ' . $percent3 . '%;"></div>';
			echo '</td>';
			echo '</tr>';

			echo '<tr>';
			echo '<td class="projectPercent">';
			echo $percent3 . '%';
			echo '</td>';
			echo '</tr>';
		}
		
		if($title4) {
			echo '<tr>';
			echo '<td class="projectTitle">';
			echo $title4;
			echo '</td>';
			echo '</tr>';
			
			echo '<tr>';
			echo '<td class="projectProgress">';
			echo '<img src="wp-content/themes/novel-dragon/image/sidebar/progressSeed.png" />';
			echo '<div class="progressImage" style="width: ' . $percent4 . '%;"></div>';
			echo '</td>';
			echo '</tr>';

			echo '<tr>';
			echo '<td class="projectPercent">';
			echo $percent4 . '%';
			echo '</td>';
			echo '</tr>';
		}
		
		if($title5) {
			echo '<tr>';
			echo '<td class="projectTitle">';
			echo $title5;
			echo '</td>';
			echo '</tr>';
			
			echo '<tr>';
			echo '<td class="projectProgress">';
			echo '<img src="wp-content/themes/novel-dragon/image/sidebar/progressSeed.png" />';
			echo '<div class="progressImage" style="width: ' . $percent5 . '%;"></div>';
			echo '</td>';
			echo '</tr>';

			echo '<tr>';
			echo '<td class="projectPercent">';
			echo $percent5 . '%';
			echo '</td>';
			echo '</tr>';
		}
		
		echo '</table>';
		echo '</div>';
		
		echo $after_widget;
	}
}

// register the widget
add_action('widgets_init', create_function('', 'return register_widget("novel_progress_widget");'));
?>