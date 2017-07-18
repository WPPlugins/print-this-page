<?php
/*

Plugin Name: Print this page
Plugin URI: http://www.devilhunter.net/
Description: Go to Appearance > Widgets, and drag 'Print this page' in sidebar or footer or in any widgetized area. This 'Print this page' button will automatically match your theme's color, font, style. No need to use any short-code or to edit settings.
Version: 1.0
Author: Tawhidur Rahman Dear
Author URI: http://www.facebook.com/tawhidurrahmandear/ 
License: GPLv2 or later 

Tawhidur Rahman Dear
Mailing Address: 
House - 304, Road - 10 Rupnagar Tinshed,
Pallabi, Mirpur,
Dhaka - 1216
BANGLADESH
tawhidurrahmandear@gmail.com
+8801716816283, (also in Viber, DUO, WhatsApp, IMO)
Skype & Google Hangout: tawhidurrahmandear
Facebook: http://www.facebook.com/tawhidurrahmandear/ 
Google Plus: http://plus.google.com/+tawhidurrahmandear/about
Personal Blog: http://tawhidurrahmandear.blogspot.com 
 
 */


namespace deareight\dear\wordpress;

{require_once(__DIR__ . "/pluginfiles/widget.php");}

  class S extends Widget {
    static $widgetTitle = "deareight_printthispage";

    public function __construct() {
      parent::__construct(null, "Print this page");
    }


    public function widgetContent($args, $instance)
    {
      ?>




 <script language="Javascript1.2">

var message = "Print this page";

function printpage() {
window.print(); 
}

document.write("<form><input type=button "
+"value=\""+message+"\" onClick=\"printpage()\"></form>");

//-->
</script>

      <?php
    
    }
  }

  S::register("deareight_printthispage");


