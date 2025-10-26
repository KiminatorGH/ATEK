/*
This function get data from a POST call.....

Parameters: $keys - array of keys string expected from the POST call

Returns: $obj
          ->valid = true|false                  // True of all keys are presents false otherwise
          ->data = array(key=>data)              // Associative array of data

Usage: $obj=getFromPost($keys);
       if($obj->valid)
          {
          /Do something with $obj->data //
          }
       else // Handle exception

Author: .....
Date: .....
Reviewed by: ....
Review date: ....
Approved by: ....
Approve date: ....
Version: ...
*/

function getFromPost($keys)
  {
  $valid=true;
  $res=array();
  for($i=0, $n=count($key); $i<$n; $i++)
    {
    if(isset($_POST[$keys[$i]]))
      {
      $res[$keys[$i]]=$_POST[$keys[$i]];
      }
    else
      {
      $valid=false;
      }
      }
    }
  $obj=new stdClass();
  $obj->valid=$valid;
  $obj->data=$res;
  return ($obj);
  }
