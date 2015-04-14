<?php echo $this->tag->stylesheetLink('css/admin/books.css'); ?>

<div id='body-container'>
   
        <?php echo $this->flashSession->output(); ?>
     <table class="table table-striped">
        <tr>
            <th>N/n</th><th>Boon Name</th><th>Edit</th><th>Remove</th>
        </tr>
         <?php $v21022164741iterator = $books; $v21022164741incr = 0; $v21022164741loop = new stdClass(); $v21022164741loop->length = count($v21022164741iterator); $v21022164741loop->index = 1; $v21022164741loop->index0 = 1; $v21022164741loop->revindex = $v21022164741loop->length; $v21022164741loop->revindex0 = $v21022164741loop->length - 1; ?><?php foreach ($v21022164741iterator as $book) { ?><?php $v21022164741loop->first = ($v21022164741incr == 0); $v21022164741loop->index = $v21022164741incr + 1; $v21022164741loop->index0 = $v21022164741incr; $v21022164741loop->revindex = $v21022164741loop->length - $v21022164741incr; $v21022164741loop->revindex0 = $v21022164741loop->length - ($v21022164741incr + 1); $v21022164741loop->last = ($v21022164741incr == ($v21022164741loop->length - 1)); ?>
            <tr>
                <td><?php echo $v21022164741loop->index; ?></td>
                <td><?php echo $book->getName(); ?></td>
                <td><a href='./book-shop/admin/edit/<?php echo $book->getIdBook(); ?>'><span class='glyphicon glyphicon-edit'></span></a></td>
                 <td><a href='./book-shop/admin/removeBook/<?php echo $book->getIdBook(); ?>'><span class='glyphicon glyphicon-remove' onclick="return confirm('Are you sure that u want to remove this book?');"></span></a></td>
            </tr>

         <?php $v21022164741incr++; } ?>
     </table>
</div>

<?php echo $this->tag->javascriptInclude('js/admin/books.js'); ?>