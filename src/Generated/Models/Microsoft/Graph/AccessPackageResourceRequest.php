<?php

namespace Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AccessPackageResourceRequest extends Entity 
{
    /** @var AccessPackageResource|null $accessPackageResource Nullable. */
    private ?AccessPackageResource $accessPackageResource = null;
    
    /** @var string|null $catalogId The unique ID of the access package catalog. */
    private ?string $catalogId = null;
    
    /** @var bool|null $executeImmediately  */
    private ?bool $executeImmediately = null;
    
    /** @var DateTime|null $expirationDateTime The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z */
    private ?DateTime $expirationDateTime = null;
    
    /** @var bool|null $isValidationOnly If set, does not add the resource. */
    private ?bool $isValidationOnly = null;
    
    /** @var string|null $justification The requestor's justification for adding or removing the resource. */
    private ?string $justification = null;
    
    /** @var AccessPackageSubject|null $requestor Read-only. Nullable. Supports $expand. */
    private ?AccessPackageSubject $requestor = null;
    
    /** @var string|null $requestState The outcome of whether the service was able to add the resource to the catalog.  The value is Delivered if the resource was added or removed. Read-Only. */
    private ?string $requestState = null;
    
    /** @var string|null $requestStatus Read-only. */
    private ?string $requestStatus = null;
    
    /** @var string|null $requestType Use AdminAdd to add a resource, if the caller is an administrator or resource owner, or AdminRemove to remove a resource. */
    private ?string $requestType = null;
    
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
    public function createFromDiscriminatorValue(ParseNode $parseNode): AccessPackageResourceRequest {
        return new AccessPackageResourceRequest();
    }

    /**
     * Gets the accessPackageResource property value. Nullable.
     * @return AccessPackageResource|null
    */
    public function getAccessPackageResource(): ?AccessPackageResource {
        return $this->accessPackageResource;
    }

    /**
     * Gets the catalogId property value. The unique ID of the access package catalog.
     * @return string|null
    */
    public function getCatalogId(): ?string {
        return $this->catalogId;
    }

    /**
     * Gets the executeImmediately property value. 
     * @return bool|null
    */
    public function getExecuteImmediately(): ?bool {
        return $this->executeImmediately;
    }

    /**
     * Gets the expirationDateTime property value. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
     * @return DateTime|null
    */
    public function getExpirationDateTime(): ?DateTime {
        return $this->expirationDateTime;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return array_merge(parent::getFieldDeserializers(), [
            'accessPackageResource' => function (self $o, ParseNode $n) { $o->setAccessPackageResource($n->getObjectValue(AccessPackageResource::class)); },
            'catalogId' => function (self $o, ParseNode $n) { $o->setCatalogId($n->getStringValue()); },
            'executeImmediately' => function (self $o, ParseNode $n) { $o->setExecuteImmediately($n->getBooleanValue()); },
            'expirationDateTime' => function (self $o, ParseNode $n) { $o->setExpirationDateTime($n->getDateTimeValue()); },
            'isValidationOnly' => function (self $o, ParseNode $n) { $o->setIsValidationOnly($n->getBooleanValue()); },
            'justification' => function (self $o, ParseNode $n) { $o->setJustification($n->getStringValue()); },
            'requestor' => function (self $o, ParseNode $n) { $o->setRequestor($n->getObjectValue(AccessPackageSubject::class)); },
            'requestState' => function (self $o, ParseNode $n) { $o->setRequestState($n->getStringValue()); },
            'requestStatus' => function (self $o, ParseNode $n) { $o->setRequestStatus($n->getStringValue()); },
            'requestType' => function (self $o, ParseNode $n) { $o->setRequestType($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the isValidationOnly property value. If set, does not add the resource.
     * @return bool|null
    */
    public function getIsValidationOnly(): ?bool {
        return $this->isValidationOnly;
    }

    /**
     * Gets the justification property value. The requestor's justification for adding or removing the resource.
     * @return string|null
    */
    public function getJustification(): ?string {
        return $this->justification;
    }

    /**
     * Gets the requestor property value. Read-only. Nullable. Supports $expand.
     * @return AccessPackageSubject|null
    */
    public function getRequestor(): ?AccessPackageSubject {
        return $this->requestor;
    }

    /**
     * Gets the requestState property value. The outcome of whether the service was able to add the resource to the catalog.  The value is Delivered if the resource was added or removed. Read-Only.
     * @return string|null
    */
    public function getRequestState(): ?string {
        return $this->requestState;
    }

    /**
     * Gets the requestStatus property value. Read-only.
     * @return string|null
    */
    public function getRequestStatus(): ?string {
        return $this->requestStatus;
    }

    /**
     * Gets the requestType property value. Use AdminAdd to add a resource, if the caller is an administrator or resource owner, or AdminRemove to remove a resource.
     * @return string|null
    */
    public function getRequestType(): ?string {
        return $this->requestType;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('accessPackageResource', $this->accessPackageResource);
        $writer->writeStringValue('catalogId', $this->catalogId);
        $writer->writeBooleanValue('executeImmediately', $this->executeImmediately);
        $writer->writeDateTimeValue('expirationDateTime', $this->expirationDateTime);
        $writer->writeBooleanValue('isValidationOnly', $this->isValidationOnly);
        $writer->writeStringValue('justification', $this->justification);
        $writer->writeObjectValue('requestor', $this->requestor);
        $writer->writeStringValue('requestState', $this->requestState);
        $writer->writeStringValue('requestStatus', $this->requestStatus);
        $writer->writeStringValue('requestType', $this->requestType);
    }

    /**
     * Sets the accessPackageResource property value. Nullable.
     *  @param AccessPackageResource|null $value Value to set for the accessPackageResource property.
    */
    public function setAccessPackageResource(?AccessPackageResource $value ): void {
        $this->accessPackageResource = $value;
    }

    /**
     * Sets the catalogId property value. The unique ID of the access package catalog.
     *  @param string|null $value Value to set for the catalogId property.
    */
    public function setCatalogId(?string $value ): void {
        $this->catalogId = $value;
    }

    /**
     * Sets the executeImmediately property value. 
     *  @param bool|null $value Value to set for the executeImmediately property.
    */
    public function setExecuteImmediately(?bool $value ): void {
        $this->executeImmediately = $value;
    }

    /**
     * Sets the expirationDateTime property value. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
     *  @param DateTime|null $value Value to set for the expirationDateTime property.
    */
    public function setExpirationDateTime(?DateTime $value ): void {
        $this->expirationDateTime = $value;
    }

    /**
     * Sets the isValidationOnly property value. If set, does not add the resource.
     *  @param bool|null $value Value to set for the isValidationOnly property.
    */
    public function setIsValidationOnly(?bool $value ): void {
        $this->isValidationOnly = $value;
    }

    /**
     * Sets the justification property value. The requestor's justification for adding or removing the resource.
     *  @param string|null $value Value to set for the justification property.
    */
    public function setJustification(?string $value ): void {
        $this->justification = $value;
    }

    /**
     * Sets the requestor property value. Read-only. Nullable. Supports $expand.
     *  @param AccessPackageSubject|null $value Value to set for the requestor property.
    */
    public function setRequestor(?AccessPackageSubject $value ): void {
        $this->requestor = $value;
    }

    /**
     * Sets the requestState property value. The outcome of whether the service was able to add the resource to the catalog.  The value is Delivered if the resource was added or removed. Read-Only.
     *  @param string|null $value Value to set for the requestState property.
    */
    public function setRequestState(?string $value ): void {
        $this->requestState = $value;
    }

    /**
     * Sets the requestStatus property value. Read-only.
     *  @param string|null $value Value to set for the requestStatus property.
    */
    public function setRequestStatus(?string $value ): void {
        $this->requestStatus = $value;
    }

    /**
     * Sets the requestType property value. Use AdminAdd to add a resource, if the caller is an administrator or resource owner, or AdminRemove to remove a resource.
     *  @param string|null $value Value to set for the requestType property.
    */
    public function setRequestType(?string $value ): void {
        $this->requestType = $value;
    }

}
