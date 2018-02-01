<?php
function output_html($atts){
    if ($atts['compact'] == 'yes'){
        ?>
        <style>
        .my-db-explorer.label {
            padding-top: 0px;
            padding-bottom: 0px;
            }
        </style>
        <?php
    }
    
    ?>
    <p>Theme = <?php echo $atts['theme']?></p>
    <p>Compact = <?php echo $atts['compact']?></p>
    <h1 class="my-db-explorer label">Some Text</h1>
    <p class="my-db-explorer label">Some Text</p>
    <p class="my-db-explorer label">Some Text</p>
    <p class="my-db-explorer label">Some Text</p>
    <p class="my-db-explorer label">Some Text</p>
    <p class="my-db-explorer label">Some Text</p>
<?php
}
?>