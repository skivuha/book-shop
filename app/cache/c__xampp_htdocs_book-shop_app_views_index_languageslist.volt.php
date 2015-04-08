<?php echo $this->tag->stylesheetLink('css/index/filter.css'); ?>

<div class='filter-header'>
<div style='width:40px; float:left;'>
 <?php echo $this->tag->linkTo(array('', 'Back')); ?>
 </div>
    <div class='filter-language'>
        <b>Programming Languages:</b>
    </div>
</div>
<div class='list'>
    <ul>
  <?php $v4689376011iterated = false; ?><?php foreach ($languages as $language) { ?><?php $v4689376011iterated = true; ?>
    <li> <?php echo $this->tag->linkTo(array('index/languagesList/idLanguage=' . $language->getIdLanguage(), $language->getName())); ?></li>
  
  <?php } if (!$v4689376011iterated) { ?>
      <h2>There're no one language! </h2>
  <?php } ?>
    </ul>
</div>



<?php echo $this->tag->javascriptInclude('js/index/filter.js'); ?>