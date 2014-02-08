<?php if(!defined('IN_GS')){ die('you cannot load this page directly.'); }
/****************************************************
*
* @File: 		template.php
* @Package:		GetSimple
* @Action:		BlackSimple theme for GetSimple CMS
*
*****************************************************/
?>

<?php require('header.inc.php'); ?>
<?php require('childmenu.inc.php'); ?>
      
        <section id="main" class="clearfix">
        
            <section id="content">    
                <article>
                    <h1><?php get_page_title(); ?></h1>
                    <p><?php get_page_content(); ?></p>
                </article>            
            </section>
            
            <aside id="sidebar">
	      <?php get_component('sidebar'); ?>
            </aside>
            
      </section>

<?php require('footer.inc.php'); ?>