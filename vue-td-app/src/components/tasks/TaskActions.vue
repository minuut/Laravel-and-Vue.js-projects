<template>
  <div class="task-actions">
    <button class="btn btn-sm btn-circle btn-outline-secondary me-1"
    @click="$event => emit('edit')">
      <Pencil />
    </button>
    <button class="btn btn-sm btn-circle btn-outline-danger"
    @click="$event => emit('remove')">
      <Trash />
    </button>
  </div>
</template>

<script setup>
import Pencil from "../icons/Pencil.vue";
import Trash from "../icons/Trash.vue";

const emit = defineEmits(['edit', 'remove'])

</script>