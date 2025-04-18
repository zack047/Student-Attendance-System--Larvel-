<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Add Student</title>
  <style>
    /* General Reset */
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: 'Poppins', sans-serif;
      background: linear-gradient(135deg, #000000, #434343); /* Dark gradient background */
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      overflow: hidden;
      color: #f0f0f0;
    }

    .form-container {
      background: rgba(255, 255, 255, 0.1); /* Glass effect */
      backdrop-filter: blur(10px);
      border-radius: 15px;
      padding: 30px 40px;
      box-shadow: 0 8px 32px rgba(0, 0, 0, 0.5);
      width: 400px;
      color: #fff;
      animation: fadeIn 1.5s ease-in-out;
    }

    .form-container h1 {
      font-size: 28px;
      margin-bottom: 20px;
      text-align: center;
      font-weight: 700;
      color: #ffffff;
    }

    .form-container label {
      display: block;
      margin-bottom: 8px;
      font-size: 14px;
      font-weight: 500;
    }

    .form-container input {
      width: 100%;
      padding: 10px;
      margin-bottom: 20px;
      border: none;
      border-radius: 8px;
      background: rgba(255, 255, 255, 0.2);
      color: #fff;
      font-size: 14px;
      outline: none;
    }

    .form-container button {
      width: 100%;
      padding: 12px;
      border: none;
      border-radius: 8px;
      background: linear-gradient(135deg, #434343, #000000); /* Dark button gradient */
      color: #fff;
      font-size: 16px;
      font-weight: 600;
      cursor: pointer;
      transition: all 0.3s ease;
    }

    .form-container button:hover {
      background: linear-gradient(135deg, #000000, #434343); /* Reverse gradient on hover */
      transform: scale(1.05);
    }

    /* Keyframe Animation */
    @keyframes fadeIn {
      from {
        opacity: 0;
        transform: translateY(-20px);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    /* Floating Animation for Background */
    .floating-circle {
      position: absolute;
      border-radius: 50%;
      background: rgba(255, 255, 255, 0.1);
      animation: float 6s infinite ease-in-out;
    }

    @keyframes float {
      0%, 100% {
        transform: translateY(0);
      }
      50% {
        transform: translateY(-20px);
      }
    }
  </style>
</head>
<body>
  <!-- Floating Circles for Animation -->
  <div class="floating-circle" style="width: 150px; height: 150px; top: 10%; left: 20%;"></div>
  <div class="floating-circle" style="width: 100px; height: 100px; bottom: 15%; right: 25%;"></div>
  <div class="floating-circle" style="width: 200px; height: 200px; top: 50%; left: 50%;"></div>

  <div class="form-container">
    <h1>Add Student</h1>
    <form method="POST" action="/students">
      @csrf
      <label for="name">Name</label>
      <input id="name" name="name" type="text" placeholder="Enter student name" required>

      <label for="email">Email</label>
      <input id="email" name="email" type="email" placeholder="Enter student email" required>

      <label for="class">Class</label>
      <input id="class" name="class" type="text" placeholder="Enter student class" required>

      <button type="submit">Add Student</button>
    </form>
  </div>
</body>
</html>
