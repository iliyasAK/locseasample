<?php include_once 'header.php'; ?>
    <div class="container m-auto d-block">
        <br>
        <h1 class="text-center text-success">View All Videos</h1>
        <?php if($msg = $this->session->flashdata('msg')): ?>
            <div class="alert alert-info alert-dismissible fade show" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    <span class="sr-only">Close</span>
                </button>
                <?php echo $msg;?>
            </div>
        <?php endif;?>
        <?php echo anchor('userinput/create', "Add Details", 'class="btn btn-success"'); ?>
        <br><br>

        <table class="table table-hover table-dark">
            <?php if(count($post)): ?>
    <?php foreach($post as $item): ?>
            <tr>
                <td>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-4">
                                <h4 class="text-white"><?php echo $item->title; ?></h4><br>
                                <p class="text-white"><?php echo $item->description; ?></p><br>
                            </div>
                            <div class="col-lg-8">
                                <iframe width="560" height="315" src="<?php echo 'https://www.youtube.com/embed/'.$item->youtube_link; ?>"
                                        frameborder="0"
                                        allow="autoplay; encrypted-media" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                    <br>
                </td>
            </tr>
    <?php endforeach;?>
            <?php else:?>
                <tr><td>No Records Found!</td></tr>
            <?php endif;?>
        </table>
    </div>
<?php include_once 'footer.php'; ?>