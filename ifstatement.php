
    <?php 
    $title = "If Statement";

    include 'includes/header.php';

    $grade = 80;

    if($grade >= 50){
        echo '<h2 style="color: green">YOU HAVE PASSED</h3>';
    }
    else{
        echo '<h2 style="color: red">YOU HAVE FAILED</h2>';
    }
    $grade = 'A';
    if($grade == 'A'){
        echo '<h2 style="color: blue">YOU ARE A SUPERSTAR!</h2>';
    }
    elseif($grade == 'B'){
        echo '<h2 style="color: green">YOU DID WELL!</h2>';
    }
    else{
        echo '<h2 style="color: red">YOU NEED IMPROVEMENT!</h2>';
    }

    require 'includes/footer.php';

    ?>

