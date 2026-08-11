@extends('layout._head')

@section('content')
    <div class="px-5 py-1">
        <h5>Dashboard</h5>

        <div class="pt-2" id="printTableCon">
            <table id="todosTable" class="stripe hover">
                <thead class="text-light" style="background-color: #212529;">
                    <tr>
                        <th>Id</th>
                        <th>User Id</th>
                        <th>Title</th>
                        <th>Completed</th>
                    </tr>
                </thead>
                <tbody class="text-dark">
                    <!-- Rows will be populated here -->
                </tbody>
            </table>
        </div>

    </div>



    <script>
        document.addEventListener('DOMContentLoaded', async function () {
            const res = await fetch('https://jsonplaceholder.typicode.com/todos', {
                method: 'GET',
                headers: {
                    'Accept': 'application/json'
                }
            });

            const response = await res.json();
            console.log(response)

            if(res.ok) {
                $('#todosTable').DataTable({
                    data: response,
                    columns: [
                        { data: 'id' },
                        { data: 'userId' },
                        { data: 'title' },
                        { data: 'completed' }
                    ]
                })
            }
        })

    </script>
@endsection
