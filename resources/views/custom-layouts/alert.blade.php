<div class="fixed-top m-auto pt-1" style="max-width: 25rem;">
    <div class="alert alert-dismissible show fade shadow d-none">
        <div class="alert-body">
            <button class="close" data-dismiss="alert">
                <span>&times;</span>
            </button>
            <span id="alertMessage"></span>
        </div>
    </div>
    @if(Session::has('error'))
        <div class="alert alert-danger alert-dismissible show fade shadow">
            <div class="alert-body">
                <button class="close" data-dismiss="alert">
                    <span>&times;</span>
                </button>
                {!! Session::get('error') !!}
            </div>
        </div>
    @elseif(Session::has('success'))
        <div class="alert alert-success alert-dismissible show fade shadow">
            <div class="alert-body">
                <button class="close" data-dismiss="alert">
                    <span>&times;</span>
                </button>
                {{ Session::get('success') }}
            </div>
        </div>
    @elseif(Session::has('status'))
        <div class="alert alert-success alert-dismissible show fade shadow">
            <div class="alert-body">
                <button class="close" data-dismiss="alert">
                    <span>&times;</span>
                </button>

                {{ Session::get('status') }}
            </div>
        </div>
    @elseif(Session::has('resent'))
        <div class="alert alert-success alert-dismissible show fade shadow">
            <div class="alert-body">
                <button class="close" data-dismiss="alert">
                    <span>&times;</span>
                </button>
                A fresh verification link has been sent to your email address.
            </div>
        </div>
    @endif
</div>
