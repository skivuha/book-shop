<?php echo $this->tag->stylesheetLink('css/admin/books.css'); ?>

<div id='body-container'>
   
        <?php echo $this->flashSession->output(); ?>
     <table class="table table-striped">
        <tr>
            <th>N/n</th><th>Boon Name</th><th>Edit</th><th>Remove</th>
        </tr>
         <?php $v18252237091iterator = $books; $v18252237091incr = 0; $v18252237091loop = new stdClass(); $v18252237091loop->length = count($v18252237091iterator); $v18252237091loop->index = 1; $v18252237091loop->index0 = 1; $v18252237091loop->revindex = $v18252237091loop->length; $v18252237091loop->revindex0 = $v18252237091loop->length - 1; ?><?php foreach ($v18252237091iterator as $book) { ?><?php $v18252237091loop->first = ($v18252237091incr == 0); $v18252237091loop->index = $v18252237091incr + 1; $v18252237091loop->index0 = $v18252237091incr; $v18252237091loop->revindex = $v18252237091loop->length - $v18252237091incr; $v18252237091loop->revindex0 = $v18252237091loop->length - ($v18252237091incr + 1); $v18252237091loop->last = ($v18252237091incr == ($v18252237091loop->length - 1)); ?>
            <tr>
                <td><?php echo $v18252237091loop->index; ?></td>
                <td><?php echo $book->getName(); ?></td>
                <td><a href='./book-shop/admin/edit/<?php echo $book->getIdBook(); ?>'><span class='glyphicon glyphicon-edit'></span></a></td>
                 <td><a href='./book-shop/admin/removeBook/<?php echo $book->getIdBook(); ?>'><span class='glyphicon glyphicon-remove' onclick="return confirm('Are you sure that u want to remove this book?');"></span></a></td>
            </tr>

         <?php $v18252237091incr++; } ?>
     </table>
</div>

<?php echo $this->tag->javascriptInclude('js/admin/books.js'); ?>