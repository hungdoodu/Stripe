<?php require_once('./config.php'); ?>
 
<?php
 #set your variables
 
 $name         = 'My Company';
 $currency     = 'usd';
 $description  = 'Value Plan';
 $amount = $_POST['amount'];
 echo "So you want to buy a gift-card with amount: " . $amount . "<br>";
 echo "And the address of the gift-card is: ... <br>";
 echo "Hit on Pay with Card when you are ready <br>";
 
?>

<center><form action="charge.php" method="post">
<!-- make these hidden input types for the post action to charge.php -->
<input  type="hidden" name="amount"      value="<?php echo $amount?>">
<input type="hidden" name="name"        value="<?php echo $name;?>">
<input type="hidden" name="currency"    value="<?php echo $currency;?>">
<input type="hidden" name="description" value="<?php echo $description;?>">
 

<script src="https://checkout.stripe.com/checkout.js" class="stripe-button"

        data-key =           "<?php echo $stripe['publishable_key']; ?>"
        data-amount =        "<?php echo $amount;?>"
        data-name =          "<?php echo $name;?>"
        data-currency =      "<?php echo $currency;?>"
        data-description =   "<?php echo $description;?>"
     
        >

</script>
</form>