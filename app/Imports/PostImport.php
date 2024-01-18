<?php

namespace App\Imports;

use App\Enums\FileTypeEnum;
use App\Enums\PostStatusEnum;
use App\Models\Company;
use App\Models\File;
use App\Models\Language;
use App\Models\Post;
use Maatwebsite\Excel\Concerns\ToArray;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class PostImport implements ToArray, WithHeadingRow
{

    public function array(array $array)
    {
        foreach ($array as $each) {
            try {

                $companyName = $each['cong_ty'];
                $language  = $each['ngon_ngu'];
                $city = $each['dia_diem'];
                $link = $each['link'];

                if (!empty($companyName)) {
                    $companyId = Company::query()->firstOrCreate([
                        'name' => $companyName,
                    ], [
                        'city' => $city,
                        'country' => 'VietNam',
                    ])->id;
                } else {
                    $companyId = null;
                }


                $post = Post::create([
                    'job_title' => $language,
                    'city' => $city,
                    'status' => PostStatusEnum::ADMIN_APPROVED,
                    'company_id' => $companyId,
                ]);


                $languages = explode(', ', $language);
                foreach ($languages as $each) {
                    Language::query()->firstOrCreate([
                        'name' => trim($each),
                    ]);
                }

                File::create([
                    'post_id' => $post->id,
                    'link' => $link,
                    'type' => FileTypeEnum::JD,
                ]);
            } catch (\Throwable $e) {
                dd($each, $e);
            }
        }
    }
}
