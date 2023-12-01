<?php

include 'app.php';

echo $blade->run("about",array("title"=>"Mictocomputing Society - Everything small with a CPU")); // it calls /views/hello.blade.php