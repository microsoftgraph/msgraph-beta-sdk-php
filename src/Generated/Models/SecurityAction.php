<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class SecurityAction extends Entity implements Parsable 
{
    /**
     * @var string|null $actionReason Reason for invoking this action.
    */
    private ?string $actionReason = null;
    
    /**
     * @var string|null $appId The Application ID of the calling application that submitted (POST) the action. The appId should be extracted from the auth token and not entered manually by the calling application.
    */
    private ?string $appId = null;
    
    /**
     * @var string|null $azureTenantId Azure tenant ID of the entity to determine which tenant the entity belongs to (multi-tenancy support). The azureTenantId should be extracted from the auth token and not entered manually by the calling application.
    */
    private ?string $azureTenantId = null;
    
    /**
     * @var string|null $clientContext The clientContext property
    */
    private ?string $clientContext = null;
    
    /**
     * @var DateTime|null $completedDateTime Timestamp when the action was completed. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
    */
    private ?DateTime $completedDateTime = null;
    
    /**
     * @var DateTime|null $createdDateTime Timestamp when the action is created. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
    */
    private ?DateTime $createdDateTime = null;
    
    /**
     * @var ResultInfo|null $errorInfo Error info when the action fails.
    */
    private ?ResultInfo $errorInfo = null;
    
    /**
     * @var DateTime|null $lastActionDateTime Timestamp when this action was last updated. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
    */
    private ?DateTime $lastActionDateTime = null;
    
    /**
     * @var string|null $name Action name.
    */
    private ?string $name = null;
    
    /**
     * @var array<KeyValuePair>|null $parameters Collection of parameters (key-value pairs) necessary to invoke the action, for example, URL or fileHash to block.). Required.
    */
    private ?array $parameters = null;
    
    /**
     * @var array<SecurityActionState>|null $states Collection of securityActionState to keep the history of an action.
    */
    private ?array $states = null;
    
    /**
     * @var OperationStatus|null $status Status of the action. Possible values are: NotStarted, Running, Completed, Failed.
    */
    private ?OperationStatus $status = null;
    
    /**
     * @var string|null $user The user principal name of the signed-in user that submitted  (POST) the action. The user should be extracted from the auth token and not entered manually by the calling application.
    */
    private ?string $user = null;
    
    /**
     * @var SecurityVendorInformation|null $vendorInformation Complex Type containing details about the Security product/service vendor, provider, and sub-provider (for example, vendor=Microsoft; provider=Windows Defender ATP; sub-provider=AppLocker).
    */
    private ?SecurityVendorInformation $vendorInformation = null;
    
    /**
     * Instantiates a new securityAction and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.securityAction');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SecurityAction
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SecurityAction {
        return new SecurityAction();
    }

    /**
     * Gets the actionReason property value. Reason for invoking this action.
     * @return string|null
    */
    public function getActionReason(): ?string {
        return $this->actionReason;
    }

    /**
     * Gets the appId property value. The Application ID of the calling application that submitted (POST) the action. The appId should be extracted from the auth token and not entered manually by the calling application.
     * @return string|null
    */
    public function getAppId(): ?string {
        return $this->appId;
    }

    /**
     * Gets the azureTenantId property value. Azure tenant ID of the entity to determine which tenant the entity belongs to (multi-tenancy support). The azureTenantId should be extracted from the auth token and not entered manually by the calling application.
     * @return string|null
    */
    public function getAzureTenantId(): ?string {
        return $this->azureTenantId;
    }

    /**
     * Gets the clientContext property value. The clientContext property
     * @return string|null
    */
    public function getClientContext(): ?string {
        return $this->clientContext;
    }

    /**
     * Gets the completedDateTime property value. Timestamp when the action was completed. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     * @return DateTime|null
    */
    public function getCompletedDateTime(): ?DateTime {
        return $this->completedDateTime;
    }

    /**
     * Gets the createdDateTime property value. Timestamp when the action is created. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        return $this->createdDateTime;
    }

    /**
     * Gets the errorInfo property value. Error info when the action fails.
     * @return ResultInfo|null
    */
    public function getErrorInfo(): ?ResultInfo {
        return $this->errorInfo;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'actionReason' => fn(ParseNode $n) => $o->setActionReason($n->getStringValue()),
            'appId' => fn(ParseNode $n) => $o->setAppId($n->getStringValue()),
            'azureTenantId' => fn(ParseNode $n) => $o->setAzureTenantId($n->getStringValue()),
            'clientContext' => fn(ParseNode $n) => $o->setClientContext($n->getStringValue()),
            'completedDateTime' => fn(ParseNode $n) => $o->setCompletedDateTime($n->getDateTimeValue()),
            'createdDateTime' => fn(ParseNode $n) => $o->setCreatedDateTime($n->getDateTimeValue()),
            'errorInfo' => fn(ParseNode $n) => $o->setErrorInfo($n->getObjectValue([ResultInfo::class, 'createFromDiscriminatorValue'])),
            'lastActionDateTime' => fn(ParseNode $n) => $o->setLastActionDateTime($n->getDateTimeValue()),
            'name' => fn(ParseNode $n) => $o->setName($n->getStringValue()),
            'parameters' => fn(ParseNode $n) => $o->setParameters($n->getCollectionOfObjectValues([KeyValuePair::class, 'createFromDiscriminatorValue'])),
            'states' => fn(ParseNode $n) => $o->setStates($n->getCollectionOfObjectValues([SecurityActionState::class, 'createFromDiscriminatorValue'])),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getEnumValue(OperationStatus::class)),
            'user' => fn(ParseNode $n) => $o->setUser($n->getStringValue()),
            'vendorInformation' => fn(ParseNode $n) => $o->setVendorInformation($n->getObjectValue([SecurityVendorInformation::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the lastActionDateTime property value. Timestamp when this action was last updated. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     * @return DateTime|null
    */
    public function getLastActionDateTime(): ?DateTime {
        return $this->lastActionDateTime;
    }

    /**
     * Gets the name property value. Action name.
     * @return string|null
    */
    public function getName(): ?string {
        return $this->name;
    }

    /**
     * Gets the parameters property value. Collection of parameters (key-value pairs) necessary to invoke the action, for example, URL or fileHash to block.). Required.
     * @return array<KeyValuePair>|null
    */
    public function getParameters(): ?array {
        return $this->parameters;
    }

    /**
     * Gets the states property value. Collection of securityActionState to keep the history of an action.
     * @return array<SecurityActionState>|null
    */
    public function getStates(): ?array {
        return $this->states;
    }

    /**
     * Gets the status property value. Status of the action. Possible values are: NotStarted, Running, Completed, Failed.
     * @return OperationStatus|null
    */
    public function getStatus(): ?OperationStatus {
        return $this->status;
    }

    /**
     * Gets the user property value. The user principal name of the signed-in user that submitted  (POST) the action. The user should be extracted from the auth token and not entered manually by the calling application.
     * @return string|null
    */
    public function getUser(): ?string {
        return $this->user;
    }

    /**
     * Gets the vendorInformation property value. Complex Type containing details about the Security product/service vendor, provider, and sub-provider (for example, vendor=Microsoft; provider=Windows Defender ATP; sub-provider=AppLocker).
     * @return SecurityVendorInformation|null
    */
    public function getVendorInformation(): ?SecurityVendorInformation {
        return $this->vendorInformation;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('actionReason', $this->actionReason);
        $writer->writeStringValue('appId', $this->appId);
        $writer->writeStringValue('azureTenantId', $this->azureTenantId);
        $writer->writeStringValue('clientContext', $this->clientContext);
        $writer->writeDateTimeValue('completedDateTime', $this->completedDateTime);
        $writer->writeDateTimeValue('createdDateTime', $this->createdDateTime);
        $writer->writeObjectValue('errorInfo', $this->errorInfo);
        $writer->writeDateTimeValue('lastActionDateTime', $this->lastActionDateTime);
        $writer->writeStringValue('name', $this->name);
        $writer->writeCollectionOfObjectValues('parameters', $this->parameters);
        $writer->writeCollectionOfObjectValues('states', $this->states);
        $writer->writeEnumValue('status', $this->status);
        $writer->writeStringValue('user', $this->user);
        $writer->writeObjectValue('vendorInformation', $this->vendorInformation);
    }

    /**
     * Sets the actionReason property value. Reason for invoking this action.
     *  @param string|null $value Value to set for the actionReason property.
    */
    public function setActionReason(?string $value ): void {
        $this->actionReason = $value;
    }

    /**
     * Sets the appId property value. The Application ID of the calling application that submitted (POST) the action. The appId should be extracted from the auth token and not entered manually by the calling application.
     *  @param string|null $value Value to set for the appId property.
    */
    public function setAppId(?string $value ): void {
        $this->appId = $value;
    }

    /**
     * Sets the azureTenantId property value. Azure tenant ID of the entity to determine which tenant the entity belongs to (multi-tenancy support). The azureTenantId should be extracted from the auth token and not entered manually by the calling application.
     *  @param string|null $value Value to set for the azureTenantId property.
    */
    public function setAzureTenantId(?string $value ): void {
        $this->azureTenantId = $value;
    }

    /**
     * Sets the clientContext property value. The clientContext property
     *  @param string|null $value Value to set for the clientContext property.
    */
    public function setClientContext(?string $value ): void {
        $this->clientContext = $value;
    }

    /**
     * Sets the completedDateTime property value. Timestamp when the action was completed. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     *  @param DateTime|null $value Value to set for the completedDateTime property.
    */
    public function setCompletedDateTime(?DateTime $value ): void {
        $this->completedDateTime = $value;
    }

    /**
     * Sets the createdDateTime property value. Timestamp when the action is created. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     *  @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value ): void {
        $this->createdDateTime = $value;
    }

    /**
     * Sets the errorInfo property value. Error info when the action fails.
     *  @param ResultInfo|null $value Value to set for the errorInfo property.
    */
    public function setErrorInfo(?ResultInfo $value ): void {
        $this->errorInfo = $value;
    }

    /**
     * Sets the lastActionDateTime property value. Timestamp when this action was last updated. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     *  @param DateTime|null $value Value to set for the lastActionDateTime property.
    */
    public function setLastActionDateTime(?DateTime $value ): void {
        $this->lastActionDateTime = $value;
    }

    /**
     * Sets the name property value. Action name.
     *  @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value ): void {
        $this->name = $value;
    }

    /**
     * Sets the parameters property value. Collection of parameters (key-value pairs) necessary to invoke the action, for example, URL or fileHash to block.). Required.
     *  @param array<KeyValuePair>|null $value Value to set for the parameters property.
    */
    public function setParameters(?array $value ): void {
        $this->parameters = $value;
    }

    /**
     * Sets the states property value. Collection of securityActionState to keep the history of an action.
     *  @param array<SecurityActionState>|null $value Value to set for the states property.
    */
    public function setStates(?array $value ): void {
        $this->states = $value;
    }

    /**
     * Sets the status property value. Status of the action. Possible values are: NotStarted, Running, Completed, Failed.
     *  @param OperationStatus|null $value Value to set for the status property.
    */
    public function setStatus(?OperationStatus $value ): void {
        $this->status = $value;
    }

    /**
     * Sets the user property value. The user principal name of the signed-in user that submitted  (POST) the action. The user should be extracted from the auth token and not entered manually by the calling application.
     *  @param string|null $value Value to set for the user property.
    */
    public function setUser(?string $value ): void {
        $this->user = $value;
    }

    /**
     * Sets the vendorInformation property value. Complex Type containing details about the Security product/service vendor, provider, and sub-provider (for example, vendor=Microsoft; provider=Windows Defender ATP; sub-provider=AppLocker).
     *  @param SecurityVendorInformation|null $value Value to set for the vendorInformation property.
    */
    public function setVendorInformation(?SecurityVendorInformation $value ): void {
        $this->vendorInformation = $value;
    }

}
