<?php
namespace App\Repositories;

use App\Exceptions\Users\UserException;
use App\Repositories\{Readable, Writetable};
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
final class UserRepository implements Readable, Writetable
{
	
	public function getAll(): array
	{
		return DB::select('CALL get_all_users()');
	}

	public function getOne(int $id): array
	{
		return DB::select('CALL get_one_user('.$id.')');
	}

	public function save(Request $request): array
	{
		$data = $request->all();
		$response = DB::select('CALL save_user (?,?,?,?,?,?,?,?,?,?,?,?)', [
			$data["user_name"],
			$data["first_name"],
			$data["second_name"],
			$data["first_last_name"],
			$data["second_last_name"],
			$data["email"],
			$data["cellphone"],
			password_hash($data["password"], true),
			1,
			$data["country_id"],
			Carbon::now(),
			Carbon::now(),
		]);

		if (!is_array($response)) {
			throw new UserException("Ha ocurrido un error", 500);
		}

		return $response;
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