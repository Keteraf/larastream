<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import Box from '@/Components/Box.vue';
import { reactive } from 'vue';

defineProps({
    videos: Object,
    current_video: Object
});


</script>

<template>
    <AppLayout title="Videos">

        <!-- <h1 class="text-3xl mb-4 text-gray-600 dark:text-gray-300">Your Videos</h1> -->

        <section class="grid grid-cols-1 lg:grid-cols-4 gap-0">
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

            <div class="py-4 max-w-7xl px-4 sm:px-6 lg:col-span-1">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
                    <Box>
                        <div class="py-2 text-xl">COURSE NAME</div>
                        <button v-for="video in videos" :key="video.id" @click="current_video = video"
                            class="grid grid-cols-6 py-2 px-2 w-full text-left border-0border-collapse dark:hover:bg-gray-500 hover:bg-gray-400 hover:rounded-md"
                            v-bind:class="(current_video.id == video.id) ? 'dark:bg-gray-700 bg-gray-200 rounded-md border' : ''">

                            <div class="col-span-5">

                                {{ video.name }}
                                <br>
                                <span class="text-xs">
                                    {{ video.description.slice(0, 30) }}
                                </span>
                            </div>
                            <div class="col-span-1">

                                <i v-bind:class="(current_video.id == video.id) ? '' : 'fa fa-caret-right float-right mr-4 mt-4'"
                                    aria-hidden="true">
                                </i>

                            </div>
                        </button>
                    </Box>
                </div>

            </div>
        </section>
    </AppLayout>
</template>
