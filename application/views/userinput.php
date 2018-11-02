<?php include_once 'header.php'; ?>
    <div class="container">
        <div class="col-lg-8 m-auto">
        <br>
        <h2 class="text-center text-success">Input Your Details</h2>
        <?php echo form_open('userinput/save', 'class="form-horizontal"');
        $titledata = array(
            'type' => 'text',
            'name' => 'title',
            'placeholder' => 'Input your title ...',
            'class' => 'form-control'
        );
        $descdata = array(
            'type' => 'text',
            'name' => 'description',
            'placeholder' => 'Input your description ...',
            'class' => 'form-control'
        );
        $vidurldata = array(
            'type' => 'text',
            'name' => 'youtube_link',
            'placeholder' => 'Input your video id ...',
            'class' => 'form-control'
        );
        $btnsubmitdata = array(
            'type' => 'submit',
            'name' => 'submit',
            'value' => 'Submit Post!',
            'class' => 'btn btn-success'
        );

        echo form_label('Title', 'title')."<br>";
        echo form_input($titledata)."<br>";
        echo form_error('title', '<div class="text-danger">', '</div><br>');
        echo form_label('Description', 'desc')."<br>";
        echo form_input($descdata)."<br>";
        echo form_error('description', '<div class="text-danger">', '</div><br>');
        echo form_label('YouTube Video ID', 'link')."<br>";
        echo form_input($vidurldata)."<br>";
        echo form_error('youtube_link', '<div class="text-danger">', '</div><br>');
        echo "<div class=\"text-center\">".form_input($btnsubmitdata)."</div>";
        echo form_close(); ?>
        </div>
    </div>
<?php include_once 'footer.php'; ?>