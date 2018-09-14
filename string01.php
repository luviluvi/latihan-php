<?php
echo 'this is a simple string';

echo 'You can also have embedded newlines in strings this way as it is okay to do ';

//Outputs: Arnold once said: "I'll be back"
echo 'Arnold once said: "I\'ll be back"';

//Outputs:' You deleted c:\*.*?<br>';
echo 'You deleted c:\*.*?';

//Outputs: ' You deleted c:\*.*?<b>';
echo "This will no expand: \n a newline";

//Outputs: variables do not $expand $either
echo 'Variables do not $expand $either';
?>