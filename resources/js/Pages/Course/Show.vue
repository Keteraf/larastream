<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import Playlist from "@/Pages/Course/Partials/Playlist.vue";
import Video from "@/Pages/Course/Partials/Video.vue";
let props = defineProps({
    course_name: Object,
    videos: Object,
    current_video: Object
});
let course_name = props.course_name;
let videos = props.videos;
let current_video = props.current_video;

</script>
<template>
    <AppLayout title="Your Courses">
        <h1 class="text-3xl text-gray-800 dark:text-gray-200">
            {{ course_name }}
        </h1>
        <section class="grid grid-cols-1 lg:grid-cols-4 gap-0">
            <Video :current_video="current_video" @changeVideo="current_video = $event"></Video>

            <Playlist :videos="videos" :current_video="current_video"></Playlist>
        </section>
    </AppLayout>
</template>
