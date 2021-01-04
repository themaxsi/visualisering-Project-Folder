<?php

    if ($_POST["newuser-password"] == $_POST["newuser-passwordrepeat"])
    {
        return true;
    }
    else
    {
        return false;
    }

?>