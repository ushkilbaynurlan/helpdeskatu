<ul>
    
    <?php if(count($messages) > 0): ?>
        <?php $__currentLoopData = $messages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $message): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if($message->from != 0): ?>
                <li class="left">
                    <?php echo e($message->message); ?>

                </li>
            <?php else: ?>
                <li class="right">
                    <?php echo e($message->message); ?>

                </li>
            <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php else: ?>
        <li>No Message Found..!</li>
    <?php endif; ?>
</ul>
<?php /**PATH /Users/nurlan/HELPDESK/main_file/resources/views/admin/chats/message.blade.php ENDPATH**/ ?>