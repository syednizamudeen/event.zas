<?php
$GLOBALS['commentDisabled'] = "";
if(!Auth::check())
    $GLOBALS['commentDisabled'] = "disabled";
$GLOBALS['commentClass'] = -1;
?>
<div class="laravelComment" id="laravelComment-{{ $comment_item_id }}">
    <div class="ui threaded comments" id="{{ $comment_item_id }}-comment-0">
        <button class="btn btn-warning" id="write-comment" data-form="#{{ $comment_item_id }}-comment-form"> Write Comment</button>
        <div class="add-comment">
            <form class="laravelComment-form commenting-form" id="{{ $comment_item_id }}-comment-form" data-parent="0" data-item="{{ $comment_item_id }}" style="display: none;">
                <div class="row">
                    <div class="form-group col-md-12">
                        <textarea id="0-textarea" rows="2" {{ $GLOBALS['commentDisabled'] }} placeholder="Type your comment" class="form-control"></textarea>
                        @if(!Auth::check())
                            <small>Please Log in to comment</small>
                        @endif
                    </div>
                    <div class="form-group col-md-12">
                        <button type="submit" class="btn btn-secondary" {{ $GLOBALS['commentDisabled'] }}>Submit Comment</button>
                    </div>
                </div>                
            </form>
        </div>        
<?php
$GLOBALS['commentVisit'] = array();

function dfs($comments, $comment){
    $GLOBALS['commentVisit'][$comment->id] = 1;
    $GLOBALS['commentClass']++;
?>
    <div class="comment show-{{ $comment->item_id }}-{{ (int)($GLOBALS['commentClass'] / 5) }}" id="comment-{{ $comment->id }}">
        <a class="avatar">
            <img src="{{ $comment->avatar }}">
        </a>
        <div class="content">
            <a class="author" url="{{ $comment->url or '' }}"> {{ $comment->name }} </a>
            <div class="metadata">
                <span class="date">{{ $comment->updated_at->diffForHumans() }}</span>
            </div>
            <div class="text">
                {{ $comment->comment }}
            </div>
            <div class="actions">
                <a class="{{ $GLOBALS['commentDisabled'] }} reply reply-button" data-toggle="{{ $comment->id }}-reply-form">Reply</a>
            </div>
            {{ \risul\LaravelLikeComment\Controllers\CommentController::viewLike('comment-'.$comment->id) }}
            <div class="add-comment">
                <form class="laravelComment-form commenting-form" id="{{ $comment->id }}-reply-form" data-parent="{{ $comment->id }}" data-item="{{ $comment->item_id }}" style="display: none;">
                    <div class="row">
                        <div class="form-group col-md-12">
                            <textarea id="{{ $comment->id }}-textarea" rows="2" {{ $GLOBALS['commentDisabled'] }} placeholder="Type your comment" class="form-control"></textarea>
                            @if(!Auth::check())
                                <small>Please Log in to comment</small>
                            @endif
                        </div>
                        <div class="form-group col-md-12">
                            <button type="submit" class="btn btn-secondary" {{ $GLOBALS['commentDisabled'] }}>Submit Comment</button>
                        </div>
                    </div>                
                </form>
            </div>
        </div>
        <div class="comments" id="{{ $comment->item_id }}-comment-{{ $comment->id }}">
<?php
    foreach ($comments as $child) {
        if($child->parent_id == $comment->id && !isset($GLOBALS['commentVisit'][$child->id])){
            dfs($comments, $child);
        }
    }
    echo "</div>";
    echo "</div>";
}

$comments = \risul\LaravelLikeComment\Controllers\CommentController::getComments($comment_item_id);
foreach ($comments as $comment) {
    if(!isset($GLOBALS['commentVisit'][$comment->id])){
        dfs($comments, $comment);
    }
}
?>
    </div>
    <button class="btn btn-success" id="showComment" data-show-comment="0" data-item-id="{{ $comment_item_id }}">Show Comments</button>
</div>
