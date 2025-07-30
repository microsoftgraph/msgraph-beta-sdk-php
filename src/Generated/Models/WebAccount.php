<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class WebAccount extends ItemFacet implements Parsable 
{
    /**
     * Instantiates a new WebAccount and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.webAccount');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return WebAccount
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): WebAccount {
        return new WebAccount();
    }

    /**
     * Gets the description property value. Contains the description the user has provided for the account on the service being referenced.
     * @return string|null
    */
    public function getDescription(): ?string {
        $val = $this->getBackingStore()->get('description');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'description'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'service' => fn(ParseNode $n) => $o->setService($n->getObjectValue([ServiceInformation::class, 'createFromDiscriminatorValue'])),
            'statusMessage' => fn(ParseNode $n) => $o->setStatusMessage($n->getStringValue()),
            'thumbnailUrl' => fn(ParseNode $n) => $o->setThumbnailUrl($n->getStringValue()),
            'userId' => fn(ParseNode $n) => $o->setUserId($n->getStringValue()),
            'webUrl' => fn(ParseNode $n) => $o->setWebUrl($n->getStringValue()),
        ]);
    }

    /**
     * Gets the service property value. Contains basic detail about the service that is being associated.
     * @return ServiceInformation|null
    */
    public function getService(): ?ServiceInformation {
        $val = $this->getBackingStore()->get('service');
        if (is_null($val) || $val instanceof ServiceInformation) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'service'");
    }

    /**
     * Gets the statusMessage property value. Contains a status message from the cloud service if provided or synchronized.
     * @return string|null
    */
    public function getStatusMessage(): ?string {
        $val = $this->getBackingStore()->get('statusMessage');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'statusMessage'");
    }

    /**
     * Gets the thumbnailUrl property value. The thumbnailUrl property
     * @return string|null
    */
    public function getThumbnailUrl(): ?string {
        $val = $this->getBackingStore()->get('thumbnailUrl');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'thumbnailUrl'");
    }

    /**
     * Gets the userId property value. The user name  displayed for the webaccount.
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
     * Gets the webUrl property value. Contains a link to the user's profile on the cloud service if one exists.
     * @return string|null
    */
    public function getWebUrl(): ?string {
        $val = $this->getBackingStore()->get('webUrl');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'webUrl'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('description', $this->getDescription());
        $writer->writeObjectValue('service', $this->getService());
        $writer->writeStringValue('statusMessage', $this->getStatusMessage());
        $writer->writeStringValue('thumbnailUrl', $this->getThumbnailUrl());
        $writer->writeStringValue('userId', $this->getUserId());
        $writer->writeStringValue('webUrl', $this->getWebUrl());
    }

    /**
     * Sets the description property value. Contains the description the user has provided for the account on the service being referenced.
     * @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value): void {
        $this->getBackingStore()->set('description', $value);
    }

    /**
     * Sets the service property value. Contains basic detail about the service that is being associated.
     * @param ServiceInformation|null $value Value to set for the service property.
    */
    public function setService(?ServiceInformation $value): void {
        $this->getBackingStore()->set('service', $value);
    }

    /**
     * Sets the statusMessage property value. Contains a status message from the cloud service if provided or synchronized.
     * @param string|null $value Value to set for the statusMessage property.
    */
    public function setStatusMessage(?string $value): void {
        $this->getBackingStore()->set('statusMessage', $value);
    }

    /**
     * Sets the thumbnailUrl property value. The thumbnailUrl property
     * @param string|null $value Value to set for the thumbnailUrl property.
    */
    public function setThumbnailUrl(?string $value): void {
        $this->getBackingStore()->set('thumbnailUrl', $value);
    }

    /**
     * Sets the userId property value. The user name  displayed for the webaccount.
     * @param string|null $value Value to set for the userId property.
    */
    public function setUserId(?string $value): void {
        $this->getBackingStore()->set('userId', $value);
    }

    /**
     * Sets the webUrl property value. Contains a link to the user's profile on the cloud service if one exists.
     * @param string|null $value Value to set for the webUrl property.
    */
    public function setWebUrl(?string $value): void {
        $this->getBackingStore()->set('webUrl', $value);
    }

}
