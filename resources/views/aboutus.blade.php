<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>About Us</title>
    @vite('resources/css/app.css') {{-- Ensure this is included if using Vite --}}
</head>
<body class="bg-gray-100 text-gray-800 font-sans">

    <div class="max-w-5xl mx-auto p-6">
        <div class="bg-white rounded-xl shadow-md p-8">
            <h1 class="text-3xl font-bold text-purple-700 mb-4">About Us</h1>

            <p class="mb-4">
                Welcome to our <strong>Student Management System</strong>! We're here to simplify school administration by offering modern tools for student records, academic progress tracking, and efficient communication.
            </p>

            <p class="mb-4">
                Our platform is built with educators in mind, helping schools manage their operations smoothly while providing students the resources they need to thrive.
            </p>

            <h2 class="text-2xl font-semibold text-purple-600 mt-6 mb-2">Our Vision</h2>
            <p class="mb-4">
                To become the leading digital platform for academic institutions across Africa, enhancing education through innovation and simplicity.
            </p>

            <h2 class="text-2xl font-semibold text-purple-600 mt-6 mb-2">Contact Us</h2>
            <p class="mb-2">📧 <strong>Email:</strong> support@yourdomain.com</p>
            <p>📞 <strong>Phone:</strong> +123 456 7890</p>
        </div>

        <h2>Name: {{$name}} </h2>
        <h2>Email: {{$email}} </h2>
        <ul class="list-disc pl-5">
            @for ($i = 1; $i <= 5; $i++)
                <li>Item {{ $i }}</li>
            @endfor
        </ul>

         @include('Input')

        
    </div>

</body>
</html>
