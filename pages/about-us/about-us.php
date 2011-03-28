<?

$title = 'About Atlas Presents';
template::inc('website','top');

$folder = media::get_vfolder('/page/about');
$items = $folder['items'];

?>
<div id="image-col">
<?
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

This is how we roll<br />
<br />
Atlas is the undertaking of Hannia C. Sobrevilla and David M. Wagner to design and produce fresh apparel for men and women. We are focusing on hand screen printing original artwork on quality clothing made in United States. Jewelry assembled by hand is another part of what we're doing here in Newark. Our goal is to create a unique company image inspired by modern circumstances and influences of the culture around us. We strive to make a quality product to reflect what we see in the appearance of our generation. More than anything we need feedback from you so please let us know what you think. <br />
<br />
Atlas Would like to thank everyone for their support as we are cleared for take off and are revving up our engines. We've been thinking about this for a long time now and it's a true blessing to have all of you at our backs. We're greatful for our online purchasers and our first friday regulars. We want to make this for you. We want you to feel like you are apart of what we're doing here. Catch us on fb or send us an email. Better yet come to Newark and lets go get some sangria!<br />
<br />
Please visit our Facebook and send a request!<br />
EMAIL US: info@atlaspresents.com<br />
115 E. Kinney St. <br />
Newark, NJ 07105-1107 USA<br />
<br />
Email: Info@atlaspresents.com<br />

</div>
<?

template::inc('website','bottom');
?>