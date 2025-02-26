<?php

declare(strict_types=1);

namespace Rector\Tests\Renaming\Rector\Name\RenameClassRector;

use Iterator;
use Rector\Testing\PHPUnit\AbstractRectorTestCase;

/**
 * @see \Rector\PostRector\Rector\NameImportingPostRector
 */
final class AutoImportNamesPhp74Test extends AbstractRectorTestCase
{
    /**
     * @dataProvider provideData()
     */
    public function test(string $filePath): void
    {
        $this->doTestFile($filePath);
    }

    public function provideData(): Iterator
    {
        return $this->yieldFilesFromDirectory(__DIR__ . '/FixtureAutoImportNamesPhp74');
    }

    public function provideConfigFilePath(): string
    {
        return __DIR__ . '/config/auto_import_names.php';
    }
}
