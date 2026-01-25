<?php

namespace App\Helpers;

use App\Models\Bookmaker;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class Components
{
    public function getNormalizedData(array $request): array
    {
        $array = [];

        foreach ($request as $name => $value) {
            if ($name == '_token') {
                continue;
            }
            $nameArray = explode("-", $name);
            if (count($nameArray) == 2) {
                $array[$nameArray[0]][$nameArray[1]] = $value;
            } elseif (count($nameArray) == 3) {
                $array[$nameArray[0]][$nameArray[1]][$nameArray[2]] = $value;
            } elseif (count($nameArray) == 4) {
                $array[$nameArray[0]][$nameArray[1]][$nameArray[2]][$nameArray[3]] = $value;
            } elseif (count($nameArray) == 5) {
                $array[$nameArray[0]][$nameArray[1]][$nameArray[2]][$nameArray[3]][$nameArray[4]] = $value;
            }
        }

        return $array;
    }

    public function getInsertData(array $data, string $bookmakerID, string $key, $request): array
    {
        $insertArray = [];

        foreach ($data as $order => $component) {
            foreach ($component as $componentName => $array) {

                $array = $this->deleteEmptyValues($array);

                if (in_array($componentName, ['h3', 'h4', 'p'])) {
                    foreach ($array as $lang => $value) {
                        $insertArray[$order]['value_' . $lang] = json_encode(["0" => $value], JSON_HEX_TAG | JSON_HEX_APOS | JSON_HEX_QUOT | JSON_HEX_AMP | JSON_UNESCAPED_UNICODE | JSON_FORCE_OBJECT);
                    }
                }
                if ($componentName === 'img') {
                    foreach ($array as $value) {
                        $insertArray[$order]['value_en'] = json_encode(["0" => $value], JSON_HEX_TAG | JSON_HEX_APOS | JSON_HEX_QUOT | JSON_HEX_AMP | JSON_UNESCAPED_UNICODE | JSON_FORCE_OBJECT);
                        $insertArray[$order]['value_es'] = json_encode(["0" => $value], JSON_HEX_TAG | JSON_HEX_APOS | JSON_HEX_QUOT | JSON_HEX_AMP | JSON_UNESCAPED_UNICODE | JSON_FORCE_OBJECT);
                        $insertArray[$order]['value_fr'] = json_encode(["0" => $value], JSON_HEX_TAG | JSON_HEX_APOS | JSON_HEX_QUOT | JSON_HEX_AMP | JSON_UNESCAPED_UNICODE | JSON_FORCE_OBJECT);
                        $insertArray[$order]['value_pt'] = json_encode(["0" => $value], JSON_HEX_TAG | JSON_HEX_APOS | JSON_HEX_QUOT | JSON_HEX_AMP | JSON_UNESCAPED_UNICODE | JSON_FORCE_OBJECT);
                    }
                }
                if ($componentName === 'img400') {
                    $value = $this->handleImg($key, $order, $request);
                    $componentName = 'img';
                    $insertArray[$order]['value_en'] = json_encode(["0" => $value], JSON_HEX_TAG | JSON_HEX_APOS | JSON_HEX_QUOT | JSON_HEX_AMP | JSON_UNESCAPED_UNICODE | JSON_FORCE_OBJECT);
                    $insertArray[$order]['value_es'] = json_encode(["0" => $value], JSON_HEX_TAG | JSON_HEX_APOS | JSON_HEX_QUOT | JSON_HEX_AMP | JSON_UNESCAPED_UNICODE | JSON_FORCE_OBJECT);
                    $insertArray[$order]['value_fr'] = json_encode(["0" => $value], JSON_HEX_TAG | JSON_HEX_APOS | JSON_HEX_QUOT | JSON_HEX_AMP | JSON_UNESCAPED_UNICODE | JSON_FORCE_OBJECT);
                    $insertArray[$order]['value_pt'] = json_encode(["0" => $value], JSON_HEX_TAG | JSON_HEX_APOS | JSON_HEX_QUOT | JSON_HEX_AMP | JSON_UNESCAPED_UNICODE | JSON_FORCE_OBJECT);
                }
                if (in_array($componentName, ['table_v1', 'support', 'list_v2'])) {
                    foreach ($array as $lang => $value) {
                        $insertArray[$order]['value_'.$lang] = json_encode($value, JSON_HEX_TAG | JSON_HEX_APOS | JSON_HEX_QUOT | JSON_HEX_AMP | JSON_UNESCAPED_UNICODE | JSON_FORCE_OBJECT);
                    }
                }
                if ($componentName === 'support' && empty($array)) {
                    $insertArray[$order]['value_en'] =  json_encode([], JSON_HEX_TAG | JSON_HEX_APOS | JSON_HEX_QUOT | JSON_HEX_AMP | JSON_UNESCAPED_UNICODE | JSON_FORCE_OBJECT);
                    $insertArray[$order]['value_es'] = json_encode([], JSON_HEX_TAG | JSON_HEX_APOS | JSON_HEX_QUOT | JSON_HEX_AMP | JSON_UNESCAPED_UNICODE | JSON_FORCE_OBJECT);
                    $insertArray[$order]['value_fr'] = json_encode([], JSON_HEX_TAG | JSON_HEX_APOS | JSON_HEX_QUOT | JSON_HEX_AMP | JSON_UNESCAPED_UNICODE | JSON_FORCE_OBJECT);
                    $insertArray[$order]['value_pt'] = json_encode([], JSON_HEX_TAG | JSON_HEX_APOS | JSON_HEX_QUOT | JSON_HEX_AMP | JSON_UNESCAPED_UNICODE | JSON_FORCE_OBJECT);
                }
                if ($componentName === 'table_v2') {
                    foreach ($array as $lang => $value) {
                        $value[0][0] = Bookmaker::where('name', '=', $value[0][2])->first()->key;
                        $value[0][1] = Bookmaker::where('name', '=', $value[0][3])->first()->key;
                        for ($i = 1; $i < count($value); $i++) {
                            if (count($value[$i])) {
                                if(!isset($value[$i][0])) {
                                    $value[$i][0] = null;
                                }
                                if (!isset($value[$i][1])) {
                                    $value[$i][1] = null;
                                }
                                if (!isset($value[$i][2])) {
                                    $value[$i][2] = null;
                                }
                                if (!isset($value[$i][3])) {
                                    $value[$i][3] = null;
                                }
                            }
                        }
                        $v = [];
                        foreach ($value as $arr) {
                            if (count($arr)) {
                                $v[] = $arr;
                            }
                        }
                        if (!isset($v[1])) {
                            $v[1]=[0 => null, 1 => null, 2 => null, 3 => null];
                        }
                        $insertArray[$order]['value_'.$lang] = json_encode($v, JSON_HEX_TAG | JSON_HEX_APOS | JSON_HEX_QUOT | JSON_HEX_AMP | JSON_UNESCAPED_UNICODE | JSON_FORCE_OBJECT);
                    }
                }
                if (in_array($componentName, ['table_v3', 'list'])) {
                    $insertArray[$order]['value_en'] = json_encode(["0" => ""], JSON_HEX_TAG | JSON_HEX_APOS | JSON_HEX_QUOT | JSON_HEX_AMP | JSON_UNESCAPED_UNICODE | JSON_FORCE_OBJECT);
                    $insertArray[$order]['value_es'] = json_encode(["0" => ""], JSON_HEX_TAG | JSON_HEX_APOS | JSON_HEX_QUOT | JSON_HEX_AMP | JSON_UNESCAPED_UNICODE | JSON_FORCE_OBJECT);
                    $insertArray[$order]['value_fr'] = json_encode(["0" => ""], JSON_HEX_TAG | JSON_HEX_APOS | JSON_HEX_QUOT | JSON_HEX_AMP | JSON_UNESCAPED_UNICODE | JSON_FORCE_OBJECT);
                    $insertArray[$order]['value_pt'] = json_encode(["0" => ""], JSON_HEX_TAG | JSON_HEX_APOS | JSON_HEX_QUOT | JSON_HEX_AMP | JSON_UNESCAPED_UNICODE | JSON_FORCE_OBJECT);
                }
                if ($array || in_array( $componentName, ['support', 'table_v3', 'list'])) {
                    $insertArray[$order]['key'] = $key;
                    $insertArray[$order]['bookmaker_id'] = $bookmakerID;
                    $insertArray[$order]['component'] = $componentName;
                    $insertArray[$order]['order'] = $order;
                }
            }
        }
        uasort($insertArray, function($a, $b) {
            return $a['order'] <=> $b['order'];
        });
        return $insertArray;
    }
    private function deleteEmptyValues(array $array): array
    {
        if (empty($array)){
            return array();
        }

        $languages = array_keys($array);

        $firstLangValue = $array[$languages[0]];

        $isEmpty = fn($value) => is_null($value) || trim((string)$value) === '';

        if (is_array($firstLangValue) && is_array(reset($firstLangValue))) {
            $rowCount = count($firstLangValue);
            for ($i = 0; $i < $rowCount; $i++) {
                $colCount = count($firstLangValue[$i]);
                for ($j = 0; $j < $colCount; $j++) {
                    $allEmpty = true;
                    foreach ($languages as $lang) {
                        if (!$isEmpty($array[$lang][$i][$j] ?? null)) {
                            $allEmpty = false;
                            break;
                        }
                    }
                    if ($allEmpty) {
                        foreach ($languages as $lang) {
                            unset($array[$lang][$i][$j]);
                        }
                    }
                }
            }
            foreach ($languages as $lang) {
                foreach ($array[$lang] as $i => $row) {
                    if (empty(array_filter($row, fn($v) => !$isEmpty($v)))) {
                        foreach ($row as $j => $col) {
                            $array[$lang][$i][$j]=null;
                        }
                    }
                }
            }
        } elseif (is_array($firstLangValue)) {
            $count = count($firstLangValue);
            for ($i = 0; $i < $count; $i++) {
                $allEmpty = true;
                foreach ($languages as $lang) {
                    if (!$isEmpty($array[$lang][$i] ?? null)) {
                        $allEmpty = false;
                        break;
                    }
                }
                if ($allEmpty) {
                    foreach ($languages as $lang) {
                        unset($array[$lang][$i]);
                    }
                }
            }
            foreach ($languages as $lang) {
                $array[$lang] = array_values($array[$lang]);
            }

        } elseif (is_string($firstLangValue)) {
            $allEmpty = true;
            foreach ($languages as $lang) {
                if (!$isEmpty($array[$lang] ?? null)) {
                    $allEmpty = false;
                    break;
                }
            }
            if ($allEmpty) {
                foreach ($languages as $lang) {
                    unset($array[$lang]);
                }
            }
        }
        if (empty($array['en']) && empty($array['es']) && empty($array['fr']) && empty($array['pt'])) {
            $array = [];
        }
        return $array;
    }

    public function handleImg(string $key, string $order, Request $request): string
    {
        $name = '';

        if ($request->hasFile($order.'-img400-en')) {
            $image = $request->file($order.'-img400-en');
            $extension = $image->getClientOriginalExtension();
            $name = 'img-'.$order.'-400.'.$extension;
            $destinationPath = public_path('/img/'.$this::getRoute($request).'/'.$key.'/');
            $image->move($destinationPath, $name);
        }
        if ($request->hasFile($order.'-img-en')) {
            $image = $request->file($order.'-img-en');
            $extension = $image->getClientOriginalExtension();
            $name = 'img-'.$order.'.'.$extension;
            $destinationPath = public_path('/img/'.$this::getRoute($request).'/'.$key.'/');
            $image->move($destinationPath, $name);
        }

        if ($request->hasFile($order.'-imgpayment')) {
            $image = $request->file($order.'-imgpayment');
            $extension = $image->getClientOriginalExtension();
            $name = $key.'.'.$extension;
            $destinationPath = public_path('/img/'.$this::getRoute($request).'/');
            $image->move($destinationPath, $name);
        }

        if ($request->hasFile($order.'-imgsport')) {;
            $image = $request->file($order.'-imgsport');
            $extension = $image->getClientOriginalExtension();
            $name = $key.'.'.$extension;
            $destinationPath = public_path('/img/'.$this::getRoute($request).'/');
            $image->move($destinationPath, $name);
        }

        return $name;
    }

    public static function getRoute(Request $request): string
    {
        return match ($request->route()->getName()) {
            'admin.editReview' => 'review',
            'admin.editPromoCode' => 'promocode',
            'admin.editMobileApp' => 'mobileapp',
            'admin.editCasino' => 'casino.review',
            'admin.storeReview' => 'review',
            'admin.storePromoCode' => 'promocode',
            'admin.storeMobileApp' => 'mobileapp',
            'admin.storeCasino' => 'casino.review',
            'admin.storePayments' => 'payment_icon',
            'admin.storeSports' => 'sport_icon',
            default => '',
        };
    }
    public function deleteImgs(array $array, string $key, Request $request): void
    {
        $path = public_path('/img/'.$this::getRoute($request).'/'.($key ? $key.'/' : ''));
        if (!file_exists($path)) {
            mkdir($path, 0777, true);
            return;
        }
        $files = scandir($path);

        foreach ($files as $file) {
            if ($file === '.' || $file === '..') {
                continue;
            }
            $hit = false;
            foreach ($array as $item) {
                if ($item['component'] === 'img') {
                    $desktop = json_decode($item['value_en'], true)[0];
                    $mobile = explode('.', json_decode($item['value_en'], true)[0])[0].'-400.'.explode('.', json_decode($item['value_en'], true)[0])[1];
                    if ($file === $desktop || $file === $mobile) {
                        $hit = true;
                        break;
                    }
                }
            }
            if (!$hit) {
                unlink($path.$file);
            }
        }
    }


    public function validate(Request $request): void
    {
        $rules = [];
        foreach ($request->all() as $k => $value) {
            if (str_contains($k, '-img400-')) {
                $rules[$k] = 'image|mimes:jpeg,jpg,gif,png,svg,webp|max:2048';
                $rules[str_replace('-img400-', '-img-', $k)] = 'image|mimes:jpeg,jpg,gif,png,svg,webp|max:2048';
            }
            if (str_contains($k, '-h3-')||str_contains($k, '-h4-')||str_contains($k, '-p-')||str_contains($k, '-table_v1-')||str_contains($k, '-table_v2-')||str_contains($k, '-support-')||str_contains($k, '-list_v2-')) {
                $rules[$k] = 'string|nullable';
            }
            if (str_contains($k, '-table_v3-')||str_contains($k, '-list-')) {
                $rules[$k] = 'int';
            }
            if (str_contains($k, '-imgpayment') || str_contains($k, '-imgsport')) {
                $rules[$k] = 'image|mimes:png|max:2048';
            }
            if (str_contains($k, '-name')||str_contains($k, '-name-en')||str_contains($k, '-name-es')||str_contains($k, '-name-fr')||str_contains($k, '-name-pt')||str_contains($k, '-key')) {
                $rules[$k] = 'string|max:50|min:2';
            }
        }
        $request->validate($rules);
    }
}
