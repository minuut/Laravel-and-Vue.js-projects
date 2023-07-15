<template>
  <main style="min-height: 50vh; margin-top: 2rem">
    <div class="container">
      <div class="row">
        <div class="col-md-8 offset-md-2">
          <!-- Add new Task -->
          <!-- NewTask component for adding new tasks -->
          <NewTask />

          <!-- List of uncompleted tasks -->
          <!-- Tasks component for displaying uncompleted tasks -->
          <Tasks
            :tasks="uncompletedTasks"
          />

          <!-- Show toggle button -->
          <!-- Show toggle button only if there are uncompleted and completed tasks -->
          <div class="text-center my-3" v-show="showToggleCompletedBtn">
            <button
              class="btn btn-sm btn-secondary"
              @click="($event) => (showCompletedTasks = !showCompletedTasks)"
            >
              <span v-if="!showCompletedTasks">show completed</span>
              <span v-else>hide completed</span>
            </button>
          </div>

          <!-- List of completed tasks -->
          <!-- Tasks component for displaying completed tasks -->
          <Tasks
            :tasks="completedTasks"
            :show="completedTasksIsVisible && showCompletedTasks"  
          />
        </div>
      </div>
    </div>
  </main>
</template>

<script setup>
import { computed, onMounted, ref } from "vue";
import { storeToRefs } from "pinia";
import { useTaskStore } from "../stores/task";
import Tasks from "../components/tasks/Tasks.vue";
import NewTask from "../components/tasks/NewTask.vue";

// Reactive variable to store tasks
const store = useTaskStore()

const { completedTasks, uncompletedTasks } = storeToRefs(store)
const { fetchAllTasks } = store

// Fetch all tasks on component mount
onMounted(async () => {
 await fetchAllTasks();
});

// Compute whether to show the toggle button for completed tasks
const showToggleCompletedBtn = computed(
  () => uncompletedTasks.value.length > 0 && completedTasks.value.length > 0
);

// Compute whether completed tasks should be visible
const completedTasksIsVisible = computed(
  () => uncompletedTasks.value.length === 0 || completedTasks.value.length > 0
);

// Reactive variable for controlling visibility of completed tasks
const showCompletedTasks = ref(false);

</script>

