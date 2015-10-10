<!-- Article post form -->
<div>
        <form action="add_article.php" method="post">
            <fieldset>             
                Article title<input type="text" name="article" /><br/>
                <textarea cols ="10" rows = "3" name="content" maxlength="4999" placeholder="Your text..."></textarea><br/>
                <input type="submit" value="Post"/>&nbsp;<input type="reset" value="Reset form."/>
            </fieldset>     
        </form>
</div>