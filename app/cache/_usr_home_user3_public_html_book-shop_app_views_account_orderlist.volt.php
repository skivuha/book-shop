<?php echo $this->tag->stylesheetLink('css/index/orderlist.css'); ?>

<div id='body-container'>
    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
    
    <table border=1>
        <tr>
            <th>N/n</th><th>Date</th><th>Amount</th><th>Status</th>
        </tr>
    </table>

  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingOne">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
         <table border='1'>
        <?php $v15944419121iterator = $orders; $v15944419121incr = 0; $v15944419121loop = new stdClass(); $v15944419121loop->length = count($v15944419121iterator); $v15944419121loop->index = 1; $v15944419121loop->index0 = 1; $v15944419121loop->revindex = $v15944419121loop->length; $v15944419121loop->revindex0 = $v15944419121loop->length - 1; ?><?php foreach ($v15944419121iterator as $order) { ?><?php $v15944419121loop->first = ($v15944419121incr == 0); $v15944419121loop->index = $v15944419121incr + 1; $v15944419121loop->index0 = $v15944419121incr; $v15944419121loop->revindex = $v15944419121loop->length - $v15944419121incr; $v15944419121loop->revindex0 = $v15944419121loop->length - ($v15944419121incr + 1); $v15944419121loop->last = ($v15944419121incr == ($v15944419121loop->length - 1)); ?>
            <tr>  
                <td><?php echo $v15944419121loop->index; ?> </td><td><?php echo $order->getDate(); ?></td><td><?php echo $order->getSummary(); ?></td><td><?php echo ($status[$order->getIdOrders()])->getdsdame(); ?></td>
            </tr>
        <?php $v15944419121incr++; } ?>
        </table> 
        </a>
      </h4>
    </div>
    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
      <div class="panel-body">
      </div>
    </div>
  </div>   


 
</div>

<?php echo $this->tag->javascriptInclude('js/index/orderlist.js'); ?>
