<div class="max-w-2xl mx-auto p-6 bg-white rounded-lg shadow-lg">
    <h2 class="text-2xl font-bold text-gray-800 mb-6">Livewire Component</h2>
    
    <div class="mb-6 bg-gray-50 rounded-lg p-4 border border-gray-200">
        <ul class="space-y-2">
            <li class="text-sm text-gray-600">
                <span class="font-medium">Name:</span> 
                <span class="text-gray-900">{{ $name ?: 'Not set' }}</span>
            </li>
            <li class="text-sm text-gray-600">
                <span class="font-medium">Password:</span> 
                <span class="text-gray-900">{{ $pass ? str_repeat('*', strlen($pass)) : 'Not set' }}</span>
            </li>
            <li class="text-sm text-gray-600">
                <span class="font-medium">Update:</span> 
                <span class="text-gray-900">{{ $message }}</span>
            </li>
        </ul>
    </div>
    
    <form wire:submit.prevent="updateMessageText" class="space-y-4">
        <div>
            <label for="name" class="block text-sm font-medium text-gray-700 mb-2">
                Name
            </label>
            <input 
                type="text" 
                id="name"
                wire:model="name" 
                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition duration-200"
                placeholder="Enter your name"
            >
        </div>
        
        <div>
            <label for="pass" class="block text-sm font-medium text-gray-700 mb-2">
                Password
            </label>
            <input 
                type="password" 
                id="pass"
                wire:model="pass" 
                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition duration-200"
                placeholder="Enter your password"
            >
        </div>
        <div class="mt-6">
        <button 
            type="submit"
            class="w-fit px-5 py-2 bg-[#2563eb] text-white rounded-md font-medium hover:bg-[#1d4ed8] active:bg-[#1e40af] transition-colors duration-200 cursor-pointer focus:outline-none focus:ring-2 focus:ring-[#2563eb] focus:ring-offset-2 disabled:opacity-50 disabled:cursor-not-allowed"
            style="background-color: #2563eb;"
        >
            Update Message
        </button>
    </div>
</div>
