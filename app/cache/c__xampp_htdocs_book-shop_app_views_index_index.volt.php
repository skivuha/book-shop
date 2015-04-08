<?php echo $this->tag->stylesheetLink('css/index/index.css'); ?>

<?php if (empty($books) === false) { ?>
    <div class='filter-header'>
     
        <?php if (empty($name)) { ?>
           <div class='filter'>
        Filters: <?php echo $this->tag->linkTo(array('index/authorsList', 'Authors')); ?> | <?php echo $this->tag->linkTo(array('index/languagesList', 'Programming Language')); ?>
        </div>
            <?php } else { ?>
               <?php if (empty($languageView)) { ?>
                    <div style='width:40px; float:left;'>
                            <?php echo $this->tag->linkTo(array('index/authorsList', 'Back')); ?>
                    </div>
                    <div class='filter'>
                        Author: <?php echo $name; ?>
                    </div>
                    <?php } else { ?>
                     <div style='width:40px; float:left;'>
                            <?php echo $this->tag->linkTo(array('index/languagesList', 'Back')); ?>
                    </div>
                    <div class='filter'>
                        Language: <?php echo $name; ?>
                    </div>
                 <?php } ?>
             <?php } ?>
        
    </div>
<?php } ?>

<div id='container' class='cp-clear'>      
            <!--<?php $v6496805821iterated = false; ?><?php foreach ($books as $book) { ?><?php $v6496805821iterated = true; ?>
                 <div class='div-book'>
                 <?php if (empty($id)) { ?>
                  <?php echo $this->tag->linkTo(array('index/detail/' . $book->getIdbook(), $this->tag->image(array($imagePath . $book->getIdbook() . '.jpg', 'alt' => 'Picture was removed', 'title' => $book->getName())))); ?>
                 <?php } else { ?>
                 
                 <?php echo $this->tag->linkTo(array('index/detail/' . $book->getIdbook() . '/' . $id, $this->tag->image(array($imagePath . $book->getIdbook() . '.jpg', 'alt' => 'Picture was removed', 'title' => $book->getName())))); ?>
                 <?php } ?>
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
                 <?php } if (!$v6496805821iterated) { ?>
                    <h2>There're no one books in magazine! </h2>
            <?php } ?>  -->
             <!--<?php foreach ($page->items as $item) { ?>
            <tr>
        <td><?php echo $item->getIdbook(); ?></td>
        <td><?php echo $item->getName(); ?></td>
        
    </tr>
    <?php } ?>-->
    
    <table>
    <?php foreach ($pages->items as $pageCurrent) { ?>
        <tr><td><?php echo $pageCurrent->getName(); ?></td></tr>
    <?php } ?>
    
    </table>
    <a href="/index/index/search">Первая</a>
<a href="/index/index/search?page="~<?php echo $pages->before; ?>>Предыдущая</a>
<a href="/index/index/search?page="~<?php echo $pages->before; ?>>Следующая</a>
<a href="/index/index/search?page="~<?php echo $pages->before; ?>>Последняя</a>


 
<?php echo $this->tag->javascriptInclude('js/index/index.js'); ?>




