<h1>Employees</h1>
<a href="{{ route('employees.create') }}">Add Employee</a>

@if (session('success'))
    <div>{{ session('success') }}</div>
@endif

<ul>
    @foreach ($employees as $employee)
        <li>{{ $employee->name }} - {{ $employee->mobile }} - {{ $employee->city->name }} - {{ $employee->state->name }}</li>
    @endforeach
</ul>
