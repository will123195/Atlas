<?

$head_arr[] = '
    <script src="/lib/swfupload/swfupload.js"></script>
    <script src="/modules/media/upload/progress.css"></script>
    <script src="/modules/media/upload/handlers.js"></script>
';
template::inc('intranet','top');
?>

<h1>Choose a page to edit:</h1>
<?
$uploaders = array(
    'Home' => 'home',
    'About Us' => 'about',
    'Contact Us' => 'contact',
    "Men's Collection" => 'men',
    "Women's Collection" => 'women',
    "Accessories" => 'accessories',
    "Production" => 'production'
);

foreach ( $uploaders as $name => $folder  ) {
?>
    <a href="/admin/<?=$folder?>"><?=$name?></a>,
<?
}
?>
<hr />

<?
$name = IDE;
if ( $name != 'admin' ) {
    ?><h2><?=$name?></h2><?
    media::uploader(array(
        'vfolder_path' => '/page/' . $name,
        'thumb_width' => 150,
        'empty_message' => 'You need to upload some shit for the ' . $name . ' page.'
    ));
}
?>

<?
template::inc('intranet','bottom');
?>