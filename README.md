# Laravel Numbers::forHumans() pt_BR locale wrapper

A function 'wrapper' that takes in the string output from the original Number::forHumans() in laravel 10.33+ and returns it in pt_BR locale.


* Convert the given Number::forHumans to ordinal pt_BR locale.

* @param  string $output from Number::forHumans, already formatted in English ie.: '10 thousand','1 million'
* @param  ?bool  $abreviation returns an abreviation of the number, ie.: '10 mil','1 mi','1 bi'    
* @return string
 
* function forHumansPtBr(string $formattedNumber, ?bool $abreviation = false) : string 
