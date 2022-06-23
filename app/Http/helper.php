<?php

use Carbon\Carbon;


if (!function_exists('settings')) {
	function settings()
	{
		return \App\Models\Setting::firstOr(function () {
			$settings = new \App\Models\Setting();
			$settings->website_message = 'The web site closed temporary for maintenance';
			$settings->comment_message = 'comments will be available soon, thank you';
			$settings->review_message = 'reviews will be available soon, thank you';
			$settings->save();
			return $settings->fresh();
		});
	}
}

if (!function_exists('is_sha1')) {
	function is_sha1($str)
	{
		return strlen($str) === 40 ? true : false;
	}
}

if (!function_exists('img')) {
	function img($object, $img, $location = '')
	{
		if ($img) {
			delete_img($object, $location);
			$imgName = $img->store($location);
			return $object->img = $imgName;
		}
	}
}

if (!function_exists('store_img')) {
	function store_img($object, $img, $location = '')
	{
		if ($img) {
			$imgName = $img->store($location);
			return $object->img = $imgName;
		}
	}
}

if (!function_exists('delete_img')) {
	function delete_img($object, $location = '')
	{
		if ($object->img && is_sha1(Illuminate\Support\Str::beforeLast($object->img, '.')))
			Illuminate\Support\Facades\Storage::delete($location . '/' . $object->img);
	}
}

if (!function_exists('since')) {
	function since($query)
	{
		foreach ($query as $message) {
			$created = $message->created_at;
			if ($created->diff(Carbon::now())->y > 0)
				$since[$message->id] = trans_choice('lang.years ago', $created->diffInYears(carbon::now()), ['since' => $created->diffInYears(carbon::now())]);
			elseif ($created->diff(carbon::now())->m > 0)
				$since[$message->id] = trans_choice('lang.months ago', $created->diffInMonths(carbon::now()), ['since' => $created->diffInMonths(carbon::now())]);
			elseif ($created->diff(carbon::now())->m < 1 && $created->diff(carbon::now())->d > 6)
				$since[$message->id] = trans_choice('lang.weeks ago', $created->diffInWeeks(carbon::now()), ['since' => $created->diffInWeeks(carbon::now())]);
			elseif ($created->diff(carbon::now())->d > 0)
				$since[$message->id] = trans_choice('lang.days ago', $created->diffInDays(carbon::now()), ['since' => $created->diffInDays(carbon::now())]);
			elseif ($created->diff(carbon::now())->h > 0)
				$since[$message->id] = trans_choice('lang.hours ago', $created->diffInHours(carbon::now()), ['since' => $created->diffInHours(carbon::now())]);
			elseif ($created->diff(carbon::now())->i > 0)
				$since[$message->id] = trans_choice('lang.minutes ago', $created->diffInMinutes(carbon::now()), ['since' => $created->diffInMinutes(carbon::now())]);
			else
				$since[$message->id] = trans('lang.Less than a minute ago');
		}
		return $since;
	}
}

if (!function_exists('lang')) {
	function lang()
	{
		return
			[
				'decimal'             => trans('lang.decimal'),
				'emptyTable'          => trans('lang.emptyTable'),
				'info'                => trans('lang.info'),
				'infoEmpty'           => trans('lang.infoEmpty'),
				'infoFiltered'        => trans('lang.infoFiltered'),
				'infoPostFix'         => trans('lang.infoPostFix'),
				'thousands'           => trans('lang.thousands'),
				'lengthMenu'          => trans('lang.lengthMenu'),
				'loadingRecords'      => trans('lang.loadingRecords'),
				'processing'          => trans('lang.processing'),
				'search'              => trans('lang.search'),
				'zeroRecords'         => trans('lang.zeroRecords'),
				'paginate'          => [
					'first'            => trans('lang.first'),
					'last'             => trans('lang.last'),
					'next'             => trans('lang.next'),
					'previous'         => trans('lang.previous'),
				],
				'aria'               => [
					'sortAscending'    => trans('lang.sortAscending'),
					'sortDescending'   => trans('lang.sortDescending'),
				],
				'buttons'            => [
					'create'           => trans('lang.create'),
					'print'            => trans('lang.print'),
					'reload'           => trans('lang.reload'),
				]

			];
	}
}
