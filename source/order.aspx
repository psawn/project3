<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<head><title>
	Sample paygate
</title>
    <style type="text/css">
        .style1 {
            height: 18px;
        }
    </style>
</head>
<body>
    <form name="form1" method="post" action="http://sandbox3.vtcebank.vn/testketnoi/order.aspx" id="form1">
<div>
<input type="hidden" name="__EVENTTARGET" id="__EVENTTARGET" value="" />
<input type="hidden" name="__EVENTARGUMENT" id="__EVENTARGUMENT" value="" />
<input type="hidden" name="__LASTFOCUS" id="__LASTFOCUS" value="" />
<input type="hidden" name="__VIEWSTATE" id="__VIEWSTATE" value="/wEPDwULLTEzMTg0MjUxNjYPZBYCAgMPZBYCAgEPEGRkFgECBGRkwPmRqXNgBiVgXC5yzml7s+rGsxh003izLNS+qthfoUw=" />
</div>

<script type="text/javascript">
//<![CDATA[
var theForm = document.forms['form1'];
if (!theForm) {
    theForm = document.form1;
}
function __doPostBack(eventTarget, eventArgument) {
    if (!theForm.onsubmit || (theForm.onsubmit() != false)) {
        theForm.__EVENTTARGET.value = eventTarget;
        theForm.__EVENTARGUMENT.value = eventArgument;
        theForm.submit();
    }
}
//]]>
</script>


<div>

	<input type="hidden" name="__VIEWSTATEGENERATOR" id="__VIEWSTATEGENERATOR" value="F94CE37F" />
	<input type="hidden" name="__EVENTVALIDATION" id="__EVENTVALIDATION" value="/wEdAA6Z4BFoyhQp/KlPeXNPM/R1cHtRVpp2vLrgYXNHnIv987LfJi3e8Q84AU4tj0EEMdvoB1yoOz8hOZPvVC9BYlu3C4bNkPP3gger3lFDuQnjf6xSRWp7hznb5AL7G8BYvmFbiHNQydMZ0krJyI2V3TZPbMEVCCWbJqB3UUZquZpnpu4xQvrwnNOSxEUe5UdbJbX4XMRPgGazUJXDGd+GWR2sZCuHN8Y7zN0DmfqbgGOlV6JkbUfXrZmpjhPu6HvBpZnTPLyW8TjzIRJTXIeFWDbfzfg78Z8BXhXifTCAVkevd/QfpUSY2Bq8gEUj17LHoDvGpznU0V6jaYxYLdWq9TMx" />
</div>
        <div>
           
            <table>

                <tr>
                    <td>Hệ thống
                    </td>
                    <td>
                        <select name="ddlEnvinroment" onchange="javascript:setTimeout(&#39;__doPostBack(\&#39;ddlEnvinroment\&#39;,\&#39;\&#39;)&#39;, 0)" id="ddlEnvinroment">
	<option value="http://sandbox1.vtcebank.vn/payportalv2/checkout.html">Sandbox</option>
	<option value="http://sandbox.vtcpay.vn/pay2.0/portalgateway/checkout.html">Sandbox_Pay2_0</option>
	<option value="http://alpha1.vtcpay.vn/portalgateway/checkout.html">Alpha_Pay2_0</option>
	<option value="https://beta-pay.vtc.vn/portalgateway/checkout.html">Beta</option>
	<option selected="selected" value="https://pay.vtc.vn/bank-gateway/checkout.html">Live</option>

</select>
                    </td>
                </tr>

                <tr>
                    <td>Mã website
                    </td>
                    <td>
                        <input name="txtWebsiteID" type="text" value="627" id="txtWebsiteID" readonly/>
                    </td>
                </tr>

                 <tr>
                    <td>Giá trị đơn hàng:
                    </td>
                    <td>
                        <input name="txtTotalAmount" type="text" value="10000" id="txtTotalAmount" readonly/>
                    </td>
                </tr>

                 <tr>
                    <td>Tài khoản nhận
                    </td>
                    <td>
                        <input name="txtReceiveAccount" type="text" value="0986699480" id="txtReceiveAccount" readonly="readonly" />
                    </td>
                </tr>

                <tr>
                    <td class="style1">Đơn vị thanh toán:
                    </td>
                    <td class="style1">
                       <select name="ddlCurrency" id="ddlCurrency">
	<option selected="selected" value="VND">VND</option>
	

</select>
                    </td>
                </tr>

<!--                <tr>
                    <td>Mã đơn hàng
                    </td>
                    <td>
                        <input name="txtOrderID" type="text" value="20200806103518" id="txtOrderID" />
                    </td>
                </tr> -->


                             


                <tr>
                    <td></td>
                    <td>
                        <input type="submit" name="Button1" value="Thanh toán đơn hàng" id="Button1" style="width:188px;" />
                    </td>
                </tr>

                <tr>
                    <td colspan="2"> <span id="Label1"></span></td>
                </tr>

            </table>
        </div>
    </form>
</body>
</html>
