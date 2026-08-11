@extends('_layout._head')

@section('content')
    <div>
        <div class="card" style="width: 18rem;">
            <img src="..." class="card-img-top" alt="...">

            <div class="card-body">
                <h5 class="card-title">Students</h5>

                <ul id="student-list" class="list-group mb-3"></ul>

                <a href="/about" class="btn btn-success">Go somewhere</a>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', async function () {
            try {
                const response = await fetch('http://lara_demo.test/api/get-student');

                if (!response.ok) {
                    throw new Error('Failed to fetch students.');
                }

                const students = await response.json();

                const studentList = document.getElementById('student-list');
                studentList.innerHTML = '';

                students.forEach(student => {
                    studentList.innerHTML += `
                        <li class="list-group-item">
                            ${student.name}
                        </li>
                    `;
                });

            } catch (error) {
                console.error(error);
            }
        });
    </script>
@endsection