<?php
    session_start();

    session_unset();
    session_destroy();

    echo "
        <script language=javascript>
            window.location.href='../Login.html';
        </script>
    ";

?>