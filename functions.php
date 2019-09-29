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
            <?php
        }
    }
}

function output_single_project($id) {
    require_once($_SERVER["DOCUMENT_ROOT"]."/db.php");
    $project_id = $conn->escape_string($id);
    $result = $conn->query("SELECT * FROM `projects` WHERE id='$project_id'");
    if ($result->num_rows == 1):
        $project = $result->fetch_object();
    ?>
    <header class="d-flex" style="padding: 8rem 1rem; background-image: url(&quot;<?= $project->image_url ?>&quot;);background-size: cover;background-repeat: no-repeat;">
        <div class="container my-auto text-center">
            <h1 class="mb-1" style="color: rgb(221,228,235);"><?= $project->title ?></h1>
            <h3 class="mb-5"><em style="color: #dde4eb;"><?= $project->excerpt ?></em></h3>
            <div>
                <a class="btn btn-xl js-scroll-trigger" role="button" data-bs-hover-animate="pulse" href="#blog" style="background-color: #c35196;color: #dde4eb;">Blog Post</a>
                <br />
                <br />
                <a class="btn btn-xl js-scroll-trigger" role="button" data-bs-hover-animate="pulse" href="#links" style="background-color: #c35196;color: #dde4eb;">Demo/Download</a>
            </div>
        </div>
    </header>
    <section id="blog" class="py-5 bg-dark text-light" style="height: auto;">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 mx-auto text-left">
                    <?= html_entity_decode($project->body); ?>
                </div>
            </div>
        </div>
    </section>
    <?php
    else:
        header("Location: /projects?error=not_found");
    endif;
}


function output_nav_bar($active) {
    $nav_items = [
        "Home" => ["url" => "/"],
        "Projects" => ["url" => "/projects"],
        "About" => ["url" => "/about"],
    ];
    ?>
    <nav class="navbar navbar-light navbar-expand-md navigation-clean" style="background-color: #333333;">
        <div class="container"><a class="navbar-brand" href="#" style="color: #dde4eb;font-size: 26px;">Reece's Hub</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav ml-auto">
                    <?php foreach ($nav_items as $key => $array):
                        if ($key == $active): ?>
                            <li class="nav-item" role="presentation"><a class="nav-link active" href="<?= $array["url"] ?>"><?= $key ?></a></li>
                        <?php else: ?>
                            <li class="nav-item" role="presentation"><a class="nav-link text-white-50" href="<?= $array["url"] ?>"><?= $key ?></a></li>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </ul>
        </div>
        </div>
    </nav>
    <?php
}
?>
