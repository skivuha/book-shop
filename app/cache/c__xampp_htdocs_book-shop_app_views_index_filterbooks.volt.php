<?php echo $this->tag->stylesheetLink('css/index/filter.css'); ?>
<div class='filter-header'>
     
       
               <?php if (empty($languageView)) { ?>
                    <div style='width:40px; float:left;'>
                            <?php echo $this->tag->linkTo(array('', 'Back')); ?>
                    </div>
                    <div class='filter'>
                         <p align='center' class='name-filter'>Author: <?php echo $name; ?></p>
                    </div>
                    <?php } else { ?>
                     <div style='width:40px; float:left;'>
                            <?php echo $this->tag->linkTo(array('', 'Back')); ?>
                    </div>
                    <div class='filter'>
                        <p align='center'  class='name-filter'>Language: <?php echo $name; ?></p>
                    </div>
                 <?php } ?>
            
        
    </div>
     
    <div id='container' class='cp-clear'>   
     <div class='row'>
          <?php $v37921732981iterated = false; ?><?php $v37921732981iterator = $books; $v37921732981incr = 0; $v37921732981loop = new stdClass(); $v37921732981loop->length = count($v37921732981iterator); $v37921732981loop->index = 1; $v37921732981loop->index0 = 1; $v37921732981loop->revindex = $v37921732981loop->length; $v37921732981loop->revindex0 = $v37921732981loop->length - 1; ?><?php foreach ($v37921732981iterator as $book) { ?><?php $v37921732981loop->first = ($v37921732981incr == 0); $v37921732981loop->index = $v37921732981incr + 1; $v37921732981loop->index0 = $v37921732981incr; $v37921732981loop->revindex = $v37921732981loop->length - $v37921732981incr; $v37921732981loop->revindex0 = $v37921732981loop->length - ($v37921732981incr + 1); $v37921732981loop->last = ($v37921732981incr == ($v37921732981loop->length - 1)); ?><?php $v37921732981iterated = true; ?>
           <div id='book-div' class="col-md-3">
                 <div class='img-book'>            
                 <?php echo $this->tag->linkTo(array('index/detail/' . $book->getIdbook() . '/' . $id, $this->tag->image(array($imagePath . $book->getIdbook() . '.jpg', 'alt' => 'Picture was removed', 'title' => $book->getName())))); ?>
                 </div>
                       <div class='description'>
                           <p><b><i><?php echo $book->getName(); ?></b></i> </p>
                           <p class='price'><?php echo $book->getPrice(); ?> $</p>
                       </div>
                       <div class='form-div'>
                           <?php echo $this->tag->form(array('index/buy/' . $book->getIdbook(), 'method' => 'post')); ?>
                                <?php echo $this->tag->submitButton(array('Add to cart', '')); ?>
                           <?php echo $this->tag->endForm(); ?>
                       </div>
                 </div>
                  <?php if (((($v37921732981loop->index) % (4)) == 0)) { ?>
                            </div>
                            <div class='row'>
                       <?php } ?>
                 <?php $v37921732981incr++; } if (!$v37921732981iterated) { ?>
                    <h2>There're no one books in magazine! </h2>
            <?php } ?>  
            </div>
    
<?php echo $this->tag->javascriptInclude('js/index/filter.js'); ?>