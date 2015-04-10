<?php echo $this->tag->stylesheetLink('css/index/detail.css'); ?>

<div class='container'>
<h3 align='center'><?php echo $book->getName(); ?> </h3>
	<p align='center'><?php echo $this->tag->image(array($imagePath . $book->getIdbook() . '.jpg', 'alt' => 'Picture was removed', 'title' => $book->getName())); ?></p>
      <?php foreach ($languages as $language) { ?>
            <p align='center'>Programming language: <i><?php echo $language; ?></i></p>
      <?php } ?>
      <p align='center'>Author(-s):
      <?php $v39743880331iterator = $authors; $v39743880331incr = 0; $v39743880331loop = new stdClass(); $v39743880331loop->length = count($v39743880331iterator); $v39743880331loop->index = 1; $v39743880331loop->index0 = 1; $v39743880331loop->revindex = $v39743880331loop->length; $v39743880331loop->revindex0 = $v39743880331loop->length - 1; ?><?php foreach ($v39743880331iterator as $author) { ?><?php $v39743880331loop->first = ($v39743880331incr == 0); $v39743880331loop->index = $v39743880331incr + 1; $v39743880331loop->index0 = $v39743880331incr; $v39743880331loop->revindex = $v39743880331loop->length - $v39743880331incr; $v39743880331loop->revindex0 = $v39743880331loop->length - ($v39743880331incr + 1); $v39743880331loop->last = ($v39743880331incr == ($v39743880331loop->length - 1)); ?>
        <?php if ($v39743880331loop->length === 1) { ?>
            <i><?php echo $author; ?></i>
            <?php } else { ?>         
             <?php if ($v39743880331loop->last) { ?>
                <i><?php echo $author; ?></i>
                 <?php } else { ?> 
                   <i><?php echo $author; ?>,</i>
             <?php } ?>
        <?php } ?>
      <?php $v39743880331incr++; } ?>
      </p>
	<h4 align='center'>$<?php echo $book->getPrice(); ?> </h4>
	<p align='justify'><?php echo $book->getDescription(); ?></p>
  <div class='footer'>
  <?php if (empty($secondParam)) { ?>
   <a href='../../' ><button class='btn btn-primary'><?php echo $t->_('back'); ?></button></a>
  <?php } else { ?> 
      <?php if (empty($backToLanguage) != true) { ?>
            <a href=<?php echo './book-shop/index/languagesList/idLanguage=' . $secondParam; ?> ><button class='btn btn-primary'><?php echo $t->_('back'); ?></button></a>
      <?php } elseif (empty($backToSearch) != true) { ?>     
              <a href=<?php echo './book-shop/index/search/?page=' . $secondParam; ?> ><button class='btn btn-primary'><?php echo $t->_('back'); ?></button></a>
            <?php } else { ?>
               <a href=<?php echo './book-shop/index/authorsList/idAuthor=' . $secondParam; ?> ><button class='btn btn-primary'><?php echo $t->_('back'); ?></button></a>
      <?php } ?>
   
  <?php } ?>
       
       <?php echo $this->tag->form(array('order/add/' . $book->getIdbook(), 'method' => 'post')); ?>
            <?php echo $this->tag->submitButton(array('Add to cart', '')); ?>
        <?php echo $this->tag->endForm(); ?>
</div>
</div>

    
<?php echo $this->tag->javascriptInclude('js/index/detail.js'); ?>     
