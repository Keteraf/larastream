<script setup>

import Box from "@/Components/Box.vue";

defineProps({
    current_video: Object
});
</script>

<template>
    <div class="py-4 max-w-7xl px-4 sm:px-6 lg:px-6 lg:col-span-3">
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
            <Box :key="current_video.id">
                <div class="font-bold text-xl text-gray-800 dark:text-gray-200 py-2 px-4">
                    {{ current_video.name }}
                </div>
                <video controls class="my-4 px-4 w-full">
                    <source :src="'/storage/videos/' + current_video.filename" type="video/mp4">
                    Your browser does not support the video tag.
                </video>

                <p class="text-md text-gray-800 dark:text-gray-200 my-4 px-4">
                    {{ current_video.description }}
                </p>
            </Box>

        </div>

    </div>
</template>

<style scoped>

</style>
