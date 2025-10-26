/*
This is an example of an API application to demonstrate the code structure that is scalable and adaptable.
It does not contain the complete coding.
It represents one of the API endpoint

For this example, it is assuming that the calling client is using POST.

Parameters: userId - string user's Id,
            userSecret - string user's secret

Usage: [from a jquery]: $.post("simpleAPI_01.php", {userId: "xxxxx", userSecret: "dksaskhasdf"}, function(resp)
        {
        // Do something with resp//
        });

Author: .....
Date: ...
Reviewed by: ....
Review date: ....
Approved by: ....
Approved date: ....
Revision: ....
*/

#include "$_SERVER['DOCUMENT_ROOT']/libraries/php/apiUtilitie.php";

$httpCode=200;                                                             // Default code to OK
// Get userId and userSecret from calling POST //
$postData=getFromPost(array("userId", "userSecret"));
if(!$postData->valid)                                                      // Bad request
  {
  $httpCode=400;
  }
else                                                                       // Got userId and userSecret .. continue
  {
  if(validateAuthen(
  }


