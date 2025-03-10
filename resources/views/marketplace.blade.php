<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Marketplace') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h3 class="text-lg font-semibold mb-4">Cars for Sale</h3>
                    @if($cars->isEmpty())
                        <p class="text-gray-500">No cars are currently listed for sale.</p>
                    @else
                        <form id="compareForm" action="{{ route('cars.compare') }}" method="POST">
                            @csrf
                            <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                                <thead>
                                    <tr>
                                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-400 uppercase tracking-wider">Select</th>
                                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-400 uppercase tracking-wider">Car Name</th>
                                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-400 uppercase tracking-wider">Distance Travelled</th>
                                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-400 uppercase tracking-wider">Owner</th>
                                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-400 uppercase tracking-wider">Actions</th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white dark:bg-gray-800 divide-y divide-gray-200 dark:divide-gray-700">
                                    @foreach($cars as $car)
                                        <tr class="hover:bg-gray-100 dark:hover:bg-gray-700">
                                            <td class="px-6 py-4 text-sm">
                                                <input type="checkbox" name="car_ids[]" value="{{ $car->id }}">
                                            </td>
                                            <td class="px-6 py-4 text-sm text-gray-900 dark:text-gray-100">{{ $car->car_name }}</td>
                                            <td class="px-6 py-4 text-sm text-gray-900 dark:text-gray-100">{{ $car->distance_travelled }}</td>
                                            <td class="px-6 py-4 text-sm text-gray-900 dark:text-gray-100">{{ $car->owner->name }}</td>
                                            <td class="px-6 py-4 text-sm space-y-2">
                                                <!-- Admin Actions -->
                                                @if(auth()->user()->usertype === 'admin')
                                                    <form action="{{ route('remove.sell.post', $car->id) }}" method="POST">
                                                        @csrf
                                                        <button type="submit" class="text-red-500 hover:text-red-700">Remove Sell Post</button>
                                                    </form>
                                                @else
                                                    <!-- Owner Actions -->
                                                    @if($car->user_id === auth()->id())
                                                        <form action="{{ route('removeSalePost', $car->id) }}" method="POST" onsubmit="return confirm('Remove this car from the marketplace?');">
                                                            @csrf
                                                            <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
                                                                Remove from Sale
                                                            </button>
                                                        </form>
                                                    @else
                                                        <!-- Regular User Actions -->
                                                        <div class="space-y-2">
                                                            <div class="text-gray-500 italic">Contact Owner</div>
                                                            
                                                            @if(auth()->user()->usertype !== 'admin')
                                                                @if(in_array($car->id, $wishlistCarIds))
                                                                    <form action="{{ route('wishlist.remove', $car->id) }}" method="POST">
                                                                        @csrf
                                                                        @method('DELETE')
                                                                        <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
                                                                            Remove from Wishlist
                                                                        </button>
                                                                    </form>
                                                                @else
                                                                    <form action="{{ route('wishlist.add', $car->id) }}" method="POST">
                                                                        @csrf
                                                                        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                                                                            Add to Wishlist
                                                                        </button>
                                                                    </form>
                                                                @endif
                                                            @endif
                                                        </div>
                                                    @endif
                                                @endif
                                            </td>
                                        </tr>
                                        <tr class="hover:bg-gray-100 dark:hover:bg-gray-700">
                                            <td colspan="5" class="px-6 py-4">
                                                <h5 class="font-bold text-gray-900 dark:text-gray-100 mb-3">Comments for {{ $car->car_name }}</h5>
                                                @foreach($car->comments as $comment)
                                                    <div class="bg-gray-50 dark:bg-gray-700 p-3 rounded mb-2">
                                                        <p class="text-sm text-gray-800 dark:text-gray-200">{{ $comment->comment }}</p>
                                                        <p class="text-xs text-gray-600 dark:text-gray-400 mt-1">- {{ $comment->user->name }}</p>
                                                        @if(auth()->user()->usertype === 'admin')
                                                            <form action="{{ route('admin.comment.delete', $comment->id) }}" method="POST" class="mt-2">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="submit" class="text-red-500 hover:text-red-700 text-sm">Delete Comment</button>
                                                            </form>
                                                        @endif
                                                    </div>
                                                @endforeach
                                                <form action="{{ route('storeComment', $car->id) }}" method="POST" class="mt-2">
                                                    @csrf
                                                    <textarea 
                                                        name="comment" 
                                                        class="w-full p-2 border rounded bg-white dark:bg-gray-700 text-gray-900 dark:text-gray-100 border-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:ring-blue-500 dark:focus:ring-blue-500" 
                                                        rows="3" 
                                                        placeholder="Add a comment..."
                                                    ></textarea>
                                                    <button type="submit" class="mt-2 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                                                        Add Comment
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <button type="submit" class="mt-4 bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">Compare Selected Cars</button>
                        </form>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
