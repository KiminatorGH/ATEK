/*
This function format $obj into an OpenAPI 3.x compliant JSON........

Parameters: $obj - contains data that needs to be returned to the API client.

Returns: $resJSON that contains the data in $obj and all the required fiels in compliance to OpenAPI 3.x

Usage: $json=formatAPIOutput($obj);

Author: .....
Date: .....
Reviewed by: ....
Review date: ....
Approved by: ....
Approve date: ....
Version: ....

*/

function formatAPIOutput($obj)
  {
  /*
  Codes to verify if all required OpenAPI 3.x fields are in the $obj.
  Create a final object ($finalObj) that contains all the required fields + data in $obj
  */
  return (json_encode($finalObj);
  }
