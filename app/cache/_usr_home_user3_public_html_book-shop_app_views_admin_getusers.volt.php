<div class='content-container'>
  
    </select>
    <?php $v15483145101iterated = false; ?><?php $v15483145101iterator = $users; $v15483145101incr = 0; $v15483145101loop = new stdClass(); $v15483145101loop->length = count($v15483145101iterator); $v15483145101loop->index = 1; $v15483145101loop->index0 = 1; $v15483145101loop->revindex = $v15483145101loop->length; $v15483145101loop->revindex0 = $v15483145101loop->length - 1; ?><?php foreach ($v15483145101iterator as $user) { ?><?php $v15483145101loop->first = ($v15483145101incr == 0); $v15483145101loop->index = $v15483145101incr + 1; $v15483145101loop->index0 = $v15483145101incr; $v15483145101loop->revindex = $v15483145101loop->length - $v15483145101incr; $v15483145101loop->revindex0 = $v15483145101loop->length - ($v15483145101incr + 1); $v15483145101loop->last = ($v15483145101incr == ($v15483145101loop->length - 1)); ?><?php $v15483145101iterated = true; ?>
        <?php if ($v15483145101loop->first) { ?>
            <table class="table table-hover">
                <tr>
                    <th>N/n</th><th>Name</th><th>Discount</th>
                </tr>
        <?php } ?>
            <tr>
                <td><?php echo $v15483145101loop->index; ?></td><td><?php echo $user->getLogin(); ?></td>                
                <td>        
                      
                        <select class='select-discount' name='<?php echo $user->getIdUser(); ?>'>
                         <?php $v15483145102iterator = $discounts; $v15483145102incr = 0; $v15483145102loop = new stdClass(); $v15483145102loop->length = count($v15483145102iterator); $v15483145102loop->index = 1; $v15483145102loop->index0 = 1; $v15483145102loop->revindex = $v15483145102loop->length; $v15483145102loop->revindex0 = $v15483145102loop->length - 1; ?><?php foreach ($v15483145102iterator as $discount) { ?><?php $v15483145102loop->first = ($v15483145102incr == 0); $v15483145102loop->index = $v15483145102incr + 1; $v15483145102loop->index0 = $v15483145102incr; $v15483145102loop->revindex = $v15483145102loop->length - $v15483145102incr; $v15483145102loop->revindex0 = $v15483145102loop->length - ($v15483145102incr + 1); $v15483145102loop->last = ($v15483145102incr == ($v15483145102loop->length - 1)); ?>
                             <?php if ($v15483145102loop->first) { ?>
                                 <option value='null'>Null</option>
                             <?php } ?>
                         <?php if (($user->getDiscountIdDiscount() == $discount->getIddiscount())) { ?>
                            <option value='<?php echo $discount->getIddiscount(); ?>' selected><?php echo $discount->getValue(); ?>% </option>                           
                                <?php } else { ?>
                                 <option value='<?php echo $discount->getIddiscount(); ?>'><?php echo $discount->getValue(); ?>% </option>     
                            <?php } ?>                           
                         <?php $v15483145102incr++; } ?>
                           
                        </select>
                    
                </td>             
               
            </tr>
            <?php $v15483145101incr++; } if (!$v15483145101iterated) { ?>
            <h2>There're no one users in market!</h2>
    <?php } ?>
</div>

<?php echo $this->tag->javascriptInclude('js/admin/users.js'); ?>