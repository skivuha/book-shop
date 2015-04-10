<?php echo $this->tag->stylesheetLink('css/index/filter.css'); ?>
<div class='filter-header'>
     
       
               <?php if (empty($languageView)) { ?>
                    <div style='width:40px; float:left;'>
                            <?php echo $this->tag->linkTo(array('', 'Back')); ?>
                    </div>
                    <div class='filter'>
                         <p align='center' class='name-filter'><?php echo $t->_('author'); ?>: <?php echo $name; ?></p>
                    </div>
                    <?php } else { ?>
                     <div style='width:40px; float:left;'>
                            <?php echo $this->tag->linkTo(array('', 'Back')); ?>
                    </div>
                    <div class='filter'>
                        <p align='center'  class='name-filter'><?php echo $t->_('language'); ?>: <?php echo $name; ?></p>
                    </div>
                 <?php } ?>
            
        
    </div>
     
    <div id='container' class='cp-clear'>   
     <div class='row'>
          <?php $v23469769751iterated = false; ?><?php $v23469769751iterator = $books; $v23469769751incr = 0; $v23469769751loop = new stdClass(); $v23469769751loop->length = count($v23469769751iterator); $v23469769751loop->index = 1; $v23469769751loop->index0 = 1; $v23469769751loop->revindex = $v23469769751loop->length; $v23469769751loop->revindex0 = $v23469769751loop->length - 1; ?><?php foreach ($v23469769751iterator as $book) { ?><?php $v23469769751loop->first = ($v23469769751incr == 0); $v23469769751loop->index = $v23469769751incr + 1; $v23469769751loop->index0 = $v23469769751incr; $v23469769751loop->revindex = $v23469769751loop->length - $v23469769751incr; $v23469769751loop->revindex0 = $v23469769751loop->length - ($v23469769751incr + 1); $v23469769751loop->last = ($v23469769751incr == ($v23469769751loop->length - 1)); ?><?php $v23469769751iterated = true; ?>
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
                  <?php if (((($v23469769751loop->index) % (4)) == 0)) { ?>
                            </div>
                            <div class='row'>
                       <?php } ?>
                 <?php $v23469769751incr++; } if (!$v23469769751iterated) { ?>
                    <h2>There're no one books in magazine! </h2>
            <?php } ?>  
            </div>
    
<?php echo $this->tag->javascriptInclude('js/index/filter.js'); ?>
