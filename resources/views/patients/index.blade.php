<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>School Clinic - Patient List</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f8fa;
            margin: 0;
            padding: 20px;
        }

        h1 {
            text-align: center;
            color: #4a90e2;
            font-size: 2.5em;
            margin-bottom: 20px;
        }

        .container {
            max-width: 1000px;
            margin: auto;
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.1);
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        table th, table td {
            padding: 12px;
            text-align: left;
            border: 1px solid #ddd;
        }

        table th {
            background-color: #4a90e2;
            color: white;
        }

        table tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        p {
            text-align: center;
            color: #999;
        }

        .actions {
            display: flex;
            justify-content: center;
        }

        .actions a {
            margin: 0 5px;
            padding: 8px 12px;
            background-color: #4a90e2;
            color: white;
            border-radius: 5px;
            text-decoration: none;
        }

        .actions a:hover {
            background-color: #357ABD;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>List of Patients</h1>

        @if($patients->isEmpty())
            <p>No patients found.</p>
        @else
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Birth Date</th>
                        <th>Gender</th>
                        <th>Contact No.</th>
                        <th>Address</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($patients as $p)
                        <tr>
                            <td>{{ $p->patient_id }}</td>
                            <td>{{ $p->Fname }}</td>
                            <td>{{ $p->Lname }}</td>
                            <td>{{ $p->birth_date }}</td>
                            <td>{{ $p->gender }}</td>
                            <td>{{ $p->contact_no }}</td>
                            <td>{{ $p->addressed }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </div>
</body>
</html>
