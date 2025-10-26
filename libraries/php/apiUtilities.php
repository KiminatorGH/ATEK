/*
This file contains commonly used functions for various API application.
These functions can be used individually without using this file.  However, this file is created to simplify and limit the number of include statements.

Each files are located in this (or other sub-directory) for scalability and re-usability.

Parameter: see each individual function file
Usaage: usage of this file: #include "$_SERVER['DOCUMENT_ROOT']/libraries/php/apiUtilitie.php";
        usage of each individual functions, refer to individual function file

Author: A. XYZ
Date: Oct. 26 2025
Reviewed by: R. XZY
Review date: ....
Approved by: AP. XYZ
Approve date: ....
Version: 1.0

*/

#include "./getFromPost.php";                     // Get data from POST call
#include "./validateRequiredVars.php";            // Validate require field and their values
#include "./validateAuthen.php";                  // Validate requesting authentication
#include "./formatAPIOutput.php";                 // Encode JSON output in compiancy with OpenAI 3.x

// Include other as needed //
