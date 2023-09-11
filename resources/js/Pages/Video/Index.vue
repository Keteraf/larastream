<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import Box from '@/Components/Box.vue';
import Playlist from "@/Pages/Course/Partials/Playlist.vue";
import Video from "@/Pages/Course/Partials/Video.vue";

defineProps({
    videos: Object,
    current_video: Object
});


</script>

<template>
    <AppLayout title="Videos">

        <!-- <h1 class="text-3xl mb-4 text-gray-600 dark:text-gray-300">Your Videos</h1> -->

        <section class="grid grid-cols-1 lg:grid-cols-4 gap-0">
            <Video :current_video="current_video"></Video>

            <Playlist :videos="videos" :current_video="current_video"></Playlist>
        </section>
    </AppLayout>
</template>
