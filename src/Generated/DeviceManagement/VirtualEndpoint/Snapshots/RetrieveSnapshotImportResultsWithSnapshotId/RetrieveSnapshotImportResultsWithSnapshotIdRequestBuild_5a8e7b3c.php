<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\VirtualEndpoint\Snapshots\RetrieveSnapshotImportResultsWithSnapshotId;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: retrieveSnapshotImportResultsWithSnapshotIdRequestBuilderGetRequestConfiguration
*/
class RetrieveSnapshotImportResultsWithSnapshotIdRequestBuild_5a8e7b3c extends BaseRequestConfiguration 
{
    /**
     * @var RetrieveSnapshotImportResultsWithSnapshotIdRequestBuild_98408c38|null $queryParameters Request query parameters
    */
    public ?RetrieveSnapshotImportResultsWithSnapshotIdRequestBuild_98408c38 $queryParameters = null;
    
    /**
     * Instantiates a new RetrieveSnapshotImportResultsWithSnapshotIdRequestBuild_5a8e7b3c and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param RetrieveSnapshotImportResultsWithSnapshotIdRequestBuild_98408c38|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?RetrieveSnapshotImportResultsWithSnapshotIdRequestBuild_98408c38 $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new RetrieveSnapshotImportResultsWithSnapshotIdRequestBuild_98408c38.
     * @param bool|null $count Include count of items
     * @param string|null $filter Filter items by property values
     * @param string|null $search Search items by search phrases
     * @param int|null $skip Skip the first n items
     * @param int|null $top Show only the first n items
     * @return RetrieveSnapshotImportResultsWithSnapshotIdRequestBuild_98408c38
    */
    public static function createQueryParameters(?bool $count = null, ?string $filter = null, ?string $search = null, ?int $skip = null, ?int $top = null): RetrieveSnapshotImportResultsWithSnapshotIdRequestBuild_98408c38 {
        return new RetrieveSnapshotImportResultsWithSnapshotIdRequestBuild_98408c38($count, $filter, $search, $skip, $top);
    }

}
