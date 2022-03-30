<?php

namespace Microsoft\Graph\Beta\Generated\DeviceAppManagement\MobileApps\Item\IosVppApp;

use Microsoft\Graph\Beta\Generated\DeviceAppManagement\MobileApps\Item\IosVppApp\RevokeAllLicenses\RevokeAllLicensesRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceAppManagement\MobileApps\Item\IosVppApp\RevokeDeviceLicense\RevokeDeviceLicenseRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceAppManagement\MobileApps\Item\IosVppApp\RevokeUserLicense\RevokeUserLicenseRequestBuilder;
use Microsoft\Kiota\Abstractions\RequestAdapter;

class IosVppAppRequestBuilder 
{
    /** @var array<string, mixed> $pathParameters Path parameters for the request */
    private array $pathParameters;
    
    /** @var RequestAdapter $requestAdapter The request adapter to use to execute the requests. */
    private RequestAdapter $requestAdapter;
    
    public function revokeAllLicenses(): RevokeAllLicensesRequestBuilder {
        return new RevokeAllLicensesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function revokeDeviceLicense(): RevokeDeviceLicenseRequestBuilder {
        return new RevokeDeviceLicenseRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function revokeUserLicense(): RevokeUserLicenseRequestBuilder {
        return new RevokeUserLicenseRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /** @var string $urlTemplate Url template to use to build the URL for the current request builder */
    private string $urlTemplate;
    
    /**
     * Instantiates a new IosVppAppRequestBuilder and sets the default values.
     * @param array<string, mixed> $pathParameters Path parameters for the request
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct(array $pathParameters, RequestAdapter $requestAdapter) {
        $this->urlTemplate = '{+baseurl}/deviceAppManagement/mobileApps/{mobileApp_id}/microsoft.graph.iosVppApp';
        $this->requestAdapter = $requestAdapter;
        $this->pathParameters = $pathParameters;
    }

}
