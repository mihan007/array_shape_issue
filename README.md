ArrayShape issue
1. Create function that returns array and has ArrayShape attribute, save it as func1.php
````
#[ArrayShape(['hours' => 'string', 'minutes' => 'string'])]
function formatTime(): array
{
    return [
    'hours' => '10',
    'minutes' => '20';
}
````
2. If we call function `formatTime` at file 1 and use it results then PhpStorm autocomplete help use correct array key and 
show at autocomplete popup **with** type of key.
3. Create another file 2 and require file 1 there
4. If we call function at file 2 system and use `formatTime` there PhpStorm autocomplete also helps 
use correct array key but show at autocomplete popup **without type of key**. 
Expected: PhpStorm show at autocomplete popup **with** type of key.
