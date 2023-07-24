
@if (session()->has('message'))
    <div id="flash">
        <div class="d-flex justify-content-center align-items-center mt-2">
            <div class="alert alert-success" role="alert">
                <p>{{ session('message') }}</p>
            </div>
        </div>
    </div>
    <!-- for some reason it didn't work from the layout so i put it here for now -->
    <script src="{{ asset('js/app.js') }}"></script>
@endif
