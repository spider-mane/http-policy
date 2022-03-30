<?php

namespace WebTheory\HttpPolicy;

use Psr\Http\Message\ServerRequestInterface;

interface ServerRequestPolicyInterface
{
    public function approvesRequest(ServerRequestInterface $request): bool;
}
