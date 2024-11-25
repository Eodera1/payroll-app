@extends('layouts.app')

@section('content')
    <div class="row justify-content-center mb-4">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <h1 class="text-center">Welcome, {{ Auth::user()->name }}!</h1>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-3 mb-3">
            <div class="card text-white bg-primary">
                <div class="card-header">
                    <h4>Employees</h4>
                </div>
                <div class="card-body">
                    <p class="text-center">{{ $totalEmployees }}</p>
                    <div class="border-top">
                        <a href="{{ route('employees.index') }}" class="text-white">
                            View Employees
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-3 mb-3">
            <div class="card text-white bg-success">
                <div class="card-header">
                    <h4>Departments</h4>
                </div>
                <div class="card-body">
                    <p class="text-center">{{ $totalDepartments }}</p>
                    <div class="border-top">
                        <a href="{{ route('departments.index') }}" class="text-white">
                            View Departments
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-3 mb-3">
            <div class="card text-white bg-danger">
                <div class="card-header">
                    <h4>Attendances</h4>
                </div>
                <div class="card-body">
                    <p class="text-center">{{ $totalAttendances }}</p>
                    <div class="border-top">
                        <a href="{{ route('employees.index') }}" class="text-white">
                            View Attendances
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-3 mb-3">
            <div class="card text-white bg-warning">
                <div class="card-header">
                    <h4>Records</h4>
                </div>
                <div class="card-body">
                    <p class="text-center">{{ $totalEmployeerecords }}</p>
                    <div class="border-top">
                        <a href="{{ route('employees.index') }}" class="text-white">
                            View Records
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script>
        const ctx = document.getElementById('employeesPerDepartmentChart').getContext('2d');
        const employeesPerDepartmentChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: @json($employeeCountsByDepartment->pluck('department')),
                datasets: [{
                    label: 'Number of Employees',
                    data: @json($employeeCountsByDepartment->pluck('count')),
                    backgroundColor: [
                        '#007bff', '#28a745', '#dc3545', '#ffc107', '#6c757d'
                    ],
                    borderColor: [
                        '#0056b3', '#1e7e34', '#bd2130', '#e0a800', '#495057'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
@endsection
