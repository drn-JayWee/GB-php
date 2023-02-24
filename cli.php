<?php

use GeekBrains\LevelTwo\Blog\Commands\Arguments;
use GeekBrains\LevelTwo\Blog\Commands\CreateUserCommand;
use GeekBrains\LevelTwo\Blog\UUID;
use GeekBrains\LevelTwo\Blog\Like;
use GeekBrains\LevelTwo\Blog\Repositories\LikesRepository\SqliteLikesRepository;
use GeekBrains\LevelTwo\Blog\Repositories\LikesRepository\LikesRepositoryInterface;

$container = require __DIR__ . '/bootstrap.php';

try {

    // При помощи контейнера создаём команду
    $command = $container->get(CreateUserCommand::class);
    $command->handle(Arguments::fromArgv($argv));

} catch (Exception $e) {
    echo $e->getMessage();
}
