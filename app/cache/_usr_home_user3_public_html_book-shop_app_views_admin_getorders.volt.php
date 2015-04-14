<?php echo $this->tag->stylesheetLink('css/admin/listOrders.css'); ?>
<div id='body-container'>
    <div id='border'>

    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
    
   <div class="row" id="row-first">
       
             <div class="col-md-3">N/n</div> <div class="col-md-3">Date</div> <div class="col-md-3">Amount, $</div><div class="col-md-3">Status</div>
        
    </div>

  
       
        <?php $v20094978671iterator = $orders; $v20094978671incr = 0; $v20094978671loop = new stdClass(); $v20094978671loop->length = count($v20094978671iterator); $v20094978671loop->index = 1; $v20094978671loop->index0 = 1; $v20094978671loop->revindex = $v20094978671loop->length; $v20094978671loop->revindex0 = $v20094978671loop->length - 1; ?><?php foreach ($v20094978671iterator as $order) { ?><?php $v20094978671loop->first = ($v20094978671incr == 0); $v20094978671loop->index = $v20094978671incr + 1; $v20094978671loop->index0 = $v20094978671incr; $v20094978671loop->revindex = $v20094978671loop->length - $v20094978671incr; $v20094978671loop->revindex0 = $v20094978671loop->length - ($v20094978671incr + 1); $v20094978671loop->last = ($v20094978671incr == ($v20094978671loop->length - 1)); ?>
        <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingOne">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#<?php echo $v20094978671loop->index; ?>" aria-expanded="true" aria-controls="collapseOne">
                       <div class="row">
                           
                                <div class="col-md-3"><?php echo $v20094978671loop->index; ?> </div><div class="col-md-3"><?php echo $order->getDate(); ?></div><div class="col-md-3"><?php echo $order->getSummary(); ?></div><div class="col-md-3">
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
    <div id="<?php echo $v20094978671loop->index; ?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
      <div class="panel-body">
            <?php $v20094978672iterator = $itemsOrder[$order->getIdOrders()]; $v20094978672incr = 0; $v20094978672loop = new stdClass(); $v20094978672loop->length = count($v20094978672iterator); $v20094978672loop->index = 1; $v20094978672loop->index0 = 1; $v20094978672loop->revindex = $v20094978672loop->length; $v20094978672loop->revindex0 = $v20094978672loop->length - 1; ?><?php foreach ($v20094978672iterator as $item) { ?><?php $v20094978672loop->first = ($v20094978672incr == 0); $v20094978672loop->index = $v20094978672incr + 1; $v20094978672loop->index0 = $v20094978672incr; $v20094978672loop->revindex = $v20094978672loop->length - $v20094978672incr; $v20094978672loop->revindex0 = $v20094978672loop->length - ($v20094978672incr + 1); $v20094978672loop->last = ($v20094978672incr == ($v20094978672loop->length - 1)); ?>
                <?php if ($v20094978672loop->first) { ?>
                    <table class="table table-hover">
                        <tr>
                            <th>N/n</th><th>Book</th><th>Count</th><th>Price</th>
                        </tr>        
                <?php } ?>
                    <tr>
                        <td><?php echo $v20094978672loop->index; ?></td><td><?php echo $item->books->getName(); ?></td><td><?php echo $item->itemsOrder->getCount(); ?></td><td><?php echo $item->itemsOrder->getPrice(); ?></td>
                    </tr>
                <?php $v20094978672incr++; } ?> 
                    </table>
         </div>
     </div>
        <?php $v20094978671incr++; } ?>
    
    
    
      </div>
    </div>
</div>

<?php echo $this->tag->javascriptInclude('js/admin/orders.js'); ?>