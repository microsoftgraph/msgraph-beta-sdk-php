<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AccessPackageResourceRequest extends Entity implements Parsable 
{
    /**
     * Instantiates a new accessPackageResourceRequest and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AccessPackageResourceRequest
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AccessPackageResourceRequest {
        return new AccessPackageResourceRequest();
    }

    /**
     * Gets the accessPackageResource property value. The accessPackageResource property
     * @return AccessPackageResource|null
    */
    public function getAccessPackageResource(): ?AccessPackageResource {
        return $this->getBackingStore()->get('accessPackageResource');
    }

    /**
     * Gets the catalogId property value. The unique ID of the access package catalog.
     * @return string|null
    */
    public function getCatalogId(): ?string {
        return $this->getBackingStore()->get('catalogId');
    }

    /**
     * Gets the executeImmediately property value. The executeImmediately property
     * @return bool|null
    */
    public function getExecuteImmediately(): ?bool {
        return $this->getBackingStore()->get('executeImmediately');
    }

    /**
     * Gets the expirationDateTime property value. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
     * @return DateTime|null
    */
    public function getExpirationDateTime(): ?DateTime {
        return $this->getBackingStore()->get('expirationDateTime');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'accessPackageResource' => fn(ParseNode $n) => $o->setAccessPackageResource($n->getObjectValue([AccessPackageResource::class, 'createFromDiscriminatorValue'])),
            'catalogId' => fn(ParseNode $n) => $o->setCatalogId($n->getStringValue()),
            'executeImmediately' => fn(ParseNode $n) => $o->setExecuteImmediately($n->getBooleanValue()),
            'expirationDateTime' => fn(ParseNode $n) => $o->setExpirationDateTime($n->getDateTimeValue()),
            'isValidationOnly' => fn(ParseNode $n) => $o->setIsValidationOnly($n->getBooleanValue()),
            'justification' => fn(ParseNode $n) => $o->setJustification($n->getStringValue()),
            'requestor' => fn(ParseNode $n) => $o->setRequestor($n->getObjectValue([AccessPackageSubject::class, 'createFromDiscriminatorValue'])),
            'requestState' => fn(ParseNode $n) => $o->setRequestState($n->getStringValue()),
            'requestStatus' => fn(ParseNode $n) => $o->setRequestStatus($n->getStringValue()),
            'requestType' => fn(ParseNode $n) => $o->setRequestType($n->getStringValue()),
        ]);
    }

    /**
     * Gets the isValidationOnly property value. If set, does not add the resource.
     * @return bool|null
    */
    public function getIsValidationOnly(): ?bool {
        return $this->getBackingStore()->get('isValidationOnly');
    }

    /**
     * Gets the justification property value. The requestor's justification for adding or removing the resource.
     * @return string|null
    */
    public function getJustification(): ?string {
        return $this->getBackingStore()->get('justification');
    }

    /**
     * Gets the requestor property value. Read-only. Nullable. Supports $expand.
     * @return AccessPackageSubject|null
    */
    public function getRequestor(): ?AccessPackageSubject {
        return $this->getBackingStore()->get('requestor');
    }

    /**
     * Gets the requestState property value. The outcome of whether the service was able to add the resource to the catalog.  The value is Delivered if the resource was added or removed. Read-Only.
     * @return string|null
    */
    public function getRequestState(): ?string {
        return $this->getBackingStore()->get('requestState');
    }

    /**
     * Gets the requestStatus property value. The requestStatus property
     * @return string|null
    */
    public function getRequestStatus(): ?string {
        return $this->getBackingStore()->get('requestStatus');
    }

    /**
     * Gets the requestType property value. Use AdminAdd to add a resource, if the caller is an administrator or resource owner, AdminUpdate to update a resource, or AdminRemove to remove a resource.
     * @return string|null
    */
    public function getRequestType(): ?string {
        return $this->getBackingStore()->get('requestType');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('accessPackageResource', $this->getAccessPackageResource());
        $writer->writeStringValue('catalogId', $this->getCatalogId());
        $writer->writeBooleanValue('executeImmediately', $this->getExecuteImmediately());
        $writer->writeDateTimeValue('expirationDateTime', $this->getExpirationDateTime());
        $writer->writeBooleanValue('isValidationOnly', $this->getIsValidationOnly());
        $writer->writeStringValue('justification', $this->getJustification());
        $writer->writeObjectValue('requestor', $this->getRequestor());
        $writer->writeStringValue('requestState', $this->getRequestState());
        $writer->writeStringValue('requestStatus', $this->getRequestStatus());
        $writer->writeStringValue('requestType', $this->getRequestType());
    }

    /**
     * Sets the accessPackageResource property value. The accessPackageResource property
     * @param AccessPackageResource|null $value Value to set for the accessPackageResource property.
    */
    public function setAccessPackageResource(?AccessPackageResource $value): void {
        $this->getBackingStore()->set('accessPackageResource', $value);
    }

    /**
     * Sets the catalogId property value. The unique ID of the access package catalog.
     * @param string|null $value Value to set for the catalogId property.
    */
    public function setCatalogId(?string $value): void {
        $this->getBackingStore()->set('catalogId', $value);
    }

    /**
     * Sets the executeImmediately property value. The executeImmediately property
     * @param bool|null $value Value to set for the executeImmediately property.
    */
    public function setExecuteImmediately(?bool $value): void {
        $this->getBackingStore()->set('executeImmediately', $value);
    }

    /**
     * Sets the expirationDateTime property value. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
     * @param DateTime|null $value Value to set for the expirationDateTime property.
    */
    public function setExpirationDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('expirationDateTime', $value);
    }

    /**
     * Sets the isValidationOnly property value. If set, does not add the resource.
     * @param bool|null $value Value to set for the isValidationOnly property.
    */
    public function setIsValidationOnly(?bool $value): void {
        $this->getBackingStore()->set('isValidationOnly', $value);
    }

    /**
     * Sets the justification property value. The requestor's justification for adding or removing the resource.
     * @param string|null $value Value to set for the justification property.
    */
    public function setJustification(?string $value): void {
        $this->getBackingStore()->set('justification', $value);
    }

    /**
     * Sets the requestor property value. Read-only. Nullable. Supports $expand.
     * @param AccessPackageSubject|null $value Value to set for the requestor property.
    */
    public function setRequestor(?AccessPackageSubject $value): void {
        $this->getBackingStore()->set('requestor', $value);
    }

    /**
     * Sets the requestState property value. The outcome of whether the service was able to add the resource to the catalog.  The value is Delivered if the resource was added or removed. Read-Only.
     * @param string|null $value Value to set for the requestState property.
    */
    public function setRequestState(?string $value): void {
        $this->getBackingStore()->set('requestState', $value);
    }

    /**
     * Sets the requestStatus property value. The requestStatus property
     * @param string|null $value Value to set for the requestStatus property.
    */
    public function setRequestStatus(?string $value): void {
        $this->getBackingStore()->set('requestStatus', $value);
    }

    /**
     * Sets the requestType property value. Use AdminAdd to add a resource, if the caller is an administrator or resource owner, AdminUpdate to update a resource, or AdminRemove to remove a resource.
     * @param string|null $value Value to set for the requestType property.
    */
    public function setRequestType(?string $value): void {
        $this->getBackingStore()->set('requestType', $value);
    }

}
