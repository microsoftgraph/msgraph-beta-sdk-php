<?php
/**
 * Copyright (c) Microsoft Corporation.  All Rights Reserved.
 * Licensed under the MIT License.  See License in the project root
 * for license information.
 */


namespace Beta\Microsoft\Graph;


use Microsoft\Graph\Http\AbstractGraphClient;

/**
 * Class Graph
 * @package Beta\Microsoft\Graph
 * @copyright 2021 Microsoft Corporation
 * @license https://opensource.org/licenses/MIT MIT License
 * @link https://developer.microsoft.com/graph
 */
class Graph extends AbstractGraphClient
{

    /**
     * @inheritDoc
     */
    public function getSdkVersion(): string
    {
        return GraphConstants::SDK_VERSION;
    }

    /**
     * @inheritDoc
     */
    public function getApiVersion(): string
    {
        return GraphConstants::API_VERSION;
    }
}
