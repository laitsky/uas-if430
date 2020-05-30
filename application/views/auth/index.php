<div class="bg-teal-100">
<div class="container h-screen pt-3">
    <div class="md:flex md:justify-center">
        <div class="mb-6 mt-5">
            <form action="" method="POST" class="bg-gray-100 shadow-md rounded p-8">
                <?= $this->session->flashdata('message'); ?>
                <div class="mb-4">
                    <label for="email" class="block text-gray-700 text-sm font-bold mb-2">Email</label>
                    <input type="text" class="bg-gray-200 focus:bg-white shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="email" name="email" placeholder="Masukkan email...">
                    <?= form_error('email', '<p class="text-red-500 text-xs italic mt-2">', '</p>'); ?>
                </div>
                <div class="mb-4">
                    <label for="password" class="block text-gray-700 text-sm font-bold mb-2">Password</label>
                    <input type="password" class="bg-gray-200 focus:bg-white shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="password" name="password" placeholder="Masukkan password...">
                    <?= form_error('password', '<p class="text-red-500 text-xs italic mt-2">', '</p>'); ?>
                </div>
                <div class="flex items-center justify-end">
                    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Masuk!</button>
                </div>
            </form>
        </div>
    </div>
</div>
</div>