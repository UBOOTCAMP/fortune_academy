<?php

namespace App\Traits;

use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Support\Stringable;

trait FileHelper
{
    /**
     * @param UploadedFile $file
     * @param null $model
     * @return string
     */
    public function saveFileAndGetName(UploadedFile $file, $model = null)
    {
        return $file->store($this->getFolderName($model));
    }

    public function updateFileAndGetName(UploadedFile $file, $lastFile, $model = null)
    {
        return $this->deleteFile($lastFile)
            ->saveFileAndGetName($file, $model);
    }

    public function deleteFile($file)
    {
        if ($file && $file !== "" && Storage::exists($file)) {
            Storage::delete($file);
        }
        return $this;
    }

    protected function getFolderName($model = null)
    {
        $class = $model ?: get_class();
        return Str::of($class)->afterLast('\\')->before('Controller')->kebab()
            ->slug('_')->plural();
    }

    public function getImagePath($image, $size = 'lg_')
    {
        $file = $image;
        if (!$file)
            return $this->getNoImagePath();
        return asset( "/storage/images/". $file);
    }

    protected function getNoImagePath()
    {
        return 'https://upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/1024px-No_image_available.svg.png';
    }

    public function getImageByName($name)
    {
        if (!Storage::exists(storage_path($name)))
            return 'storage/' . $name;
    }
}
