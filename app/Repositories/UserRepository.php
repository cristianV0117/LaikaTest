<?php
namespace App\Repositories;
use App\Repositories\{Readable, Writetable};
use Illuminate\Http\Request;
final class UserRepository implements Readable, Writetable
{
	
	public function getAll(): array
	{
		return [];
	}

	public function getOne(int $id): array
	{
		return [];
	}

	public function save(Request $request): array
	{
		return [];
	}

	public function update(Request $request, int $id): array
	{
		return [];
	}

	public function delete(int $id): array
	{
		return [];
	}
}