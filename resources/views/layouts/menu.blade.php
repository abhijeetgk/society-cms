@guest
@else
<ul class="nav navbar-nav ">
      
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Society
        </a>
        <ul class="dropdown-menu">
          <li><a href="{{ route('societyIndex') }}">List</a></li>
          <li><a href="{{ route('societyInsert') }}">Add New</a></li>
        </ul>
      </li>
      <li><a class="dropdown-toggle" data-toggle="dropdown" href="#">Members</a>
        <ul class="dropdown-menu">
          <li><a href="{{ route('memberInsert') }}">Add New</a></li>
          <li><a href="{{ route('memberIndex') }}">List</a></li>
        </ul>
      </li>
      <li><a class="dropdown-toggle" data-toggle="dropdown" href="#">Receipts</a>
        <ul class="dropdown-menu">
          <li><a href="#">Add New</a></li>
          <li><a href="#">Report</a></li>
        </ul>
      </li>
      <li><a class="dropdown-toggle" data-toggle="dropdown" href="#">Payments</a>
        <ul class="dropdown-menu">
          <li><a href="#">Add New</a></li>
          <li><a href="#">Report</a></li>
        </ul>
      </li>
    </ul>
    @endif