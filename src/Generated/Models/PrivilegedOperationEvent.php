<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class PrivilegedOperationEvent extends Entity implements Parsable 
{
    /**
     * Instantiates a new privilegedOperationEvent and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PrivilegedOperationEvent
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PrivilegedOperationEvent {
        return new PrivilegedOperationEvent();
    }

    /**
     * Gets the additionalInformation property value. The additionalInformation property
     * @return string|null
    */
    public function getAdditionalInformation(): ?string {
        $val = $this->getBackingStore()->get('additionalInformation');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'additionalInformation'");
    }

    /**
     * Gets the creationDateTime property value. The creationDateTime property
     * @return DateTime|null
    */
    public function getCreationDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('creationDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'creationDateTime'");
    }

    /**
     * Gets the expirationDateTime property value. The expirationDateTime property
     * @return DateTime|null
    */
    public function getExpirationDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('expirationDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'expirationDateTime'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'additionalInformation' => fn(ParseNode $n) => $o->setAdditionalInformation($n->getStringValue()),
            'creationDateTime' => fn(ParseNode $n) => $o->setCreationDateTime($n->getDateTimeValue()),
            'expirationDateTime' => fn(ParseNode $n) => $o->setExpirationDateTime($n->getDateTimeValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'referenceKey' => fn(ParseNode $n) => $o->setReferenceKey($n->getStringValue()),
            'referenceSystem' => fn(ParseNode $n) => $o->setReferenceSystem($n->getStringValue()),
            'requestorId' => fn(ParseNode $n) => $o->setRequestorId($n->getStringValue()),
            'requestorName' => fn(ParseNode $n) => $o->setRequestorName($n->getStringValue()),
            'requestType' => fn(ParseNode $n) => $o->setRequestType($n->getStringValue()),
            'roleId' => fn(ParseNode $n) => $o->setRoleId($n->getStringValue()),
            'roleName' => fn(ParseNode $n) => $o->setRoleName($n->getStringValue()),
            'tenantId' => fn(ParseNode $n) => $o->setTenantId($n->getStringValue()),
            'userId' => fn(ParseNode $n) => $o->setUserId($n->getStringValue()),
            'userMail' => fn(ParseNode $n) => $o->setUserMail($n->getStringValue()),
            'userName' => fn(ParseNode $n) => $o->setUserName($n->getStringValue()),
        ]);
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        $val = $this->getBackingStore()->get('odataType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'odataType'");
    }

    /**
     * Gets the referenceKey property value. The referenceKey property
     * @return string|null
    */
    public function getReferenceKey(): ?string {
        $val = $this->getBackingStore()->get('referenceKey');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'referenceKey'");
    }

    /**
     * Gets the referenceSystem property value. The referenceSystem property
     * @return string|null
    */
    public function getReferenceSystem(): ?string {
        $val = $this->getBackingStore()->get('referenceSystem');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'referenceSystem'");
    }

    /**
     * Gets the requestorId property value. The requestorId property
     * @return string|null
    */
    public function getRequestorId(): ?string {
        $val = $this->getBackingStore()->get('requestorId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'requestorId'");
    }

    /**
     * Gets the requestorName property value. The requestorName property
     * @return string|null
    */
    public function getRequestorName(): ?string {
        $val = $this->getBackingStore()->get('requestorName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'requestorName'");
    }

    /**
     * Gets the requestType property value. The requestType property
     * @return string|null
    */
    public function getRequestType(): ?string {
        $val = $this->getBackingStore()->get('requestType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'requestType'");
    }

    /**
     * Gets the roleId property value. The roleId property
     * @return string|null
    */
    public function getRoleId(): ?string {
        $val = $this->getBackingStore()->get('roleId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'roleId'");
    }

    /**
     * Gets the roleName property value. The roleName property
     * @return string|null
    */
    public function getRoleName(): ?string {
        $val = $this->getBackingStore()->get('roleName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'roleName'");
    }

    /**
     * Gets the tenantId property value. The tenantId property
     * @return string|null
    */
    public function getTenantId(): ?string {
        $val = $this->getBackingStore()->get('tenantId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'tenantId'");
    }

    /**
     * Gets the userId property value. The userId property
     * @return string|null
    */
    public function getUserId(): ?string {
        $val = $this->getBackingStore()->get('userId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'userId'");
    }

    /**
     * Gets the userMail property value. The userMail property
     * @return string|null
    */
    public function getUserMail(): ?string {
        $val = $this->getBackingStore()->get('userMail');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'userMail'");
    }

    /**
     * Gets the userName property value. The userName property
     * @return string|null
    */
    public function getUserName(): ?string {
        $val = $this->getBackingStore()->get('userName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'userName'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('additionalInformation', $this->getAdditionalInformation());
        $writer->writeDateTimeValue('creationDateTime', $this->getCreationDateTime());
        $writer->writeDateTimeValue('expirationDateTime', $this->getExpirationDateTime());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeStringValue('referenceKey', $this->getReferenceKey());
        $writer->writeStringValue('referenceSystem', $this->getReferenceSystem());
        $writer->writeStringValue('requestorId', $this->getRequestorId());
        $writer->writeStringValue('requestorName', $this->getRequestorName());
        $writer->writeStringValue('requestType', $this->getRequestType());
        $writer->writeStringValue('roleId', $this->getRoleId());
        $writer->writeStringValue('roleName', $this->getRoleName());
        $writer->writeStringValue('tenantId', $this->getTenantId());
        $writer->writeStringValue('userId', $this->getUserId());
        $writer->writeStringValue('userMail', $this->getUserMail());
        $writer->writeStringValue('userName', $this->getUserName());
    }

    /**
     * Sets the additionalInformation property value. The additionalInformation property
     * @param string|null $value Value to set for the additionalInformation property.
    */
    public function setAdditionalInformation(?string $value): void {
        $this->getBackingStore()->set('additionalInformation', $value);
    }

    /**
     * Sets the creationDateTime property value. The creationDateTime property
     * @param DateTime|null $value Value to set for the creationDateTime property.
    */
    public function setCreationDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('creationDateTime', $value);
    }

    /**
     * Sets the expirationDateTime property value. The expirationDateTime property
     * @param DateTime|null $value Value to set for the expirationDateTime property.
    */
    public function setExpirationDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('expirationDateTime', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the referenceKey property value. The referenceKey property
     * @param string|null $value Value to set for the referenceKey property.
    */
    public function setReferenceKey(?string $value): void {
        $this->getBackingStore()->set('referenceKey', $value);
    }

    /**
     * Sets the referenceSystem property value. The referenceSystem property
     * @param string|null $value Value to set for the referenceSystem property.
    */
    public function setReferenceSystem(?string $value): void {
        $this->getBackingStore()->set('referenceSystem', $value);
    }

    /**
     * Sets the requestorId property value. The requestorId property
     * @param string|null $value Value to set for the requestorId property.
    */
    public function setRequestorId(?string $value): void {
        $this->getBackingStore()->set('requestorId', $value);
    }

    /**
     * Sets the requestorName property value. The requestorName property
     * @param string|null $value Value to set for the requestorName property.
    */
    public function setRequestorName(?string $value): void {
        $this->getBackingStore()->set('requestorName', $value);
    }

    /**
     * Sets the requestType property value. The requestType property
     * @param string|null $value Value to set for the requestType property.
    */
    public function setRequestType(?string $value): void {
        $this->getBackingStore()->set('requestType', $value);
    }

    /**
     * Sets the roleId property value. The roleId property
     * @param string|null $value Value to set for the roleId property.
    */
    public function setRoleId(?string $value): void {
        $this->getBackingStore()->set('roleId', $value);
    }

    /**
     * Sets the roleName property value. The roleName property
     * @param string|null $value Value to set for the roleName property.
    */
    public function setRoleName(?string $value): void {
        $this->getBackingStore()->set('roleName', $value);
    }

    /**
     * Sets the tenantId property value. The tenantId property
     * @param string|null $value Value to set for the tenantId property.
    */
    public function setTenantId(?string $value): void {
        $this->getBackingStore()->set('tenantId', $value);
    }

    /**
     * Sets the userId property value. The userId property
     * @param string|null $value Value to set for the userId property.
    */
    public function setUserId(?string $value): void {
        $this->getBackingStore()->set('userId', $value);
    }

    /**
     * Sets the userMail property value. The userMail property
     * @param string|null $value Value to set for the userMail property.
    */
    public function setUserMail(?string $value): void {
        $this->getBackingStore()->set('userMail', $value);
    }

    /**
     * Sets the userName property value. The userName property
     * @param string|null $value Value to set for the userName property.
    */
    public function setUserName(?string $value): void {
        $this->getBackingStore()->set('userName', $value);
    }

}
