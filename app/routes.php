<?php
/**
 * Created by PhpStorm.
 * User: janhuang
 * Date: 15/4/27
 * Time: 下午12:07
 * Github: https://www.github.com/janhuang 
 * Coding: https://www.coding.net/janhuang
 * SegmentFault: http://segmentfault.com/u/janhuang
 * Blog: http://segmentfault.com/blog/janhuang
 * Gmail: bboyjanhuang@gmail.com
 */



Routes::get('/', function () {
    throw new \Kernel\Exceptions\NotFoundException('not found');
    return Make::render('welcome/welcome.html.twig', [
        'guide' => [

        ],
    ]);
});

Routes::get(['/p', 'name' => 'plugins'], 'Welcome\\Events\Index@pluginAction');

Routes::get(['/d', 'name' => 'di'], 'Welcome\\Events\Index@pluginsDIAction');

Routes::get(['/c', 'name' => 'db'], 'Welcome\\Events\DB@dbAction');

Routes::get(['/r', 'name' => 'route'], 'Welcome\\Events\Route@showRoute');

Routes::get(['/v', 'name' => 'view'], 'Welcome\\Events\View@show');

Routes::get(['/redis', 'name' => 'redis'], function() {
    $redis = Make::storage('write');

    return $redis->get('name');
});