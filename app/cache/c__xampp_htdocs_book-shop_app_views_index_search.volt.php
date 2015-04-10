<?php echo $this->tag->stylesheetLink('css/index/index.css'); ?>     

    <link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
   <div id='container' class='cp-clear'> 
   <div class='row'>
   
   <div class="col-md-2">
       
            <p align='center' class='name-filters'><?php echo $t->_('filters'); ?></p>
            <p id='lang-filter' class='it-filter'> <?php echo $t->_('lan'); ?>  <b class="caret"></b></p>
             <ul id='lang-filter-ul'>
                  <?php $v21001413801iterated = false; ?><?php foreach ($languages as $language) { ?><?php $v21001413801iterated = true; ?>
                    <li> <?php echo $this->tag->linkTo(array('index/languagesList/idLanguage=' . $language->getIdLanguage(), $language->getName())); ?></li>

                  <?php } if (!$v21001413801iterated) { ?>
                      <h2>There're no one language! </h2>
                  <?php } ?>
            </ul>
            <p id='author-filter' class='it-filter'> <?php echo $t->_('authors'); ?> <b class="caret"></b></p>
             <ul id='author-filter-ul' style="display:none">
                <?php $v21001413801iterated = false; ?><?php foreach ($authors as $author) { ?><?php $v21001413801iterated = true; ?>
                    <li>  <?php echo $this->tag->linkTo(array('index/authorsList/idAuthor=' . $author->getIdAuthors(), $author->getName())); ?> </li>

                    <?php } if (!$v21001413801iterated) { ?>
                    <h2>There're no one authors! </h2>
                <?php } ?>
            </ul>
        </div>
        
       <div class="col-md-10">
        
         <div class='row'>
    <?php $v21001413801iterator = $pages->items; $v21001413801incr = 0; $v21001413801loop = new stdClass(); $v21001413801loop->length = count($v21001413801iterator); $v21001413801loop->index = 1; $v21001413801loop->index0 = 1; $v21001413801loop->revindex = $v21001413801loop->length; $v21001413801loop->revindex0 = $v21001413801loop->length - 1; ?><?php foreach ($v21001413801iterator as $pageCurrent) { ?><?php $v21001413801loop->first = ($v21001413801incr == 0); $v21001413801loop->index = $v21001413801incr + 1; $v21001413801loop->index0 = $v21001413801incr; $v21001413801loop->revindex = $v21001413801loop->length - $v21001413801incr; $v21001413801loop->revindex0 = $v21001413801loop->length - ($v21001413801incr + 1); $v21001413801loop->last = ($v21001413801incr == ($v21001413801loop->length - 1)); ?>       
                 <div id='book-div' class="col-md-4">

                 <div class='img-book'>
                 <?php echo $this->tag->linkTo(array('index/detail/' . $pageCurrent->getIdbook() . '/searchPage=' . $pages->current, $this->tag->image(array($imagePath . $pageCurrent->getIdbook() . '.jpg', 'alt' => 'Picture was removed', 'title' => $pageCurrent->getName())))); ?>                 
                 </div>
                 
                    <div class='description'>
                           <p><b><i><?php echo $pageCurrent->getName(); ?></b></i> </p>
                           <p class='price'>$<?php echo $pageCurrent->getPrice(); ?> </p>
                       </div>
                       <div class='form-div'>
                           <?php echo $this->tag->form(array('order/add/' . $pageCurrent->getIdbook(), 'method' => 'post')); ?>
                               <span class='glyphicon glyphicon-shopping-cart'>  </span> <?php echo $this->tag->submitButton(array('Add to cart', '')); ?> 
                           <?php echo $this->tag->endForm(); ?>
                       </div>
                     </div>
                       <?php if (((($v21001413801loop->index) % (3)) == 0)) { ?>
                            </div>
                            <div class='row'>
                       <?php } ?>
              
                
    <?php $v21001413801incr++; } ?>
    </div>
                <div class="col-md-3">
                 <a href="./book-shop"><span class='glyphicon glyphicon-fast-backward'></span></a>
                <a href="./book-shop/index/search/?page=<?php echo $pages->before; ?>"><span class='glyphicon glyphicon-step-backward'></a>
                </div>
                <div class="col-md-6">
                    <ul class='pages'>
                             <?php 
                             for ($i = 1; $i <= $pages->total_pages; $i++){

                                if ( $pages->current == $i)
                                {
                                    echo "<p class='current-page'>$i</p>";
                                }
                                else
                                {
                                    echo "<li> <a href='./book-shop/index/search/?page=$i'>$i</a></li>";
                                }   
                             }?>
                    </ul>
                 </div>
                  <div id='last-pages' class="col-md-3">
                    <a href="./book-shop/index/search/?page=<?php echo $pages->next; ?>"><span class='glyphicon glyphicon-step-forward'></span></a>
                    <a href="./book-shop/index/search/?page=<?php echo $pages->last; ?>"><span class='glyphicon glyphicon-fast-forward'></span></a>
                 </div>
        </div>
     </div> 
     </div>
  </div>
   
   




 
<?php echo $this->tag->javascriptInclude('js/index/index.js'); ?>




