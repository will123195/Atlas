<?

$title = 'Atlas Presents Accessories';
template::inc('website','top');

$folder = media::get_vfolder('/page/accessories');
$items = $folder['items'];

?>
<div id="image-container">
<?
foreach ($items as $item) {
    $img = media::get_item($item['media_item_id'],250,250,true);
?>
    <div class="image">
        <?=$img['img']?>
        <div class="caption">
        <?=$item['caption']?>
        </div>
    </div>
<?
}
?>
</div>
<?

template::inc('website','bottom');
?>