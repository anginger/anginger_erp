<?php

namespace app\middlewares;

use Slim\Kernel\Context;
use app\models\History;
use app\models\User;

class LoggerMiddleware implements MiddlewareInterface
{
    public static function toUse(Context $context): void
    {
        $user = $context->getState()->get("user");
        if ($user instanceof User) {
            $user_id = $user->getUuid();
        } else {
            $user_id = $context->getRequest()->getRemoteIp();
        }
        $method = $context->getRequest()->getMethod();
        $resource = $context->getRequest()->getRequestUri();
        $history = new History();
        $history
            ->setUser($user_id)
            ->setMethod($method)
            ->setResource($resource)
            ->create($context->getDatabase());
    }
}
