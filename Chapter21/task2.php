<?php
function shutdown()
{
    file_put_contents('/home/graniwyn/projects/project.local/Chapter21/visits_log.txt', date("d-m-Y H:i:s") . "\n", FILE_APPEND);
}
register_shutdown_function('shutdown');
