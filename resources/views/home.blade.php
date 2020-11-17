@extends('layouts.app')

<script>

 window.location.href = 'http://localhost/blog/';

</script>

@section('content')

<meta http-equiv = "refresh" content = "3; url = http://localhost/blog/" />
<!-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">User Dashboard</div>
              
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in as User!
                        <a href="{{route('user.logout')}}">User Logout</a>
                </div>
            </div>
        </div>
    </div>
</div> -->
@endsection
