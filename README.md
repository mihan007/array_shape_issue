ArrayShape issue
1. Create function that returns array and has ArrayShape attribute, save it as func1.php
````
#[ArrayShape(['hours' => 'string', 'minutes' => 'string'])]
function formatTime(): array
{
    return [
        'hours' => '10',
        'minutes' => '20'
    ]
}
````
2. If we call function `formatTime` at file 1 and use it results then PhpStorm autocomplete help use correct array key and 
show at autocomplete popup **with** type of key.
![ash1](https://user-images.githubusercontent.com/939122/130180516-eeef7a6e-ee8d-4d85-b791-3d487c4212a5.png)
3. Create another file 2 and require file 1 there
4. If we call function at file 2 system and use `formatTime` there PhpStorm autocomplete also helps 
use correct array key but show at autocomplete popup **without type of key**. 
Expected: PhpStorm show at autocomplete popup **with** type of key.
![ash2](https://user-images.githubusercontent.com/939122/130180524-f1503e6b-5784-40c1-9ab7-a09bab669ffa.png)

