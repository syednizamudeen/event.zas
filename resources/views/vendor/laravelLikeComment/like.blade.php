<?php
	$data = \risul\LaravelLikeComment\Controllers\LikeController::getLikeViewData($like_item_id);
?>
<i id="{{ $like_item_id }}-like"
	class="laravelLike-icon {{ $data[$like_item_id.'likeDisabled'] }} {{ $data[$like_item_id.'likeIconOutlined'] }} far fa-thumbs-up fa-fw text-success"
	data-item-id="{{ $like_item_id }}"
	data-vote="1">
</i>
<span id="{{ $like_item_id }}-total-like">{{ $data[$like_item_id.'total_like'] }}</span>
<i id="{{ $like_item_id }}-dislike"
	class="laravelLike-icon {{ $data[$like_item_id.'likeDisabled'] }} {{ $data[$like_item_id.'dislikeIconOutlined'] }} far fa-thumbs-down fa-fw text-danger"
	data-item-id="{{ $like_item_id }}"
	data-vote="-1">
</i>
<span id="{{ $like_item_id }}-total-dislike">{{ $data[$like_item_id.'total_dislike'] }}</span>
