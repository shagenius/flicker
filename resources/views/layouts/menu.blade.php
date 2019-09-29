<ul class="list-group">
    <?php foreach ($categories as $category) {?>
    <li class="list-group-item"><a href="/category/<?=$category->name;?>"><?=$category->name;?></a></li>
    <?php } ?>
</ul>