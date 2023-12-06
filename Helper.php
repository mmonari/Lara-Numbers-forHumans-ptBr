<?php 

if(!function_exists('forHumansPtBr')){        
    /**
    * Convert the given Number::forHumans to ordinal pt_BR locale.
    *
    * @param  string  $output from Number::forHumans, already formatted in English ie.: '10 thousand','1 million'
    * @param  ?bool  $abreviation returns an abreviation of the number, ie.: '10 mil','1 mi','1 bi'    
    * @return string
    */
    function forHumansPtBr(string $formattedNumber, ?bool $abreviation = false) : string 
    {
        $translationsSingular = [
            'thousand' => 'mil',
            'million'  => 'milhão',
            'billion'  => 'bilhão',
            'trillion' => 'trilhão',
            'quadrillion' => 'quadrilhão',
        ];
        $translationsPlural = [
            'thousand' => 'mil',
            'million'  => 'milhões',
            'billion'  => 'bilhões',
            'trillion' => 'trilhões',
            'quadrillion' => 'quadrilhões',

        ];
        $translationsAbreviation = [
            'thousand' => 'mil',
            'million'  => 'mi',
            'billion'  => 'bi',
            'trillion' => 'tri',
            'quadrillion' => 'quadri',
        ];
        
        preg_match('/([\d.]+)\s*([a-z]+)/i', $formattedNumber, $matches);

        if (isset($matches[1]) && isset($matches[2])) {
            $number = $matches[1];
            $unit = $matches[2];

            if ($abreviation) {
                $translations = $translationsAbreviation;
            } else {
                $translations = $number == 1 ? $translationsSingular : $translationsPlural;
            }
            
            $translatedUnit = $translations[$unit] ?? $unit;
            return "$number $translatedUnit";
        }
        
        // Return the original input if no translation is possible
        return $formattedNumber;
    }
}