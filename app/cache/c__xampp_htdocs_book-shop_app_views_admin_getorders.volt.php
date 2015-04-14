<?php echo $this->tag->stylesheetLink('css/admin/listOrders.css'); ?>
<div id='body-container'>
    <div id='border'>

    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
    
   <div class="row" id="row-first">
       
             <div class="col-md-3">N/n</div> <div class="col-md-3">Date</div> <div class="col-md-3">Amount, $</div><div class="col-md-3">Status</div>
        
    </div>

  
       
        <?php $v14586712141iterator = $orders; $v14586712141incr = 0; $v14586712141loop = new stdClass(); $v14586712141loop->length = count($v14586712141iterator); $v14586712141loop->index = 1; $v14586712141loop->index0 = 1; $v14586712141loop->revindex = $v14586712141loop->length; $v14586712141loop->revindex0 = $v14586712141loop->length - 1; ?><?php foreach ($v14586712141iterator as $order) { ?><?php $v14586712141loop->first = ($v14586712141incr == 0); $v14586712141loop->index = $v14586712141incr + 1; $v14586712141loop->index0 = $v14586712141incr; $v14586712141loop->revindex = $v14586712141loop->length - $v14586712141incr; $v14586712141loop->revindex0 = $v14586712141loop->length - ($v14586712141incr + 1); $v14586712141loop->last = ($v14586712141incr == ($v14586712141loop->length - 1)); ?>
        <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingOne">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#<?php echo $v14586712141loop->index; ?>" aria-expanded="true" aria-controls="collapseOne">
                       <div class="row">
                           
                                <div class="col-md-3"><?php echo $v14586712141loop->index; ?> </div><div class="col-md-3"><?php echo $order->getDate(); ?></div><div class="col-md-3"><?php echo $order->getSummary(); ?></div><div class="col-md-3">
                                 <select class='select-status' name='<?php echo $order->getIdorders(); ?>'>
                                <?php foreach ($statuses as $statusOne) { ?>   
                                    <?php if (($status[$order->getIdOrders()] == $statusOne->getIdstatus())) { ?>
                                        <option selected value='<?php echo $statusOne->getIdstatus(); ?>' ><?php echo $statusOne->getName(); ?></option>
                                    
                                    <?php } else { ?>
                                        <option value='<?php echo $statusOne->getIdstatus(); ?>'><?php echo $statusOne->getName(); ?></option>
                                    <?php } ?>
                                <?php } ?>
                                  </select>
                                </div>
                          
                        </div> 
                    </a>
                </h4>
            </div>
        </div>
    <div id="<?php echo $v14586712141loop->index; ?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
      <div class="panel-body">
            <?php $v14586712142iterator = $itemsOrder[$order->getIdOrders()]; $v14586712142incr = 0; $v14586712142loop = new stdClass(); $v14586712142loop->length = count($v14586712142iterator); $v14586712142loop->index = 1; $v14586712142loop->index0 = 1; $v14586712142loop->revindex = $v14586712142loop->length; $v14586712142loop->revindex0 = $v14586712142loop->length - 1; ?><?php foreach ($v14586712142iterator as $item) { ?><?php $v14586712142loop->first = ($v14586712142incr == 0); $v14586712142loop->index = $v14586712142incr + 1; $v14586712142loop->index0 = $v14586712142incr; $v14586712142loop->revindex = $v14586712142loop->length - $v14586712142incr; $v14586712142loop->revindex0 = $v14586712142loop->length - ($v14586712142incr + 1); $v14586712142loop->last = ($v14586712142incr == ($v14586712142loop->length - 1)); ?>
                <?php if ($v14586712142loop->first) { ?>
                    <table class="table table-hover">
                        <tr>
                            <th>N/n</th><th>Book</th><th>Count</th><th>Price</th>
                        </tr>        
                <?php } ?>
                    <tr>
                        <td><?php echo $v14586712142loop->index; ?></td><td><?php echo $item->books->getName(); ?></td><td><?php echo $item->itemsOrder->getCount(); ?></td><td><?php echo $item->itemsOrder->getPrice(); ?></td>
                    </tr>
                <?php $v14586712142incr++; } ?> 
                    </table>
         </div>
     </div>
        <?php $v14586712141incr++; } ?>
    
    
    
      </div>
    </div>
</div>

<?php echo $this->tag->javascriptInclude('js/admin/orders.js'); ?>