<?php require_once APPROOT . '/views/inc/header.php' ?>
    <a href="<?=URLROOT;?>/posts" class="btn btn-info">
        <img src="https://img.icons8.com/plasticine/30/000000/restart.png">
        Back
    </a>
    <div class="card card-body bg-light mt-4">
        <h2>
            <img src="https://img.icons8.com/plasticine/60/000000/create-new.png">
            Edit Post
        </h2>
        <p>Create a post with this form</p>
        <form action="<?=URLROOT;?>/posts/edit/<?=$data['id'];?>" method="post">
            <div class="form-group">
                <label for="title">
                    <img src="https://img.icons8.com/plasticine/30/000000/edit.png">
                    Title:<sup>*</sup>
                </label>
                <input
                        type="text"
                        name="title"
                        class="form-control  <?=(!empty($data['title_err'])) ? 'is-invalid' : ''; ?>"
                        value="<?=$data['title'];?>"
                >
                <span class="invalid-feedback"><?=$data['title_err'];?></span>
            </div>
            <div class="form-group">
                <label for="body">
                    <img src="https://img.icons8.com/plasticine/30/000000/business-contact.png">
                    Body:<sup>*</sup>
                </label>
                <textarea
                        name="body"
                        id="body"
                        rows="6"
                        class="form-control  <?=(!empty($data['body_err'])) ? 'is-invalid' : ''; ?>"
                ><?=$data['body'];?></textarea>
                <span class="invalid-feedback"><?=$data['body_err'];?></span>
            </div>

            <div class="row">
                <div class="col">
                    <button type="submit" class="btn btn-info">
                        <img src="https://img.icons8.com/plasticine/30/000000/save-close.png">
                        Save
                    </button>
                </div>
            </div>
        </form>
    </div>
<?php require_once APPROOT . '/views/inc/footer.php' ?>

