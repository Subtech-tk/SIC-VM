<?hh

  function recursive_array_search($needle,$haystack)
  {
      foreach($haystack as $key=>$value)
      {
          $current_key=$key;
          if($needle===$value || ( is_array($value) && recursive_array_search($needle,$value) !== false ) )
          {
              return $current_key;
          }
      }
      return false;
  }

  function LDA ($value)
  {
    return $value;
  }
