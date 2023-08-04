<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import Box from '@/Components/Box.vue';
import { Link } from '@inertiajs/vue3';

defineProps({
    courses: Object,
})

</script>
<template>
    <AppLayout title="My Courses">
        <h1 class="text-3xl text-gray-800 dark:text-gray-200 my-4">Your Courses</h1>
        <section class="grid grid-cols-1 lg:grid-cols-4 gap-4">
            <Link v-for="course in courses" class="hover:bg-gray-200 hover:dark:bg-gray-800 rounded-md"
                :href="route('course.show', course.id)">
            <Box class="col-span-1 rounded-md">
                <span><img src="https://placehold.co/400x200" alt=""></span>

                <span class="w-full text-xl py-4">{{ course.name }}</span><br style="clear: both;">
                <span>{{ course.description }}</span>

            </Box>
            </Link>
        </section>
    </AppLayout>
</template>
