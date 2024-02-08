<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class SecurityAction extends Entity implements Parsable 
{
    /**
     * Instantiates a new SecurityAction and sets the default values.
    */
    public function __construct() {
        parent::__construct();
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
        $val = $this->getBackingStore()->get('actionReason');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'actionReason'");
    }

    /**
     * Gets the appId property value. The Application ID of the calling application that submitted (POST) the action. The appId should be extracted from the auth token and not entered manually by the calling application.
     * @return string|null
    */
    public function getAppId(): ?string {
        $val = $this->getBackingStore()->get('appId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'appId'");
    }

    /**
     * Gets the azureTenantId property value. Azure tenant ID of the entity to determine which tenant the entity belongs to (multi-tenancy support). The azureTenantId should be extracted from the auth token and not entered manually by the calling application.
     * @return string|null
    */
    public function getAzureTenantId(): ?string {
        $val = $this->getBackingStore()->get('azureTenantId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'azureTenantId'");
    }

    /**
     * Gets the clientContext property value. The clientContext property
     * @return string|null
    */
    public function getClientContext(): ?string {
        $val = $this->getBackingStore()->get('clientContext');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'clientContext'");
    }

    /**
     * Gets the completedDateTime property value. Timestamp when the action was completed. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     * @return DateTime|null
    */
    public function getCompletedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('completedDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'completedDateTime'");
    }

    /**
     * Gets the createdDateTime property value. Timestamp when the action is created. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('createdDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'createdDateTime'");
    }

    /**
     * Gets the errorInfo property value. Error info when the action fails.
     * @return ResultInfo|null
    */
    public function getErrorInfo(): ?ResultInfo {
        $val = $this->getBackingStore()->get('errorInfo');
        if (is_null($val) || $val instanceof ResultInfo) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'errorInfo'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
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
        $val = $this->getBackingStore()->get('lastActionDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'lastActionDateTime'");
    }

    /**
     * Gets the name property value. Action name.
     * @return string|null
    */
    public function getName(): ?string {
        $val = $this->getBackingStore()->get('name');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'name'");
    }

    /**
     * Gets the parameters property value. Collection of parameters (key-value pairs) necessary to invoke the action, for example, URL or fileHash to block.). Required.
     * @return array<KeyValuePair>|null
    */
    public function getParameters(): ?array {
        $val = $this->getBackingStore()->get('parameters');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, KeyValuePair::class);
            /** @var array<KeyValuePair>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'parameters'");
    }

    /**
     * Gets the states property value. Collection of securityActionState to keep the history of an action.
     * @return array<SecurityActionState>|null
    */
    public function getStates(): ?array {
        $val = $this->getBackingStore()->get('states');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, SecurityActionState::class);
            /** @var array<SecurityActionState>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'states'");
    }

    /**
     * Gets the status property value. Status of the action. Possible values are: NotStarted, Running, Completed, Failed.
     * @return OperationStatus|null
    */
    public function getStatus(): ?OperationStatus {
        $val = $this->getBackingStore()->get('status');
        if (is_null($val) || $val instanceof OperationStatus) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'status'");
    }

    /**
     * Gets the user property value. The user principal name of the signed-in user that submitted  (POST) the action. The user should be extracted from the auth token and not entered manually by the calling application.
     * @return string|null
    */
    public function getUser(): ?string {
        $val = $this->getBackingStore()->get('user');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'user'");
    }

    /**
     * Gets the vendorInformation property value. Complex Type containing details about the Security product/service vendor, provider, and sub-provider (for example, vendor=Microsoft; provider=Windows Defender ATP; sub-provider=AppLocker).
     * @return SecurityVendorInformation|null
    */
    public function getVendorInformation(): ?SecurityVendorInformation {
        $val = $this->getBackingStore()->get('vendorInformation');
        if (is_null($val) || $val instanceof SecurityVendorInformation) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'vendorInformation'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('actionReason', $this->getActionReason());
        $writer->writeStringValue('appId', $this->getAppId());
        $writer->writeStringValue('azureTenantId', $this->getAzureTenantId());
        $writer->writeStringValue('clientContext', $this->getClientContext());
        $writer->writeDateTimeValue('completedDateTime', $this->getCompletedDateTime());
        $writer->writeDateTimeValue('createdDateTime', $this->getCreatedDateTime());
        $writer->writeObjectValue('errorInfo', $this->getErrorInfo());
        $writer->writeDateTimeValue('lastActionDateTime', $this->getLastActionDateTime());
        $writer->writeStringValue('name', $this->getName());
        $writer->writeCollectionOfObjectValues('parameters', $this->getParameters());
        $writer->writeCollectionOfObjectValues('states', $this->getStates());
        $writer->writeEnumValue('status', $this->getStatus());
        $writer->writeStringValue('user', $this->getUser());
        $writer->writeObjectValue('vendorInformation', $this->getVendorInformation());
    }

    /**
     * Sets the actionReason property value. Reason for invoking this action.
     * @param string|null $value Value to set for the actionReason property.
    */
    public function setActionReason(?string $value): void {
        $this->getBackingStore()->set('actionReason', $value);
    }

    /**
     * Sets the appId property value. The Application ID of the calling application that submitted (POST) the action. The appId should be extracted from the auth token and not entered manually by the calling application.
     * @param string|null $value Value to set for the appId property.
    */
    public function setAppId(?string $value): void {
        $this->getBackingStore()->set('appId', $value);
    }

    /**
     * Sets the azureTenantId property value. Azure tenant ID of the entity to determine which tenant the entity belongs to (multi-tenancy support). The azureTenantId should be extracted from the auth token and not entered manually by the calling application.
     * @param string|null $value Value to set for the azureTenantId property.
    */
    public function setAzureTenantId(?string $value): void {
        $this->getBackingStore()->set('azureTenantId', $value);
    }

    /**
     * Sets the clientContext property value. The clientContext property
     * @param string|null $value Value to set for the clientContext property.
    */
    public function setClientContext(?string $value): void {
        $this->getBackingStore()->set('clientContext', $value);
    }

    /**
     * Sets the completedDateTime property value. Timestamp when the action was completed. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     * @param DateTime|null $value Value to set for the completedDateTime property.
    */
    public function setCompletedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('completedDateTime', $value);
    }

    /**
     * Sets the createdDateTime property value. Timestamp when the action is created. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     * @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('createdDateTime', $value);
    }

    /**
     * Sets the errorInfo property value. Error info when the action fails.
     * @param ResultInfo|null $value Value to set for the errorInfo property.
    */
    public function setErrorInfo(?ResultInfo $value): void {
        $this->getBackingStore()->set('errorInfo', $value);
    }

    /**
     * Sets the lastActionDateTime property value. Timestamp when this action was last updated. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     * @param DateTime|null $value Value to set for the lastActionDateTime property.
    */
    public function setLastActionDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastActionDateTime', $value);
    }

    /**
     * Sets the name property value. Action name.
     * @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value): void {
        $this->getBackingStore()->set('name', $value);
    }

    /**
     * Sets the parameters property value. Collection of parameters (key-value pairs) necessary to invoke the action, for example, URL or fileHash to block.). Required.
     * @param array<KeyValuePair>|null $value Value to set for the parameters property.
    */
    public function setParameters(?array $value): void {
        $this->getBackingStore()->set('parameters', $value);
    }

    /**
     * Sets the states property value. Collection of securityActionState to keep the history of an action.
     * @param array<SecurityActionState>|null $value Value to set for the states property.
    */
    public function setStates(?array $value): void {
        $this->getBackingStore()->set('states', $value);
    }

    /**
     * Sets the status property value. Status of the action. Possible values are: NotStarted, Running, Completed, Failed.
     * @param OperationStatus|null $value Value to set for the status property.
    */
    public function setStatus(?OperationStatus $value): void {
        $this->getBackingStore()->set('status', $value);
    }

    /**
     * Sets the user property value. The user principal name of the signed-in user that submitted  (POST) the action. The user should be extracted from the auth token and not entered manually by the calling application.
     * @param string|null $value Value to set for the user property.
    */
    public function setUser(?string $value): void {
        $this->getBackingStore()->set('user', $value);
    }

    /**
     * Sets the vendorInformation property value. Complex Type containing details about the Security product/service vendor, provider, and sub-provider (for example, vendor=Microsoft; provider=Windows Defender ATP; sub-provider=AppLocker).
     * @param SecurityVendorInformation|null $value Value to set for the vendorInformation property.
    */
    public function setVendorInformation(?SecurityVendorInformation $value): void {
        $this->getBackingStore()->set('vendorInformation', $value);
    }

}
