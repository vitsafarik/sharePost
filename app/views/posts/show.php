<?php require APPROOT . "/views/inc/header.php"; ?>
<a href="<?php echo URLROOT; ?>/posts" class="btn btn-light"><i class="fa fa-backward mr-1"></i>Back</a>
<br>
<h1><?php echo $data["post"]->title; ?></h1>
<div class="bg-secondary text-white p-2 mb-3">
    written by <?php echo $data["user"]->name; ?> on <?php echo $data["post"]->created_at; ?>
</div>
<p>
    <?php echo $data["post"]->body; ?>
</p>

<?php if ($data["post"]->user_id == $_SESSION["user_id"]) : ?>
    <hr>

    <div class="row">
        <div class="col">
            <a href="<?php echo URLROOT; ?>/posts/edit/<?php echo $data["post"]->id ?>" class="btn btn-dark">Edit</a>
        </div>
        <div class="col">
            <form action="<?php echo URLROOT; ?>/posts/delete/<?php echo $data["post"]->id; ?>" method="post" class="pull-right">
                <input type="submit" class="btn btn-danger" value="Delete">
            </form>
        </div>
    </div>



<?php endif; ?>


<?php require APPROOT . "/views/inc/footer.php"; ?>