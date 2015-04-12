<?php echo $this->tag->stylesheetLink('css/index/orderlist.css'); ?>

<div id='body-container'>

    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
    
    <table border=1>
        <tr>
            <th>N/n</th><th>Date</th><th>Amount</th><th>Status</th>
        </tr>
    </table>

  
       
        <?php $v30396382351iterator = $orders; $v30396382351incr = 0; $v30396382351loop = new stdClass(); $v30396382351loop->length = count($v30396382351iterator); $v30396382351loop->index = 1; $v30396382351loop->index0 = 1; $v30396382351loop->revindex = $v30396382351loop->length; $v30396382351loop->revindex0 = $v30396382351loop->length - 1; ?><?php foreach ($v30396382351iterator as $order) { ?><?php $v30396382351loop->first = ($v30396382351incr == 0); $v30396382351loop->index = $v30396382351incr + 1; $v30396382351loop->index0 = $v30396382351incr; $v30396382351loop->revindex = $v30396382351loop->length - $v30396382351incr; $v30396382351loop->revindex0 = $v30396382351loop->length - ($v30396382351incr + 1); $v30396382351loop->last = ($v30396382351incr == ($v30396382351loop->length - 1)); ?>
        <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingOne">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#<?php echo $v30396382351loop->index; ?>" aria-expanded="true" aria-controls="collapseOne">
                        <table border='1'>
                            <tr>  
                                <td><?php echo $v30396382351loop->index; ?> </td><td><?php echo $order->getDate(); ?></td><td><?php echo $order->getSummary(); ?></td><td><?php echo $status[$order->getIdOrders()]; ?></td>
                            </tr>
                        </table> 
                    </a>
                </h4>
            </div>
        </div>
    <div id="<?php echo $v30396382351loop->index; ?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
      <div class="panel-body">
            <?php $v30396382352iterator = $itemsOrder[$order->getIdOrders()]; $v30396382352incr = 0; $v30396382352loop = new stdClass(); $v30396382352loop->length = count($v30396382352iterator); $v30396382352loop->index = 1; $v30396382352loop->index0 = 1; $v30396382352loop->revindex = $v30396382352loop->length; $v30396382352loop->revindex0 = $v30396382352loop->length - 1; ?><?php foreach ($v30396382352iterator as $item) { ?><?php $v30396382352loop->first = ($v30396382352incr == 0); $v30396382352loop->index = $v30396382352incr + 1; $v30396382352loop->index0 = $v30396382352incr; $v30396382352loop->revindex = $v30396382352loop->length - $v30396382352incr; $v30396382352loop->revindex0 = $v30396382352loop->length - ($v30396382352incr + 1); $v30396382352loop->last = ($v30396382352incr == ($v30396382352loop->length - 1)); ?>
                <?php if ($v30396382352loop->first) { ?>
                    <table border='1'>
                        <tr>
                            <th>N/n</th><th>Book</th><th>Count</th><th>Price</th>
                        </tr>        
                <?php } ?>
                    <tr>
                        <td><?php echo $v30396382352loop->index; ?></td><td><?php echo $item->getBooksIdBook(); ?></td><td><?php echo $item->getCount(); ?></td><td><?php echo $item->getPrice(); ?></td>
                    </tr>
                <?php $v30396382352incr++; } ?> 
                    </table>
         </div>
     </div>
        <?php $v30396382351incr++; } ?>
    
    
    
    
    </div>
</div>

<?php echo $this->tag->javascriptInclude('js/index/orderlist.js'); ?>
