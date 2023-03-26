
<?=template_header('Place Order');?>

<?php
function buy() {
echo <<<EOT
EOT;
}
      
?>
<style type="text/css">
	 form {
	display: flex;
	flex-flow: column;
	margin: 40px 0;
}
form input[type="number"] {
	width: 400px;
	padding: 10px;
	margin-bottom: 15px;
	border: 1px solid #ccc;
	color: #555555;
	border-radius: 5px;
}
button {
	background: #4e5c70;
	border: 0;
	color: #FFFFFF;
	width: 400px;
	padding: 12px 0;
	text-transform: uppercase;
	font-size: 14px;
	font-weight: bold;
	border-radius: 5px;
	cursor: pointer;
	margin-left: 300px;
}button:hover {
	background: #434f61;
}

</style>
<div class="placeorder content-wrapper">
    <h1>Your Order Has Been Placed</h1>
<h2 style="text-align: center;">Select Your payment method</h2>
<table >
	<tr>
		<td>
		<a href="https://pay.google.com/"><img src="img/gpay.png"
         alt="" style="width:40%"></a> 
		</td>

		<td>
		<a href="https://www.paypal.com/"><img src="img/paypal.png"
         alt="" style="width:80%; "></a> 
		</td>
	</tr>
	<tr>
		<td>
		<a href="
https://paytm.com/"><img src="img/paytm.png"
         alt="" style="width:40%"></a> 
		</td>

		<td>
		<a href="https://www.bhimupi.org.in/"><img src="img/bhim.png"
         alt="" style="width:80%; "></a> 
		</td>
	</tr>
	
	<tr>
		<td>
 <form>
            <p style="	margin-left: 300px;
">if you want hard Copy for Free Book or Buy Book.</p>
        </form>
		</td>
	</tr>
</table>
    <p>Thank you for ordering with us, we'll contact you by email with your order details.</p>
</div>
<?=template_footer();?>

