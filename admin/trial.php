<?php
if(shell_exec(escapeshellcmd('python radiuschecker.py '))){
    echo "success111";
}
else{
    echo "failed111";
}
?>