<?php

namespace App\Repositories;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

interface PotsClubRepository extends EloquentRepositoryInterface
{
    public function findAll(): Collection;

    public function findClubRandomByPotsId(int $potsId): Model;
}
