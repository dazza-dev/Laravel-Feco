<?php

namespace DazzaDev\LaravelFeco\Traits;

use DazzaDev\LaravelFeco\Models\FecoCertificate;
use DazzaDev\LaravelFeco\Models\FecoDocument;
use DazzaDev\LaravelFeco\Models\FecoNumberingRange;
use DazzaDev\LaravelFeco\Models\FecoSoftware;
use Illuminate\Database\Eloquent\Relations\MorphMany;

trait HasDianFeco
{
    /**
     * Get the softwares associated with the model.
     */
    public function softwares(): MorphMany
    {
        return $this->morphMany(FecoSoftware::class, 'softwareable');
    }

    /**
     * Get the certificates associated with the model.
     */
    public function certificates(): MorphMany
    {
        return $this->morphMany(FecoCertificate::class, 'certificable');
    }

    /**
     * Get the numbering ranges associated with the model.
     */
    public function numberingRanges(): MorphMany
    {
        return $this->morphMany(FecoNumberingRange::class, 'rangeable');
    }

    /**
     * Get the documents associated with the model.
     */
    public function documents(): MorphMany
    {
        return $this->morphMany(FecoDocument::class, 'documentable');
    }

    /**
     * Get the numbering ranges used for testing.
     */
    public function testingNumberingRanges(): array
    {
        return [
            'prefix' => 'SETP',
            'authorized_code' => '18760000001',
            'start_date' => '19-01-2019',
            'end_date' => '19-01-2030',
            'start_number' => '990000000',
            'end_number' => '995000000',
        ];
    }

    /**
     * Get the technical key used for testing.
     */
    public function testingTechnicalKey(): string
    {
        return 'fc8eac422eba16e22ffd8c6f94b3f40a6e38162c';
    }
}
