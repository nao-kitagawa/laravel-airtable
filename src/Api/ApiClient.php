<?php

namespace Tapp\Airtable\Api;

interface ApiClient
{
    public function get(?string $id = null);

    public function post($contents = null);

    public function put(string $id, $contents = null);

    public function patch(string $id, $contents = null);

    public function delete(string $id);

    public function createMultiple(array $data);

    public function deleteMultiple(array $recordIds);
}
