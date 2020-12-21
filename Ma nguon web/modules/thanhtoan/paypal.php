<div id="paypal-button-container"></div>
<script src="https://www.paypal.com/sdk/js?client-id=sb&currency=USD" data-sdk-integration-source="button-factory"></script>
<script>	
		money = <?php echo $_GET['tong'] ?>;
		money = Math.round(money/23*100.3)/50;
		paypal.Buttons({
      	style: {
          shape: 'pill',
          color: 'gold',
          layout: 'horizontal',
          label: 'paypal',
          
      },
      createOrder: function(data, actions) {
          return actions.order.create({
              purchase_units: [{
                  amount: {
                      value: money
                  }
              }]
          });
      },
      onApprove: function(data, actions) {
          return actions.order.capture().then(function(details) {
              alert('Transaction completed by ' + details.payer.name.given_name + '!');
          });
      }
  }).render('#paypal-button-container');	
	
</script>
<!--layout: 'vertical',-->
     