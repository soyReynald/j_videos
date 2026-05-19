<?php
require_once("../j_videos/private/conexion.php");

class MainController {

    protected $Conexion = ""; // Conexion string that completes the process of the conexion.

    function prompt_out() {
        echo '<form action="" method="POST"> <!-- File action: comes from PHP.-->
                <label for="user_id" class="labe_container">
                    Username:
                    <input type="text" name="username" id="user_id">
                </label>

                <label for="user_pw" class="labe_container">
                    <input type="password" name="username" id="user_pw">
                </label>

                <input type="submit" class="submit_btn" value="Send"/>
            </form>';
    }

    function get_connected($conn) {
        $conexion_custom_string = "";

        return $conexion_custom_string;
    }

}


?>