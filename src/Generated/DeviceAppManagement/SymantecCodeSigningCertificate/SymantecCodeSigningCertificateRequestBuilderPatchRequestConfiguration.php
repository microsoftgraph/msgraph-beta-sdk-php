<?php

namespace Microsoft\Graph\Beta\Generated\DeviceAppManagement\SymantecCodeSigningCertificate;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class SymantecCodeSigningCertificateRequestBuilderPatchRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * Instantiates a new SymantecCodeSigningCertificateRequestBuilderPatchRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
    */
    public function __construct(?array $headers = null, ?array $options = null) {
        parent::__construct($headers ?? [], $options ?? []);
    }

}
