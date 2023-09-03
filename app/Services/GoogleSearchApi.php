<?php

namespace App\Services;

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;

class GoogleSearchApi
{
    public function search(array $params): string
    {
        $query = $this->buildQuery($params);

        $response = Http::get('https://www.google.com/search', [
            'q' => $query
        ])->body();

        return $this->clearResponse($response);
    }

    private function buildQuery(array $params): string
    {
        $query = '';

        if ($this->has($params, 'q')) {
            if ($this->has($params, 'is_exact_search') && $params['is_exact_search']) {
                $query .= '"' . $params['q'] . '"';
            } else {
                $query .= $params['q'];
            }
        }

        if ($this->has($params, 'before')) {
            $query .= ' BEFORE:' . $params['before'];
        }

        if ($this->has($params, 'after')) {
            $query .= ' AFTER:' . $params['after'];
        }

        if ($this->has($params, 'site')) {
            $query .= ' site:' . $params['site'];
        }

        if ($this->has($params, 'exclude')) {
            if (Str::isUrl($params['exclude'])) {
                $query .= ' -site:' . $params['exclude'];
            } else {
                $query .= ' -"' . $params['exclude'] . '"';
            }
        }

        return urlencode($query);
    }

    private function has(array $data, string $key): bool
    {
        return !empty($data[$key]);
    }

    private function clearResponse(string $response): string
    {
        return utf8_encode(Str::of($response)->replace('undefined', ''));
    }
}
