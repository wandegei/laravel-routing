<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contact Us</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 text-gray-800 p-8">

    <div class="max-w-3xl mx-auto bg-white shadow-md rounded-lg p-6">
        <h1 class="text-3xl font-bold text-purple-700 mb-4">Contact Us</h1>

        <p class="mb-6 text-gray-600">We’d love to hear from you! Please fill out the form below and we’ll get in touch soon.</p>

        <form action="#" method="POST" class="space-y-4">
            @csrf

            <div>
                <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                <input type="text" id="name" name="name" class="mt-1 block w-full border border-gray-300 rounded-md p-2 focus:ring-purple-500 focus:border-purple-500" required>
            </div>

            <div>
                <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                <input type="email" id="email" name="email" class="mt-1 block w-full border border-gray-300 rounded-md p-2 focus:ring-purple-500 focus:border-purple-500" required>
            </div>

            <div>
                <label for="message" class="block text-sm font-medium text-gray-700">Message</label>
                <textarea id="message" name="message" rows="4" class="mt-1 block w-full border border-gray-300 rounded-md p-2 focus:ring-purple-500 focus:border-purple-500" required></textarea>
            </div>

            <button type="submit" class="bg-purple-700 text-white px-4 py-2 rounded-md hover:bg-purple-800">
                Send Message
            </button>
        </form>
    </div>

</body>
</html>
