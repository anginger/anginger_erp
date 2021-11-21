<?php
// Justin PHP Framework
// (c)2021 SuperSonic(https://randychen.tk)
declare (strict_types=1);

namespace Slim\Models;

use JsonSerializable;
use Slim\Kernel\Database;

interface ModelInterface extends JsonSerializable
{
    public function checkReady(): bool;

    public function load(Database $db_instance, $filter): ModelInterface;

    public function reload(Database $db_instance): ModelInterface;

    public function create(Database $db_instance): bool;

    public function replace(Database $db_instance): bool;

    public function destroy(Database $db_instance): bool;

    public function fromArray(array $array): ModelInterface;

    public function toArray(): array;
}
