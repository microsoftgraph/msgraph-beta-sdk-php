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

/**
 * A class containing the result of HasPayloadLinks action.
*/
class HasPayloadLinkResultItem implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new HasPayloadLinkResultItem and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return HasPayloadLinkResultItem
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): HasPayloadLinkResultItem {
        return new HasPayloadLinkResultItem();
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
     * Gets the error property value. Exception information indicates if check for this item was successful or not.Empty string for no error.
     * @return string|null
    */
    public function getError(): ?string {
        $val = $this->getBackingStore()->get('error');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'error'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'error' => fn(ParseNode $n) => $o->setError($n->getStringValue()),
            'hasLink' => fn(ParseNode $n) => $o->setHasLink($n->getBooleanValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'payloadId' => fn(ParseNode $n) => $o->setPayloadId($n->getStringValue()),
            'sources' => fn(ParseNode $n) => $o->setSources($n->getCollectionOfEnumValues(DeviceAndAppManagementAssignmentSource::class)),
        ];
    }

    /**
     * Gets the hasLink property value. Indicate whether a payload has any link or not.
     * @return bool|null
    */
    public function getHasLink(): ?bool {
        $val = $this->getBackingStore()->get('hasLink');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'hasLink'");
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
     * Gets the payloadId property value. Key of the Payload, In the format of Guid.
     * @return string|null
    */
    public function getPayloadId(): ?string {
        $val = $this->getBackingStore()->get('payloadId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'payloadId'");
    }

    /**
     * Gets the sources property value. The reason where the link comes from.
     * @return array<DeviceAndAppManagementAssignmentSource>|null
    */
    public function getSources(): ?array {
        $val = $this->getBackingStore()->get('sources');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, DeviceAndAppManagementAssignmentSource::class);
            /** @var array<DeviceAndAppManagementAssignmentSource>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'sources'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('error', $this->getError());
        $writer->writeBooleanValue('hasLink', $this->getHasLink());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeStringValue('payloadId', $this->getPayloadId());
        $writer->writeCollectionOfEnumValues('sources', $this->getSources());
        $writer->writeAdditionalData($this->getAdditionalData());
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
     * Sets the error property value. Exception information indicates if check for this item was successful or not.Empty string for no error.
     * @param string|null $value Value to set for the error property.
    */
    public function setError(?string $value): void {
        $this->getBackingStore()->set('error', $value);
    }

    /**
     * Sets the hasLink property value. Indicate whether a payload has any link or not.
     * @param bool|null $value Value to set for the hasLink property.
    */
    public function setHasLink(?bool $value): void {
        $this->getBackingStore()->set('hasLink', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the payloadId property value. Key of the Payload, In the format of Guid.
     * @param string|null $value Value to set for the payloadId property.
    */
    public function setPayloadId(?string $value): void {
        $this->getBackingStore()->set('payloadId', $value);
    }

    /**
     * Sets the sources property value. The reason where the link comes from.
     * @param array<DeviceAndAppManagementAssignmentSource>|null $value Value to set for the sources property.
    */
    public function setSources(?array $value): void {
        $this->getBackingStore()->set('sources', $value);
    }

}
