<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Attendance</title>
  <style>
    /* General Reset */
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: 'Poppins', sans-serif;
      background: linear-gradient(135deg, #1e3c72, #2a5298); /* Darker gradient for better contrast */
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      color: #f0f0f0; /* Light text color for better readability */
    }

    .form-container {
      background: rgba(255, 255, 255, 0.15); /* Slightly darker glass effect */
      backdrop-filter: blur(12px);
      border-radius: 15px;
      padding: 20px 30px;
      box-shadow: 0 8px 32px rgba(0, 0, 0, 0.3); /* Darker shadow for depth */
      width: 400px;
      color: #f0f0f0; /* Text color inside the form */
    }

    .form-container h1 {
      font-size: 26px;
      margin-bottom: 20px;
      text-align: center;
      font-weight: 700;
      color: #ffffff; /* Bright white for the heading */
    }

    .form-container p {
      margin-bottom: 15px;
      font-size: 16px;
    }

    .form-container select {
      width: 100%;
      padding: 10px;
      border: none;
      border-radius: 8px;
      background: rgba(255, 255, 255, 0.3); /* Slightly lighter dropdown background */
      color: #000; /* Black text for dropdown options */
      font-size: 14px;
      outline: none;
      appearance: none;
      cursor: pointer;
    }

    .form-container select option {
      background: #ffffff; /* White background for dropdown options */
      color: #000000; /* Black text for dropdown options */
    }

    .form-container button {
      width: 100%;
      padding: 10px;
      border: none;
      border-radius: 8px;
      background: linear-gradient(135deg, #1e3c72, #2a5298); /* Darker button gradient */
      color: #fff;
      font-size: 16px;
      font-weight: 600;
      cursor: pointer;
      transition: all 0.3s ease;
    }

    .form-container button:hover {
      background: linear-gradient(135deg, #2a5298, #1e3c72); /* Reverse gradient on hover */
      transform: scale(1.05);
    }
  </style>
</head>
<body>
  <div class="form-container">
    <h1>Submit Attendance</h1>
    <form method="POST" action="/attendance">
      @csrf
      @foreach($students as $student)
        <p>{{ $student->name }}
          <select name="attendance[{{ $student->id }}]">
            <option value="present">Present</option>
            <option value="absent">Absent</option>
            <option value="late">Late</option>
            <option value="leave">Leave</option>
          </select>
        </p>
      @endforeach
      <button type="submit">Submit Attendance</button>
    </form>
  </div>
</body>
</html>
