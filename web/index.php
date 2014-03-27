<?php require_once('./config.php'); ?>

<form action="charge.php" method="post">
  <script src="https://checkout.stripe.com/checkout.js" class="stripe-button"
    data-key="<?php echo $stripe['publishable_key']; ?>"
    data-name="My Widget Factory"
    data-amount="5000"
    data-description="You are buying magic!"
    data-image="https://wac.a8b5.edgecastcdn.net/80A8B5/achievement-images/treehouse.png"
    data-label="Buy Some Magic!"
    data-shipping-address="true"
    data-billing-address="true"
    >
  </script>
</form>
