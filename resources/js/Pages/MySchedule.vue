<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import StaffDayHeader from '@/Components/StaffDayHeader.vue';
import StaffCalendarBlock from '@/Components/StaffCalendarBlock.vue';

defineProps({ date: Object })
</script>

<template>
    <AppLayout title="My Schedule">
        <template #header>
            <h2 class="text-xl font-semibold leading-tight text-gray-800">
                My Schedule
            </h2>
        </template>

        <div class="py-12">
            <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div class="overflow-hidden bg-white shadow-xl sm:rounded-lg">
                    <div
                        class="relative flex min-h-screen bg-gray-100 bg-center bg-dots-darker dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
                        <div class="w-8 h-full bg-green-300">test</div>
                        <div>
                            <div class="grid grid-cols-7 mb-10">
                                <StaffDayHeader :date="date" :v-for="date in date" :key="date.date" />

                            </div>
                            <div class="grid grid-cols-7" :v-for="date in date">
                                <StaffCalendarBlock />
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </AppLayout>
</template>
