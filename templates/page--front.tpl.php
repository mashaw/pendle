<?php
/**
 * @file
 * Default theme implementation to display a single Drupal page.
 *
 * The doctype, html, head and body tags are not in this template. Instead they
 * can be found in the html.tpl.php template in this directory.
 *
 * Available variables:
 *
 * General utility variables:
 * - $base_path: The base URL path of the Drupal installation. At the very
 *   least, this will always default to /.
 * - $directory: The directory the template is located in, e.g. modules/system
 *   or themes/bartik.
 * - $is_front: TRUE if the current page is the front page.
 * - $logged_in: TRUE if the user is registered and signed in.
 * - $is_admin: TRUE if the user has permission to access administration pages.
 *
 * Site identity:
 * - $front_page: The URL of the front page. Use this instead of $base_path,
 *   when linking to the front page. This includes the language domain or
 *   prefix.
 * - $logo: The path to the logo image, as defined in theme configuration.
 * - $site_name: The name of the site, empty when display has been disabled
 *   in theme settings.
 * - $site_slogan: The slogan of the site, empty when display has been disabled
 *   in theme settings.
 *
 * Navigation:
 * - $main_menu (array): An array containing the Main menu links for the
 *   site, if they have been configured.
 * - $secondary_menu (array): An array containing the Secondary menu links for
 *   the site, if they have been configured.
 * - $breadcrumb: The breadcrumb trail for the current page.
 *
 * Page content (in order of occurrence in the default page.tpl.php):
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title: The page title, for use in the actual HTML content.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 * - $messages: HTML for status and error messages. Should be displayed
 *   prominently.
 * - $tabs (array): Tabs linking to any sub-pages beneath the current page
 *   (e.g., the view and edit tabs when displaying a node).
 * - $action_links (array): Actions local to the page, such as 'Add menu' on the
 *   menu administration interface.
 * - $feed_icons: A string of all feed icons for the current page.
 * - $node: The node object, if there is an automatically-loaded node
 *   associated with the page, and the node ID is the second argument
 *   in the page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - $page['help']: Dynamic help text, mostly for admin pages.
 * - $page['highlighted']: Items for the highlighted content region.
 * - $page['content']: The main content of the current page.
 * - $page['sidebar_first']: Items for the first sidebar.
 * - $page['sidebar_second']: Items for the second sidebar.
 * - $page['header']: Items for the header region.
 * - $page['footer']: Items for the footer region.
 *
 * @see bootstrap_preprocess_page()
 * @see template_preprocess()
 * @see template_preprocess_page()
 * @see bootstrap_process_page()
 * @see template_process()
 * @see html.tpl.php
 *
 * @ingroup templates
 */
?>

  <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.12&appId=1433704793608026&autoLogAppEvents=1';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<script type="text/javascript">

(function($) {
    // This jQuery function is called when the document is ready
    $(function() {
       $('button#toggler').click(function() {
          $("body").toggleClass("overlay");
        });
    });
  })(jQuery);






  </script>


<header id="navbar" role="banner" class="<?php print $navbar_classes; ?>  clearfix header">
  <div class="<?php print $container_class; ?>">
    <div class="navbar-header">

     <?php if ($logo): ?>
        <a class="logo navbar-btn pull-left" href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>">
          <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
        </a>
      <?php endif; ?>

   <?php print render($page['header']); ?>

   <?php if (!empty($primary_nav) || !empty($secondary_nav) || !empty($page['navigation'])): ?>


   <div class="toggle-wrapper">


        <button type="button" class="navbar-toggle collapsed" id="toggler" >


          <span class="icon-bar bar1"></span>
          <span class="icon-bar bar2"></span>
          <span class="icon-bar bar3"></span>
<label for="toggler"><span>Menu</span></label>

        </button>



              </div>
      <?php endif; ?>

       <?php if (!empty($primary_nav) || !empty($secondary_nav) || !empty($page['navigation'])): ?>

        <nav role="navigation"><?php if (!empty($page['navigation'])): ?>
            <?php print render($page['navigation']); ?>
          <?php endif; ?>


        </nav>

    <?php endif; ?>


    </div>


  </div>
</header>

<div class="main-container <?php print $container_class; ?>">

  <header role="banner" id="page-header">




  </header> <!-- /#page-header -->

  <div class="row">

  <header >

   <?php if (!empty($breadcrumb)): print $breadcrumb; endif;?>

 <?php if (!empty($title)): ?>

 <?php print render($title_prefix); ?>

<h1 class="page-header"><?php print $title; ?></h1>

      <?php print render($title_suffix); ?>

      <?php endif; ?>
 <?php print $messages; ?>
      <?php if (!empty($tabs)): ?>
        <?php print render($tabs); ?>
      <?php endif; ?>
      <?php if (!empty($page['help'])): ?>
        <?php print render($page['help']); ?>
      <?php endif; ?>
      <?php if (!empty($action_links)): ?>
        <ul class="action-links"><?php print render($action_links); ?></ul>
      <?php endif; ?>






      </header>


              <?php if (!empty($page['highlighted'])): ?>
        <aside class="main-container highlighted"><?php print render($page['highlighted']); ?></aside>
      <?php endif; ?>

    <?php if (!empty($page['sidebar_first'])): ?>
      <aside class="col-lg-4 col-md-5 col-sm-5 col-xs-6" role="complementary">
        <?php print render($page['sidebar_first']); ?>
      </aside>  <!-- /#sidebar-first -->
    <?php endif; ?>










    <?php if (!empty($page['sidebar_second'])): ?>
      <aside class="col-lg-8 col-md-7 col-sm-7  col-xs-6" role="complementary">
        <?php print render($page['sidebar_second']); ?>
      </aside>  <!-- /#sidebar-second -->
    <?php endif; ?>

  </div>
</div>


<!--
 <?php if (!empty($page['content'])): ?>

 <section  class="col-md-12 col-sm-12"   id="content-section" role="main">

      <a id="main-content"></a>

      <?php print render($page['content']); ?>

    </section>
 -->

      <?php endif; ?>

<?php if (!empty($page['footer'])): ?>
    <footer class="<?php print $container_class; ?> footer">
    <?php print render($page['footer']); ?>
  </footer>
<?php endif; ?>
