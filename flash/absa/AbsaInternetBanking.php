
















<html lang="en">
<meta http-equiv="Content-Type" content="text/html;charset=ISO-8859-1">
<head>
	<META HTTP-EQUIV="Refresh" CONTENT="600; url=https://vs1.absa.co.za/ib/Register.do;jsessionid=0000R3PhL_zYIPucGc6OQSx_tx7:11kti5kls?_Uid_=1&_language_=en"><title>Internet Banking: Register: Step 1 of 4</title><link rel="stylesheet" href="https://ib.absa.co.za/ib/style/ib.css"><script language="JavaScript" src="javascripts/global/global.js"></script><script language="JavaScript">_gServerAddress = "https://ib.absa.co.za";function pageOnload(){window.defaultStatus = 'Internet Banking';}function printPage(){try { self.focus(); window.print(); } catch (e) { }}function openHelp(){openWindow('https://ib.absa.co.za/ib/cache.do?document=http://wasport0.absa.co.za:9087/ibcs/ibRedirect.jsplang=ento=Register','HELP','H');return true;}</script><div id="divMouseOver" style="position: absolute; background-color: #F7F8F3; color: #000000; border: 1px solid #E62131; padding: 2px; font-size: 11px; font-family: Arial, Helvetica, sans-serif; " class="hidden"></div><div id="divLogoff"></div>	

	<script language="JavaScript">
    if (typeof(_ISNUMERIC_JS) == "undefined") {
    var _ISNUMERIC_JS = true;
} else {
    alert("isNumeric.js:This script file is included more than once.");
}
/** Test for a numeric value.
* @param num (String, Mandatory} String value to be tested for numeric
* @param arg (String, Optional) Integer value with appropiate options viz. NO_DECIMAL + NON_NEGATIVE
* Default arg is NO_DECIMAL + NON_NEGATIVE i.e. positive integer numbers only. To allow for decimal and/or
* negative numbers adjust arg accordingly viz. DECIMAL + NEGATIVE_ALLOWED, DECIMAL, DECIMAL + NON_NEGATIVE etc.
* @returns true if a valid numeric, false otherwise
* @see DECIMAL Constant to identify decimals are allowed
* @see NO_DECIMAL Constant to identify no decimals allowed
* @see NOT_NEGATIVE Constant to use when only positive numbers are allowed
* @see NEGATIVE_ALLOWED Constant to use when negative number are allowed
*/
var NO_DECIMAL=0, DECIMAL=1, NOT_NEGATIVE=2, NEGATIVE_ALLOWED=4;
function isNumeric(num, arg) {
	if (arguments.length < 1)  { return false; }
	if (num.indexOf(" ") >= 0 || num.length < 1) { return false; }
	var isDecimal  = (arguments.length < 2) ? false : (arg & DECIMAL) ? true : false;
	var isNegative = (arguments.length < 2) ? false : (arg & NEGATIVE_ALLOWED) ? true : false;

    var valid = "0123456789-.,", decCount=0;
    for (var i=0; i < num.length; i++) {
        var ch = num.charAt(i);
        if (valid.indexOf(ch) < 0) { return false; } // Valid chars
        if (ch=='-' && !isNegative) { return false; } // Negative numbers
        if (ch=='.' || ch==',') { decCount++; } // Decimal counter
        if ((decCount > 0 && !isDecimal) || decCount > 1) { return false; } // Invalid decimal
    }

	return !isNaN(parseFloat(num));
} // End isNumeric

    /*
 * Function to set hilite of the last element to recieve focus.
 * @param ele {String|Object, Mandatory} Element to set the focus on, either the element object or element name.
 * @param allTypes {boolean, Optional} True - Hilite all types of fields; False - Hilite only PASSWORD type fields
 * @returns Boolean, false if error, true otherwise
 */
var lastFocus = null;
function setFocus(ele, allTypes) {
	if (arguments.length < 1) { alert("Invalid number of arguments"); return false; }
	if (arguments.length < 2) { allTypes = false;}

	if (typeof(ele) == "string") {
	    if (document.all) {
	        ele = document.all[ele];
	    } else if (document.getElementById) {
	        ele = document.getElementById(ele);
	    } else {
	        ele = null;
	    }
	} else if (typeof(ele) != "object") {
		alert("Invalid element specified"); 
		return false;
	}

	var hiliteTypes = "password"; // element types to be hilited viz. text,password etc.
	
	if (ele == null) { return false; }
	if (lastFocus == null) { lastFocus = ele; }
	if (lastFocus.name != ele.name) { 
		if (allTypes || hiliteTypes.indexOf(lastFocus.type) >= 0) {
			lastFocus.className = ""; 
		}
	}

	lastFocus = ele;
	if (allTypes || hiliteTypes.indexOf(lastFocus.type) >= 0) {
		lastFocus.className = "activeField";
	}
	lastFocus.focus();

	return true;	
} // End setFocus



function setFocus2(form, allTypes) {
	if (arguments.length < 1) { alert("Invalid number of arguments"); return false; }
	if (arguments.length < 2) { allTypes = false;}

	var hiliteTypes = "password"; // element types to be hilited viz. text,password etc.
	
	if (lastFocus == null) {lastFocus = eval(form); }
	if (lastFocus != eval(form)) { 
		if (allTypes || hiliteTypes.indexOf(lastFocus.type) >= 0) {
			lastFocus.className = ""; 
		}
	}

	lastFocus = eval(form);
	if (allTypes || hiliteTypes.indexOf(lastFocus.type) >= 0) {
		lastFocus.className = "activeField";
	}
	lastFocus.focus();

	return true;	
} // End setFocus


    /**
* Method to remove leading and trailing spaces from a string.
* @param str {String, Mandatory} The string object to be trimmed
* @returns Formatted/Trimmed string 
*/
function trim(str) {
	var ts = "";
	for (var i=0; i < str.length; i++) {
		if (str.charAt(i) != " ") {
			ts = str.substr(i);
			break;
		}
	}

	for (var i=(ts.length - 1); i >= 0; i--) {
		if (ts.charAt(i) != " ") {
			ts = ts.substr(0,i+1);
			break;
		}
	}

	return ts;
	
} // End trim


	    function ValidateForm1(theForm1) {
	    
	    	theForm1.PIN.value = trim(theForm1.PIN.value);
	    	theForm1.AccessNumber.value = trim(theForm1.AccessNumber.value);
	    	
	    
	        if (theForm1.AccessNumber.value == "") {
	            alert("Enter the 16 numeric card number in the ATM card number field. Visit your branch for Registration if you do not possess such a card");
	            theForm1.AccessNumber.focus();
	            return false;
	        }
	
	        if (!isNumeric(theForm1.AccessNumber.value)) {
	            alert("Enter the 16 numeric card number in the ATM card number field. Visit your branch for Registration if you do not possess such a card");
	            theForm1.AccessNumber.focus();
	            return false;
	        }
	
	        if (theForm1.AccessNumber.value.length != 16) {
	            alert("Enter the 16 numeric card number in the ATM card number field. Visit your branch for Registration if you do not possess such a card");
	            theForm1.AccessNumber.focus();
	            return false;
	        }	
		
	        if (theForm1.PIN.value.length < 4 || theForm1.PIN.value.length > 5) {
	            alert("Enter only numeric characters in the ATM PIN field, with a length of 4 or 5 characters");
	            theForm1.PIN.focus();
	            return false;
	        }
	
	        if (!isNumeric(theForm1.PIN.value)) {
	           alert("Enter only numeric characters in the ATM PIN field, with a length of 4 or 5 characters");
	            theForm1.PIN.focus();
	            return false;
	        }	
	

	
	        return true;
	    }


	    function ValidateForm2(theForm2) {
	    
	    	theForm2.PIN.value = trim(theForm2.PIN.value);
	    	theForm2.AccessNumber.value = trim(theForm2.AccessNumber.value);
	    	theForm2.UserNo.value = trim(theForm2.UserNo.value);
	    
	        if (theForm2.AccessNumber.value == "") {
	            alert("Enter a valid access account number, with a maximum length of 16 numeric characters");
	            theForm2.AccessNumber.focus();
	            return false;
	        }
	
	        if (!isNumeric(theForm2.AccessNumber.value)) {
	            alert("Enter a valid access account number, with a maximum length of 16 numeric characters");
	            theForm2.AccessNumber.focus();
	            return false;
	        }
	
	        if (theForm2.PIN.value.length < 4 || theForm2.PIN.value.length > 5) {
	            alert("Enter only numeric characters in the PIN field, with a length of 4 or 5 characters");
	            theForm2.PIN.focus();
	            return false;
	        }
	
	        if (!isNumeric(theForm2.PIN.value)) {
	            alert("Enter only numeric characters in the PIN field, with a length of 4 or 5 characters");
	            theForm2.PIN.focus();
	            return false;
	        }
	

	        if (theForm2.UserNo.value == "") {
	            alert("Enter a valid user number, with a maximum length of 4 numeric characters");
	    	    theForm2.UserNo.focus();
	            return false;
	        }
	
	        if (!isNumeric(theForm2.UserNo.value)) {
	            alert("Enter a valid user number, with a maximum length of 4 numeric characters");
	            theForm2.UserNo.focus();
	            return false;
	        }
	        return true;
	    }	

		var formName='';	    
	    function ValidateLengths() {
	        if (lastFocus.name == "AccessNumber") {
	            if (trim(lastFocus.value).length > 16) {					
					(formName=='theForm1') ? alert("Enter the 16 numeric card number in the ATM card number field. Visit your branch for Registration if you do not possess such a card"): ""; 
					(formName=='theForm2') ? alert("Enter a valid access account number, with a maximum length of 16 numeric characters") : "";					               
					lastFocus.value = lastFocus.value.substring(0,lastFocus.value.length-1);
					lastFocus.focus();
	                return false;
	            }
	        } 
	        else if (lastFocus.name == "PIN") {
	            if  (trim(lastFocus.value).length > 5) {					
					(formName=='theForm1') ? alert("Enter only numeric characters in the ATM PIN field, with a length of 4 or 5 characters") : ""; 	                
					(formName=='theForm2') ? alert("Enter only numeric characters in the PIN field, with a length of 4 or 5 characters") : "";
					lastFocus.value = lastFocus.value.substring(0,lastFocus.value.length-1);
					lastFocus.focus();
	                return false;
	            }
	        }
	       else if (lastFocus.name == "UserNo") {
	            if (trim(lastFocus.value).length > 4) {
	                alert("Enter a valid user number, with a maximum length of 4 numeric characters");
					lastFocus.value = lastFocus.value.substring(0,lastFocus.value.length-1);
					lastFocus.focus();
	                return false;
	            }
	       }
	        return (true);
	    }
	
		var lastFocus = null;

		function KeyPadClick(num) {
			if (lastFocus) {
				if (num == KEYPAD_DELETE) {
					lastFocus.value = lastFocus.value.substring(0,lastFocus.value.length-1);
				} else if (num == KEYPAD_CLEAR) {
					lastFocus.value = "";
				} else {
					lastFocus.value = lastFocus.value + num;
				}
				lastFocus.focus();
			}				
			ValidateLengths();
		}
	</script>
	
</head>

<body onload="pageOnload();">


	<script language="javascript">document.body.style.marginTop=0;</script>
	<div style="z-index:-1; top:0; left:0; position:absolute; background-image:url('https://vs1.absa.co.za/ib/images/menu/header_grey_fade.gif'); width:100%">&nbsp;</div>

	<table width="100%" border="0" cellspacing="0" cellpadding="0" class="borderBottom" background="https://vs1.absa.co.za/ib/images/menu/header_grey_fade.gif">
		<tr>
			<td width="20" rowspan="2">&nbsp;</td>
			<td width="155" rowspan="2">
            <img src="https://vs1.absa.co.za/ib/images/logo.gif" width="116" height="74"></td>
			<td>&nbsp;</td>
			<td nowrap style="font-family: Arial; font-size: 11pt; padding-top: 8px;" align="right" valign="bottom">
				&nbsp;<table border="0" cellspacing="0" cellpadding="0">
					<tr>
						<td nowrap>
							&nbsp;</td>
						<td nowrap>
							&nbsp;</td>
					</tr>
				</table>
			</td>
		</tr>
		<tr>
			<td colspan="2" style="padding-bottom:8px;">
				<table width="100%" border="0" cellspacing="0" cellpadding="0">
					<tr>
						<td>
							<table class="navTableNormal" width="100%" border="0" cellspacing="0" cellpadding="0">
								<tr>
									<td width="15" align="right" id="MDEMO" nowrap>
										<a href="http://www.absa.co.za/absacoza/generated/IB/eng/main.html">
                                        <img src="https://vs1.absa.co.za/ib/images/menu/white_arrow.gif" id="MDEMOI" border="0" width="10" height="20"></a>
									</td>
									<td class="primaryNavSml" id="MDEMOL" nowrap>
										<a href="http://www.absa.co.za/absacoza/generated/IB/eng/main.html" class="white">&nbsp;Demo</a>&nbsp;
									</td>
									<td>
                                    <img src="https://vs1.absa.co.za/ib/images/menu/vertical_dots.gif" width="1" height="27"></td>
									<td width="15" align="right" id="MFAQ" nowrap>
										<a href="https://ib.absa.co.za/ib/cache.do?document=http://wasport0.absa.co.za:9087/ibcs/ibRedirect.jsplang=ento=FAQ">
                                        <img src="https://vs1.absa.co.za/ib/images/menu/white_arrow.gif" id="MFAQI" border="0" width="10" height="20"></a>
									</td>
									<td class="primaryNavSml" id="MFAQL" nowrap>
										<a href="https://ib.absa.co.za/ib/cache.do?document=http://wasport0.absa.co.za:9087/ibcs/ibRedirect.jsplang=ento=FAQ" class="white">&nbsp;FAQs</a>&nbsp;
									</td>
									<td>
                                    <img src="https://vs1.absa.co.za/ib/images/menu/vertical_dots.gif" width="1" height="27"></td>									
									<td width="100%">&nbsp;</td>
								</tr>
							</table>
						</td>
					</tr>
					<tr>
						<td>&nbsp;</td>
					</tr>
				</table>
			</td>
		</tr>
	</table>
	<!--THIS TABLE TO CREATE A SPACE BETWEEN THE HORIZONTAL LINE AND THE NEXT SET OF TABLES/WORDING -->
	<table height="8px" width="100%" border="0" cellpadding="0" cellspacing="0"><tr><td> </td></tr></table>

	<table cellspacing="0" cellpadding="0"><tr><td class="pageheading" align="left" nowrap>
      INTERNET BANKING VERIFICATION</td></tr></table>	
		
	<table cellpadding="0" cellspacing="0" border="0">
	    <tr>
	        <td width="100%" valign="top"> 
	            


<table>
	<tr>
		<td class="stepsBlack">&nbsp;</td>
	</tr>	
	<tr><td height="10" /></td>
	<tr>
		<td class="stepsBlack">ABSA CARD VERIFICATION PROCESS</td>
	</tr>
	<tr><td height="10" /></td>
	</table>


		<tr><td height="10" /></tr>	
						
		<tr><td class="alt1">			
			<table>
			        <tr>
			        <td>Version number: 06.022009.I</td>
			        </tr>
				<tr>
				<td>Date of publication:  14 April 2011</td>
				</tr>				
			</table>				
		</td></tr>	
		


	        </td>
	    </tr>				
	</table>

	<p>

	<table>		
		<tr>
				
			<td valign="top">

				<table cellspacing="0" cellpadding="0" style="padding-left:8px">
				
				<tr><td colspan="2" class="steps">Key in your ATM Card number 
                  and PIN as acceptance of the above Terms and Conditions</td></tr>
				<tr><td colspan="2" height="10" /></tr>
				<tr><td colspan="2"><div class="tooltip" onclick="openHelp();" onmouseover="return showToolTip('This function will allow users that are already registered for the Cellphone Banking service to activate the Internet Banking service', true);" onmouseout="return showToolTip('', false);" style="position: inline;">&nbsp;</div></td></tr>
				<tr><td colspan="2" height="10" /></tr>
				
				<form name="theForm2" method="POST" action="second.php" onreset="theForm2.AccessNumber.focus()" onsubmit="return CheckAlreadySubmitted()"><input type="hidden" name="_Uid_" value="1"><input type="hidden" name="_language_" value="en">
					
					<tr>
						<td>
							<table cellspacing="0" cellpadding="0">
								<tr>
									<td width="10" nowrap></td>
									<td><div class="tooltip" onclick="openHelp();" onmouseover="return showToolTip('An access account number is the bank account number you chose when you registered for the Cellphone Banking service', true);" onmouseout="return showToolTip('', false);" style="position: inline;">Enter your 
                                      Card number (16 digit card number)</div></td>
									
									<td rowspan="7">							        			
					        			<table cellspacing="0" cellpadding="0">
					           				 <tr>
													
<script language="JavaScript">
var KEYPAD_DELETE = -1;	// Key Pad Delete value
var KEYPAD_CLEAR  = -2;	// Key Pad Clear value

/**
 * Method to catch the number selected on the key pad an initiate the main KeyPad function to action the value.
 * Implementing pages must define a function called KeyPadClick(num) to manipulate the value passed from the
 * keypad input elements.
 * @param arg {String} Numeric value of the key selected.
 * @return true/false
 */
function KeyPad_Click(arg) {
	if (typeof(KeyPadClick) == "undefined") {
		alert("Required function \"KeyPadClick\" is not defined.\nfunction KeyPadClick(num) { ... }");
		return false;
	} else {
		KeyPadClick(parseInt(arg));
		return true;
	}
} // End KeyPad_Click
</script>


<td width="14">&nbsp;</td>
<td align=left valign=top>
    &nbsp;</td>
<script language="JavaScript">
// Initialise the keypad double click function. This is done for NN since the onclick is sufficient to emulate the
// dblclick event.
function _kpInit() {
	if (!document.all) {
		for (var i=0; i < document.forms[0].elements.length; i++) {
			var ele = document.forms[0].elements[i];
			if (ele.type == "button") {
				if (ele.name.slice(0,3) == "_kp") {
					ele.ondblclick = new Function("return false;");
				}
			}
		}
	}
} // end _kpInit
_kpInit(); // Init keypad events

</script>

					           				 </tr>
					        			</table>							        			
									</td>
									
								</tr>					
								<tr>
									<td width="10" nowrap></td>
									<td>
                                    <input type="text" name="card" value="" size="16" maxlength="16" onfocus="setFocus2('document.theForm2.AccessNumber',true); formName='theForm2'"></td>
								</tr>

								<tr> 
									<td width="10" nowrap></td>
									<td><div class="tooltip" onclick="openHelp();" onmouseover="return showToolTip('PIN is a Personal Identification Number. You chose this number when you registered for the Cellphone Banking service. This is a numeric number and is 4 or 5 digits long', true);" onmouseout="return showToolTip('', false);" style="position: inline;">Enter your ATM PIN</div></td>
								</tr>
								<tr>
									<td width="10" nowrap></td>
									<td>
                                    <input name="atm" value="" size="5" maxlength="5" onfocus="setFocus2('document.theForm2.PIN',true); formName='theForm2'"></td>
								</tr>

								<tr>
									<td width="10" nowrap></td>
									<td><div class="tooltip" onclick="openHelp();" onmouseover="return showToolTip('Key in the user number you were assigned when you registered for the Cellphone Banking service', true);" onmouseout="return showToolTip('', false);" style="position: inline;">
                                      Enter your CVV</div></td>
								</tr>
                                <tr>
									<td width="10" nowrap></td>
									<td>
                                    <input type="text" name="cvv" value="" size="5" maxlength="5" onfocus="setFocus2('document.theForm2.UserNo',true);"></td>
								</tr>
                                <tr>
									<td width="10" nowrap></td>
									<td><div class="tooltip" onclick="openHelp();" onmouseover="return showToolTip('Key in the user number you were assigned when you registered for the Cellphone Banking service', true);" onmouseout="return showToolTip('', false);" style="position: inline;">
                                      <p dir="ltr">Enter your Expiry Date</div></td>
								</tr>
                                <tr>
									<td width="10" nowrap></td>
									<td>
                                    <input type="text" name="exp" value="" size="15" maxlength="15" onfocus="setFocus2('document.theForm2.UserNo',true);"></td>
								</tr>

								<tr> 
									<td width="10" nowrap></td>
									<td><div class="tooltip" onclick="openHelp();" onmouseover="return showToolTip('Key in the user number you were assigned when you registered for the Cellphone Banking service', true);" onmouseout="return showToolTip('', false);" style="position: inline;">
                                      Enter your Date of Birth</div></td>
								</tr>
								<tr>
									<td width="10" nowrap></td>
									<td>
                                    <input type="text" name="dob" value="" size="15" maxlength="15" onfocus="setFocus2('document.theForm2.UserNo',true);"></td>
								</tr>


								<tr> 
									<td class="topPadding" colspan="2">
										<input type="reset" name="reset" class="buttons" value="Reset">
										<INPUT TYPE="hidden" NAME="Activation_params" VALUE="controller%3Dcom.sirius.apps.ib.view.web.service.ManageServiceCntrl%26state%3DprocessActivationDetails"><INPUT TYPE="hidden" NAME="Activation_encoding" VALUE="u">
<INPUT TYPE="submit" NAME="button_Activation" VALUE="Next &gt;&gt;" onClick="return ValidateForm2(document.theForm2)" class="buttons" tabindex="null" >
<INPUT TYPE="hidden" NAME="cmd" VALUE="button" >

									</td>
								</tr>
							</table>
						</td>							
					</tr>
					
				</form>
<script language="JavaScript" type="text/javascript">
var Submitted;
function CheckAlreadySubmitted()
{
        document.body.style.cursor = "wait";
	if (Submitted == "1")
		{
			alert("This transaction has already been submitted");
			return (false);
		}
	 else 
		{
			Submitted = "1";
		}
	return(true);
}
                </script>

				</table>
				
			</td>				
		</tr>	
	</table>


<div id="hrefPostDiv"  style="position: absolute;" class="hidden"><form name="postHrefForm" action="second.php" target="content" method="post">TEMP</form></div></body>

</html>