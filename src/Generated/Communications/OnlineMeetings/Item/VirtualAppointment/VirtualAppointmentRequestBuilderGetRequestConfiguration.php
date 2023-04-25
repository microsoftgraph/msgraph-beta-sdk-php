<?php

namespace Microsoft\Graph\Beta\Generated\Communications\OnlineMeetings\Item\VirtualAppointment;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class VirtualAppointmentRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var VirtualAppointmentRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?VirtualAppointmentRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new virtualAppointmentRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param VirtualAppointmentRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?VirtualAppointmentRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new virtualAppointmentRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return VirtualAppointmentRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): VirtualAppointmentRequestBuilderGetQueryParameters {
        return new VirtualAppointmentRequestBuilderGetQueryParameters($expand, $select);
    }

}
