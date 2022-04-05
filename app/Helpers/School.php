<?php

if (!function_exists('departments')) {
  function departments()
  {
    return [
      'Elementary', 'JHS', 'SHS', 'College'
    ];
  }
}

if (!function_exists('grade_levels')) {
  function grade_levels()
  {
    return [
      'kinder','Grade 1','Grade 2','Grade 3','Grade 4','Grade 5','Grade 5','Grade 6', 'Grade 7', 'Grade 8', 'Grade 9', 'Grade 10', 'Grade 11','Grade 12','STEM 11','STEM 12','HUMSS 11','HUMSS 12','GAS 11','GAS 12','ICT 11','ICT 12','TVL 11','TVL 12'
    ];
  }
}
