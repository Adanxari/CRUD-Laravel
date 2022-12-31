<?php
if (DB::connection()->getPdo()){
    echo "Successfully connected to ".DB::connection()->getDatabase();
};
?>
