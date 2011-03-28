<?
if ($template_area=='top') {

    $GLOBALS['head_arr'][] = '
        <script src="/lib/js/cufon-yui.js" type="text/javascript"></script>
        <script src="/templates/website/uni_500.font.js" type="text/javascript"></script>
        <script type="text/javascript">
            Cufon.replace(".uni");
        </script>';
    template::inc('global','top');
?>
<div id="website">
    <div id="header">
        <div id="logo">
            <img src="/templates/website/atlas.png" alt="Atlas Presents" />
        </div>
        <div id="menu">
<?
        $menu = array(
            "Home" => '/',
            "Men's Collection" => '/mens',
            "Women's Collection" => '/womens',
            "Accessories" => '/accessories',
            "Production" => '/production'
        );
        $i = 0;
        foreach ( $menu as $section => $href ) {
            $i++;
?>
            <a class="menu-item uni <? if ($i==count($menu)) echo 'end';?>" href="<?=$href?>"><?=strtoupper($section)?></a>
<?
        }
?>
        </div>
    </div>
    <div id="main">
<?
} else if ($template_area=='bottom') {
?>
    </div>
    <div id="footer" class="uni">
        <div class="float-left">COPYRIGHT &copy; <?=date('Y')?> ATLAS PRESENTS</div>
        <div class="float-right">
            <a href="/about-us">ABOUT US</a>
            <a href="/contact-us" class="end">CONTACT US</a>
        </div>
    </div>
</div>
<script type="text/javascript">
    Cufon.now();
</script>
<?
    template::inc('global','bottom');
}
?>