<div class="alert alert-danger alert-dismissible" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    <?php foreach ($messages as $message) { ?>
        <div><?php echo htmlspecialchars($message) ?></div>
    <?php } ?>
</div>
