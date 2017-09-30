<?php
ob_start();
session_destroy();
?><script>location.href = "<?php echo URL . "inicio" ?>";</script><?php
ob_end_flush();
?>