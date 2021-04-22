<form class="form-ad" action="{{ route('logout') }}" method="post" >
    @csrf
    <button type="submit" href="" class="btn btn-sm btn-light-primary font-weight-bolder py-2 px-5">Sign Out</button>
</form>
