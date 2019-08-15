<h1>User</h1>

<ul>
    <?php foreach($users as $user):?>
        <li><?= $user->name; ?></li>
    <?php endforeach;?>
</ul>