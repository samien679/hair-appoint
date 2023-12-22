<script setup>

defineProps({ date: String })

</script>
<template>
    <div class="bg-gray-400 border border-gray-700 border-1">
        <div class="p-1 ">
            {{ date }}
        </div>
        <div class="px-1">
        </div>

    </div>
</template>