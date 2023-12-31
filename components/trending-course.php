<?php
$course = isset($args['course']) ? $args['course'] : array();
?>

<div 
    class="w-80 bg-zinc-900 shadow-lg overflow-hidden shadow-md hover:shadow-2xl transition-shadow duration-300 cursor-pointer"
    onclick="location.href='<?php echo esc_url($course['link']); ?>'"
>
    <img alt="<?php echo esc_attr($course['name']); ?>" src="<?php echo esc_url($course['image']); ?>"
        class="w-full h-48 object-cover">
    <div class="p-4">
        <div class="bg-gray-700 text-white px-2 py-1 rounded-full inline-block mb-2">
            立即上課
        </div>
        <div class="mb-2">
            <h3 class="text-xl text-white truncate">
                <?php echo esc_html($course['name']); ?>
            </h3>
        </div>
        <div class="text-sm text-gray-300 mb-2 truncate">
            by <?php echo esc_html($course['teacher']); ?>
        </div>
        <div class="flex justify-between text-gray-300">
            <div class="flex items-center">
                <span class="mr-2">
                    時長 <?php echo esc_html($course['duration']); ?>
                </span>
            </div>
            <div class="flex items-center">
                <span class="mr-2">
                    學員數 <?php echo esc_html($course['registration']); ?>
                </span>
            </div>
        </div>
    </div>
</div>