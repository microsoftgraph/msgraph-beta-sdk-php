<?php

namespace Microsoft\Graph\Beta\Generated\Me\Authentication\WindowsHelloForBusinessMethods\Item\Device;

use Exception;
use Http\Promise\Promise;
use Http\Promise\RejectedPromise;
use Microsoft\Graph\Beta\Generated\Me\Authentication\WindowsHelloForBusinessMethods\Item\Device\CheckMemberGroups\CheckMemberGroupsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\Authentication\WindowsHelloForBusinessMethods\Item\Device\CheckMemberObjects\CheckMemberObjectsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\Authentication\WindowsHelloForBusinessMethods\Item\Device\Commands\CommandsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\Authentication\WindowsHelloForBusinessMethods\Item\Device\Commands\Item\CommandItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\Authentication\WindowsHelloForBusinessMethods\Item\Device\Extensions\ExtensionsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\Authentication\WindowsHelloForBusinessMethods\Item\Device\Extensions\Item\ExtensionItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\Authentication\WindowsHelloForBusinessMethods\Item\Device\GetMemberGroups\GetMemberGroupsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\Authentication\WindowsHelloForBusinessMethods\Item\Device\GetMemberObjects\GetMemberObjectsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\Authentication\WindowsHelloForBusinessMethods\Item\Device\MemberOf\Item\DirectoryObjectItemRequestBuilder as MicrosoftGraphBetaGeneratedMeAuthenticationWindowsHelloForBusinessMethodsItemDeviceMemberOfItemDirectoryObjectItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\Authentication\WindowsHelloForBusinessMethods\Item\Device\MemberOf\MemberOfRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\Authentication\WindowsHelloForBusinessMethods\Item\Device\RegisteredOwners\Item\DirectoryObjectItemRequestBuilder as MicrosoftGraphBetaGeneratedMeAuthenticationWindowsHelloForBusinessMethodsItemDeviceRegisteredOwnersItemDirectoryObjectItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\Authentication\WindowsHelloForBusinessMethods\Item\Device\RegisteredOwners\RegisteredOwnersRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\Authentication\WindowsHelloForBusinessMethods\Item\Device\RegisteredUsers\Item\DirectoryObjectItemRequestBuilder as MicrosoftGraphBetaGeneratedMeAuthenticationWindowsHelloForBusinessMethodsItemDeviceRegisteredUsersItemDirectoryObjectItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\Authentication\WindowsHelloForBusinessMethods\Item\Device\RegisteredUsers\RegisteredUsersRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\Authentication\WindowsHelloForBusinessMethods\Item\Device\Restore\RestoreRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\Authentication\WindowsHelloForBusinessMethods\Item\Device\TransitiveMemberOf\Item\DirectoryObjectItemRequestBuilder as MicrosoftGraphBetaGeneratedMeAuthenticationWindowsHelloForBusinessMethodsItemDeviceTransitiveMemberOfItemDirectoryObjectItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\Authentication\WindowsHelloForBusinessMethods\Item\Device\TransitiveMemberOf\TransitiveMemberOfRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\Authentication\WindowsHelloForBusinessMethods\Item\Device\UsageRights\Item\UsageRightItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\Authentication\WindowsHelloForBusinessMethods\Item\Device\UsageRights\UsageRightsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Models\Device;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Microsoft\Kiota\Abstractions\RequestOption;
use Microsoft\Kiota\Abstractions\ResponseHandler;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParsableFactory;

class DeviceRequestBuilder 
{
    /**
     * The checkMemberGroups property
    */
    public function checkMemberGroups(): CheckMemberGroupsRequestBuilder {
        return new CheckMemberGroupsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The checkMemberObjects property
    */
    public function checkMemberObjects(): CheckMemberObjectsRequestBuilder {
        return new CheckMemberObjectsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The commands property
    */
    public function commands(): CommandsRequestBuilder {
        return new CommandsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The extensions property
    */
    public function extensions(): ExtensionsRequestBuilder {
        return new ExtensionsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The getMemberGroups property
    */
    public function getMemberGroups(): GetMemberGroupsRequestBuilder {
        return new GetMemberGroupsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The getMemberObjects property
    */
    public function getMemberObjects(): GetMemberObjectsRequestBuilder {
        return new GetMemberObjectsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The memberOf property
    */
    public function memberOf(): MemberOfRequestBuilder {
        return new MemberOfRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * @var array<string, mixed> $pathParameters Path parameters for the request
    */
    private array $pathParameters;
    
    /**
     * The registeredOwners property
    */
    public function registeredOwners(): RegisteredOwnersRequestBuilder {
        return new RegisteredOwnersRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The registeredUsers property
    */
    public function registeredUsers(): RegisteredUsersRequestBuilder {
        return new RegisteredUsersRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * @var RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    private RequestAdapter $requestAdapter;
    
    /**
     * The restore property
    */
    public function restore(): RestoreRequestBuilder {
        return new RestoreRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The transitiveMemberOf property
    */
    public function transitiveMemberOf(): TransitiveMemberOfRequestBuilder {
        return new TransitiveMemberOfRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * @var string $urlTemplate Url template to use to build the URL for the current request builder
    */
    private string $urlTemplate;
    
    /**
     * The usageRights property
    */
    public function usageRights(): UsageRightsRequestBuilder {
        return new UsageRightsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.me.authentication.windowsHelloForBusinessMethods.item.device.commands.item collection
     * @param string $id Unique identifier of the item
     * @return CommandItemRequestBuilder
    */
    public function commandsById(string $id): CommandItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['command%2Did'] = $id;
        return new CommandItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new DeviceRequestBuilder and sets the default values.
     * @param array<string, mixed> $pathParameters Path parameters for the request
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct(array $pathParameters, RequestAdapter $requestAdapter) {
        $this->urlTemplate = '{+baseurl}/me/authentication/windowsHelloForBusinessMethods/{windowsHelloForBusinessAuthenticationMethod%2Did}/device{?%24select,%24expand}';
        $this->requestAdapter = $requestAdapter;
        $this->pathParameters = $pathParameters;
    }

    /**
     * Delete navigation property device for me
     * @param DeviceRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function createDeleteRequestInformation(?DeviceRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::DELETE;
        if ($requestConfiguration !== null) {
            if ($requestConfiguration->headers !== null) {
                $requestInfo->headers = array_merge($requestInfo->headers, $requestConfiguration->headers);
            }
            if ($requestConfiguration->options !== null) {
                $requestInfo->addRequestOptions(...$requestConfiguration->options);
            }
        }
        return $requestInfo;
    }

    /**
     * The registered device on which this Windows Hello for Business key resides. Supports $expand. When you get a user's Windows Hello for Business registration information, this property is returned only on a single GET and when you specify ?$expand. For example, GET /users/admin@contoso.com/authentication/windowsHelloForBusinessMethods/_jpuR-TGZtk6aQCLF3BQjA2?$expand=device.
     * @param DeviceRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function createGetRequestInformation(?DeviceRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::GET;
        $requestInfo->headers = array_merge($requestInfo->headers, ["Accept" => "application/json"]);
        if ($requestConfiguration !== null) {
            if ($requestConfiguration->headers !== null) {
                $requestInfo->headers = array_merge($requestInfo->headers, $requestConfiguration->headers);
            }
            if ($requestConfiguration->queryParameters !== null) {
                $requestInfo->setQueryParameters($requestConfiguration->queryParameters);
            }
            if ($requestConfiguration->options !== null) {
                $requestInfo->addRequestOptions(...$requestConfiguration->options);
            }
        }
        return $requestInfo;
    }

    /**
     * Update the navigation property device in me
     * @param Device $body 
     * @param DeviceRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function createPatchRequestInformation(Device $body, ?DeviceRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::PATCH;
        if ($requestConfiguration !== null) {
            if ($requestConfiguration->headers !== null) {
                $requestInfo->headers = array_merge($requestInfo->headers, $requestConfiguration->headers);
            }
            if ($requestConfiguration->options !== null) {
                $requestInfo->addRequestOptions(...$requestConfiguration->options);
            }
        }
        $requestInfo->setContentFromParsable($this->requestAdapter, "application/json", $body);
        return $requestInfo;
    }

    /**
     * Delete navigation property device for me
     * @param DeviceRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function delete(?DeviceRequestBuilderDeleteRequestConfiguration $requestConfiguration = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createDeleteRequestInformation($requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => array(ODataError::class, 'createFromDiscriminatorValue'),
                    '5XX' => array(ODataError::class, 'createFromDiscriminatorValue'),
            ];
            return $this->requestAdapter->sendNoContentAsync($requestInfo, $responseHandler, $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.me.authentication.windowsHelloForBusinessMethods.item.device.extensions.item collection
     * @param string $id Unique identifier of the item
     * @return ExtensionItemRequestBuilder
    */
    public function extensionsById(string $id): ExtensionItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['extension%2Did'] = $id;
        return new ExtensionItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * The registered device on which this Windows Hello for Business key resides. Supports $expand. When you get a user's Windows Hello for Business registration information, this property is returned only on a single GET and when you specify ?$expand. For example, GET /users/admin@contoso.com/authentication/windowsHelloForBusinessMethods/_jpuR-TGZtk6aQCLF3BQjA2?$expand=device.
     * @param DeviceRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function get(?DeviceRequestBuilderGetRequestConfiguration $requestConfiguration = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createGetRequestInformation($requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => array(ODataError::class, 'createFromDiscriminatorValue'),
                    '5XX' => array(ODataError::class, 'createFromDiscriminatorValue'),
            ];
            return $this->requestAdapter->sendAsync($requestInfo, array(Device::class, 'createFromDiscriminatorValue'), $responseHandler, $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.me.authentication.windowsHelloForBusinessMethods.item.device.memberOf.item collection
     * @param string $id Unique identifier of the item
     * @return MicrosoftGraphBetaGeneratedMeAuthenticationWindowsHelloForBusinessMethodsItemDeviceMemberOfItemDirectoryObjectItemRequestBuilder
    */
    public function memberOfById(string $id): MicrosoftGraphBetaGeneratedMeAuthenticationWindowsHelloForBusinessMethodsItemDeviceMemberOfItemDirectoryObjectItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['directoryObject%2Did'] = $id;
        return new MicrosoftGraphBetaGeneratedMeAuthenticationWindowsHelloForBusinessMethodsItemDeviceMemberOfItemDirectoryObjectItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Update the navigation property device in me
     * @param Device $body 
     * @param DeviceRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function patch(Device $body, ?DeviceRequestBuilderPatchRequestConfiguration $requestConfiguration = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createPatchRequestInformation($body, $requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => array(ODataError::class, 'createFromDiscriminatorValue'),
                    '5XX' => array(ODataError::class, 'createFromDiscriminatorValue'),
            ];
            return $this->requestAdapter->sendNoContentAsync($requestInfo, $responseHandler, $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.me.authentication.windowsHelloForBusinessMethods.item.device.registeredOwners.item collection
     * @param string $id Unique identifier of the item
     * @return MicrosoftGraphBetaGeneratedMeAuthenticationWindowsHelloForBusinessMethodsItemDeviceRegisteredOwnersItemDirectoryObjectItemRequestBuilder
    */
    public function registeredOwnersById(string $id): MicrosoftGraphBetaGeneratedMeAuthenticationWindowsHelloForBusinessMethodsItemDeviceRegisteredOwnersItemDirectoryObjectItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['directoryObject%2Did'] = $id;
        return new MicrosoftGraphBetaGeneratedMeAuthenticationWindowsHelloForBusinessMethodsItemDeviceRegisteredOwnersItemDirectoryObjectItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.me.authentication.windowsHelloForBusinessMethods.item.device.registeredUsers.item collection
     * @param string $id Unique identifier of the item
     * @return MicrosoftGraphBetaGeneratedMeAuthenticationWindowsHelloForBusinessMethodsItemDeviceRegisteredUsersItemDirectoryObjectItemRequestBuilder
    */
    public function registeredUsersById(string $id): MicrosoftGraphBetaGeneratedMeAuthenticationWindowsHelloForBusinessMethodsItemDeviceRegisteredUsersItemDirectoryObjectItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['directoryObject%2Did'] = $id;
        return new MicrosoftGraphBetaGeneratedMeAuthenticationWindowsHelloForBusinessMethodsItemDeviceRegisteredUsersItemDirectoryObjectItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.me.authentication.windowsHelloForBusinessMethods.item.device.transitiveMemberOf.item collection
     * @param string $id Unique identifier of the item
     * @return MicrosoftGraphBetaGeneratedMeAuthenticationWindowsHelloForBusinessMethodsItemDeviceTransitiveMemberOfItemDirectoryObjectItemRequestBuilder
    */
    public function transitiveMemberOfById(string $id): MicrosoftGraphBetaGeneratedMeAuthenticationWindowsHelloForBusinessMethodsItemDeviceTransitiveMemberOfItemDirectoryObjectItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['directoryObject%2Did'] = $id;
        return new MicrosoftGraphBetaGeneratedMeAuthenticationWindowsHelloForBusinessMethodsItemDeviceTransitiveMemberOfItemDirectoryObjectItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.me.authentication.windowsHelloForBusinessMethods.item.device.usageRights.item collection
     * @param string $id Unique identifier of the item
     * @return UsageRightItemRequestBuilder
    */
    public function usageRightsById(string $id): UsageRightItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['usageRight%2Did'] = $id;
        return new UsageRightItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

}
