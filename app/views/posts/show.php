<?php require_once APPROOT . '/views/inc/header.php' ?>
    <a href="<?=URLROOT;?>/posts" class="btn btn-info">
        <img src="https://img.icons8.com/plasticine/30/000000/restart.png">
        Back
    </a>
    <div class="mt-4">
        <h2>
            <img src="https://img.icons8.com/plasticine/60/000000/bookmark-ribbon.png">
            <?=$data['post']->title;?>
        </h2>
        <div class="p-2 mb-3">
            <strong>Written by</strong>
            <img src="https://img.icons8.com/plasticine/30/000000/user-male.png">
            <em><?=$data['user']->name;?></em> on
            <img src="https://img.icons8.com/plasticine/30/000000/calendar.png">
            <em><?=$data['post']->created_at;?></em>
        </div>
        <p>
            <img src="https://img.icons8.com/plasticine/40/000000/view-details.png">
            <?=$data['post']->body;?>
        </p>
    </div>
    <?php if ($data['post']->user_id == $_SESSION['user_id']) : ?>
        <hr>
        <div class="d-flex justify-content-between">
            <a href="<?=URLROOT;?>/posts/edit/<?=$data['post']->id;?>" class="btn btn-dark">
                <img src="https://img.icons8.com/plasticine/30/000000/create-new.png">
                Edit
            </a>
            <form action="<?=URLROOT;?>/posts/delete/<?=$data['post']->id;?>" method="post">
                <button type="submit" class="btn btn-danger">
                    <img src="https://img.icons8.com/plasticine/30/000000/close-window.png">
                    Delete
                </button>
            </form>
        </div>
    <?php endif; ?>
<?php require_once APPROOT . '/views/inc/footer.php' ?>
