<?php echo $this->tag->stylesheetLink('css/order/getorder.css'); ?>

<div class='container-body'>
<div class='container'>
    <p> Your order amount is: <?php echo $totalSum; ?> </p>
    <?php if (empty($discountValue) == false) { ?>
        <p>Your discount: <?php echo $discountValue; ?> %</p>
        <p>Your order amount after discount is: <?php echo $finalAmount; ?></p>
    <?php } ?>
    <fieldset>
        <legend>Choose your payment system:</legend>
        <form action='./book-shop/order/grats' method='post'>
        <?php foreach ($payment as $system) { ?>
            <input type="radio" name="group1" value="<?php echo $system->getIdPayment(); ?>"> <?php echo $system->getName(); ?><br>
        <?php } ?>
        <p>
            <a href='./book-shop/order/cart'><input type='button' value="Cancel" class='btn btn-primary'></a>&nbsp;&nbsp;&nbsp;
            <input id='buy' type='submit' value='Buy' >
         </p>
        </form>
        </fieldset>
</div>
</div>

<?php echo $this->tag->javascriptInclude('js/order/getorder.js'); ?>