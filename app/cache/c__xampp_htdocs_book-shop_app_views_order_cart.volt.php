<?php echo $this->tag->stylesheetLink('css/order/cart.css'); ?>
<div class='container-body'>
<div class="container-table">
<?php $v15890070361iterated = false; ?><?php $v15890070361iterator = $shopCard; $v15890070361incr = 0; $v15890070361loop = new stdClass(); $v15890070361loop->length = count($v15890070361iterator); $v15890070361loop->index = 1; $v15890070361loop->index0 = 1; $v15890070361loop->revindex = $v15890070361loop->length; $v15890070361loop->revindex0 = $v15890070361loop->length - 1; ?><?php foreach ($v15890070361iterator as $item) { ?><?php $v15890070361loop->first = ($v15890070361incr == 0); $v15890070361loop->index = $v15890070361incr + 1; $v15890070361loop->index0 = $v15890070361incr; $v15890070361loop->revindex = $v15890070361loop->length - $v15890070361incr; $v15890070361loop->revindex0 = $v15890070361loop->length - ($v15890070361incr + 1); $v15890070361loop->last = ($v15890070361incr == ($v15890070361loop->length - 1)); ?><?php $v15890070361iterated = true; ?>
    <?php if ($v15890070361loop->first) { ?>
        <table class="table table-hover">
            <tr>
                <th>N/n</th><th>NameBook</th><th>Count</th><th>Price</th><th ><p align="center">Remove</p></th>
            </tr>
    <?php } ?>
    <tr>
        <td><?php echo $v15890070361loop->index; ?></td>
        <td><?php echo $item->books->getName(); ?></td>
        <td><span class="glyphicon glyphicon-minus"></span><span class="number" name="<?php echo $item->books->getIdBook(); ?>">  <?php echo $item->shoppingCart->getCount(); ?>  </span><span class="glyphicon glyphicon-plus"></td>
        <td class='price'><?php echo $item->shoppingCart->getPrice(); ?></td>
        <td align="center"><span class='glyphicon glyphicon-trash' name="<?php echo $item->books->getIdBook(); ?>" ></span></td>
    </tr>
      <?php if ($v15890070361loop->last) { ?>
        <tr><td colspan="2" ></td><td align="left"> <b>Amount: </b><td><span id='amount'><?php echo $summary; ?></span></td><td></td></tr>
         <tr><td colspan="3" align="right"> </td><td>
                <form action='book-shop/order/getorder' method='post'>
                    <input type='submit' value='Order'> 
                </form>
                </td>
                <td></td>
            </tr>
          </table>
          
       
               
          
      <?php } ?>
  
    <?php $v15890070361incr++; } if (!$v15890070361iterated) { ?>
    <h3 align='center'>There are no one book in ur card</h3>
<?php } ?>
</div>
</div>


<?php echo $this->tag->javascriptInclude('js/order/cart.js'); ?>

