<?

$title = 'Atlas Presents Production';
template::inc('website','top');

$folder = media::get_vfolder('/page/production');
$items = $folder['items'];

?>
<div id="image-col">
<?
if (is_array($items))
foreach ($items as $item) {
    $img = media::get_item($item['media_item_id'],325);
?>
    <div class="image">
        <?=$img['img']?>
    </div>
<?
}
?>
</div>
<div class="uni">

    <h2>Production</h2>

We specialize in screen print production for your company or event.<br />
<br />
Our capabilities include, but are not limited to:<br />
<br />
logo design<br />
company logo screen print<br />
advertising signs<br />
business card design and print<br />
miscellaneous screen printed marketing goods!<br />
<br />
Let Atlas quote you on any sized order. From 10 up to 500, a 4 week lead time will give your company the edge and visibility it needs. All our products are designed in house and screen printed by hand.


</div>
<?

template::inc('website','bottom');
?>