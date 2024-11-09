<!-- need to remove -->
<li class="nav-item">
    <a href="{{ route('home') }}" class="nav-link {{ Request::is('home') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Home</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('employees.index') }}" class="nav-link {{ Request::is('employees*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Employees</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('salaries.index') }}" class="nav-link {{ Request::is('salaries*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Salaries</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('departments.index') }}" class="nav-link {{ Request::is('departments*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Departments</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('banks.index') }}" class="nav-link {{ Request::is('banks*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Banks</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('documentations.index') }}" class="nav-link {{ Request::is('documentations*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Documentations</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('payrolls.index') }}" class="nav-link {{ Request::is('payrolls*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Payrolls</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('allowances.index') }}" class="nav-link {{ Request::is('allowances*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Allowances</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('attendances.index') }}" class="nav-link {{ Request::is('attendances*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Attendances</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('employeerecords.index') }}" class="nav-link {{ Request::is('employeerecords*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Employeerecords</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('promotions.index') }}" class="nav-link {{ Request::is('promotions*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Promotions</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('leaves.index') }}" class="nav-link {{ Request::is('leaves*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Leaves</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('leavetypes.index') }}" class="nav-link {{ Request::is('leavetypes*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Leavetypes</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('deductions.index') }}" class="nav-link {{ Request::is('deductions*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Deductions</p>
    </a>
</li>
