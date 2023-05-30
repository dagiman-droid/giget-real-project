<div class="w-full">

    
    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.forms.loading','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('forms.loading'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
    
    <div>
        <h3 class="text-lg font-bold text-gray-900">
            <?php echo e(__('messages.t_plans_for_promoting_projects')); ?>

        </h3>
        <p class="mt-1 text-sm font-normal text-gray-500">
            <?php echo e(__('messages.t_projects_subscription_plans_subtitle')); ?>

        </p>
    </div>

    <div class="mt-4 space-y-4 sm:space-y-0 sm:grid sm:grid-cols-2 sm:gap-6 lg:max-w-4xl lg:mx-auto xl:max-w-none xl:mx-0 xl:grid-cols-4 mb-16">

        
        <?php $__currentLoopData = $plans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $s): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="bg-white border border-gray-200 rounded-lg shadow-sm" wire:key="projects-plans-<?php echo e($s->id); ?>">
                <div class="p-6">

                    
                    <h3 class="inline-flex px-4 py-2 rounded-full text-xs font-semibold tracking-wide uppercase" style="color: <?php echo e($s->badge_text_color); ?>;background-color: <?php echo e($s->badge_bg_color); ?>;">
                        <?php echo e($s->title); ?>

                    </h3>

                    
                    <p class="mt-4 text-sm text-gray-500 h-24 overflow-y-auto scrollbar-thin scrollbar-thumb-gray-300 scrollbar-track-gray-100 dark:scrollbar-thumb-zinc-900 dark:scrollbar-track-zinc-600">
                        <?php echo e($s->description); ?>

                    </p>

                    
                    <p class="mt-8">
                        <span class="text-3xl font-extrabold text-gray-900 ">
                            <?php echo e(_price($s->price)); ?>

                        </span>
                        <?php if($s->days): ?>
                            <span class="text-xs font-medium text-gray-500 lowercase">/ <?php echo e($s->days); ?> <?php echo e(__('messages.t_days')); ?></span>
                        <?php endif; ?>
                    </p>

                    
                    <div class="border-t border-gray-100 flex divide-x divide-gray-100 -mx-6 mt-6 -mb-6">

                        
                        <?php if(!$s->is_active): ?>
                            <div class="w-0 flex-1 flex">
                                <button 
                                    wire:click="activate('<?php echo e($s->id); ?>')"
                                    wire:loading.class="cursor-not-allowed "
                                    wire:loading.attr="disabled"
                                    class="relative -mr-px w-0 flex-1 inline-flex items-center justify-center py-4 text-sm text-gray-700 font-medium border border-transparent rounded-bl-lg hover:text-gray-500">
                                    
                                    
                                    <div wire:loading wire:target="activate('<?php echo e($s->id); ?>')">
                                        <svg role="status" class="w-5 h-5 text-gray-700 animate-spin" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="#E5E7EB"/>
                                            <path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="currentColor"/>
                                        </svg>
                                    </div> 

                                    
                                    <div wire:loading.remove wire:target="activate('<?php echo e($s->id); ?>')">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"> <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                                    </div>

                                    <span class="ltr:ml-3 rtl:mr-3"><?php echo e(__('messages.t_enable')); ?></span>
                                </button>
                            </div>
                        <?php endif; ?>

                        
                        <?php if($s->is_active): ?>
                            <div class="w-0 flex-1 flex">
                                <button 
                                    wire:click="disable('<?php echo e($s->id); ?>')"
                                    wire:loading.class="cursor-not-allowed "
                                    wire:loading.attr="disabled"
                                    class="relative -mr-px w-0 flex-1 inline-flex items-center justify-center py-4 text-sm text-gray-700 font-medium border border-transparent rounded-bl-lg hover:text-gray-500">
                                    
                                    
                                    <div wire:loading wire:target="disable('<?php echo e($s->id); ?>')">
                                        <svg role="status" class="w-5 h-5 text-gray-700 animate-spin" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="#E5E7EB"/>
                                            <path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="currentColor"/>
                                        </svg>
                                    </div> 

                                    
                                    <div wire:loading.remove wire:target="disable('<?php echo e($s->id); ?>')">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"> <path stroke-linecap="round" stroke-linejoin="round" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                                    </div>

                                    <span class="ltr:ml-3 rtl:mr-3"><?php echo e(__('messages.t_disable')); ?></span>
                                </button>
                            </div>
                        <?php endif; ?>

                        
                        <div class="ltr:-ml-px rtl:-mr-px w-0 flex-1 flex">
                            <a href="<?php echo e(admin_url('projects/plans/edit/' . $s->id)); ?>" class="relative w-0 flex-1 inline-flex items-center justify-center py-4 text-sm text-gray-700 font-medium border border-transparent rounded-br-lg hover:text-gray-500">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"> <path stroke-linecap="round" stroke-linejoin="round" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/></svg>
                                <span class="ltr:ml-3 rtl:mr-3"><?php echo e(__('messages.t_edit')); ?></span>
                            </a>
                        </div>

                    </div>

                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        
    </div>

    
    <div>
        <h3 class="text-lg font-bold text-gray-900">
            <?php echo e(__('messages.t_plans_for_promoting_bids')); ?>

        </h3>
        <p class="mt-1 text-sm font-normal text-gray-500">
            <?php echo e(__('messages.t_plans_for_promoting_bids_subtitle')); ?>

        </p>
    </div>

    
    <ul role="list" class="space-y-4 mt-4">

        <?php $__currentLoopData = $bidding_plans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $plan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li>
                <div class="block bg-white shadow rounded-md">
                    <div class="px-4 py-4 sm:px-6">
                        <div class="flex items-center justify-between">

                            
                            <h3 class="inline-flex px-4 py-2 rounded-sm text-xs font-semibold tracking-wide uppercase" style="color: <?php echo e($plan->badge_text_color); ?>;background-color: <?php echo e($plan->badge_bg_color); ?>;">
                                <?php echo e(__('messages.t_' . $plan->plan_type)); ?>

                            </h3>

                            
                            <div class="flex-shrink-0 flex font-semibold text-base text-black">
                                <?php echo money($plan->price, settings('currency')->code, true); ?>
                            </div>
                                
                        </div>
                        <div class="mt-2 sm:flex sm:justify-between">
                            <div class="text-sm text-gray-500">

                                
                                <div class="py-3">
                                    <?php echo e(__('messages.t_bidding_plan_' . $plan->plan_type . '_subtitle')); ?>

                                </div>

                                
                                <div class="mt-2 flex flex-col text-gray-500 xl:flex-row">
                                    <div class="flex items-start">

                                        
                                        <dt class="mt-0.5">
                                            <a class="flex items-center space-x-2 rtl:space-x-reverse group" href="<?php echo e(admin_url('projects/plans/bidding/edit/' . $plan->uid)); ?>">
                                                <svg class="w-5 h-5 text-gray-500 group-hover:text-primary-600" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M19.045 7.401c.378-.378.586-.88.586-1.414s-.208-1.036-.586-1.414l-1.586-1.586c-.378-.378-.88-.586-1.414-.586s-1.036.208-1.413.585L4 13.585V18h4.413L19.045 7.401zm-3-3 1.587 1.585-1.59 1.584-1.586-1.585 1.589-1.584zM6 16v-1.585l7.04-7.018 1.586 1.586L7.587 16H6zm-2 4h16v2H4z"></path></svg>
                                                <span class="font-medium hover:text-primary-600"><?php echo e(__('messages.t_edit')); ?></span>
                                            </a>
                                        </dt>

                                    </div>

                                    <div class="mt-2 flex items-start space-x-3 xl:mt-0 xl:ml-3.5 xl:border-l xl:border-gray-400 xl:border-opacity-50 xl:pl-3.5">

                                        
                                        <dt class="mt-0.5 flex items-center space-x-2 rtl:space-x-reverse">
                                            <?php if($plan->is_active): ?>
                                                <span class="flex w-3 h-3 bg-green-400 rounded-full"></span>
                                                <span class="text-[13px] font-medium text-green-600"><?php echo app('translator')->get('messages.t_active'); ?></span>  
                                            <?php else: ?>
                                                <span class="flex w-3 h-3 bg-red-500 rounded-full"></span>
                                                <span class="text-[13px] font-medium text-red-600"><?php echo app('translator')->get('messages.t_disabled'); ?></span>  
                                            <?php endif; ?>

                                        </dt>
                                    
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        
    </ul>

</div><?php /**PATH /home/dashoppingcom/giget.da-shopping.com/resources/views/livewire/admin/projects/plans/plans.blade.php ENDPATH**/ ?>