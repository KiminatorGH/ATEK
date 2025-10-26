/*
Thsi function verifies if all required fields are with the input objects, and identifies if there are also other fields that are not in the object.
Notes for this example purposes: the object to be analyzed only has one depth, i.e. this function only validate one depth.
                                 no validation is made on the value of each object's element.


Parameters: $obj - containing the object with key->value
            #keys - array of required keys (string) to be validated

Returns: $resObj
          -> valid = true|false;                                            // if all required fields are verified (true) otherwise (false)
          -> extraKeys = array(of none required keys in the $obj)|null;     // if extra keys are present in addition to required fields, default null

Usage: $res = validateRequiredVars($obj, $keys);
       if($res->valid && $res->extraKeys===NULL)
          {
          // All clear, use the $obj as intended
          }
        else if($res->valid && $res->extraKey)
          {
          // Might be security risk associated with other none required data.
          // Decision is required of what and how to use the $obj
          }
       else
          {
          // Invalid $obj
          // Handle exception......
          }

Author: AU XYZ
Date: Oct. 26 2025
Reviewed by: R XYZ
Review date: .....
Approved by: AP XYZ
Appvoved date: ...
Vesion 1.0
*/

function validateRequiredVars($obj, $keys)
  {
  $valid=true;
  $extraKeys=array();
  $keysInObj=sort(array_keys(get_object_vars($obj)));                    // Get all the keys in $obj and sort them ascending
  $keys=sort($keys);                                                     // Sort $key ascending
  for($i=0, $n=count($keys); $i<$n; $i++)                                // This loop validates that all keys are presents in keys in $obj
    {
    if($valid)                                                           // As soon as one key is not present, don't have to do the rest
      {
      $valid=in_array($keys[$i], $keysInObj);
      }
    }
  for($i=0, $n=count($keysInObj); $i<$n; $i++)                          // This loop get keys in $obj that are not in $key
      {
      if(in_array(($keysInObj[$i], $keys))
        array_push($extraKeys, $keysInObj[$i])
      }
  if(!count($extraKeyes))
    $extraKeys=NULL;
  $res=new stdClass();
  $res->valid=$valid;
  $res->extraKeys=$extraKeys;
  return ($res);
  }
