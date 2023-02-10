<?php

echo "tokenWA GetEnv -> ".getEnv('tokenWA');
echo " tokenWA Local -> ".getEnv('tokenWALocal');

foreach (getenv() as $settingKey => $settingValue) {
   echo ' settingKey-> '.$settingKey.' -> '.$settingValue."<hr/>";
}
?>
