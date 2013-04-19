<?php

class FriendScore
{
	public function highestScore(Array $friends)
	{
		$ans = 0;

		foreach ($friends as $current_index => $v) {
			$tmp_array = array();

			// 直接の友達
			$direct_friends = $tmp_array = self::getFriendIndex($v);

			// 友達の友達
			foreach ($direct_friends as $f) {
				$tmp_array = array_merge($tmp_array, self::getFriendIndex($friends[$f]));
			}
			
			// 自分を除く。重複してる友達を除く
			$tmp_array = self::withoutMyselfAndUnique($current_index, $tmp_array);
			if (count($tmp_array) > $ans) $ans = count($tmp_array);
		}

		return $ans;
	}

	private static function getFriendIndex($friend_str)
	{
		$result = array();
		$friend_array = self::stringToArray($friend_str);
		foreach($friend_array as $k => $f) {
			if ($f === 'Y') $result[] = $k;
		}
		return $result;
	}

	private static function withoutMyselfAndUnique($self_index, Array $friend_indexes)
	{
		$tmp = array_diff($friend_indexes, array($self_index));
		return array_unique($tmp, SORT_STRING);

	}

	private static function stringToArray($str)
	{
		return preg_split('//', $str, null, PREG_SPLIT_NO_EMPTY);
	}
}