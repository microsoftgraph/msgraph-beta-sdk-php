<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class ProcessContentRequest implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new ProcessContentRequest and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ProcessContentRequest
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ProcessContentRequest {
        return new ProcessContentRequest();
    }

    /**
     * Gets the activityMetadata property value. The activityMetadata property
     * @return ActivityMetadata|null
    */
    public function getActivityMetadata(): ?ActivityMetadata {
        $val = $this->getBackingStore()->get('activityMetadata');
        if (is_null($val) || $val instanceof ActivityMetadata) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'activityMetadata'");
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        $val = $this->getBackingStore()->get('additionalData');
        if (is_null($val) || is_array($val)) {
            /** @var array<string, mixed>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'additionalData'");
    }

    /**
     * Gets the BackingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the contentEntries property value. A collection of content entries to be processed. Each entry contains the content itself and its metadata. Required.
     * @return array<ProcessContentMetadataBase>|null
    */
    public function getContentEntries(): ?array {
        $val = $this->getBackingStore()->get('contentEntries');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, ProcessContentMetadataBase::class);
            /** @var array<ProcessContentMetadataBase>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'contentEntries'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'activityMetadata' => fn(ParseNode $n) => $o->setActivityMetadata($n->getObjectValue([ActivityMetadata::class, 'createFromDiscriminatorValue'])),
            'contentEntries' => fn(ParseNode $n) => $o->setContentEntries($n->getCollectionOfObjectValues([ProcessContentMetadataBase::class, 'createFromDiscriminatorValue'])),
            'integratedAppMetadata' => fn(ParseNode $n) => $o->setIntegratedAppMetadata($n->getObjectValue([IntegratedApplicationMetadata::class, 'createFromDiscriminatorValue'])),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'protectedAppMetadata' => fn(ParseNode $n) => $o->setProtectedAppMetadata($n->getObjectValue([ProtectedApplicationMetadata::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the integratedAppMetadata property value. The integratedAppMetadata property
     * @return IntegratedApplicationMetadata|null
    */
    public function getIntegratedAppMetadata(): ?IntegratedApplicationMetadata {
        $val = $this->getBackingStore()->get('integratedAppMetadata');
        if (is_null($val) || $val instanceof IntegratedApplicationMetadata) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'integratedAppMetadata'");
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
     * Gets the protectedAppMetadata property value. The protectedAppMetadata property
     * @return ProtectedApplicationMetadata|null
    */
    public function getProtectedAppMetadata(): ?ProtectedApplicationMetadata {
        $val = $this->getBackingStore()->get('protectedAppMetadata');
        if (is_null($val) || $val instanceof ProtectedApplicationMetadata) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'protectedAppMetadata'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('activityMetadata', $this->getActivityMetadata());
        $writer->writeCollectionOfObjectValues('contentEntries', $this->getContentEntries());
        $writer->writeObjectValue('integratedAppMetadata', $this->getIntegratedAppMetadata());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeObjectValue('protectedAppMetadata', $this->getProtectedAppMetadata());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the activityMetadata property value. The activityMetadata property
     * @param ActivityMetadata|null $value Value to set for the activityMetadata property.
    */
    public function setActivityMetadata(?ActivityMetadata $value): void {
        $this->getBackingStore()->set('activityMetadata', $value);
    }

    /**
     * Sets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the BackingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the contentEntries property value. A collection of content entries to be processed. Each entry contains the content itself and its metadata. Required.
     * @param array<ProcessContentMetadataBase>|null $value Value to set for the contentEntries property.
    */
    public function setContentEntries(?array $value): void {
        $this->getBackingStore()->set('contentEntries', $value);
    }

    /**
     * Sets the integratedAppMetadata property value. The integratedAppMetadata property
     * @param IntegratedApplicationMetadata|null $value Value to set for the integratedAppMetadata property.
    */
    public function setIntegratedAppMetadata(?IntegratedApplicationMetadata $value): void {
        $this->getBackingStore()->set('integratedAppMetadata', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the protectedAppMetadata property value. The protectedAppMetadata property
     * @param ProtectedApplicationMetadata|null $value Value to set for the protectedAppMetadata property.
    */
    public function setProtectedAppMetadata(?ProtectedApplicationMetadata $value): void {
        $this->getBackingStore()->set('protectedAppMetadata', $value);
    }

}
