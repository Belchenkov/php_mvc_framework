<?php require_once APPROOT . '/views/inc/header.php' ?>
    <div class="row">
        <div class="col-md-6 mb-3 text-left">
            <h1>
                <img src="https://img.icons8.com/plasticine/60/000000/note.png">
                Posts
            </h1>
        </div>
        <div class="col-md-6 text-right pt-3">
            <a href="<?=URLROOT;?>/posts/add" class="btn btn-info btn-sm pull-right">
                <img src="https://img.icons8.com/plasticine/40/000000/plus.png"> Add Post
            </a>
        </div>
    </div>
    <?php foreach ($data['posts'] as $post) : ?>
        <div class="card card-body mb-3">
            <h4 class="card-title">
                <img src="https://img.icons8.com/plasticine/40/000000/tag-window.png">
                <?=$post->title;?>
            </h4>
            <div class="bg-light p-2 mb-3">
                <strong>Written by</strong>
                <img src="https://img.icons8.com/plasticine/30/000000/user-male.png">
                <em><?=$post->name;?></em> on
                <img src="https://img.icons8.com/plasticine/30/000000/calendar.png">
                <em><?=$post->postCreated;?></em>
            </div>
            <p class="card-text">
                <img src="https://img.icons8.com/plasticine/40/000000/view-details.png">
                <?=$post->body;?>
            </p>
            <div class="col-md-2">
                <a href="<?=URLROOT;?>/posts/show/<?=$post->postId;?>" class="btn btn-outline-secondary">
                    <img src="https://img.icons8.com/plasticine/30/000000/info.png">
                    Details
                </a>
            </div>
        </div>
    <?php endforeach; ?>
<?php require_once APPROOT . '/views/inc/footer.php' ?>

