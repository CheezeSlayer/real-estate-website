<template>
<div class="modal fade" id="modal-delete-confirm" role="dialog">
	<div class="modal-window">
	  <p>Delete this home entry?</p>
	  <div class="actions">
		 <button class="cancel" @click="onCancel">Cancel</button>
		 <button class="confirm" @click="onConfirm">Confirm</button>
	  </div>
	</div>
 </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
