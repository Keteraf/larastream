<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
defineProps({
    course: Object,
});
</script>
<template>
    <AppLayout title="Your Courses">
        <h1 class="text-3xl text-gray-800 dark:text-gray-200">
            {{ course.name }}
        </h1>
    </AppLayout>
</template>
