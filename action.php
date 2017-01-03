<?php
require('mailin.php');
$result = array("code" => "" );

if(isset($_POST['SubmitButton'])){
$mailin = new Mailin("https://api.sendinblue.com/v2.0", "DkTr9tnFAc0I5s7O", 5000);
  $data = array( "email" => "hello",
        "attributes" => array("NAME"=>"name", "SURNAME"=>"surname"),
        "listid" => array(1,4,6),
        "listid_unlink" => array(2,5)
    );
$result = $mailin->create_update_user($data);
    if($result["code"] == "success"){
        echo '<div class="alert alert-success">
                <strong>Success!</strong> Indicates a successful or positive action.
              </div>';
    }
    else{
        echo '<div class="alert alert-danger">
                <strong>Danger!</strong> Indicates a dangerous or potentially negative action.
              </div>';
    }
}

?>
