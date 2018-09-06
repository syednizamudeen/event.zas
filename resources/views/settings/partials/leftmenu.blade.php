<div class="card">
    <img class="card-img-top" src="{{$profile_image}}" alt="{{$user->name}}">
    <div class="card-body">
        <h5 class="card-title">{{$user->name}}</h5>
        <p class="card-text">{{$user->email}}</p>
    </div>
    <div class="list-group list-group-flush">
        <a href="{{url('/settings/account')}}" class="list-group-item list-group-item-action">Account</a>
        @hasrole('vendor')
        <a href="{{url('/settings/profile')}}" class="list-group-item list-group-item-action">Profile</a>
        @endhasrole
        <a href="{{url('/settings/picture')}}" class="list-group-item list-group-item-action">Upload Picture</a>
        <a href="{{url('/settings/connection')}}" class="list-group-item list-group-item-action">Social Connection</a>
        {{-- <a href="{{url('/settings/payment')}}" class="list-group-item list-group-item-action">Payment History</a>
        <a href="{{url('/settings/subscription')}}" class="list-group-item list-group-item-action">Subscription</a>
        <a href="{{url('/settings/blocked')}}" class="list-group-item list-group-item-action">Blocked Accounts</a>
        <a href="{{url('/settings/billing')}}" class="list-group-item list-group-item-action">Billing</a>
        <a href="{{url('/settings/notification')}}" class="list-group-item list-group-item-action">Notifications</a> --}}
    </div>
    <div class="card-body">
        <a href="#" class="card-link">Change Password</a>
        <a href="#" class="card-link">Delete Account</a>
    </div>
</div>