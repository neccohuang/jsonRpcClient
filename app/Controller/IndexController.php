<?php

declare(strict_types=1);
/**
 * This file is part of Hyperf.
 *
 * @link     https://www.hyperf.io
 * @document https://hyperf.wiki
 * @contact  group@hyperf.io
 * @license  https://github.com/hyperf/hyperf/blob/master/LICENSE
 */
namespace App\Controller;

use App\JsonRpc\CalculatorServiceInterface;
use App\JsonRpc\MathServiceInterface;
use Hyperf\Utils\ApplicationContext;

class IndexController extends AbstractController
{
    public function index()
    {
        $client = ApplicationContext::getContainer()->get(CalculatorServiceInterface::class);
        $result = $client->add(1, 4);
        var_dump($result);

        $client2 = ApplicationContext::getContainer()->get(MathServiceInterface::class);
        $result2 = $client2->plus(5, 6);
        var_dump($result2);
        // $user = $this->request->input('user', 'Hyperf');
        // $method = $this->request->getMethod();
        //
        // return [
        //     'method' => $method,
        //     'message' => "Hello {$user}.",
        // ];

        return "hello";
    }
}
