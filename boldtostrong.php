<?php
/*
Plugin Name: Bold To Strong
Plugin URI: http://wordpress.org/extend/plugins/boldtostrong/
Description: Converts &lt;b&gt; and &lt;/b&gt; to &lt;strong&gt; and &lt;/strong&gt;, and &lt;i&gt; and &lt;/i&gt; to &lt;em&gt; and &lt;/em&gt;. It makes your posts, pages, and comments more accessible.
Author: Zing-Ming
Version: 1.1
Author URI: http://wordpress.org/extend/plugins/profile/zingming
*/
 
class SoundSemantics {
      
      function SoundSemantics () {
      	       $this->__construct();
      }

      function __construct () {
      	       add_filter('the_content', array($this, 'filterContent'));
	       add_filter('comment_text', array($this, 'filterContent'));
      }

      function filterContent ($content) {
      	       // 2 preg_replace calls is probably faster than 8 str_replace calls. http://www.php-scripts.com/php_diary/011303.php3

	       $styleElements = array('i', 'b');
	       $structureElements = array('em', 'strong');

	       $count = count($styleElements);
	       for ($i = 0; $i < $count; $i++) {
	       	   $styleTag = '/<(\/)?' . $styleElements[$i] . '>/i';
		   $structureTag = '<\1' . $structureElements[$i] . '>';
	       	   $content = preg_replace($styleTag, $structureTag, $content);
	       }	       

	       return $content;
      }

}

$soundsemantics = new SoundSemantics();

?>