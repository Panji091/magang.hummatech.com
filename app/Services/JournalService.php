<?php

namespace App\Services;

use App\Http\Requests\StoreJournalRequest;
use App\Traits\UploadTrait;
use App\Http\Requests\StoreSaleRequest;
use App\Http\Requests\UpdateJournalRequest;
use App\Http\Requests\UpdateSaleRequest;
use App\Models\Journal;
use App\Models\Sale;

class JournalService
{
    use UploadTrait;

    /**
     * Handle custom upload validation.
     *
     * @param string $disk
     * @param object $file
     * @param string|null $old_file
     * @return string
     */
    public function validateAndUpload(string $disk, object $file, string $old_file = null): string
    {
        if ($old_file) $this->remove($old_file);

        return $this->upload($disk, $file);
    }

    /**
     * Handle store data event to models.
     *
     * @param StoreSaleRequest $request
     *
     * @return array|bool
     */
    public function store(StoreJournalRequest $request): array|bool
    {
        $data = $request->validated();

        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $data['image'] = $request->file('image')->store($request->type, 'public');
            return $data;
        }
        return false;
    }

    /**
     * Handle update data event to models.
     *
     * @param Sale $sale
     * @param UpdateSaleRequest $request
     *
     * @return array|bool
     */
    public function update(Journal $journal, UpdateJournalRequest $request): array|bool
    {
        $data = $request->validated();

        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $this->remove($journal->image);
            $data['image'] = $request->file('image')->store($request->type, 'public');
        } else {
            $data['image'] = $journal->image;
        }

        return $data;
    }

    public function delete(Journal $journal)
    {
        $this->remove($journal->image);
    }
}
