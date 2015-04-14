<div class='content-container'>
  
    </select>
    <?php $v12713217451iterated = false; ?><?php $v12713217451iterator = $users; $v12713217451incr = 0; $v12713217451loop = new stdClass(); $v12713217451loop->length = count($v12713217451iterator); $v12713217451loop->index = 1; $v12713217451loop->index0 = 1; $v12713217451loop->revindex = $v12713217451loop->length; $v12713217451loop->revindex0 = $v12713217451loop->length - 1; ?><?php foreach ($v12713217451iterator as $user) { ?><?php $v12713217451loop->first = ($v12713217451incr == 0); $v12713217451loop->index = $v12713217451incr + 1; $v12713217451loop->index0 = $v12713217451incr; $v12713217451loop->revindex = $v12713217451loop->length - $v12713217451incr; $v12713217451loop->revindex0 = $v12713217451loop->length - ($v12713217451incr + 1); $v12713217451loop->last = ($v12713217451incr == ($v12713217451loop->length - 1)); ?><?php $v12713217451iterated = true; ?>
        <?php if ($v12713217451loop->first) { ?>
            <table class="table table-hover">
                <tr>
                    <th>N/n</th><th>Name</th><th>Discount</th>
                </tr>
        <?php } ?>
            <tr>
                <td><?php echo $v12713217451loop->index; ?></td><td><?php echo $user->getLogin(); ?></td>                
                <td>        
                      
                        <select class='select-discount' name='<?php echo $user->getIdUser(); ?>'>
                         <?php $v12713217452iterator = $discounts; $v12713217452incr = 0; $v12713217452loop = new stdClass(); $v12713217452loop->length = count($v12713217452iterator); $v12713217452loop->index = 1; $v12713217452loop->index0 = 1; $v12713217452loop->revindex = $v12713217452loop->length; $v12713217452loop->revindex0 = $v12713217452loop->length - 1; ?><?php foreach ($v12713217452iterator as $discount) { ?><?php $v12713217452loop->first = ($v12713217452incr == 0); $v12713217452loop->index = $v12713217452incr + 1; $v12713217452loop->index0 = $v12713217452incr; $v12713217452loop->revindex = $v12713217452loop->length - $v12713217452incr; $v12713217452loop->revindex0 = $v12713217452loop->length - ($v12713217452incr + 1); $v12713217452loop->last = ($v12713217452incr == ($v12713217452loop->length - 1)); ?>
                             <?php if ($v12713217452loop->first) { ?>
                                 <option value='null'>Null</option>
                             <?php } ?>
                         <?php if (($user->getDiscountIdDiscount() == $discount->getIddiscount())) { ?>
                            <option value='<?php echo $discount->getIddiscount(); ?>' selected><?php echo $discount->getValue(); ?>% </option>                           
                                <?php } else { ?>
                                 <option value='<?php echo $discount->getIddiscount(); ?>'><?php echo $discount->getValue(); ?>% </option>     
                            <?php } ?>                           
                         <?php $v12713217452incr++; } ?>
                           
                        </select>
                    
                </td>             
               
            </tr>
            <?php $v12713217451incr++; } if (!$v12713217451iterated) { ?>
            <h2>There're no one users in market!</h2>
    <?php } ?>
</div>

<?php echo $this->tag->javascriptInclude('js/admin/users.js'); ?>