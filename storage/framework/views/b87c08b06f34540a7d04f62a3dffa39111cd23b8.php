<?php
    $logos=\App\Models\Utility::get_file('uploads/logo/');
?>
<?php if(!empty($messages)): ?>
    <?php if(count($messages) > 0): ?>
        <?php $__currentLoopData = $messages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $message): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if($message->from == 0): ?>
                <div>
                    <span class="chat_msg_item chat_msg_item_admin">
                        <div class="chat_avatar">
                            <img src="<?php echo e($logos.'logo-dark.png'); ?>" />
                        </div><?php echo e($message->message); ?>

                    </span>
                    <span class="status2"><?php echo e($message->created_at->diffForHumans()); ?></span>
                </div>
            <?php else: ?>
                <div>
                    <span class="chat_msg_item chat_msg_item_user"><?php echo e($message->message); ?></span>
                    <span class="status"><?php echo e($message->created_at->diffForHumans()); ?></span>
                </div>
            <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php else: ?>
        <h3 class="text-center mt-5 pt-5">No Message Found.!</h3>
    <?php endif; ?>
<?php else: ?>
    <h3 class="text-center mt-5 pt-5">Something went wrong..!!</h3>
<?php endif; ?>
<?php /**PATH /Users/nurlan/HELPDESK/main_file/resources/views/admin/chats/floating_message.blade.php ENDPATH**/ ?>