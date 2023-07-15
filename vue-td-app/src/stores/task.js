import { defineStore } from "pinia";
import {
  allTasks,
  createTask,
  removeTask,
  completeTask,
  updateTask,
} from "../http/task-api";
import { ref, computed } from "vue";

export const useTaskStore = defineStore("taskStore", () => {
  const tasks = ref([]);

  const uncompletedTasks = computed(() =>
    tasks.value.filter((task) => !task.is_completed)
  );
  const completedTasks = computed(() =>
    tasks.value.filter((task) => task.is_completed)
  );
  const fetchAllTasks = async () => {
    const { data } = await allTasks();
    tasks.value = data.data;
  };

  // Event handler for adding a new task
  const handleAddedTask = async (newTask) => {
    const { data: createdTask } = await createTask(newTask);
    tasks.value.unshift(createdTask.data);
  };

  // Event handler for updating a task
  const handleUpdatedTask = async (task) => {
    const { data: updatedTask } = await updateTask(task.id, {
      name: task.name,
    });

    const currentTask = tasks.value.find((item) => item.id === task.id);
    currentTask.name = updatedTask.data.name;
  };

  // Event handler for marking a task as completed
  const handleCompletedTask = async (task) => {
    const { data: updatedTask } = await completeTask(task.id, {
      is_completed: task.is_completed,
    });

    const currentTask = tasks.value.find((item) => item.id === task.id);
    currentTask.is_completed = updatedTask.data.is_completed;
  };

  // Event handler for removing a task
  const handleRemovedTask = async (task) => {
    await removeTask(task.id);
    const index = tasks.value.findIndex((item) => item.id === task.id);
    tasks.value.splice(index, 1);
  };

  return {
    tasks,
    completedTasks,
    uncompletedTasks,
    fetchAllTasks,
    handleAddedTask,
    handleUpdatedTask,
    handleCompletedTask,
    handleRemovedTask,
  };
});
