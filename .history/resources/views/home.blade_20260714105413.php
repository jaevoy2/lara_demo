@extends('_layout._head')

@section('content')
    <div class="p-5">
        <h5>Home</h5>

    </div>

    <script>
        document.addEventListener('DOMContentLoaded', async function () {
            try {
                const response = await fetch('/get-students');

                if (!response.ok) {
                    console.log('Failed to fetch students.');
                }

                const data = await response.json();

                // const studentList = document.getElementById('student-list');
                // studentList.innerHTML = '';

                // data.student.forEach(student => {
                //     studentList.innerHTML += `
                //         <li class="list-group-item">
                //             ${student.name}
                //         </li>
                //     `;
                // });

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