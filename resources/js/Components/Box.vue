<template>
    <div class="border border-gray-200 dark:border-gray-800 rouded-md p-4 shadow-sm dark:text-gray-200">
        <div class="text-gray-500 font-medium">
            <slot name="header" />
        </div>
        <slot />
    </div>
</template>
