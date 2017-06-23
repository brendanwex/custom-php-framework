<div class="container">

    <h1><?php echo $title; ?></h1>


    <div class="alert alert-success">
        <p><?php echo $message; ?></p>
    </div>


    <?php
    if(isset($posts)){

        foreach($posts as $post){

            echo "<div class='well'>";
            echo "<h3>".$post['post_title']."</h3>";
            echo "<a href='home/article/".$post['post_slug']."/' class='btn btn-primary'>Read</a>";
            echo "</div>";

        }
    }
    ?>


</div>

