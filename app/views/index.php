<div class="container">

    <h1><?php echo $title; ?></h1>


    <div class="alert alert-success">
        <p><?php echo $message; ?></p>
    </div>


    <?php
    if(isset($about)){

        echo "<pre>";
        var_dump($about);
        echo "</pre>";

        echo "<pre>";

        echo "class TestModel extends Model { public function some_data_source(){ return array( 'version' =&gt; 'dev-master', 'app' =&gt; 'Simple PHP Framework', 'website' =&gt; 'https://github.com/brendanwex/custom-php-framework' ); } }";

        echo "</pre>";
    }
    ?>


</div>

