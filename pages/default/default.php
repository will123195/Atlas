<?

$title = 'Atlas Presents';
template::inc('website','top');

?>
<div id="gallery">
<?

$parameters = array(
    'vfolder'=> '/page/home',
    'width_pane'=>900,
    'height_pane'=>500,
    'grid_x'=>11,
    'grid_y'=>1
);
media::gallery($parameters);

?>
</div>
<?

template::inc('website','bottom');
?>