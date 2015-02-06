<?php
	//Edward Mak, creates a blog
    
    require('header_auth.php');
    require('page_header.php');
 ?>

<?php if ($connection_error): ?>
    <p><?= $connection_error_message ?></p>
<?php else: ?>

    <form id="blogform" method="post" action="update.php" enctype="multipart/form-data">
    
        <label for="username">Username: </label>
        <input id="username" name="username" value="<?= $username ?>" readonly />
        <input id="user_id" name="user_id" value="<?= $user_id ?>" />
        
        <br/><br/>
        
        <p>
            <label for="title">Title: </label>
            <input id="title" name="title" />
        </p>
        
        <p>
            <label for="permalink">permalink: </label>
            <input id="permalink" name="permalink" />
        </p>
        
        <p>
            <label for="image">Filename:</label>
            <input type="file" name="image" id="image" />
        </p>
        
        <div id="div_content_edit">
            <p>Content: </p>
            <textarea id="content" name="content" form="blogform"><?= 'insert text here' ?></textarea>
        </div>
        
        <p>
            <label for="make_homepage">Make Homepage</label>
            <input type="checkbox" id="make_homepage" name="make_homepage"/>
        </p>
        
        <input class="submit" type="submit" name="submit" id="submit" value="Create" />
    </form>
    
<?php endif; ?>
<?php require('page_footer.php'); ?>