<?php echo $this->tag->stylesheetLink('css/index/filter.css'); ?>
<div class='filter-header'>
<div style='width:40px; float:left;'>
 <?php echo $this->tag->linkTo(array('', 'Back')); ?>
 </div>
<div class='filter'>

    <b>Authors List:</b>
    </div>
</div>
<div class='list'>
    <ul>
  <?php $v40369210081iterated = false; ?><?php foreach ($authors as $author) { ?><?php $v40369210081iterated = true; ?>
    <li>  <?php echo $this->tag->linkTo(array('index/authorsList/idAuthor=' . $author->getIdAuthors(), $author->getName())); ?> </li>
  
  <?php } if (!$v40369210081iterated) { ?>
      <h2>There're no one authors! </h2>
  <?php } ?>
    </ul>
</div>



<?php echo $this->tag->javascriptInclude('js/index/filter.js'); ?>