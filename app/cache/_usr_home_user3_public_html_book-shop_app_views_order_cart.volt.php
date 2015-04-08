<?php echo $this->tag->stylesheetLink('css/order/cart.css'); ?>
<div class="container-table">
<?php $v29604534331iterated = false; ?><?php $v29604534331iterator = $shopCard; $v29604534331incr = 0; $v29604534331loop = new stdClass(); $v29604534331loop->length = count($v29604534331iterator); $v29604534331loop->index = 1; $v29604534331loop->index0 = 1; $v29604534331loop->revindex = $v29604534331loop->length; $v29604534331loop->revindex0 = $v29604534331loop->length - 1; ?><?php foreach ($v29604534331iterator as $item) { ?><?php $v29604534331loop->first = ($v29604534331incr == 0); $v29604534331loop->index = $v29604534331incr + 1; $v29604534331loop->index0 = $v29604534331incr; $v29604534331loop->revindex = $v29604534331loop->length - $v29604534331incr; $v29604534331loop->revindex0 = $v29604534331loop->length - ($v29604534331incr + 1); $v29604534331loop->last = ($v29604534331incr == ($v29604534331loop->length - 1)); ?><?php $v29604534331iterated = true; ?>
    <?php if ($v29604534331loop->first) { ?>
        <table class="table table-striped">
            <tr>
                <th>N/n</th><th>NameBook</th><th>Count</th><th>Price</th><th ><p align="center">Remove</p></th>
            </tr>
    <?php } ?>
    <tr>
        <td><?php echo $v29604534331loop->index; ?></td>
        <td><?php echo $item->books->getName(); ?></td>
        <td><span class="glyphicon glyphicon-minus"></span><span class="number" name="<?php echo $item->books->getIdBook(); ?>">  <?php echo $item->shoppingCart->getCount(); ?>  </span><span class="glyphicon glyphicon-plus"></td>
        <td class='price'><?php echo $item->shoppingCart->getPrice(); ?></td>
        <td align="center"><span class='glyphicon glyphicon-remove' name="<?php echo $item->books->getIdBook(); ?>" ></span></td>
    </tr>
      <?php if ($v29604534331loop->last) { ?>
        <tr><td colspan="3" align="right"> <b>Amount: </b></td><td><span id='amount'><?php echo $summary; ?></span></td></tr>
          </table>
      <?php } ?>
  
    <?php $v29604534331incr++; } if (!$v29604534331iterated) { ?>
    <h3 align='center'>There are no one book in ur card</h3>
<?php } ?>
</div>



<?php echo $this->tag->javascriptInclude('js/order/cart.js'); ?>

