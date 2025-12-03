<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class CustomDataProvidedResourceUploadSession extends Entity implements Parsable 
{
    /**
     * Instantiates a new CustomDataProvidedResourceUploadSession and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CustomDataProvidedResourceUploadSession
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CustomDataProvidedResourceUploadSession {
        return new CustomDataProvidedResourceUploadSession();
    }

    /**
     * Gets the createdDateTime property value. DateTime when the upload session was created. Read-only.
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
     * Gets the data property value. An object containing the context for which this data is being uploaded. Currently the only possible concrete type is accessReviewResourceDataUploadSessionContextData
     * @return CustomExtensionData|null
    */
    public function getData(): ?CustomExtensionData {
        $val = $this->getBackingStore()->get('data');
        if (is_null($val) || $val instanceof CustomExtensionData) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'data'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'createdDateTime' => fn(ParseNode $n) => $o->setCreatedDateTime($n->getDateTimeValue()),
            'data' => fn(ParseNode $n) => $o->setData($n->getObjectValue([CustomExtensionData::class, 'createFromDiscriminatorValue'])),
            'isUploadDone' => fn(ParseNode $n) => $o->setIsUploadDone($n->getBooleanValue()),
            'source' => fn(ParseNode $n) => $o->setSource($n->getStringValue()),
            'stats' => fn(ParseNode $n) => $o->setStats($n->getObjectValue([CustomDataProvidedResourceUploadStats::class, 'createFromDiscriminatorValue'])),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getEnumValue(CustomDataProvidedResourceUploadStatus::class)),
            'type' => fn(ParseNode $n) => $o->setType($n->getStringValue()),
        ]);
    }

    /**
     * Gets the isUploadDone property value. Indicates if all the necessary files have been uploaded to this session.
     * @return bool|null
    */
    public function getIsUploadDone(): ?bool {
        $val = $this->getBackingStore()->get('isUploadDone');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isUploadDone'");
    }

    /**
     * Gets the source property value. The source of the access data. This should be set to the customdataprovidedresource's name when creating the session.
     * @return string|null
    */
    public function getSource(): ?string {
        $val = $this->getBackingStore()->get('source');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'source'");
    }

    /**
     * Gets the stats property value. The stats property
     * @return CustomDataProvidedResourceUploadStats|null
    */
    public function getStats(): ?CustomDataProvidedResourceUploadStats {
        $val = $this->getBackingStore()->get('stats');
        if (is_null($val) || $val instanceof CustomDataProvidedResourceUploadStats) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'stats'");
    }

    /**
     * Gets the status property value. The status property
     * @return CustomDataProvidedResourceUploadStatus|null
    */
    public function getStatus(): ?CustomDataProvidedResourceUploadStatus {
        $val = $this->getBackingStore()->get('status');
        if (is_null($val) || $val instanceof CustomDataProvidedResourceUploadStatus) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'status'");
    }

    /**
     * Gets the type property value. Schematized form of the expected CSV columns in the uploaded file. The only possible value currently is: accessReviewDataUploadTriggerCallbackData
     * @return string|null
    */
    public function getType(): ?string {
        $val = $this->getBackingStore()->get('type');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'type'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeDateTimeValue('createdDateTime', $this->getCreatedDateTime());
        $writer->writeObjectValue('data', $this->getData());
        $writer->writeBooleanValue('isUploadDone', $this->getIsUploadDone());
        $writer->writeStringValue('source', $this->getSource());
        $writer->writeObjectValue('stats', $this->getStats());
        $writer->writeEnumValue('status', $this->getStatus());
        $writer->writeStringValue('type', $this->getType());
    }

    /**
     * Sets the createdDateTime property value. DateTime when the upload session was created. Read-only.
     * @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('createdDateTime', $value);
    }

    /**
     * Sets the data property value. An object containing the context for which this data is being uploaded. Currently the only possible concrete type is accessReviewResourceDataUploadSessionContextData
     * @param CustomExtensionData|null $value Value to set for the data property.
    */
    public function setData(?CustomExtensionData $value): void {
        $this->getBackingStore()->set('data', $value);
    }

    /**
     * Sets the isUploadDone property value. Indicates if all the necessary files have been uploaded to this session.
     * @param bool|null $value Value to set for the isUploadDone property.
    */
    public function setIsUploadDone(?bool $value): void {
        $this->getBackingStore()->set('isUploadDone', $value);
    }

    /**
     * Sets the source property value. The source of the access data. This should be set to the customdataprovidedresource's name when creating the session.
     * @param string|null $value Value to set for the source property.
    */
    public function setSource(?string $value): void {
        $this->getBackingStore()->set('source', $value);
    }

    /**
     * Sets the stats property value. The stats property
     * @param CustomDataProvidedResourceUploadStats|null $value Value to set for the stats property.
    */
    public function setStats(?CustomDataProvidedResourceUploadStats $value): void {
        $this->getBackingStore()->set('stats', $value);
    }

    /**
     * Sets the status property value. The status property
     * @param CustomDataProvidedResourceUploadStatus|null $value Value to set for the status property.
    */
    public function setStatus(?CustomDataProvidedResourceUploadStatus $value): void {
        $this->getBackingStore()->set('status', $value);
    }

    /**
     * Sets the type property value. Schematized form of the expected CSV columns in the uploaded file. The only possible value currently is: accessReviewDataUploadTriggerCallbackData
     * @param string|null $value Value to set for the type property.
    */
    public function setType(?string $value): void {
        $this->getBackingStore()->set('type', $value);
    }

}
