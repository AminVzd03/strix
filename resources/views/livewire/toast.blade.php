<div
    x-data="{
        toasts: [],
        addToast(toast) {
            this.toasts.push({...toast, id: Date.now()});
            setTimeout(() => {
                this.toasts = this.toasts.filter(t => t.id !== toast.id)
            }, toast.timeout || 3000)
        }
    }"
    @notify.window="addToast($event.detail)"
    class="fixed top-5 right-5 z-50 space-y-3"
>
    <template x-for="toast in toasts" :key="toast.id">
        <div
            x-transition
            class="px-4 py-3 rounded-lg shadow-lg text-white"
            :class="{
                'bg-green-600': toast.type === 'success',
                'bg-red-600': toast.type === 'error',
                'bg-blue-600': toast.type === 'info'
            }"
        >
            <span x-text="toast.message"></span>
        </div>
    </template>
</div>
