/****************************************************************************************
* This function validates if a provide variable x is a number between upperLimit and 
* lowerLimit.
* 
* Parameters (any parameters denoted in this document within [] are optional)
*  - x
*  - [lowerLimit]=0x8000000000000000
*  - [upperLimit]=0xFFFFFFFFFFFFFFFF
*  
* Returns: boolean true if x is numerical and lowerLimit <= x >= upperLimiit
*
* Usage: 
*        x = any input from user or any result from other fuction;
*        isNumber=validateNumerical(x);
*        or
*        isNumber=validateNumerical(x, -100, +100);
*
* Version: 1.0
* Author: O. XYZ
* Date: Oct. 24, 2025
* Reviewed by: R. XYZ
* Approved by: A. XYZ
*****************************************************************************************/

function validateNumerical(x, lowerLimit=0x8000000000000000, upperLimit=0xFFFFFFFFFFFFFFFF)
  {
  return (typeof(x)==='number' && (x>=lowerLimit && x<=upperLimit));
  }
