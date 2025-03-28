<?php
/**
 * Copyright (c) Microsoft Corporation.  All Rights Reserved.
 * Licensed under the MIT License.  See License in the project root
 * for license information.
 */


namespace Microsoft\Graph\Beta;


use GuzzleHttp\Client;
use Microsoft\Graph\Core\BaseGraphRequestAdapter;
use Microsoft\Graph\Core\Middleware\Option\GraphTelemetryOption;
use Microsoft\Kiota\Abstractions\Authentication\AuthenticationProvider;

class GraphRequestAdapter extends BaseGraphRequestAdapter
{
    /**
     * Create new
     *
     * @param AuthenticationProvider $authenticationProvider
     * @param Client|null $httpClient
     */
    public function __construct(AuthenticationProvider $authenticationProvider, ?Client $httpClient = null)
    {
        parent::__construct($this->getTelemetryConfig(), $authenticationProvider, null, null, $httpClient);
    }

    /**
     * @return GraphTelemetryOption
     */
    private function getTelemetryConfig(): GraphTelemetryOption
    {
        return new GraphTelemetryOption(GraphConstants::API_VERSION, GraphConstants::SDK_VERSION);
    }
}
