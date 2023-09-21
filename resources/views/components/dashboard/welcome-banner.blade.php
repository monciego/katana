<div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
    <div class="bg-white dark:bg-gray-900 overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 text-gray-900 dark:text-gray-100">
            Good <span id="greeting"></span>, {{ Auth::user()->name }} 👋
        </div>
    </div>
</div>

@push('scripts')
<script>
    const greeting = document.getElementById("greeting");

    let today = new Date(),
    hour = today.getHours();

    if (hour < 12) {
        greeting.textContent = 'morning';
    } else if (hour < 18) {
        greeting.textContent = 'afternoon';
    } else {
        greeting.textContent = 'evening';
    }
</script>
@endpush