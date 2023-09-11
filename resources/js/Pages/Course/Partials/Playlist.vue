<script setup>

import Box from "@/Components/Box.vue";

let props = defineProps({
    videos: Object,
    current_video: Object
});
let videos = props.videos;
let current_video = props.current_video;

</script>

<template>
    <div class="py-4 max-w-7xl px-4 sm:px-6 lg:col-span-1">
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
            <Box>
                <div class="py-2 text-xl">Playlist</div>
                <hr/>
                <button v-for="video in videos" :key="video.id" @click="props.current_video.id = video.id;$emit('changeVideo', video.id);"
                        class="grid grid-cols-6 mt-2 py-2 px-2 w-full text-left border-0border-collapse dark:hover:bg-gray-500 hover:bg-gray-400 hover:rounded-md"
                        v-bind:class="(current_video.id === video.id) ? 'dark:bg-gray-700 bg-gray-200 rounded-md border' : ''">

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
</template>

<style scoped>

</style>
