<div class="container">

    <h1><?php echo $title; ?></h1>


    <div class="alert alert-success">
        <p><?php echo $message; ?></p>
    </div>


    <?php
    if(isset($posts)){


            echo "<div class='well'>";
            echo "<h3>".$posts['post_title']."</h3>";
            echo $posts['post_content'];
            echo "</div>";


    }
    ?>


</div>

