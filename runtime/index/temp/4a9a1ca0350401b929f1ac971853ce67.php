<?php /*a:1:{s:75:"/home/wwwroot/www.tianjinyuxi.cn/app/index/view/default/goods/comments.html";i:1665913498;}*/ ?>
<?php if(!empty($data)): foreach($data as $v): ?>
    <article class="am-comment">
      <img src="<?php echo htmlentities($v['user']['avatar']); ?>" class="am-comment-avatar" alt="<?php echo htmlentities($v['user']['user_name_view']); ?>" />
      <div class="am-comment-main">
        <header class="am-comment-hd">
          <div class="am-comment-meta">
            <span class="am-comment-author"><?php echo htmlentities($v['user']['user_name_view']); ?></span> 评论于 
            <time><?php echo htmlentities($v['add_time_hour']); ?></time>
          </div>
        </header>
        <div class="am-comment-bd">
          <p><?php echo htmlentities($v['content']); ?></p>
          <?php if(!empty($v['images'])): ?>
              <ul class="am-cf comment-images">
                <?php foreach($v['images'] as $img): ?>
                  <li class="am-fl">
                    <div class="am-gallery-item">
                      <a href="<?php echo htmlentities($img); ?>" target="_blank">
                        <img src="<?php echo htmlentities($img); ?>" class="am-img-thumbnail am-radius" />
                      </a>
                    </div>
                  </li>
                <?php endforeach; ?>
              </ul>
          <?php endif; if(!empty($v['msg'])): ?>
            <p class="comment-spec"><?php echo htmlentities($v['msg']); ?></p>
          <?php endif; if($v['is_reply'] == 1 and !empty($v['reply'])): ?>
            <div class="comment-reply">
              <span class="comment-reply-title">管理员回复：</span>
              <span class="comment-reply-desc"><?php echo htmlentities($v['reply']); ?></span>
            </div>
          <?php endif; ?>
        </div>
      </div>
    </article>
  <?php endforeach; ?>
<?php endif; ?>