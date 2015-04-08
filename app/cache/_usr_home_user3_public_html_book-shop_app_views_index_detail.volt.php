<?php echo $this->tag->stylesheetLink('css/index/detail.css'); ?>

<div class='container'>
<h3 align='center'><?php echo $book->getName(); ?> </h3>
	<p align='center'><?php echo $this->tag->image(array($imagePath . $book->getIdbook() . '.jpg', 'alt' => 'Picture was removed', 'title' => $book->getName())); ?></p>
      <?php foreach ($languages as $language) { ?>
            <p align='center'>Programming language: <i><?php echo $language; ?></i></p>
      <?php } ?>
      <p align='center'>Author(-s):
      <?php $v28308953581iterator = $authors; $v28308953581incr = 0; $v28308953581loop = new stdClass(); $v28308953581loop->length = count($v28308953581iterator); $v28308953581loop->index = 1; $v28308953581loop->index0 = 1; $v28308953581loop->revindex = $v28308953581loop->length; $v28308953581loop->revindex0 = $v28308953581loop->length - 1; ?><?php foreach ($v28308953581iterator as $author) { ?><?php $v28308953581loop->first = ($v28308953581incr == 0); $v28308953581loop->index = $v28308953581incr + 1; $v28308953581loop->index0 = $v28308953581incr; $v28308953581loop->revindex = $v28308953581loop->length - $v28308953581incr; $v28308953581loop->revindex0 = $v28308953581loop->length - ($v28308953581incr + 1); $v28308953581loop->last = ($v28308953581incr == ($v28308953581loop->length - 1)); ?>
        <?php if ($v28308953581loop->length === 1) { ?>
            <i><?php echo $author; ?></i>
            <?php } else { ?>         
             <?php if ($v28308953581loop->last) { ?>
                <i><?php echo $author; ?></i>
                 <?php } else { ?> 
                   <i><?php echo $author; ?>,</i>
             <?php } ?>
        <?php } ?>
      <?php $v28308953581incr++; } ?>
      </p>
	<h4 align='center'><?php echo $book->getPrice(); ?> $</h4>
	<p align='justify'><?php echo $book->getDescription(); ?></p>
  <div class='footer'>
  <?php if (empty($secondParam)) { ?>
   <a href='../../' ><button class='btn btn-primary'>Back</button></a>
  <?php } else { ?> 
      <?php if (empty($backToLanguage) != true) { ?>
            <a href=<?php echo './book-shop/index/languagesList/idLanguage=' . $secondParam; ?> ><button class='btn btn-primary'>Back</button></a>
      <?php } elseif (empty($backToSearch) != true) { ?>     
            <a href=<?php echo './book-shop/index/search/?page=' . $secondParam; ?> ><button class='btn btn-primary'>Back</button></a>
            <?php } else { ?>
            <a href=<?php echo './book-shop/index/authorsList/idAuthor=' . $secondParam; ?> ><button class='btn btn-primary'>Back</button></a>
      <?php } ?>
   
  <?php } ?>
       
       <?php echo $this->tag->form(array('order/add/' . $book->getIdbook(), 'method' => 'post')); ?>
            <?php echo $this->tag->submitButton(array('Add to cart', '')); ?>
        <?php echo $this->tag->endForm(); ?>
</div>
</div>

    
<?php echo $this->tag->javascriptInclude('js/index/detail.js'); ?>     
