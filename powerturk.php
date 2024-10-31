<?php
/*
Plugin Name: PowerTurk Radyo
Plugin URI: http://www.cihanoztunc.com/
Description: Türkiye'nin en iyi türkçe müzik radyosu
Version: 2.0
Author: Cihan Oztunc
Author URI: http://www.cihanoztunc.com
*/

function widget_PowerTurk($args) {
    extract($args);
?>
        <?php echo $before_widget; ?>
<div>
<img src="http://www.canliradyodinle.fm/wp-content/uploads/power-turk-fm.jpg" width=300px alt="Powerturk">
</br>
<audio controls loop><source src="http://powerturk.listenpowerapp.com/powerturk/mpeg/icecast.audio" />Lütfen Bekleyiniz.</audio>
			
</div>

        <?php echo $after_widget; ?>
<?php
}
register_sidebar_widget('PowerTurk Radyo', 'widget_PowerTurk');
?>