<?php

namespace App\Services;

class ImageService
{
    public static function upload($image, $folder): string
    {
        if (! $image) {
            throw new \InvalidArgumentException('Cannot upload null image.');
        }

        $filename = time().uniqid().'.'.$image->getClientOriginalExtension();
        $path = "storage/$folder";

        if (! file_exists(public_path($path))) {
            mkdir(public_path($path), 0755, true);
        }

        $image->move(public_path($path), $filename);

        return asset("$path/$filename");
    }

    public static function delete($image): bool
    {
        if (file_exists($image)) {
            unlink(public_path($image));

            return true;
        }

        return false;
    }
}
