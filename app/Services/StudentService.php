<?php

namespace App\Services;

use App\Enums\TypeEnum;
use App\Http\Requests\StoreLogoRequest;
use App\Traits\UploadTrait;
use App\Http\Requests\StoreSaleRequest;
use App\Http\Requests\StoreServiceRequest;
use App\Http\Requests\StoreStructureRequest;
use App\Http\Requests\StoreStudentRequest;
use App\Http\Requests\StoreTeamRequest;
use App\Http\Requests\UpdateLogoRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Http\Requests\UpdateSaleRequest;
use App\Http\Requests\UpdateServiceRequest;
use App\Http\Requests\UpdateStructureRequest;
use App\Http\Requests\UpdateStudentRequest;
use App\Http\Requests\UpdateTeamRequest;
use App\Models\Logo;
use App\Models\Product;
use App\Models\Sale;
use App\Models\Service;
use App\Models\Structure;
use App\Models\Student;
use App\Models\Team;
use Illuminate\Support\Facades\Log;

class StudentService
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
    public function store(StoreStudentRequest $request): array|bool
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
    public function update(Student $student, UpdateStudentRequest $request): array|bool
    {
        $data = $request->validated();

        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $this->remove($student->image);
            $data['image'] = $request->file('image')->store($request->type, 'public');
        } else {
            $data['image'] = $student->image;
        }

        return $data;
    }

    public function delete(Student $student)
    {
        $this->remove($student->image);
    }
}
