<?php

declare(strict_types=1);

namespace App\Http\Service;

use App\Models\Wishlist;
use Illuminate\Support\Facades\Auth;

trait ServiceDuplicate
{
    public function duplicateIdProduct(): array
    {

        $userId = Auth::id();
        $duplicatedIds = WishList::where('user_id', $userId)
            ->select('product_id')
            ->groupBy('product_id')
            ->havingRaw('COUNT(*) > 0')
            ->pluck('product_id')
            ->toArray();

            $duplicatesCount = WishList::where('user_id', $userId)
            ->whereIn('product_id', $duplicatedIds)
            ->selectRaw('product_id, COUNT(*) as count')
            ->groupBy('product_id')
            ->pluck('count', 'product_id')
            ->toArray();
        return [
            'product_id' => $duplicatedIds,
            'product_count' => $duplicatesCount
        ];
    }
}
