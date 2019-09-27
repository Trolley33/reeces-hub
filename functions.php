<?php
function output_projects($order_column, $amount, $type_of_display) {
    require_once($_SERVER["DOCUMENT_ROOT"]."/db.php");
    $projects = $conn->query("SELECT * FROM `projects` ORDER BY $order_column LIMIT $amount");
    
    if ($type_of_display == 'box') {
        while ($row = $projects->fetch_object()) {
            ?>
            <div class="col-lg-6">
                <a class="portfolio-item" href="/projects/view.php?id=<?php echo $row->ID;?>">
                    <div class="caption">
                        <div class="caption-content">
                            <h2><?php echo $row->title; ?></h2>
                            <p class="mb-0"><?php echo $row->excerpt; ?></p>
                        </div>
                    </div><img class="img-fluid" src=<?php echo "'". $row->image_url ."'";?> /></a>
            </div>
            <?
        }
    }
}
?>