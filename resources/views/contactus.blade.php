<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contact Us</title>
    @vite('resources/css/app.css') {{-- Tailwind CSS via Vite --}}
</head>
<body class="bg-gray-100 text-gray-800 font-sans">

    <div class="max-w-4xl mx-auto p-6">
        <div class="bg-white rounded-xl shadow-md p-8">
            <h1 class="text-3xl font-bold text-purple-700 mb-4">Contact Us</h1>
            <p class="mb-6">We’d love to hear from you! Whether you have a question about features, pricing, or anything else — our team is ready to answer all your questions.</p>

            <form action="#" method="POST" class="space-y-6">
                @csrf
                <div>
                    <label for="name" class="block text-sm font-medium text-gray-700">Full Name</label>
                    <input type="text" name="name" id="name" required
                        class="mt-1 block w-full px-4 py-2 border rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-transparent">
                </div>

                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700">Email Address</label>
                    <input type="email" name="email" id="email" required
                        class="mt-1 block w-full px-4 py-2 border rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-transparent">
                </div>

                <div>
                    <label for="message" class="block text-sm font-medium text-gray-700">Your Message</label>
                    <textarea name="message" id="message" rows="4" required
                        class="mt-1 block w-full px-4 py-2 border rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-transparent"></textarea>
                </div>

                <div>
                    <button type="submit"
                        class="inline-flex items-center px-6 py-2 bg-purple-700 text-white font-semibold rounded-md shadow hover:bg-purple-800 transition">
                        Send Message
                    </button>
                </div>
            </form>

            <div class="mt-8">
                <h2 class="text-xl font-semibold text-purple-600">Other Ways to Reach Us</h2>
                <p class="mt-2"><strong>Email:</strong> support@yourdomain.com</p>
                <p><strong>Phone:</strong> +123 456 7890</p>
                <p><strong>Address:</strong> 123 School Lane, Learning City, ED 45678</p>
            </div>
        </div>
    </div>

</body>
</html>
