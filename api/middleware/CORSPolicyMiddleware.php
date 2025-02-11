<?php

namespace app\middlewares;

interface CORSPolicyMiddleware
{
    public function getAllowOrigin(): string;
    public function getAllowMethods(): array;
    public function getAllowHeaders(): array;
    public function getAllowCredentials(): bool;
}
