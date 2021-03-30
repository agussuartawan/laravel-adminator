{{-- loader --}}
<div id="loader">
    <div class="spinner"></div>
</div>
<script>
    window.addEventListener('load', function load() {
        var loader = document.getElementById('loader');
        setTimeout(function() {
            loader.classList.add('fadeOut');
        });
    });
</script>