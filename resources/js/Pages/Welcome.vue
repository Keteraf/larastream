<script setup>
import ApplicationLogo from '@/Components/ApplicationLogo.vue';
import { Head, Link } from '@inertiajs/vue3';

defineProps({
    canLogin: Boolean,
    canRegister: Boolean,
    laravelVersion: String,
    phpVersion: String,
});
</script>

<template>
    <Head title="Welcome" />

    <div
        class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-center dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
        <div v-if="canLogin" class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
            <Link v-if="$page.props.auth.user" :href="route('dashboard')"
                class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">
            Dashboard</Link>

            <template v-else>
                <Link :href="route('login')"
                    class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">
                Log in</Link>

                <Link v-if="canRegister" :href="route('register')"
                    class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">
                Register</Link>
            </template>
        </div>

        <div class="max-w-7xl mx-auto p-6 lg:p-8">
            <div class="flex flex-col justify-center items-center">
                <ApplicationLogo class="block h-48 w-auto" />
                <p class="text-gray-800 dark:text-gray-200 text-xl">Choose the course that suits you the best</p>
            </div>

            <div class="mt-8">
                <div class="grid px-6 md:px-12 lg:grid-cols-3 xl:px-32">
                    <div class="p-0 py-12">
                        <div
                            class="block h-full rounded-lg bg-white shadow-[0_2pdark:bg-neutral-700x_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] lg:rounded-tr-none lg:rounded-br-none">
                            <div
                                class="border-b-2 border-gray-100 border-opacity-100 p-6 text-center dark:border-opacity-10">
                                <p class="mb-4 text-sm uppercase">
                                    <strong>Basic</strong>
                                </p>
                                <h3 class="mb-6 text-3xl">
                                    <strong>€ 150</strong>
                                </h3>

                                <button type="button"
                                    class="inline-block w-full rounded bg-primary px-6 pt-2.5 pb-2 text-xs font-medium uppercase leading-normal  shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]">
                                    Buy
                                </button>
                            </div>
                            <div class="p-6">
                                <ol class="list-inside">
                                    <li class="mb-4 flex">
                                        <span>
                                            <i class="fa-solid fa-check" aria-hidden="true"></i>
                                            Unlimited updates
                                        </span>
                                    </li>
                                    <li class="mb-4 flex">
                                        <span>
                                            <i class="fa-solid fa-check" aria-hidden="true"></i>
                                            Git repository
                                        </span>
                                    </li>
                                    <li class="mb-4 flex">
                                        <span>
                                            <i class="fa-solid fa-check" aria-hidden="true"></i>
                                            npm installation
                                        </span>
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="block h-full rounded-lg bg-white shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)]"
                            style="z-index: 1">
                            <div
                                class="border-b-2 border-neutral-100 border-opacity-100 p-6 text-center dark:border-opacity-10">
                                <p class="mb-4 text-sm uppercase">
                                    <strong>PRO</strong>
                                </p>
                                <h3 class="mb-6 text-3xl">
                                    <strong>€ 500</strong>
                                </h3>

                                <button type="button"
                                    class="inline-block w-full rounded bg-primary px-6 pt-2.5 pb-2 text-xs font-medium uppercase leading-normal text-black bg-gray-100 dark:bg-gray-900 dark:text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]">
                                    Buy
                                </button>
                            </div>
                            <div class="p-6">
                                <ol class="list-inside">
                                    <li class="mb-4 flex">
                                        <span>
                                            <i class="fa-solid fa-check" aria-hidden="true"></i>
                                            Unlimited updates
                                        </span>
                                    </li>
                                    <li class="mb-4 flex">
                                        <span>
                                            <i class="fa-solid fa-check" aria-hidden="true"></i>
                                            Git repository
                                        </span>
                                    </li>
                                    <li class="mb-4 flex">
                                        <span>
                                            <i class="fa-solid fa-check" aria-hidden="true"></i>
                                            npm installation
                                        </span>
                                    </li>

                                    <li class="mb-4 flex">
                                        <span>
                                            <i class="fa-solid fa-check" aria-hidden="true"></i>
                                            Code examples
                                        </span>
                                    </li>

                                    <li class="mb-4 flex">
                                        <span>
                                            <i class="fa-solid fa-check" aria-hidden="true"></i>
                                            Premium snippets
                                        </span>
                                    </li>
                                    <li class="mb-4 flex">
                                        <span>
                                            <i class="fa-solid fa-check" aria-hidden="true"></i>
                                            Premium support
                                        </span>
                                    </li>
                                    <li class="mb-4 flex">
                                        <span>
                                            <i class="fa-solid fa-check" aria-hidden="true"></i>
                                            Drag &amp; drop builder
                                        </span>
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>

                    <div class="py-12">
                        <div
                            class="block h-full rounded-lg bg-white shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] lg:rounded-tl-none lg:rounded-bl-none">
                            <div
                                class="border-b-2 border-neutral-100 border-opacity-100 p-6 text-center dark:border-opacity-10">
                                <p class="mb-4 text-sm uppercase">
                                    <strong>Advanced</strong>
                                </p>
                                <h3 class="mb-6 text-3xl">
                                    <strong>€ 300</strong>
                                </h3>

                                <button type="button"
                                    class="inline-block w-full rounded bg-primary px-6 pt-2.5 pb-2 text-xs font-medium uppercase leading-normal  shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]">
                                    Buy
                                </button>
                            </div>
                            <div class="p-6">
                                <ol class="list-inside">
                                    <li class="mb-4 flex">
                                        <span>
                                            <i class="fa-solid fa-check" aria-hidden="true"></i>
                                            Unlimited updates
                                        </span>
                                    </li>
                                    <li class="mb-4 flex">
                                        <span>
                                            <i class="fa-solid fa-check" aria-hidden="true"></i>
                                            Git repository
                                        </span>
                                    </li>
                                    <li class="mb-4 flex">
                                        <span>
                                            <i class="fa-solid fa-check" aria-hidden="true"></i>
                                            npm installation
                                        </span>
                                    </li>

                                    <li class="mb-4 flex">
                                        <span>
                                            <i class="fa-solid fa-check" aria-hidden="true"></i>
                                            Code examples
                                        </span>
                                    </li>

                                    <li class="mb-4 flex">
                                        <span>
                                            <i class="fa-solid fa-check" aria-hidden="true"></i>
                                            Premium snippets
                                        </span>
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="flex justify-center mt-16 px-6 sm:items-center sm:justify-between">
                <div class="text-center text-sm text-gray-500 dark:text-gray-400 sm:text-left">
                    <div class="flex items-center gap-4">
                        <a href="https://github.com/sponsors/taylorotwell"
                            class="group inline-flex items-center hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                class="-mt-px mr-1 w-5 h-5 stroke-gray-400 dark:stroke-gray-600 group-hover:stroke-gray-600 dark:group-hover:stroke-gray-400">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                            </svg>
                            Sponsor
                        </a>
                    </div>
                </div>

                <div class="ml-4 text-center text-sm text-gray-500 dark:text-gray-400 sm:text-right sm:ml-0">
                    Laravel v{{ laravelVersion }} (PHP v{{ phpVersion }})
                </div>
            </div>
        </div>
    </div>
</template>

<style>
.bg-dots-darker {
    background-image: url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(0,0,0,0.07)'/%3E%3C/svg%3E");
}

@media (prefers-color-scheme: dark) {
    .dark\:bg-dots-lighter {
        background-image: url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(255,255,255,0.07)'/%3E%3C/svg%3E");
    }
}
</style>
