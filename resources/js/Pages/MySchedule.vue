<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import StaffDayHeader from '@/Components/StaffDayHeader.vue';
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
                        <div class="grid h-4 grid-cols-7 auto-cols-auto">
                            <StaffDayHeader :date="date.day1" />
                            <StaffDayHeader :date="date.day2" />
                            <StaffDayHeader :date="date.day3" />
                            <StaffDayHeader :date="date.day4" />
                            <StaffDayHeader :date="date.day5" />
                            <StaffDayHeader :date="date.day6" />
                            <StaffDayHeader :date="date.day7" />

                        </div>
                        <div class="grid grid-cols-7 grid-rows-6">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </AppLayout>
</template>
