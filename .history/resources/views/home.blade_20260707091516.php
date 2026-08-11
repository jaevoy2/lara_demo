@extends('_layout._head')

@section('content')
    <div>
        <div class="container col-5 hv-100 justify-content-center" style="width: 18rem;">

            <div class="card-body">
                <h5 class="card-title">Students</h5>

                <ul id="student-list" class="list-group mb-3"></ul>

            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', async function () {
            try {
                const response = await fetch('/get-students');

                if (!response.ok) {
                    throw new Error('Failed to fetch students.');
                }

                const data = await response.json();

                const studentList = document.getElementById('student-list');
                studentList.innerHTML = '';

                data.student.forEach(student => {
                    studentList.innerHTML += `
                        <li class="list-group-item">
                            ${student.name}
                        </li>
                    `;
                });

            } catch (error) {
                console.log(error);
            }
        });
    </script>
@endsection







<!-- fetch('http://127.0.0.1:8000/api/get-student')
    .then(response => {
        return response.json();
    })
    .then(students => {
        const studentList = document.getElementById('student-list');
        studentList.innerHTML = '';

        students.forEach(student => {
            studentList.innerHTML += `
                <li class="list-group-item">
                    ${student.name}
                </li>
            `;
        });
    })
    .catch(error => {
        console.error(error);
}); -->