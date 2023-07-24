
<div style="background-color: #3CB371; padding: 50px 0;">
    <div class="jumbotron jumbotron-fluid text-center">
        <div class="container">
            <h1 class="display-4" style="color: #FFFFFF;"><img src="{{ asset('images/logo.png') }}" alt="logo"
                    style="height: 70px;"> Property4U</h1>
            <p class="lead" style="color: #FFFFFF;">Vindt de perfecte match voor uw huis of vindt uw volgende
                thuis bij ons. Registreer nu en ontdek de mogelijkheden.</p>
            <div class="text-center">
                @auth
                <a class="btn btn-dark mb-4" href="/listings/create">Klik hier om je woning te plaatsen</a>
                @else
                <a class="btn btn-dark mb-4" href="/register">Registreer je hier</a>
                @endauth
            </div>
        </div>
    </div>
</div>