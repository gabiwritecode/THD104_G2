

<script setup>
import { ref, computed } from 'vue';
import memberBtn from "../components/member_btn.vue";

import Start from '@/components/customized_start.vue';
import Step1 from '@/components/customized_step1.vue';
import Step2 from '@/components/customized_step2.vue';
import Step3 from '@/components/customized_step3.vue';
import Step4 from '@/components/customized_step4.vue';
import Final from '@/components/customized_final.vue';

const currentStep = ref(1);

const prevStep = () => {
  if (currentStep.value > 1) {
    currentStep.value -= 1;
  }
};

const nextStep = () => {
  if (currentStep.value < 6) {
    currentStep.value += 1;
  }
};

const currentStepComponent = computed(() => {
  switch (currentStep.value) {
    case 1:
      return Start;
    case 2:
      return Step1;
    case 3:
      return Step2;
    case 4:
      return Step3;
    case 5:
      return Step4;
    case 6:
      return Final;
    default:
      return Start;
  }
});
</script>
<template>
  <component :is="currentStepComponent" @prev-step="prevStep" @next-step="nextStep"></component>
  <memberBtn></memberBtn>
</template>
