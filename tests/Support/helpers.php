<?php

use PHPUnit\Framework\Assert;

if (! function_exists('payload')) {
    /**
     * Load a JSON mock payload from storage/mocks.
     *
     * @param  string  $path  Path relative to storage/mocks
     */
    function payload(string $path): array
    {
        $fullPath = realpath(
            dirname(__DIR__, 2) . '/storage/mocks/' . ltrim($path, '/')
        );

        Assert::assertNotFalse(
            $fullPath,
            "Mock payload file not found: storage/mocks/{$path}"
        );

        $decoded = json_decode(file_get_contents($fullPath), true);

        Assert::assertNotNull(
            $decoded,
            "Invalid JSON in mock payload: {$fullPath}"
        );

        return $decoded;
    }
}
